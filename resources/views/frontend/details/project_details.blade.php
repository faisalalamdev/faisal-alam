@extends('frontend.dashboard')
@section('frontend_title', $project['title'] . ' | Faisal Alam')
@section('frontend_contents')

    <section class="pt-10 pb-10">

        <div class="max-w-5xl mx-auto px-5">

            <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 text-sm text-muted hover:text-brand transition mb-8">← All projects</a>

            <div class="flex flex-wrap gap-2 mb-5 reveal">
                <span class="chip cat-{{ strtolower($project['category']) }}">{{ $project['category'] }}</span>
                <span class="chip chip-n">{{ $project['industry'] }}</span>
            </div>

            <h1 class="h1">{{ $project['title'] }}</h1>
            <p class="reveal text-muted text-base max-w-2xl mt-4">{{ $project['summary'] }}</p>

            <div class="flex flex-wrap gap-3 mt-8 reveal">
                <a class="btn btn-primary" target="_blank" rel="noopener" href="{{ $project['url'] }}">
                    <span>Visit live site</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                    </svg>
                </a>
                <a class="btn btn-ghost" href="{{ route('contact') }}">Start a similar project</a>
            </div>

            <div class="mt-10 reveal">
                <div class="shot shadow-soft" data-shot-host>
                    <div class="shot-bar"><i></i><i></i><i></i><span>{{ preg_replace('#^https?://#', '', rtrim($project['url'], '/')) }}</span></div>
                    <div class="shot-view tall">
                        <img src="{{ asset('assets/frontend/images/projects/' . $project['image']) }}" alt="{{ $project['title'] }} full page preview">
                        <span class="shot-hint">hover to scroll ↓</span>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-[1.6fr_1fr] gap-10 mt-16">

                <div class="reveal">
                    <p class="eyebrow mb-3">// Overview</p>
                    <p class="text-base text-muted">{{ $project['description'] }}</p>

                    <p class="eyebrow mt-10 mb-4">// What's inside</p>
                    <ul class="grid sm:grid-cols-2 gap-3">
                        @foreach ($project['features'] as $feature)
                            <li class="card !rounded-2xl px-4 py-3 text-sm flex gap-3 items-start"><span class="text-brand mt-0.5">✦</span>{{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>

                <aside class="card p-6 h-fit reveal" data-reveal="right">
                    <dl class="space-y-5 text-sm">
                        <div>
                            <dt class="font-mono text-xs text-muted">ROLE</dt>
                            <dd class="mt-1">{{ $project['role'] }}</dd>
                        </div>
                        <div>
                            <dt class="font-mono text-xs text-muted">INDUSTRY</dt>
                            <dd class="mt-1">{{ $project['industry'] }}</dd>
                        </div>
                        <div>
                            <dt class="font-mono text-xs text-muted">LIVE SITE</dt>
                            <dd class="mt-1"><a class="text-brand hover:underline break-all" target="_blank" rel="noopener" href="{{ $project['url'] }}">{{ preg_replace('#^https?://#', '', rtrim($project['url'], '/')) }}</a></dd>
                        </div>
                        <div>
                            <dt class="font-mono text-xs text-muted mb-2">STACK</dt>
                            <dd class="flex flex-wrap gap-2 chips">
                                @foreach ($project['stack'] as $tech)
                                    <span class="chip">{{ $tech }}</span>
                                @endforeach
                            </dd>
                        </div>
                    </dl>
                </aside>

            </div>

            <div class="grid sm:grid-cols-2 gap-4 mt-14">
                <a href="{{ route('projects.show', $previousProject['slug']) }}" class="card spot p-6 reveal">
                    <p class="font-mono text-xs text-muted">← PREVIOUS</p>
                    <p class="text-lg font-semibold mt-2">{{ $previousProject['title'] }}</p>
                </a>
                <a href="{{ route('projects.show', $nextProject['slug']) }}" class="card spot p-6 text-right reveal">
                    <p class="font-mono text-xs text-muted">NEXT →</p>
                    <p class="text-lg font-semibold mt-2">{{ $nextProject['title'] }}</p>
                </a>
            </div>

        </div>

    </section>

@endsection
