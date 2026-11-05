@extends('frontend.dashboard')
@section('frontend_title', 'About | Faisal Alam')
@section('frontend_description', 'About Faisal Alam, a Full Stack Web Developer from Dhaka, Bangladesh with 4+ years of experience in Laravel, WordPress, API and payment gateway integrations.')
@section('frontend_contents')

    <section class="hero-bg pt-14 pb-8 border-b border-line">
        <div class="max-w-6xl mx-auto px-5 pb-6">
            <p class="eyebrow reveal">About me</p>
            <h1 class="h1 mt-2 max-w-3xl reveal">Developer and problem-solver who cares about the <span class="hl">details.</span></h1>
            <p class="lead mt-3 reveal">How I work, what I use and what I care about.</p>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-6xl mx-auto px-5 grid md:grid-cols-[auto_1fr] gap-10 items-start">
            <div class="reveal">
                <div class="photo-frame w-fit mx-auto md:mx-0">
                    <img src="{{ asset('assets/frontend/images/profile.jpg') }}" alt="Faisal Alam" width="226" height="283" class="w-52 object-cover">
                </div>
                <div class="card p-4 mt-4 text-sm space-y-1.5 max-w-[16.5rem]">
                    <p><span class="text-muted">Based in</span> · Dhaka, Bangladesh</p>
                    <p><span class="text-muted">Degree</span> · B.Sc. in CSE</p>
                    <p><span class="text-muted">Focus</span> · Laravel &amp; WordPress</p>
                </div>
            </div>
            <div class="space-y-4 text-muted reveal">
                <p class="text-lg text-ink font-medium leading-relaxed">I'm a Full Stack Web Developer with 4+ years of professional experience building, customizing and deploying Laravel and WordPress websites for local and international clients.</p>
                <p>I'm skilled in PHP, Laravel MVC, MySQL, responsive frontend development, WordPress and WooCommerce, and experienced in API integration, payment gateway integration, end-to-end project testing, hosting configuration, deployment and client communication.</p>
                <p>I've contributed to <b class="text-ink">38+ live websites</b> across corporate, eCommerce, education, travel and B2B industries.</p>
                <div class="flex flex-wrap gap-3 pt-2">
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        Work with me
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>
                    <a href="{{ route('experience') }}" class="btn btn-ghost">See experience</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 band">
        <div class="max-w-6xl mx-auto px-5">
            <p class="eyebrow reveal">Principles</p>
            <h2 class="h2 mt-2 mb-7 reveal">How I work</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="card tint-top tint-bg c1 p-5 reveal">
                    <span class="num">1</span>
                    <h3 class="font-semibold mt-3">Clarity first</h3>
                    <p class="text-muted text-sm mt-1">I gather requirements properly, explain trade-offs in plain language and keep you in the loop.</p>
                </div>
                <div class="card tint-top tint-bg c2 p-5 reveal">
                    <span class="num">2</span>
                    <h3 class="font-semibold mt-3">Tested, not hoped</h3>
                    <p class="text-muted text-sm mt-1">Functional, end-to-end and payment testing before anything goes live.</p>
                </div>
                <div class="card tint-top tint-bg c3 p-5 reveal">
                    <span class="num">3</span>
                    <h3 class="font-semibold mt-3">Built to last</h3>
                    <p class="text-muted text-sm mt-1">Clean structure, sensible hosting setup and a proper handover.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-6xl mx-auto px-5 grid lg:grid-cols-2 gap-10">
            <div>
                <p class="eyebrow">Proficiency</p>
                <h2 class="h2 mt-2 mb-7">What I'm good at</h2>
                <div class="space-y-5">
                    <div class="reveal">
                        <div class="flex justify-between text-sm mb-1.5">
                            <span class="font-medium">PHP & Laravel MVC</span>
                            <span class="text-muted">90%</span>
                        </div>
                        <div class="bar">
                            <span data-level="90"></span>
                        </div>
                    </div>
                    <div class="reveal">
                        <div class="flex justify-between text-sm mb-1.5">
                            <span class="font-medium">WordPress & WooCommerce</span>
                            <span class="text-muted">90%</span>
                        </div>
                        <div class="bar">
                            <span data-level="90"></span>
                        </div>
                    </div>
                    <div class="reveal">
                        <div class="flex justify-between text-sm mb-1.5">
                            <span class="font-medium">HTML5, CSS3, Tailwind, Bootstrap</span>
                            <span class="text-muted">90%</span>
                        </div>
                        <div class="bar">
                            <span data-level="90"></span>
                        </div>
                    </div>
                    <div class="reveal">
                        <div class="flex justify-between text-sm mb-1.5">
                            <span class="font-medium">MySQL</span>
                            <span class="text-muted">85%</span>
                        </div>
                        <div class="bar">
                            <span data-level="85"></span>
                        </div>
                    </div>
                    <div class="reveal">
                        <div class="flex justify-between text-sm mb-1.5">
                            <span class="font-medium">API & Payment Integration</span>
                            <span class="text-muted">85%</span>
                        </div>
                        <div class="bar">
                            <span data-level="85"></span>
                        </div>
                    </div>
                    <div class="reveal">
                        <div class="flex justify-between text-sm mb-1.5">
                            <span class="font-medium">jQuery & JavaScript</span>
                            <span class="text-muted">70%</span>
                        </div>
                        <div class="bar">
                            <span data-level="70"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="eyebrow">Toolbox</p>
                <h2 class="h2 mt-2 mb-7">My stack</h2>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="card p-5 reveal">
                        <h3 class="font-semibold text-sm mb-3">Backend & Database</h3>
                        <div class="flex flex-wrap gap-2 chips">
                            <span class="chip">PHP</span>
                            <span class="chip">Laravel MVC</span>
                            <span class="chip">MySQL</span>
                        </div>
                    </div>
                    <div class="card p-5 reveal">
                        <h3 class="font-semibold text-sm mb-3">Frontend</h3>
                        <div class="flex flex-wrap gap-2 chips">
                            <span class="chip">HTML5</span>
                            <span class="chip">CSS3</span>
                            <span class="chip">Tailwind CSS</span>
                            <span class="chip">Bootstrap</span>
                            <span class="chip">Sass</span>
                            <span class="chip">jQuery</span>
                            <span class="chip">JavaScript</span>
                        </div>
                    </div>
                    <div class="card p-5 reveal">
                        <h3 class="font-semibold text-sm mb-3">CMS & eCommerce</h3>
                        <div class="flex flex-wrap gap-2 chips">
                            <span class="chip">WordPress</span>
                            <span class="chip">WooCommerce</span>
                            <span class="chip">Elementor</span>
                        </div>
                    </div>
                    <div class="card p-5 reveal">
                        <h3 class="font-semibold text-sm mb-3">Integrations</h3>
                        <div class="flex flex-wrap gap-2 chips">
                            <span class="chip">Country APIs</span>
                            <span class="chip">Airline APIs</span>
                            <span class="chip">SSLCommerz</span>
                            <span class="chip">Stripe</span>
                            <span class="chip">PayPal</span>
                            <span class="chip">bKash</span>
                        </div>
                    </div>
                    <div class="card p-5 reveal">
                        <h3 class="font-semibold text-sm mb-3">Tools & Hosting</h3>
                        <div class="flex flex-wrap gap-2 chips">
                            <span class="chip">Git</span>
                            <span class="chip">GitHub</span>
                            <span class="chip">VS Code</span>
                            <span class="chip">Laravel Herd</span>
                            <span class="chip">XAMPP</span>
                            <span class="chip">cPanel</span>
                            <span class="chip">ChatGPT</span>
                            <span class="chip">Claude</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
