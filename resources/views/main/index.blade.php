@extends('layouts.main')

@section('content')
<!-- Main -->
<main>
    <div class="main__description">
        <h2 class="minimal-title">Bogdan is a <span class="primary-text">full-stack developer</span> and <span class="primary-text">SA-MP scripter</span></h2>
        <p class="subtitle">He crafts responsive websites where technologies meet creativity</p>
        {{-- <a href="#contacts" class="button">Contact me!</a> --}}
        <label class="popup button">
            <input type="checkbox" />
            <div tabindex="0" class="burger">
                Contact me!
            </div>
            <nav class="popup-window">
              <ul>
                <li><a href="https://t.me/murphez" target="_blank"><span>Telegram</span></a></li>
                <li><a href="mailto:zizulabogdan@gmail.com" target="_blank"><span>E-mail</span></a></li>
                <li><a href="https://discordapp.com/users/685526137082085445/" target="_blank"><span>Discord ( denmitter )</span></a></li>
                <li><a href="https://www.instagram.com/den_mitter/" target="_blank"><span>Instagram</span></a></li>
              </ul>
            </nav>
        </label>
    </div>
    <div class="main__image">
        <img src="{{ asset('images/main_image.svg') }}" alt="Main image">
        <div class="main__image-info">
            <p class="main__image-info_text">Currently working on Portfolio</p>
        </div>
    </div>
</main>
<!-- Quote -->
<section class="quote">
    <div class="quote__block quote__text">
        <p>With great power comes great electricity bill</p>
    </div>
    <div class="quote__author">
        <p>- Dr. Who</p>
    </div>
</section>
<!-- Projects -->
<section class="projects" id="projects">
    <h3 class="title">projects</h3>
    <div class="filter-tags">
        <select class="projects__select" id="tag-filter">
            <option value="">All Tags</option>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="projects__cards">
        <!-- Project -->
        @foreach ($projects as $project)
            <div class="projects__card" data-tags="{{ json_encode($project->tags->pluck('id')) }}">
                <img src="{{ $project->preview_image }}" alt="Card image">
                <div class="projects__card-tehnology">
                    @foreach ($tags as $tag)
                        @if (is_array($project->tags->pluck('id')->toArray()) && in_array($tag->id, $project->tags->pluck('id')->toArray()))
                            <p>{{ $tag->title }}</p>
                        @endif
                    @endforeach
                </div>
                <h4 class="projects__card-title">{{ $project->title }}</h4>
                <p class="projects__card-description">{{ $project->description }}</p>
                <div class="buttons">
                    @if ($project->view_link == NULL)
                        <a class="button disabled">Live <~></a>
                    @else
                        <a href="{{ $project->view_link }}" target="_blank" class="button">Live <~></a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    @if ($projects->hasMorePages())
        <div class="load-more">
            <button id="load-more" data-next="{{ $projects->nextPageUrl() }}" class="button">Load More</button>
        </div>
    @endif
</section>
<section class="skills">
    <h3 class="title">skills</h3>
    <div class="skills__block">
        <img src="{{ asset('images/skills_image.svg') }}" alt="Skills image" class="skills__image">
        <div class="skills__cards">
            <div class="mini-card">
                <h5 class="mini-card__title">Languages</h5>
                <div class="mini-card__subtitle">
                    <p>PHP<p>
                    <p>Pawn<p>
                    <p>JavaScript</p>
                </div>
            </div>
            <div class="mini-card">
                <h5 class="mini-card__title">Tools</h5>
                <div class="mini-card__subtitle">
                    <p>VSCode<p>
                    <p>Linux<p>
                    <p>Figma<p>
                    <p>Git</p>
                </div>
            </div>
            <div class="mini-card">
                <h5 class="mini-card__title">Other</h5>
                <div class="mini-card__subtitle">
                    <p>HTML<p>
                    <p>CSS<p>
                    <p>SCSS<p>
                </div>
            </div>
            <div class="mini-card">
                <h5 class="mini-card__title">Databases</h5>
                <div class="mini-card__subtitle">
                    <p>Mongo<p>
                    <p>MySql<p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About me -->
<section class="about-me" id="aboutMe">
    <h3 class="title">about-me</h3>
    <div class="about-me__block">
        <div class="about-me__info">
            <p class="subtitle">
                Hello, i’m Bogdan!<br><br>

                I’m a self-taught fullstack developer based in Vinnystsia, Ukraine.
                I can develop responsive websites from scratch and raise
                them into modern user-friendly web experiences.<br><br>

                Transforming my creativity and knowledge into a websites
                has been my passion for over a year.
                I have been helping various clients to establish their
                presence online. I always strive to learn about the
                newest technologies and frameworks.
            </p>
            <div class="buttons">
                <div class="button">Read more -></div>
            </div>
        </div>
        <img src="{{ asset('images/about_me_image.png') }}" alt="About me image" class="about-me__image">
    </div>
</section>
<!-- Contacts -->
<section class="contacts" id="contacts">
    <h3 class="title">contacts</h3>
    <div class="contacts__info">
        <p class="subtitle">I’m interested in freelance opportunities. However, if you have other request or question, don’t hesitate to contact me</p>
        <div class="contacts__block">
            <h5>Message me here</h5>
            <ul>
                <li>
                    <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.1641 1.65906C19.543 0.878258 17.8325 0.320987 16.0751 0.00113909C16.0592 -0.00167518 16.0428 0.000755409 16.0283 0.00809674C16.0137 0.0154381 16.0017 0.0273296 15.9938 0.0421361C15.7735 0.452106 15.5298 0.988347 15.3595 1.40816C13.4651 1.10643 11.5383 1.10643 9.64391 1.40816C9.45393 0.940495 9.23901 0.484433 9.00017 0.0421361C8.99216 0.0274917 8.9801 0.0157372 8.9656 0.00841949C8.9511 0.00110175 8.93482 -0.00143631 8.91892 0.00113909C7.16113 0.319276 5.45021 0.876835 3.82991 1.65906C3.81605 1.66461 3.80445 1.67504 3.7971 1.68858C0.556508 6.77057 -0.332545 11.7279 0.103388 16.623C0.10495 16.6459 0.119013 16.6689 0.1362 16.6836C2.02325 18.1507 4.13396 19.2708 6.37832 19.9962C6.39417 20.0014 6.4112 20.0013 6.42693 19.9957C6.44267 19.99 6.45629 19.9793 6.46582 19.965C6.94707 19.2763 7.37519 18.5498 7.74393 17.7856C7.75162 17.7699 7.75425 17.752 7.75143 17.7345C7.74862 17.7171 7.74051 17.7011 7.72831 17.6889C7.72023 17.6809 7.71065 17.6747 7.70018 17.6708C7.027 17.3993 6.37503 17.0731 5.7502 16.6951C5.73275 16.6847 5.71977 16.6677 5.71395 16.6476C5.70814 16.6274 5.70993 16.6057 5.71895 16.5869C5.72427 16.5747 5.73231 16.564 5.74239 16.5557C5.87364 16.4524 6.00489 16.3442 6.12989 16.236C6.14093 16.2266 6.15418 16.2206 6.16821 16.2186C6.18225 16.2166 6.19655 16.2186 6.20957 16.2245C10.3017 18.1858 14.7314 18.1858 18.7735 16.2245C18.787 16.2183 18.8018 16.2162 18.8164 16.2182C18.831 16.2202 18.8448 16.2264 18.8563 16.236C18.9813 16.3442 19.1126 16.4524 19.2438 16.5557C19.2544 16.5639 19.263 16.5747 19.2687 16.5872C19.2744 16.5996 19.277 16.6134 19.2764 16.6272C19.2758 16.641 19.2719 16.6544 19.2651 16.6663C19.2584 16.6781 19.2489 16.688 19.2376 16.6951C18.6142 17.0765 17.9614 17.4024 17.286 17.6692C17.2752 17.6733 17.2655 17.6798 17.2574 17.6883C17.2493 17.6968 17.243 17.7071 17.2391 17.7184C17.2355 17.7294 17.2341 17.741 17.2349 17.7525C17.2357 17.7641 17.2387 17.7754 17.2438 17.7856C17.6188 18.5482 18.0485 19.2763 18.5204 19.965C18.5299 19.9793 18.5435 19.99 18.5593 19.9957C18.575 20.0013 18.592 20.0014 18.6079 19.9962C20.856 19.2731 22.9701 18.1528 24.8594 16.6836C24.8688 16.6768 24.8767 16.6677 24.8824 16.6572C24.8881 16.6467 24.8914 16.635 24.8922 16.623C25.4141 10.9637 24.0188 6.04738 21.1954 1.69022C21.1925 1.68302 21.1883 1.67653 21.1829 1.67116C21.1775 1.66579 21.1711 1.66167 21.1641 1.65906ZM8.35486 13.6417C7.12206 13.6417 6.10801 12.4544 6.10801 10.9982C6.10801 9.54032 7.10331 8.35305 8.35486 8.35305C9.61579 8.35305 10.6205 9.55016 10.6017 10.9982C10.6017 12.4544 9.60641 13.6417 8.35486 13.6417ZM16.661 13.6417C15.4298 13.6417 14.4142 12.4544 14.4142 10.9982C14.4142 9.54032 15.4095 8.35305 16.661 8.35305C17.922 8.35305 18.9282 9.55016 18.9079 10.9982C18.9079 12.4544 17.922 13.6417 16.661 13.6417Z" fill="#ABB2BF"/></svg>
                    denmitter
                </li>
                <li>
                    <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.071875 2.20292C0.216801 1.57709 0.573067 1.01832 1.08232 0.618104C1.59158 0.217889 2.22365 -4.32004e-05 2.875 6.42336e-09H20.125C20.7764 -4.32004e-05 21.4084 0.217889 21.9177 0.618104C22.4269 1.01832 22.7832 1.57709 22.9281 2.20292L11.5 9.0865L0.071875 2.20292ZM0 3.82075V13.8847L8.34181 8.84425L0 3.82075ZM9.71894 9.67583L0.274563 15.3807C0.507907 15.8657 0.876195 16.2753 1.33656 16.5619C1.79693 16.8486 2.33044 17.0005 2.875 17H20.125C20.6695 17.0001 21.2028 16.8479 21.6629 16.561C22.123 16.274 22.491 15.8643 22.724 15.3793L13.2796 9.67442L11.5 10.7468L9.71894 9.67442V9.67583ZM14.6582 8.84567L23 13.8847V3.82075L14.6582 8.84425V8.84567Z" fill="#ABB2BF"/></svg>
                    zizulabogdan@gmail.com
                </li>
            </ul>
        </div>
    </div>
</section>

@endsection
