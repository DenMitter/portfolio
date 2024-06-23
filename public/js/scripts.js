document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.getElementById('burger-menu');
    const overlay = document.getElementById('overlay');
    const menu = document.getElementById('menu');
    var loadMoreButton = document.getElementById('load-more');
    // Оголошення глобальної змінної для збереження завантажених елементів
    // var loadedProjectsCount = 0;
    var selectTag = document.getElementById('tag-filter');

    selectTag.addEventListener('change', filterProjects);

    // Видаляємо глобальну змінну loadedProjectsCount

    if (loadMoreButton) {
      loadMoreButton.addEventListener('click', function () {
        var nextPageUrl = loadMoreButton.dataset.next;

        if (nextPageUrl) {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', nextPageUrl, true);

          xhr.onload = function () {
            if (xhr.status === 200) {
              var newProjectsHtml = xhr.responseText;
              var tempDiv = document.createElement('div');
              tempDiv.innerHTML = newProjectsHtml;

              var newProjectsCards = tempDiv.querySelectorAll('.projects__card');
              var projectsCards = document.querySelector('.projects__cards');

              if (projectsCards && newProjectsCards.length > 0) {
                // Отримуємо кількість вже завантажених елементів
                var existingProjectCardsCount = projectsCards.children.length;

                // Вставляємо всі нові елементи після останнього завантаженого елемента
                for (var i = 0; i < newProjectsCards.length; i++) {
                  projectsCards.appendChild(newProjectsCards[i]);

                  // Оновлюємо lastLoadedProject для наступної ітерації
                  existingProjectCardsCount++;

                  // Перевіряємо, чи завантажили три нові елементи, і зупиняємо цикл, якщо так
                  if (existingProjectCardsCount % 3 === 0) {
                    break;
                  }
                }

                // Оновлюємо URL для наступного завантаження
                var newNextPageUrl = tempDiv.querySelector('.load-more button') ? tempDiv.querySelector('.load-more button').dataset.next : null;
                if (newNextPageUrl) {
                  loadMoreButton.dataset.next = newNextPageUrl;
                } else {
                  loadMoreButton.style.display = 'none';
                }
              }
            } else {
              console.error('Request failed. Status: ' + xhr.status);
            }
          };

          xhr.onerror = function () {
            console.error('Request failed');
          };

          xhr.send();
        }
      });
    }

    burgerMenu.addEventListener('click', function () {
        toggleMenu();
    });

    overlay.addEventListener('click', function () {
        closeMenu();
    });

    function toggleMenu() {
        menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
        animateBurger();
    }

    function closeMenu() {
        menu.style.display = 'none';
        overlay.style.display = 'none';
        resetBurger();
    }

    function animateBurger() {
        burgerMenu.classList.toggle('open');
    }

    function resetBurger() {
        burgerMenu.classList.remove('open');
    }
});

function filterProjects() {
  var selectTag = document.getElementById('tag-filter');
  var projects = document.querySelectorAll('.projects__card');

  var selectedTag = selectTag.value;

  projects.forEach(function (project) {
      var projectTags = JSON.parse(project.getAttribute('data-tags'));

      if (selectedTag === "" || projectTags.includes(parseInt(selectedTag))) {
          project.style.display = 'block';
      } else {
          project.style.display = 'none';
      }
  });
}

// собираем все якоря; устанавливаем время анимации и количество кадров
const anchors = [].slice.call(document.querySelectorAll('a[href*="#"]')),
      animationTime = 35,
      framesCount = 120;

anchors.forEach(function(item) {
  item.addEventListener('click', function(e) {
    e.preventDefault();
    
    let coordY = document.querySelector(item.getAttribute('href')).getBoundingClientRect().top + window.pageYOffset;
    let scroller = setInterval(function() {
      let scrollBy = coordY / framesCount;
      
      if(scrollBy > window.pageYOffset - coordY && window.innerHeight + window.pageYOffset < document.body.offsetHeight) {
        window.scrollBy(0, scrollBy);
      } else {
        window.scrollTo(0, coordY);
        clearInterval(scroller);
      }
    }, animationTime / framesCount);
  });
});
