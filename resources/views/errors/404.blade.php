@extends('frontend.dashboard')
@section('frontend_title', 'Page Not Found | Faisal Alam')
@section('frontend_contents')

    @php
        $pages = [
                'home' => route('home'),
                'about' => route('about'),
                'services' => route('services'),
                'projects' => route('projects'),
                'project' => route('projects'),
                'experience' => route('experience'),
                'resume' => route('experience'),
                'cv' => route('experience'),
                'blog' => route('blog'),
                'contact' => route('contact'),
                ];
    @endphp

    <section class="hero-bg relative overflow-hidden px-5 py-12 md:py-16"><div class="max-w-3xl mx-auto text-center">
          <div class="pop"><svg viewBox="0 0 660 410" class="w-full max-w-[640px] mx-auto" role="img" aria-label="404 — page not found. A planet replaces the zero while an astronaut floats by."><defs><linearGradient id="pg" x1="0" y1="0" x2="1" y2="1"><stop class="stop-a" offset="0"/><stop class="stop-b" offset=".55"/><stop class="stop-c" offset="1"/></linearGradient>
        <linearGradient id="dg" x1="0" y1="0" x2="1" y2="1"><stop class="stop-a" offset="0"/><stop class="stop-b" offset="1"/></linearGradient>
        <clipPath id="pc"><circle cx="330" cy="160" r="72"/></clipPath></defs>
        <circle class="a-twinkle f-brand" style="animation-delay:0.00s" cx="145" cy="88" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:0.45s" cx="171" cy="104" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:0.90s" cx="196" cy="120" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:1.35s" cx="222" cy="135" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:1.80s" cx="247" cy="151" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:2.25s" cx="273" cy="166" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:2.70s" cx="298" cy="182" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:0.00s" cx="324" cy="198" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:0.45s" cx="349" cy="213" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:0.90s" cx="375" cy="229" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:1.35s" cx="400" cy="245" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:1.80s" cx="426" cy="260" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:2.25s" cx="451" cy="276" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:2.70s" cx="477" cy="291" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:0.00s" cx="502" cy="307" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:0.45s" cx="528" cy="323" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:0.90s" cx="554" cy="338" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:1.35s" cx="579" cy="354" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:1.80s" cx="605" cy="370" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:2.25s" cx="630" cy="385" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:2.70s" cx="16" cy="9" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:0.00s" cx="41" cy="25" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:0.45s" cx="67" cy="40" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:0.90s" cx="92" cy="56" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:1.35s" cx="118" cy="71" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:1.80s" cx="143" cy="87" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:2.25s" cx="169" cy="103" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:2.70s" cx="194" cy="118" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:0.00s" cx="220" cy="134" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:0.45s" cx="245" cy="150" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:0.90s" cx="271" cy="165" r="1.0"/><circle class="a-twinkle f-brand" style="animation-delay:1.35s" cx="296" cy="181" r="1.7"/><circle class="a-twinkle f-brand" style="animation-delay:1.80s" cx="322" cy="196" r="2.4"/><circle class="a-twinkle f-brand" style="animation-delay:2.25s" cx="347" cy="212" r="1.0"/><path class="s-peach a-twinkle" style="animation-delay:0.0s;stroke-width:2.2;stroke-linecap:round" d="M64 70h12M70 64v12"/><path class="s-peach a-twinkle" style="animation-delay:0.6s;stroke-width:2.2;stroke-linecap:round" d="M594 90h12M600 84v12"/><path class="s-peach a-twinkle" style="animation-delay:1.2s;stroke-width:2.2;stroke-linecap:round" d="M554 330h12M560 324v12"/><path class="s-peach a-twinkle" style="animation-delay:1.7999999999999998s;stroke-width:2.2;stroke-linecap:round" d="M104 300h12M110 294v12"/>
        <circle class="a-pulse s-brand" cx="330" cy="160" r="86" style="stroke-width:2"/>
        <text class="digit" x="258" y="236" text-anchor="end" fill="url(#dg)">4</text>
        <text class="digit" x="402" y="236" text-anchor="start" fill="url(#dg)">4</text>
        <g class="a-drift2" style="transform-origin:330px 160px"><circle cx="330" cy="160" r="72" fill="url(#pg)"/>
        <g clip-path="url(#pc)"><ellipse cx="300" cy="130" rx="16" ry="11" fill="#fff" opacity=".18"/><ellipse cx="362" cy="196" rx="22" ry="14" fill="#fff" opacity=".14"/><ellipse cx="318" cy="205" rx="9" ry="6" fill="#fff" opacity=".2"/><rect x="250" y="148" width="160" height="14" fill="#fff" opacity=".10" transform="rotate(-12 330 160)"/></g>
        <ellipse cx="330" cy="160" rx="112" ry="22" transform="rotate(-18 330 160)" fill="none" stroke="rgb(var(--peach))" stroke-width="5" opacity=".9" stroke-dasharray="520 40"/></g>
        <g class="a-orbit"><circle cx="330" cy="46" r="9" class="f-mint"/><circle cx="327" cy="43" r="3" fill="#fff" opacity=".5"/></g>
        <g class="a-drift" style="transform-origin:90px 90px"><g transform="translate(40,230) scale(.95) rotate(-12 60 80)">
          <rect class="f-surface2" x="22" y="62" width="76" height="62" rx="16"/><rect class="f-brand" x="14" y="72" width="16" height="42" rx="8"/>
          <rect class="f-suit" x="34" y="66" width="52" height="58" rx="18"/><rect class="f-surface2" x="42" y="86" width="36" height="20" rx="6"/>
          <circle class="f-peach a-blink" cx="51" cy="96" r="3.4"/><circle class="f-mint a-blink" style="animation-delay:.5s" cx="62" cy="96" r="3.4"/><circle class="f-brand a-blink" style="animation-delay:1s" cx="73" cy="96" r="3.4"/>
          <rect class="f-suit" x="14" y="72" width="26" height="14" rx="7" transform="rotate(-30 27 79)"/><rect class="f-suit" x="82" y="70" width="26" height="14" rx="7" transform="rotate(35 95 77)"/>
          <circle class="f-peach" cx="9" cy="62" r="7"/><circle class="f-peach" cx="111" cy="95" r="7"/>
          <rect class="f-suit" x="38" y="116" width="18" height="30" rx="8"/><rect class="f-suit" x="64" y="116" width="18" height="30" rx="8"/><rect class="f-peach" x="36" y="140" width="22" height="12" rx="6"/><rect class="f-peach" x="62" y="140" width="22" height="12" rx="6"/>
          <circle class="f-suit" cx="60" cy="42" r="31"/><rect class="f-visor" x="37" y="28" width="46" height="30" rx="15"/><path d="M45 36 q6 -6 14 -4" stroke="#8f92ff" stroke-width="3" stroke-linecap="round" fill="none"/>
          <line x1="84" y1="20" x2="92" y2="6" stroke="rgb(var(--brand))" stroke-width="3" stroke-linecap="round"/><circle class="f-peach a-blink" cx="93" cy="5" r="4"/></g></g>
        <g class="a-drift" style="transform-origin:560px 300px"><rect class="f-surface s-line" x="520" y="280" width="90" height="62" rx="10" stroke-width="2"/><rect class="f-brand" x="520" y="280" width="90" height="16" rx="10"/><circle class="f-surface" cx="533" cy="288" r="2.6"/><circle class="f-surface" cx="543" cy="288" r="2.6"/><path class="s-peach" stroke-width="3" stroke-linecap="round" d="M538 322 l8 -8 m0 8 l-8 -8 M562 322 l8 -8 m0 8 l-8 -8"/><path class="s-line" stroke-width="3" stroke-linecap="round" d="M542 334 q13 -8 26 0"/></g>
        </svg></div>
          <h1 class="h1 mt-2 pop" style="animation-delay:.15s">Houston, we have a <span class="hl">missing page</span></h1>
          <p class="lead mx-auto mt-3 pop" style="animation-delay:.25s">The page you're looking for drifted out of orbit or never existed. Let's get you back on course.</p>
          
        <form data-not-found-form data-pages='@json($pages)' class="flex max-w-md mx-auto gap-2 mt-7 pop" style="animation-delay:.35s">
            <input data-not-found-input class="field" placeholder="Where do you want to go?" autocomplete="off">
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p data-not-found-message class="text-sm text-muted mt-2 h-5"></p>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-4 pop" style="animation-delay:.45s">
            <a href="{{ route('home') }}" class="card hoverable tint-top tint-bg c1 p-4">
                <div class="ic mx-auto">⌂</div>
                <p class="font-semibold text-sm mt-2">Home</p>
            </a>
            <a href="{{ route('projects') }}" class="card hoverable tint-top tint-bg c2 p-4">
                <div class="ic mx-auto">▭</div>
                <p class="font-semibold text-sm mt-2">Projects</p>
            </a>
            <a href="{{ route('services') }}" class="card hoverable tint-top tint-bg c3 p-4">
                <div class="ic mx-auto">&lt;/&gt;</div>
                <p class="font-semibold text-sm mt-2">Services</p>
            </a>
            <a href="{{ route('contact') }}" class="card hoverable tint-top tint-bg c4 p-4">
                <div class="ic mx-auto">@</div>
                <p class="font-semibold text-sm mt-2">Contact</p>
            </a>
        </div>

    </div></section>

@endsection
