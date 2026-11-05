@extends('frontend.dashboard')
@section('frontend_title', 'Projects | Faisal Alam')
@section('frontend_contents')

    <section class="hero-bg pt-14 pb-8 border-b border-line">
        <div class="max-w-6xl mx-auto px-5 pb-6">
            <p class="eyebrow reveal">Portfolio</p>
            <h1 class="h1 mt-2 max-w-3xl reveal"><span class="hl">38+ websites</span> delivered</h1>
            <p class="lead mt-3 reveal">Hover any preview to scroll the full page. Click a project for details.</p>
        </div>
    </section>

    <section class="py-10">

        <div class="max-w-6xl mx-auto px-5">

            <div class="flex flex-wrap items-center justify-between gap-4 mb-6">

                <div data-projects-filters class="flex flex-wrap gap-2">
                    <button type="button" data-filter="All" class="btn btn-ghost !py-2 !px-5 text-sm filter !bg-brand !text-bg !border-brand">All <span class="font-mono text-xs opacity-60">8</span></button>
                    <button type="button" data-filter="Laravel" class="btn btn-ghost !py-2 !px-5 text-sm filter">Laravel <span class="font-mono text-xs opacity-60">4</span></button>
                    <button type="button" data-filter="WordPress" class="btn btn-ghost !py-2 !px-5 text-sm filter">WordPress <span class="font-mono text-xs opacity-60">4</span></button>
                </div>

                <div class="relative w-full sm:w-72">
                    <input data-projects-search type="search" class="field !pl-10" placeholder="Search projects…">
                    <svg class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-muted" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="7" />
                        <path stroke-linecap="round" d="m20 20-3.5-3.5" />
                    </svg>
                </div>

            </div>

            <p class="text-sm text-muted mb-5">Showing <span data-projects-shown class="text-brand font-semibold">8</span> projects</p>

            <div data-projects-grid class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- 1. Hongkong Nextgen -->
                <a href="/projects/hongkong-nextgen" data-shot-host data-category="Laravel" data-search="hongkong nextgen b2b / electronics b2b corporate website for a global supplier of semiconductors, electronic components, it products and testing equipment. php laravel mvc mysql responsive ui" class="card spot group block reveal hover:-translate-y-1" style="--d:0ms">
                    <div class="p-3 pb-0">
                        <div class="shot">
                            <div class="shot-bar"><i></i><i></i><i></i><span>hknextgenint.com</span></div>
                            <div class="shot-view">
                                <img src="{{ asset('assets/frontend/images/projects/hknextgen.jpg') }}" alt="Hongkong Nextgen website preview" loading="lazy">
                                <span class="shot-hint">hover to scroll ↓</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <span class="chip cat-laravel">Laravel</span>
                            <span class="text-xs font-mono text-muted">B2B / Electronics</span>
                        </div>
                        <h3 class="text-lg font-semibold tracking-tight flex items-center justify-between gap-3">
                            Hongkong Nextgen
                            <span class="grid place-items-center w-9 h-9 rounded-full border border-line group-hover:bg-brand group-hover:text-bg group-hover:border-brand transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                                </svg>
                            </span>
                        </h3>
                        <p class="text-muted text-sm mt-2">B2B corporate website for a global supplier of semiconductors, electronic components, IT products and testing equipment.</p>
                    </div>
                </a>

                <!-- 2. Euro Link -->
                <a href="/projects/euro-link" data-shot-host data-category="Laravel" data-search="euro link education consultancy study abroad consultancy website covering university admissions, scholarships, study loans and student visa guidance. php laravel mvc mysql responsive ui" class="card spot group block reveal hover:-translate-y-1" style="--d:90ms">
                    <div class="p-3 pb-0">
                        <div class="shot">
                            <div class="shot-bar"><i></i><i></i><i></i><span>eurolinkbd.com</span></div>
                            <div class="shot-view">
                                <img src="{{ asset('assets/frontend/images/projects/eurolink.jpg') }}" alt="Euro Link website preview" loading="lazy">
                                <span class="shot-hint">hover to scroll ↓</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <span class="chip cat-laravel">Laravel</span>
                            <span class="text-xs font-mono text-muted">Education Consultancy</span>
                        </div>
                        <h3 class="text-lg font-semibold tracking-tight flex items-center justify-between gap-3">
                            Euro Link
                            <span class="grid place-items-center w-9 h-9 rounded-full border border-line group-hover:bg-brand group-hover:text-bg group-hover:border-brand transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                                </svg>
                            </span>
                        </h3>
                        <p class="text-muted text-sm mt-2">Study abroad consultancy website covering university admissions, scholarships, study loans and student visa guidance.</p>
                    </div>
                </a>

                <!-- 3. Finact Advisory Training -->
                <a href="/projects/finact-advisory-training" data-shot-host data-category="Laravel" data-search="finact advisory training finance &amp; training corporate website showcasing accounting, auditing, financial advisory and professional training services. php laravel mvc mysql responsive ui" class="card spot group block reveal hover:-translate-y-1" style="--d:180ms">
                    <div class="p-3 pb-0">
                        <div class="shot">
                            <div class="shot-bar"><i></i><i></i><i></i><span>finactadvisory.com</span></div>
                            <div class="shot-view">
                                <img src="{{ asset('assets/frontend/images/projects/finact.jpg') }}" alt="Finact Advisory Training website preview" loading="lazy">
                                <span class="shot-hint">hover to scroll ↓</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <span class="chip cat-laravel">Laravel</span>
                            <span class="text-xs font-mono text-muted">Finance &amp; Training</span>
                        </div>
                        <h3 class="text-lg font-semibold tracking-tight flex items-center justify-between gap-3">
                            Finact Advisory Training
                            <span class="grid place-items-center w-9 h-9 rounded-full border border-line group-hover:bg-brand group-hover:text-bg group-hover:border-brand transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                                </svg>
                            </span>
                        </h3>
                        <p class="text-muted text-sm mt-2">Corporate website showcasing accounting, auditing, financial advisory and professional training services.</p>
                    </div>
                </a>

                <!-- 4. Trip Travello -->
                <a href="/projects/trip-travello" data-shot-host data-category="Laravel" data-search="trip travello travel &amp; visa travel services website with flight and hotel booking assistance plus student, tourist, medical and work permit visa services. php laravel mvc mysql responsive ui" class="card spot group block reveal hover:-translate-y-1" style="--d:0ms">
                    <div class="p-3 pb-0">
                        <div class="shot">
                            <div class="shot-bar"><i></i><i></i><i></i><span>triptravello.com</span></div>
                            <div class="shot-view">
                                <img src="{{ asset('assets/frontend/images/projects/triptravello.jpg') }}" alt="Trip Travello website preview" loading="lazy">
                                <span class="shot-hint">hover to scroll ↓</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <span class="chip cat-laravel">Laravel</span>
                            <span class="text-xs font-mono text-muted">Travel &amp; Visa</span>
                        </div>
                        <h3 class="text-lg font-semibold tracking-tight flex items-center justify-between gap-3">
                            Trip Travello
                            <span class="grid place-items-center w-9 h-9 rounded-full border border-line group-hover:bg-brand group-hover:text-bg group-hover:border-brand transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                                </svg>
                            </span>
                        </h3>
                        <p class="text-muted text-sm mt-2">Travel services website with flight and hotel booking assistance plus student, tourist, medical and work permit visa services.</p>
                    </div>
                </a>

                <!-- 5. Nebula Web Service -->
                <a href="/projects/nebula-web-service" data-shot-host data-category="WordPress" data-search="nebula web service it services responsive it services website showcasing web development, digital marketing, it consulting and technology solutions. wordpress elementor responsive ui" class="card spot group block reveal hover:-translate-y-1" style="--d:90ms">
                    <div class="p-3 pb-0">
                        <div class="shot">
                            <div class="shot-bar"><i></i><i></i><i></i><span>web.nebulaitbd.com</span></div>
                            <div class="shot-view">
                                <img src="{{ asset('assets/frontend/images/projects/nebula-web.jpg') }}" alt="Nebula Web Service website preview" loading="lazy">
                                <span class="shot-hint">hover to scroll ↓</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <span class="chip cat-wordpress">WordPress</span>
                            <span class="text-xs font-mono text-muted">IT Services</span>
                        </div>
                        <h3 class="text-lg font-semibold tracking-tight flex items-center justify-between gap-3">
                            Nebula Web Service
                            <span class="grid place-items-center w-9 h-9 rounded-full border border-line group-hover:bg-brand group-hover:text-bg group-hover:border-brand transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                                </svg>
                            </span>
                        </h3>
                        <p class="text-muted text-sm mt-2">Responsive IT services website showcasing web development, digital marketing, IT consulting and technology solutions.</p>
                    </div>
                </a>

                <!-- 6. Nebula Clipping Path -->
                <a href="/projects/nebula-clipping-path" data-shot-host data-category="WordPress" data-search="nebula clipping path creative services wordpress website presenting photo editing, image retouching and clipping path services. wordpress elementor responsive ui" class="card spot group block reveal hover:-translate-y-1" style="--d:180ms">
                    <div class="p-3 pb-0">
                        <div class="shot">
                            <div class="shot-bar"><i></i><i></i><i></i><span>nebulaclippingpath.com</span></div>
                            <div class="shot-view">
                                <img src="{{ asset('assets/frontend/images/projects/nebula-clipping.jpg') }}" alt="Nebula Clipping Path website preview" loading="lazy">
                                <span class="shot-hint">hover to scroll ↓</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <span class="chip cat-wordpress">WordPress</span>
                            <span class="text-xs font-mono text-muted">Creative Services</span>
                        </div>
                        <h3 class="text-lg font-semibold tracking-tight flex items-center justify-between gap-3">
                            Nebula Clipping Path
                            <span class="grid place-items-center w-9 h-9 rounded-full border border-line group-hover:bg-brand group-hover:text-bg group-hover:border-brand transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                                </svg>
                            </span>
                        </h3>
                        <p class="text-muted text-sm mt-2">WordPress website presenting photo editing, image retouching and clipping path services.</p>
                    </div>
                </a>

                <!-- 7. Azwajun Fashion -->
                <a href="/projects/azwajun-fashion" data-shot-host data-category="WordPress" data-search="azwajun fashion fashion fashion website showcasing clothing collections and product information with a responsive browsing experience. wordpress elementor responsive ui" class="card spot group block reveal hover:-translate-y-1" style="--d:0ms">
                    <div class="p-3 pb-0">
                        <div class="shot">
                            <div class="shot-bar"><i></i><i></i><i></i><span>azwajunfashion.com</span></div>
                            <div class="shot-view">
                                <img src="{{ asset('assets/frontend/images/projects/azwajun.jpg') }}" alt="Azwajun Fashion website preview" loading="lazy">
                                <span class="shot-hint">hover to scroll ↓</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <span class="chip cat-wordpress">WordPress</span>
                            <span class="text-xs font-mono text-muted">Fashion</span>
                        </div>
                        <h3 class="text-lg font-semibold tracking-tight flex items-center justify-between gap-3">
                            Azwajun Fashion
                            <span class="grid place-items-center w-9 h-9 rounded-full border border-line group-hover:bg-brand group-hover:text-bg group-hover:border-brand transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                                </svg>
                            </span>
                        </h3>
                        <p class="text-muted text-sm mt-2">Fashion website showcasing clothing collections and product information with a responsive browsing experience.</p>
                    </div>
                </a>

                <!-- 8. Study In New Zealand -->
                <a href="/projects/study-in-new-zealand" data-shot-host data-category="WordPress" data-search="study in new zealand education consultancy international education consultancy website presenting study opportunities and guidance for prospective students. wordpress elementor responsive ui" class="card spot group block reveal hover:-translate-y-1" style="--d:90ms">
                    <div class="p-3 pb-0">
                        <div class="shot">
                            <div class="shot-bar"><i></i><i></i><i></i><span>studynewzealand.net</span></div>
                            <div class="shot-view">
                                <img src="{{ asset('assets/frontend/images/projects/studynz.jpg') }}" alt="Study In New Zealand website preview" loading="lazy">
                                <span class="shot-hint">hover to scroll ↓</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between gap-3 mb-3">
                            <span class="chip cat-wordpress">WordPress</span>
                            <span class="text-xs font-mono text-muted">Education Consultancy</span>
                        </div>
                        <h3 class="text-lg font-semibold tracking-tight flex items-center justify-between gap-3">
                            Study In New Zealand
                            <span class="grid place-items-center w-9 h-9 rounded-full border border-line group-hover:bg-brand group-hover:text-bg group-hover:border-brand transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                                </svg>
                            </span>
                        </h3>
                        <p class="text-muted text-sm mt-2">International education consultancy website presenting study opportunities and guidance for prospective students.</p>
                    </div>
                </a>

            </div>

            <p data-projects-empty class="hidden text-center text-muted py-16">No projects match your search.</p>

            <p class="text-center text-muted text-sm mt-10">More project demonstrations and walkthroughs available on request, subject to client confidentiality.</p>

        </div>

    </section>

@endsection
