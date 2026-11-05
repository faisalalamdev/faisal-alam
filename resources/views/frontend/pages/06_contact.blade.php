@extends('frontend.dashboard')
@section('frontend_title', 'Contact | Faisal Alam')
@section('frontend_description', 'Contact Faisal Alam to discuss your Laravel or WordPress project, timeline and budget.')
@section('frontend_contents')

    <section class="hero-bg pt-14 pb-8 border-b border-line">
        <div class="max-w-6xl mx-auto px-5 pb-6">
            <p class="eyebrow reveal">Contact</p>
            <h1 class="h1 mt-2 max-w-3xl reveal">Let's <span class="hl">work together</span></h1>
            <p class="lead mt-3 reveal">Tell me about your project, timeline and budget — I usually reply quickly.</p>
        </div>
    </section>

    <section class="py-12">

        <div class="max-w-6xl mx-auto px-5 grid lg:grid-cols-[1fr_1.6fr] gap-8">

            <div class="space-y-3">

                <a href="mailto:faisal.alam.dev@gmail.com" class="card hoverable tint-top tint-bg c1 p-4 block reveal">
                    <p class="text-xs font-semibold text-brand uppercase tracking-wider">Email</p>
                    <p class="mt-0.5 font-medium break-all">faisal.alam.dev@gmail.com</p>
                </a>

                <a href="tel:+8801624823163" class="card hoverable tint-top tint-bg c2 p-4 block reveal">
                    <p class="text-xs font-semibold text-brand uppercase tracking-wider">Phone</p>
                    <p class="mt-0.5 font-medium break-all">+880 1624 823163</p>
                </a>

                <a href="https://wa.me/8801624823163" class="card hoverable tint-top tint-bg c3 p-4 block reveal" target="_blank" rel="noopener">
                    <p class="text-xs font-semibold text-brand uppercase tracking-wider">WhatsApp</p>
                    <p class="mt-0.5 font-medium break-all">Message me directly</p>
                </a>

                <div class="card hoverable tint-top tint-bg c4 p-4 block reveal">
                    <p class="text-xs font-semibold text-brand uppercase tracking-wider">Location</p>
                    <p class="mt-0.5 font-medium break-all">Dhaka, Bangladesh</p>
                </div>

                <div class="card p-4 reveal">
                    <p class="text-xs font-semibold text-brand uppercase tracking-wider mb-2">Elsewhere</p>
                    <div class="flex flex-wrap gap-4 text-sm">
                        <a class="hover:text-brand" target="_blank" rel="noopener" href="https://github.com/faisalalamdev">GitHub</a>
                        <a class="hover:text-brand" target="_blank" rel="noopener" href="https://linkedin.com/in/faisalalamdev">LinkedIn</a>
                        <a class="hover:text-brand" target="_blank" rel="noopener" href="https://faisalalamdev.com">Portfolio</a>
                    </div>
                </div>

            </div>

            <form data-contact-form class="card p-6 space-y-4 reveal">

                <div class="grid sm:grid-cols-2 gap-4">
                    <label class="block">
                        <span class="text-sm text-muted">Name</span>
                        <input class="field mt-1" name="name" required placeholder="Your name">
                    </label>
                    <label class="block">
                        <span class="text-sm text-muted">Email</span>
                        <input class="field mt-1" name="email" type="email" required placeholder="you@example.com">
                    </label>
                </div>

                <div class="grid sm:grid-cols-2 gap-4">
                    <label class="block">
                        <span class="text-sm text-muted">Subject</span>
                        <input class="field mt-1" name="subject" placeholder="Project inquiry">
                    </label>
                    <label class="block">
                        <span class="text-sm text-muted">Budget (optional)</span>
                        <select class="field mt-1" name="budget">
                            <option value="">Select…</option>
                            <option>Under $500</option>
                            <option>$500 – $1,500</option>
                            <option>$1,500 – $5,000</option>
                            <option>$5,000+</option>
                        </select>
                    </label>
                </div>

                <label class="block">
                    <span class="text-sm text-muted">Message</span>
                    <textarea class="field mt-1" name="message" rows="6" required placeholder="Tell me about your project…"></textarea>
                </label>

                <div class="flex flex-wrap items-center gap-4">
                    <button class="btn btn-primary" type="submit">
                        Send message
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </button>
                    <span data-contact-note class="text-sm text-muted" role="status"></span>
                </div>

            </form>

        </div>

    </section>

@endsection
