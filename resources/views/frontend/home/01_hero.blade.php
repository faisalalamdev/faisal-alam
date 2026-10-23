<section class="hero-bg pt-14 pb-12">

    <div class="max-w-6xl mx-auto px-5 grid md:grid-cols-[1.4fr_1fr] gap-10 items-center">

        <div>

            <p class="inline-flex items-center gap-2 text-sm text-muted card !rounded-full px-3 py-1 reveal">
                <span class="live-dot"></span>
                Available for new projects
            </p>

            <h1 class="h1 mt-5 reveal" style="--d:60ms">
                Full Stack Web Developer building fast
                <span class="hl">Laravel &amp; WordPress</span> websites.
            </h1>

            <p class="lead mt-4 reveal" style="--d:120ms">Hi, I'm Faisal Alam from Dhaka, Bangladesh. With 4+ years of experience and 38+ live websites, I handle everything from development and API or payment integration to hosting and deployment.</p>

            <div class="flex flex-wrap gap-3 mt-7 reveal" style="--d:180ms">
                <a href="projects.html" class="btn btn-primary">
                    View my work
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6" />
                    </svg>
                </a>
                <a href="contact.html" class="btn btn-ghost">Contact me</a>
                <a href="{{ asset('assets/frontend/Faisal_Alam_Resume.pdf') }}" download class="btn btn-ghost">Download CV</a>
            </div>

        </div>

        <div class="reveal flex md:justify-end" style="--d:120ms">
            <div class="relative w-fit mx-auto">
                <div class="photo-frame">
                    <img src="{{ asset('assets/frontend/images/profile.jpg') }}" width="226" height="283" alt="Faisal Alam" class="w-52 sm:w-56 object-cover">
                </div>
                <span class="float-badge b1">Laravel</span>
                <span class="float-badge b2">WordPress</span>
                <span class="float-badge b3">38+ live sites</span>
            </div>
        </div>

    </div>

</section>
