<header>
    <nav class="max-w-6xl mx-auto px-5 h-20 flex items-center justify-between gap-4">
        <a href="{{ route('home') }}" class="flex items-center" aria-label="Faisal Alam — Home">
            <img src="{{ asset('assets/frontend/images/logo-wordmark.png') }}" alt="Faisal Alam — Full Stack Developer" class="logo-light h-11 sm:h-16 w-auto">
            <img src="{{ asset('assets/frontend/images/logo-wordmark-light.png') }}" alt="Faisal Alam — Full Stack Developer" class="logo-dark h-11 sm:h-16 w-auto">
        </a>

        <div class="hidden lg:flex items-center gap-1">
            <a class="navlink active" href="{{ route('home') }}">Home</a>
            <a class="navlink" href="/about">About</a>
            <a class="navlink" href="/services">Services</a>
            <a class="navlink" href="/projects">Projects</a>
            <a class="navlink" href="/experience">Experience</a>
            <a class="navlink" href="/blog">Blog</a>
            <a class="navlink" href="/contact">Contact</a>
        </div>

        <div class="flex items-center gap-2">
            <button class="icon-btn" data-theme-toggle aria-label="Toggle theme">
                <svg data-ic="sun" class="w-[17px] h-[17px]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="4" />
                    <path stroke-linecap="round" d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4" />
                </svg>
                <svg data-ic="moon" class="w-[17px] h-[17px]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z" />
                </svg>
            </button>
            <a href="/contact" class="btn btn-primary hidden sm:inline-flex !py-2">Hire me</a>
            <button class="icon-btn lg:hidden" aria-label="Menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>
        </div>
    </nav>
</header>
