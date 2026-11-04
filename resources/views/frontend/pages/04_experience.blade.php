@extends('frontend.dashboard')
@section('frontend_title', 'Experience & Education | Faisal Alam')
@section('frontend_contents')

    <section class="hero-bg pt-14 pb-8 border-b border-line">
        <div class="max-w-6xl mx-auto px-5 pb-6">
            <p class="eyebrow reveal">Experience</p>
            <h1 class="h1 mt-2 max-w-3xl reveal">Where I've <span class="hl">worked</span></h1>
            <p class="lead mt-3 reveal">4+ years of professional full stack development.</p>
        </div>
    </section>

    <section class="py-12">

        <div class="max-w-4xl mx-auto px-5">

            <div class="timeline space-y-10">

                <!-- Nebula IT -->
                <div class="timeline-item reveal">
                    <div class="flex flex-wrap items-baseline justify-between gap-2">
                        <h3 class="text-lg font-semibold">Full Stack Developer <span class="text-brand">· Nebula IT</span></h3>
                        <span class="text-sm text-muted">Oct 2024 – Present</span>
                    </div>
                    <ul class="mt-3 space-y-1.5 text-muted text-[.95rem]">
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Develop, customize and deploy Laravel-based websites and web applications for corporate and business clients.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Build and maintain responsive WordPress websites using Elementor, WooCommerce, themes and plugins.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Develop frontend interfaces and backend functionality using PHP, Laravel MVC and MySQL.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Integrate Country and Airline APIs to retrieve and process external data within web applications.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Integrate payment gateways including SSLCommerz, Stripe, PayPal and bKash for online payment workflows.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Conduct end-to-end testing of complete projects, including functionality, user workflows and payment processes.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Configure hosting and databases, troubleshoot issues, improve usability and collaborate with clients.</li>
                    </ul>
                </div>

                <!-- AOneDevs -->
                <div class="timeline-item reveal">
                    <div class="flex flex-wrap items-baseline justify-between gap-2">
                        <h3 class="text-lg font-semibold">Web Developer <span class="text-brand">· AOneDevs</span></h3>
                        <span class="text-sm text-muted">Dec 2021 – Sep 2024</span>
                    </div>
                    <ul class="mt-3 space-y-1.5 text-muted text-[.95rem]">
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Developed responsive website interfaces using HTML5, CSS3, Bootstrap, Sass and jQuery.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Built and maintained PHP and Laravel applications with MySQL database integration.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Customized WordPress themes, layouts, plugins and functionality according to client requirements.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Integrated third-party APIs and payment gateway functionality where required by project specifications.</li>
                        <li class="flex gap-2.5"><span class="text-brand2">›</span>Conducted functional testing, debugging, troubleshooting and production deployment.</li>
                    </ul>
                </div>

            </div>

        </div>

    </section>

    <section class="py-12 band">

        <div class="max-w-6xl mx-auto px-5 grid md:grid-cols-2 gap-10">

            <div>
                <p class="eyebrow">Education</p>
                <h2 class="h2 mt-2 mb-6">Academic background</h2>
                <div class="timeline space-y-6">
                    <div class="timeline-item reveal">
                        <h3 class="font-semibold">B.Sc. in Computer Science &amp; Engineering</h3>
                        <p class="text-muted text-sm">Northern University Bangladesh · 2020</p>
                    </div>
                    <div class="timeline-item reveal">
                        <h3 class="font-semibold">GCE A Level (Science)</h3>
                        <p class="text-muted text-sm">British Council · 2016</p>
                    </div>
                    <div class="timeline-item reveal">
                        <h3 class="font-semibold">GCE O Level (Science)</h3>
                        <p class="text-muted text-sm">BAF Shaheen English Medium School · 2012</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="eyebrow">Training</p>
                <h2 class="h2 mt-2 mb-6">Professional training</h2>
                <div class="timeline space-y-6">
                    <div class="timeline-item reveal">
                        <h3 class="font-semibold">Frontend Developer</h3>
                        <p class="text-muted text-sm">Pixelnet Technologies Ltd. · October 2021</p>
                    </div>
                    <div class="timeline-item reveal">
                        <h3 class="font-semibold">Web Designer</h3>
                        <p class="text-muted text-sm">Nebulas IT · November 2019</p>
                    </div>
                </div>

                <div class="card p-6 mt-10 reveal">
                    <h3 class="font-semibold">Want the full details?</h3>
                    <p class="text-muted text-sm mt-1">Download my up-to-date resume.</p>
                    <a href="{{ asset('assets/frontend/Faisal_Alam_Resume.pdf') }}" download class="btn btn-primary mt-4">Download CV (PDF)</a>
                </div>
            </div>

        </div>

    </section>

@endsection
