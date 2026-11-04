@extends('frontend.dashboard')
@section('frontend_title', 'Services | Faisal Alam')
@section('frontend_contents')

    <section class="hero-bg pt-14 pb-8 border-b border-line">
        <div class="max-w-6xl mx-auto px-5 pb-6">
            <p class="eyebrow reveal">Services</p>
            <h1 class="h1 mt-2 max-w-3xl reveal">Everything you need to <span class="hl">launch online.</span></h1>
            <p class="lead mt-3 reveal">From a clean WordPress site to a custom Laravel application with payments and APIs.</p>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-6xl mx-auto px-5">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="card hoverable tint-top tint-bg c1 p-6 reveal" style="--d:0ms">
                    <div class="ic">&lt;/&gt;</div>
                    <h3 class="text-lg font-semibold mt-4">Laravel Development</h3>
                    <p class="text-muted text-sm mt-2">Custom websites and web apps built on Laravel MVC and MySQL — clean, secure and easy to extend.</p>
                    <ul class="mt-4 space-y-1.5 text-sm">
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Custom Laravel websites & web apps</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>MVC architecture with MySQL</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Admin panels & dashboards</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Production deployment</li>
                    </ul>
                </div>
                <div class="card hoverable tint-top tint-bg c2 p-6 reveal" style="--d:60ms">
                    <div class="ic">Wp</div>
                    <h3 class="text-lg font-semibold mt-4">WordPress & WooCommerce</h3>
                    <p class="text-muted text-sm mt-2">Theme and plugin customization, Elementor builds and online stores that are easy for you to manage.</p>
                    <ul class="mt-4 space-y-1.5 text-sm">
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Theme & plugin customization</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Elementor page building</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>WooCommerce stores</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Speed & usability tuning</li>
                    </ul>
                </div>
                <div class="card hoverable tint-top tint-bg c3 p-6 reveal" style="--d:120ms">
                    <div class="ic">{ }</div>
                    <h3 class="text-lg font-semibold mt-4">API Integration</h3>
                    <p class="text-muted text-sm mt-2">Country, airline and other third-party APIs wired in reliably so external data shows up cleanly.</p>
                    <ul class="mt-4 space-y-1.5 text-sm">
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Country & airline APIs</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Third-party REST integrations</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Data processing & display</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Graceful error handling</li>
                    </ul>
                </div>
                <div class="card hoverable tint-top tint-bg c4 p-6 reveal" style="--d:0ms">
                    <div class="ic">$</div>
                    <h3 class="text-lg font-semibold mt-4">Payment Gateways</h3>
                    <p class="text-muted text-sm mt-2">Secure online payment workflows with the gateways your customers use — tested from checkout to confirmation.</p>
                    <ul class="mt-4 space-y-1.5 text-sm">
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>SSLCommerz</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Stripe & PayPal</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>bKash</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>End-to-end payment testing</li>
                    </ul>
                </div>
                <div class="card hoverable tint-top tint-bg c1 p-6 reveal" style="--d:60ms">
                    <div class="ic">▭</div>
                    <h3 class="text-lg font-semibold mt-4">Responsive Frontend</h3>
                    <p class="text-muted text-sm mt-2">Fast, mobile-first interfaces with HTML5, CSS3, Tailwind, Bootstrap, Sass and jQuery.</p>
                    <ul class="mt-4 space-y-1.5 text-sm">
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Pixel-careful UI development</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Mobile-first layouts</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Accessible, semantic markup</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Cross-browser testing</li>
                    </ul>
                </div>
                <div class="card hoverable tint-top tint-bg c2 p-6 reveal" style="--d:120ms">
                    <div class="ic">↑</div>
                    <h3 class="text-lg font-semibold mt-4">Hosting & Deployment</h3>
                    <p class="text-muted text-sm mt-2">Domain, hosting, cPanel and database setup, then a careful launch with testing and handover.</p>
                    <ul class="mt-4 space-y-1.5 text-sm">
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Hosting & domain configuration</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>cPanel & database setup</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Launch checks & troubleshooting</li>
                        <li class="flex gap-2"><span style="color:rgb(var(--c))">✓</span>Post-launch support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 band">
        <div class="max-w-6xl mx-auto px-5">
            <p class="eyebrow reveal">Process</p>
            <h2 class="h2 mt-2 mb-7 reveal">From hello to live</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="card tint-bg c1 p-5 reveal" style="--d:0ms"><span class="num">1</span>
                    <h3 class="font-semibold mt-3">Discover</h3>
                    <p class="text-muted text-sm mt-1">We talk goals, audience and scope. I gather requirements so nothing is guessed.</p>
                </div>
                <div class="card tint-bg c2 p-5 reveal" style="--d:60ms"><span class="num">2</span>
                    <h3 class="font-semibold mt-3">Plan</h3>
                    <p class="text-muted text-sm mt-1">Structure, pages and flows are mapped out before any code is written.</p>
                </div>
                <div class="card tint-bg c3 p-5 reveal" style="--d:120ms"><span class="num">3</span>
                    <h3 class="font-semibold mt-3">Build</h3>
                    <p class="text-muted text-sm mt-1">Clean Laravel or WordPress development with regular updates along the way.</p>
                </div>
                <div class="card tint-bg c4 p-5 reveal" style="--d:180ms"><span class="num">4</span>
                    <h3 class="font-semibold mt-3">Test & launch</h3>
                    <p class="text-muted text-sm mt-1">End-to-end testing, hosting setup, deployment and a calm handover.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-3xl mx-auto px-5">
            <p class="eyebrow">FAQ</p>
            <h2 class="h2 mt-2 mb-5">Common questions</h2>
            <details class="faq reveal">
                <summary>How long does a typical website take?</summary>
                <p>It depends on scope. A focused WordPress site is usually quicker than a custom Laravel application. After we talk requirements I give a clear timeline before starting.</p>
            </details>
            <details class="faq reveal">
                <summary>Do you work with international clients?</summary>
                <p>Yes. I have built websites for both local and international clients and communicate clearly across time zones.</p>
            </details>
            <details class="faq reveal">
                <summary>Can you integrate payment gateways?</summary>
                <p>Yes — SSLCommerz, Stripe, PayPal and bKash, including end-to-end testing of the full payment workflow.</p>
            </details>
            <details class="faq reveal">
                <summary>Will I be able to update the site myself?</summary>
                <p>For WordPress projects, yes — I set things up so content is easy to manage. For Laravel projects we can add an admin panel.</p>
            </details>
            <details class="faq reveal">
                <summary>Do you handle hosting and deployment?</summary>
                <p>Yes. I configure hosting, domains, cPanel and databases, deploy the site and troubleshoot after launch.</p>
            </details>
            <div class="card cta-card p-7 mt-10 text-center reveal">
                <h3 class="font-semibold text-lg">Ready to start?</h3>
                <p class="text-sm mt-1">Tell me about your project and I'll reply with next steps.</p>
                <a href="{{ route('contact') }}" class="btn mt-4">
                    Get in touch
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

@endsection
