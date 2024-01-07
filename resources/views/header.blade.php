<header class="header" data-header>
    <div class="container">

        <a href="#home" class="logo">
            <img src="{{ asset('images/logoSavor.png') }}" width="160" height="50" alt="SavorCraft Kitchen - Home">
        </a>

        <nav class="navbar" data-navbar>

            <button class="close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>

            <a href="#" class="logo">
                <img src="{{ asset('images/logoSavor.png') }}" width="120" height="50" alt="SavorCraft Kitchen - Home">
            </a>

            <ul class="navbar-list">

                <li class="navbar-item">
                    <a href="#home" class="navbar-link hover-underline active">
                        <div class="separator"></div>

                        <span class="span">Home</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#service" class="navbar-link hover-underline">
                        <div class="separator"></div>

                        <span class="span">Menus</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#about" class="navbar-link hover-underline">
                        <div class="separator"></div>

                        <span class="span">About Us</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#reservation" class="navbar-link hover-underline">
                        <div class="separator"></div>

                        <span class="span">Contact</span>
                    </a>
                </li>

            </ul>

            <div class="text-center">
                <p class="headline-1 navbar-title">Visit Us</p>

                <address class="body-4">
                    Restaurant St, Delicious City, <br>
                    London 9578, UK
                </address>

                <p class="body-4 navbar-text">Open: 9.30 am - 2.30pm</p>

                <a href="mailto:booking@savorcraft.com" class="body-4 sidebar-link">booking@savorcraft.com</a>

                <div class="separator"></div>

                <p class="contact-label">Booking Request</p>

                <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
                    +88-123-123456
                </a>
            </div>

        </nav>

        <a href="#reservation" class="btn btn-secondary">
            <span class="text text-1">Find A Table</span>

            <span class="text text-2" aria-hidden="true">Find A Table</span>
        </a>

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>
