/* BLOG / CASE STUDIES DATA — add a new object to publish a new article.
   body blocks: {t:'p',c:'text'} {t:'h',c:'heading'} {t:'ul',c:['a','b']} {t:'code',c:'...'} */
window.POSTS = [
  {
    slug: 'sslcommerz-laravel-payments', title: 'Taking SSLCommerz payments safely in Laravel', kind: 'Guide', date: 'Oct 2026', read: '4 min',
    image: 'assets/images/blog/sslcommerz.jpg',
    excerpt: 'The success redirect is not proof of payment. Here is the verification flow I follow before marking an order as paid.',
    body: [
      { t: 'p', c: 'Payment gateways send the customer back to your site after a payment attempt. That redirect is easy to fake, so it should never be the only reason an order becomes "paid". The safe pattern is to verify every transaction on the server before you change anything.' },
      { t: 'h', c: 'The flow' },
      { t: 'ul', c: ['Create the order with status pending and generate a unique transaction ID.', 'Send the customer to the gateway with that transaction ID, amount and callback URLs.', 'On the success callback, call the gateway validation API with the validation ID.', 'Only mark the order paid if the status, transaction ID and amount all match your record.', 'Handle fail, cancel and IPN callbacks too, and make every handler idempotent.'] },
      { t: 'h', c: 'Validating on the server' },
      { t: 'code', c: "$response = Http::get($validatorUrl, [\n    'val_id'       => $request->val_id,\n    'store_id'     => config('services.sslcommerz.store_id'),\n    'store_passwd' => config('services.sslcommerz.store_password'),\n    'format'       => 'json',\n])->json();\n\n$valid = in_array($response['status'] ?? '', ['VALID', 'VALIDATED'])\n    && $response['tran_id'] === $order->tran_id\n    && (float) $response['amount'] === (float) $order->amount;\n\nif ($valid && $order->status === 'pending') {\n    $order->update(['status' => 'paid']);\n}" },
      { t: 'h', c: 'Small habits that save you later' },
      { t: 'ul', c: ['Keep store credentials in .env and read them through config files.', 'Use the sandbox URLs while testing and switch to live only at launch.', 'Log every callback payload so disputes are easy to investigate.', 'Test success, failure, cancellation and a double callback before going live.'] },
      { t: 'p', c: 'The same verify-then-update approach works for Stripe, PayPal and bKash: trust your own server-side check, not the browser.' }
    ]
  },
  {
    slug: 'third-party-apis-laravel', title: 'Integrating third-party APIs without the pain', kind: 'Guide', date: 'Oct 2026', read: '4 min',
    image: 'assets/images/blog/apis.jpg',
    excerpt: 'Timeouts, retries and caching: three small decisions that make external API integrations dependable.',
    body: [
      { t: 'p', c: 'External APIs such as country lists or airline data are outside your control. They can be slow, rate limited or briefly unavailable, so your application should be built to cope.' },
      { t: 'h', c: 'Wrap, time out, retry, cache' },
      { t: 'code', c: "$countries = Cache::remember('countries', now()->addDay(), function () {\n    return Http::timeout(8)\n        ->retry(2, 200)\n        ->get(config('services.countries.url'))\n        ->throw()\n        ->json();\n});" },
      { t: 'ul', c: ['Always set a timeout so a slow API cannot freeze your page.', 'Retry briefly for transient failures, but never retry non-idempotent writes blindly.', 'Cache data that rarely changes, such as country or airport lists.', 'Keep the API URL and keys in config, never hard-coded.', 'Map the response into your own structure so a provider change touches one place.'] },
      { t: 'h', c: 'Fail gracefully' },
      { t: 'p', c: 'Decide in advance what the user sees when the API is down: cached data, a friendly message, or a manual fallback. A calm error state is part of the feature.' }
    ]
  },
  {
    slug: 'case-study-consultancy-website', title: 'Case study: planning a study abroad consultancy site', kind: 'Case study', date: 'Sep 2026', read: '3 min',
    image: 'assets/images/blog/case-consultancy.jpg',
    excerpt: 'How I approach a consultancy website like Euro Link: structure the journey first, then design and build.',
    body: [
      { t: 'p', c: 'Websites for study abroad and visa consultancies serve nervous, research-heavy visitors. They want clear answers about admissions, scholarships, loans and visas, and an easy way to talk to a human.' },
      { t: 'h', c: 'Start with the visitor journey' },
      { t: 'ul', c: ['Which destination and which course?', 'Can I afford it, and what scholarships or loans exist?', 'What does the visa process involve?', 'How do I contact someone today?'] },
      { t: 'h', c: 'Build for trust and speed' },
      { t: 'p', c: 'Each question gets its own clear section, calls to action stay visible, and pages are lightweight so they load quickly on mobile networks. Inquiry forms stay short because every extra field costs enquiries.' },
      { t: 'h', c: 'Launch properly' },
      { t: 'p', c: 'Before launch I test every form, link and breakpoint, configure hosting and the database, and walk the client through updating content themselves.' }
    ]
  },
  {
    slug: 'launch-checklist-end-to-end-testing', title: 'Launch checklist: end-to-end testing a web project', kind: 'Checklist', date: 'Aug 2026', read: '3 min',
    image: 'assets/images/blog/checklist.jpg',
    excerpt: 'The checks I run on every project before the client sees it, from forms and payments to hosting.',
    body: [
      { t: 'p', c: 'Most launch-day surprises come from things nobody clicked. I walk through a project the way a real user would, then the way a careless one would.' },
      { t: 'h', c: 'Functionality' },
      { t: 'ul', c: ['Every form submits, validates and delivers email.', 'Every menu link, button and redirect goes where it should.', 'Search, filters and pagination behave with empty and large results.'] },
      { t: 'h', c: 'Payments and data' },
      { t: 'ul', c: ['Successful, failed and cancelled payments update orders correctly.', 'Database backups exist and a restore has been tried.', 'Environment keys are set for production, not sandbox.'] },
      { t: 'h', c: 'Devices and hosting' },
      { t: 'ul', c: ['Check phone, tablet and desktop widths.', 'Confirm domain, SSL, redirects and cPanel settings.', 'Check image sizes and page speed on a slow connection.'] },
      { t: 'p', c: 'Finish by keeping a short log of what was tested. It becomes the handover note for the client.' }
    ]
  }
];
