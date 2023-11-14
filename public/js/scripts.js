document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.getElementById('burger-menu');
    const overlay = document.getElementById('overlay');
    const menu = document.getElementById('menu');

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