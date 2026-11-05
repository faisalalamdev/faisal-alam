<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Under Maintenance | Faisal Alam</title>

    <meta name="description" content="Faisal Alam is a Full Stack Web Developer in Dhaka, Bangladesh with 4+ years of experience building Laravel and WordPress websites, API and payment gateway integrations. 38+ live websites delivered.">
    <meta name="author" content="Faisal Alam">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Under Maintenance | Faisal Alam">
    <meta property="og:description" content="Faisal Alam is a Full Stack Web Developer in Dhaka, Bangladesh with 4+ years of experience building Laravel and WordPress websites, API and payment gateway integrations. 38+ live websites delivered.">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#161626">

    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/frontend/images/favicon-32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/frontend/images/favicon-16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <script src="{{ asset('assets/frontend/js/tailwind.config.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <script src="{{ asset('assets/frontend/js/layout.js') }}"></script>
</head>

<body class="font-sans">

    <div class="hero-bg min-h-screen flex flex-col">

        <header class="max-w-6xl w-full mx-auto px-5 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center" aria-label="Faisal Alam — Home">
                <img src="{{ asset('assets/frontend/images/logo-wordmark.png') }}" alt="Faisal Alam — Full Stack Developer" class="logo-light h-14 w-auto">
                <img src="{{ asset('assets/frontend/images/logo-wordmark-light.png') }}" alt="Faisal Alam — Full Stack Developer" class="logo-dark h-14 w-auto">
            </a>
            <button class="icon-btn" data-theme-toggle aria-label="Toggle theme">
                <svg data-ic="sun" class="w-[17px] h-[17px]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="4" />
                    <path stroke-linecap="round" d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4" />
                </svg>
                <svg data-ic="moon" class="w-[17px] h-[17px]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z" />
                </svg>
            </button>
        </header>

        <main class="flex-1 grid place-items-center px-5 pb-12">
            <div class="max-w-2xl w-full text-center">
                <div class="max-w-2xl w-full text-center">
                    <div class="pop"><svg viewBox="0 0 520 330" class="w-full max-w-[520px] mx-auto" role="img" aria-label="Gears turning while the website is being updated">
                            <defs>
                                <linearGradient id="mg" x1="0" y1="0" x2="1" y2="1">
                                    <stop class="stop-a" offset="0" />
                                    <stop class="stop-b" offset="1" />
                                </linearGradient>
                                <linearGradient id="mg2" x1="0" y1="0" x2="1" y2="1">
                                    <stop class="stop-c" offset="0" />
                                    <stop class="stop-b" offset="1" />
                                </linearGradient>
                            </defs>
                            <circle class="f-brand a-twinkle" cx="40" cy="60" r="3" />
                            <circle class="f-peach a-twinkle" style="animation-delay:1s" cx="480" cy="50" r="3.5" />
                            <circle class="f-mint a-twinkle" style="animation-delay:2s" cx="500" cy="270" r="3" />
                            <circle class="f-sky a-twinkle" style="animation-delay:.6s" cx="30" cy="250" r="3" />
                            <g class="a-drift2" style="transform-origin:260px 150px">
                                <rect class="f-surface s-line" x="120" y="40" width="330" height="220" rx="16" stroke-width="2" />
                                <path class="f-brand" d="M120 56a16 16 0 0 1 16-16h298a16 16 0 0 1 16 16v14H120z" />
                                <circle class="f-surface" cx="140" cy="55" r="4" />
                                <circle class="f-surface" cx="154" cy="55" r="4" />
                                <circle class="f-surface" cx="168" cy="55" r="4" />
                                <rect class="f-surface2" x="190" y="48" width="170" height="14" rx="7" />
                                <rect class="f-surface2" x="290" y="92" width="130" height="14" rx="7" />
                                <rect class="f-surface2" x="290" y="116" width="100" height="10" rx="5" />
                                <rect class="f-surface2" x="290" y="136" width="120" height="10" rx="5" />
                                <rect class="f-peach" x="290" y="162" width="70" height="22" rx="11" opacity=".85" />
                                <rect class="f-surface2" x="150" y="200" width="270" height="10" rx="5" />
                                <rect x="150" y="200" width="150" height="10" rx="5" fill="url(#mg)">
                                    <animate attributeName="width" values="60;220;60" dur="4s" repeatCount="indefinite" />
                                </rect>
                                <rect class="f-surface2" x="150" y="224" width="200" height="8" rx="4" />
                            </g>
                            <g transform="translate(160,150)">
                                <g class="gear-a">
                                    <path d="M50.0,0.0 L49.8,4.7 L63.2,10.0 L60.7,20.4 L46.3,18.9 L43.3,25.0 L40.8,29.0 L49.7,40.3 L42.3,48.0 L30.6,39.5 L25.0,43.3 L20.8,45.5 L22.9,59.7 L12.7,62.7 L6.8,49.5 L0.0,50.0 L-4.7,49.8 L-10.0,63.2 L-20.4,60.7 L-18.9,46.3 L-25.0,43.3 L-29.0,40.8 L-40.3,49.7 L-48.0,42.3 L-39.5,30.6 L-43.3,25.0 L-45.5,20.8 L-59.7,22.9 L-62.7,12.7 L-49.5,6.8 L-50.0,0.0 L-49.8,-4.7 L-63.2,-10.0 L-60.7,-20.4 L-46.3,-18.9 L-43.3,-25.0 L-40.8,-29.0 L-49.7,-40.3 L-42.3,-48.0 L-30.6,-39.5 L-25.0,-43.3 L-20.8,-45.5 L-22.9,-59.7 L-12.7,-62.7 L-6.8,-49.5 L-0.0,-50.0 L4.7,-49.8 L10.0,-63.2 L20.4,-60.7 L18.9,-46.3 L25.0,-43.3 L29.0,-40.8 L40.3,-49.7 L48.0,-42.3 L39.5,-30.6 L43.3,-25.0 L45.5,-20.8 L59.7,-22.9 L62.7,-12.7 L49.5,-6.8Z" fill="url(#mg)" />
                                    <circle r="22" class="f-surface" />
                                    <circle r="8" class="f-brand" />
                                </g>
                            </g>
                            <g transform="translate(250,214)">
                                <g class="gear-b">
                                    <path d="M34.0,0.0 L33.7,4.8 L42.8,10.3 L38.9,20.6 L28.4,18.7 L24.0,24.0 L20.4,27.2 L23.0,37.5 L12.9,42.1 L6.9,33.3 L0.0,34.0 L-4.8,33.7 L-10.3,42.8 L-20.6,38.9 L-18.7,28.4 L-24.0,24.0 L-27.2,20.4 L-37.5,23.0 L-42.1,12.9 L-33.3,6.9 L-34.0,0.0 L-33.7,-4.8 L-42.8,-10.3 L-38.9,-20.6 L-28.4,-18.7 L-24.0,-24.0 L-20.4,-27.2 L-23.0,-37.5 L-12.9,-42.1 L-6.9,-33.3 L-0.0,-34.0 L4.8,-33.7 L10.3,-42.8 L20.6,-38.9 L18.7,-28.4 L24.0,-24.0 L27.2,-20.4 L37.5,-23.0 L42.1,-12.9 L33.3,-6.9Z" fill="url(#mg2)" />
                                    <circle r="15" class="f-surface" />
                                    <circle r="5.5" class="f-peach" />
                                </g>
                            </g>
                            <g transform="translate(112,236)">
                                <g class="gear-c">
                                    <path d="M23.0,0.0 L22.9,2.6 L29.5,5.6 L27.8,11.4 L20.6,10.3 L18.6,13.5 L17.0,15.5 L20.5,21.9 L15.8,25.5 L10.6,20.4 L7.1,21.9 L4.6,22.5 L3.8,29.8 L-2.3,29.9 L-3.5,22.7 L-7.1,21.9 L-9.5,20.9 L-14.5,26.3 L-19.4,22.9 L-16.2,16.4 L-18.6,13.5 L-20.0,11.3 L-27.1,12.8 L-29.1,7.1 L-22.7,3.7 L-23.0,0.0 L-22.9,-2.6 L-29.5,-5.6 L-27.8,-11.4 L-20.6,-10.3 L-18.6,-13.5 L-17.0,-15.5 L-20.5,-21.9 L-15.8,-25.5 L-10.6,-20.4 L-7.1,-21.9 L-4.6,-22.5 L-3.8,-29.8 L2.3,-29.9 L3.5,-22.7 L7.1,-21.9 L9.5,-20.9 L14.5,-26.3 L19.4,-22.9 L16.2,-16.4 L18.6,-13.5 L20.0,-11.3 L27.1,-12.8 L29.1,-7.1 L22.7,-3.7Z" class="f-mint" />
                                    <circle r="9" class="f-surface" />
                                </g>
                            </g>
                            <g transform="translate(430,230)">
                                <g class="a-swing">
                                    <rect class="f-ink" x="-6" y="0" width="12" height="62" rx="6" opacity=".85" />
                                    <path class="f-peach" d="M-20 0a20 20 0 0 1 14-19v13h12v-13a20 20 0 0 1 14 19a20 20 0 0 1-40 0z" transform="translate(0,-4) scale(.9)" />
                                </g>
                            </g>
                        </svg></div>
                    <p class="eyebrow mt-2 pop" style="animation-delay:.1s">Scheduled maintenance</p>
                    <h1 class="h1 mt-2 pop" style="animation-delay:.18s">We're polishing things up. <span class="hl">Back shortly.</span></h1>
                    <p class="lead mx-auto mt-3 pop" style="animation-delay:.26s">This website is temporarily down while we make improvements. Thanks for your patience — everything will be faster and better when we return.</p>
                    <div class="indeterminate max-w-md mx-auto mt-7 pop" style="animation-delay:.34s" role="progressbar" aria-label="Maintenance in progress"><span></span></div>
                    <div data-maint-countdown data-eta="" class="hidden flex justify-center gap-3 mt-7">
                        <div class="count-box"><b data-maint-days>0</b><span>Days</span></div>
                        <div class="count-box"><b data-maint-hours>0</b><span>Hours</span></div>
                        <div class="count-box"><b data-maint-minutes>0</b><span>Min</span></div>
                        <div class="count-box"><b data-maint-seconds>0</b><span>Sec</span></div>
                    </div>
                    <div class="grid sm:grid-cols-3 gap-3 mt-7 text-left pop" style="animation-delay:.42s" data-maint-steps>
                        <div class="step"><span class="dot"></span>Updating content</div>
                        <div class="step"><span class="dot"></span>Optimizing performance</div>
                        <div class="step"><span class="dot"></span>Running final checks</div>
                    </div>
                    <div class="flex flex-wrap gap-3 justify-center mt-8 pop" style="animation-delay:.5s"><a class="btn btn-primary" href="mailto:faisal.alam.dev@gmail.com?subject=Maintenance%20notification">Email me</a><a class="btn btn-ghost" target="_blank" rel="noopener" href="https://wa.me/8801624823163">WhatsApp</a></div>
                    <p class="text-sm text-muted mt-6">Urgent? <a class="text-brand hover:underline" href="tel:+8801624823163">+880 1624 823163</a></p>
                </div>
            </div>
        </main>

        <footer class="flex items-center justify-center gap-2 text-sm text-muted pb-6">
            <img src="{{ asset('assets/frontend/images/logo-icon.png') }}" alt="" class="w-8 h-8 rounded-md">
            © {{ date('Y') }} Faisal Alam
        </footer>

    </div>

    <script src="{{ asset('assets/frontend/js/pages.js') }}"></script>

</body>

</html>
