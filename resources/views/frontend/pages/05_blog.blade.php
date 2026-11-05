@extends('frontend.dashboard')
@section('frontend_title', 'Blog & Case Studies | Faisal Alam')
@section('frontend_description', 'Practical guides, checklists and case studies on Laravel, WordPress, API integration and payment gateways by Faisal Alam.')
@section('frontend_contents')

    <section class="hero-bg pt-14 pb-8 border-b border-line">
        <div class="max-w-6xl mx-auto px-5 pb-6">
            <p class="eyebrow reveal">Blog &amp; case studies</p>
            <h1 class="h1 mt-2 max-w-3xl reveal">Notes from <span class="hl">real projects</span></h1>
            <p class="lead mt-3 reveal">Practical guides, checklists and case studies on Laravel, WordPress, APIs and payments.</p>
        </div>
    </section>

    <section class="py-10">

        <div class="max-w-6xl mx-auto px-5">

            <div class="grid md:grid-cols-2 gap-6">

                @foreach ($posts as $post)
                    <a href="{{ route('blog.show', $post['slug']) }}" class="card spot group block reveal {{ $loop->first ? 'md:col-span-2 md:grid md:grid-cols-2' : '' }}" style="--d:{{ ($loop->index % 2) * 90 }}ms">
                        <div class="overflow-hidden {{ $loop->first ? 'h-full' : '' }}">
                            <img class="w-full {{ $loop->first ? 'h-full object-cover' : 'aspect-[16/9] object-cover' }} group-hover:scale-105 transition duration-700" src="{{ asset('assets/frontend/images/blog/' . $post['image']) }}" alt="{{ $post['title'] }}" loading="lazy">
                        </div>
                        <div class="p-7 flex flex-col justify-center">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="chip">{{ $post['kind'] }}</span>
                                <span class="text-xs font-mono text-muted">{{ $post['date'] }} · {{ $post['read'] }} read</span>
                            </div>
                            <h3 class="{{ $loop->first ? 'text-2xl' : 'text-lg' }} font-semibold tracking-tight">{{ $post['title'] }}</h3>
                            <p class="text-muted mt-3 text-sm">{{ $post['excerpt'] }}</p>
                            <span class="mt-5 inline-flex items-center gap-2 text-brand text-sm font-medium">
                                Read article
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M8 7h9v9" />
                                </svg>
                            </span>
                        </div>
                    </a>
                @endforeach

            </div>

        </div>

    </section>

@endsection
