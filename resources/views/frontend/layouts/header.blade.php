<header>
    <nav class="max-w-6xl mx-auto px-5 h-20 flex items-center justify-between gap-4">
        <a href="{{ route('home') }}" class="flex items-center" aria-label="Faisal Alam — Home">
            <img src="{{ asset('assets/frontend/images/logo-wordmark.png') }}" alt="Faisal Alam — Full Stack Developer" class="logo-light h-11 sm:h-16 w-auto">
            <img src="{{ asset('assets/frontend/images/logo-wordmark-light.png') }}" alt="Faisal Alam — Full Stack Developer" class="logo-dark h-11 sm:h-16 w-auto">
        </a>

        <div class="hidden lg:flex items-center gap-1">
            <a class="navlink {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="navlink {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            <a class="navlink {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
            <a class="navlink {{ request()->routeIs('projects', 'projects.show') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
            <a class="navlink {{ request()->routeIs('experience') ? 'active' : '' }}" href="{{ route('experience') }}">Experience</a>
            <a class="navlink {{ request()->routeIs('blog', 'blog.show') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
            <a class="navlink {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
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
            <a href="{{ route('contact') }}" class="btn btn-primary hidden sm:inline-flex !py-2">Hire me</a>
            <button class="icon-btn lg:hidden" data-menu-button aria-label="Menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>
        </div>
    </nav>
    <div data-mobile-nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-brand' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-brand' : '' }}">About</a>
        <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-brand' : '' }}">Services</a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects', 'projects.show') ? 'text-brand' : '' }}">Projects</a>
        <a href="{{ route('experience') }}" class="{{ request()->routeIs('experience') ? 'text-brand' : '' }}">Experience</a>
        <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog', 'blog.show') ? 'text-brand' : '' }}">Blog</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-brand' : '' }}">Contact</a>
    </div>
</header>
