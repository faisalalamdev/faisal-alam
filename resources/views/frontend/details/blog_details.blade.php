@extends('frontend.dashboard')
@section('frontend_title', $post['title'] . ' | Faisal Alam')
@section('frontend_contents')

    <section class="pt-10 pb-10">

        <div class="max-w-3xl mx-auto px-5">

            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-sm text-muted hover:text-brand transition mb-8">← All articles</a>

            <div class="flex items-center gap-3 mb-5 reveal">
                <span class="chip">{{ $post['kind'] }}</span>
                <span class="text-xs font-mono text-muted">{{ $post['date'] }} · {{ $post['read'] }} read</span>
            </div>

            <h1 class="h1">{{ $post['title'] }}</h1>

            <img class="reveal w-full rounded-3xl border border-line mt-10 aspect-[16/8] object-cover" src="{{ asset('assets/frontend/images/blog/' . $post['image']) }}" alt="{{ $post['title'] }}">

            <article class="prose reveal mt-10 max-w-2xl mx-auto">
                @foreach ($post['body'] as $block)
                    @if ($block['t'] === 'h')
                        <h2>{{ $block['c'] }}</h2>
                    @elseif ($block['t'] === 'ul')
                        <ul>
                            @foreach ($block['c'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    @elseif ($block['t'] === 'code')
                        <pre><code>{{ $block['c'] }}</code></pre>
                    @else
                        <p>{{ $block['c'] }}</p>
                    @endif
                @endforeach
            </article>

            <div class="max-w-2xl mx-auto mt-16 card p-6 reveal flex flex-wrap items-center justify-between gap-4">
                <p class="font-semibold">Need help with a project like this?</p>
                <a href="/contact" class="btn btn-primary"><span>Let's talk</span></a>
            </div>

            <div class="grid sm:grid-cols-2 gap-4 mt-16">
                @foreach ($otherPosts as $otherPost)
                    <a href="{{ route('blog.show', $otherPost['slug']) }}" class="card spot p-6 reveal">
                        <p class="font-mono text-xs text-muted">{{ strtoupper($otherPost['kind']) }}</p>
                        <p class="text-base font-semibold mt-2">{{ $otherPost['title'] }}</p>
                    </a>
                @endforeach
            </div>

        </div>

    </section>

@endsection
