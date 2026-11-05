<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.pages.01_about');
    }

    public function services()
    {
        return view('frontend.pages.02_services');
    }

    public function projects()
    {
        return view('frontend.pages.03_projects');
    }

    public function experience()
    {
        return view('frontend.pages.04_experience');
    }

    public function blog()
    {
        return view('frontend.pages.05_blog', ['posts' => $this->posts]);
    }

    public function blogDetails(string $slug)
    {
        $post = collect($this->posts)->firstWhere('slug', $slug);

        abort_if($post === null, 404);

        return view('frontend.details.blog_details', [
            'post' => $post,
            'otherPosts' => collect($this->posts)->where('slug', '!=', $slug)->take(2)->values()->all(),
        ]);
    }

    public function contact()
    {
        return view('frontend.pages.06_contact');
    }

    public function projectDetails(string $slug)
    {
        $projects = $this->projects;
        $index = array_search($slug, array_column($projects, 'slug'), true);

        abort_if($index === false, 404);

        return view('frontend.details.project_details', [
            'project' => $projects[$index],
            'previousProject' => $projects[($index - 1 + count($projects)) % count($projects)],
            'nextProject' => $projects[($index + 1) % count($projects)],
        ]);
    }

    private array $projects = [
        [
            'slug' => 'hongkong-nextgen',
            'title' => 'Hongkong Nextgen',
            'category' => 'Laravel',
            'industry' => 'B2B / Electronics',
            'url' => 'https://hknextgenint.com',
            'image' => 'hknextgen.jpg',
            'summary' => 'B2B corporate website for a global supplier of semiconductors, electronic components, IT products and testing equipment.',
            'description' => 'A corporate B2B website for a global supplier of semiconductors, electronic components, IT products and testing equipment. The site presents product sourcing information clearly and gives business customers a simple way to send inquiries.',
            'features' => ['Product sourcing information', 'Business inquiry support', 'Corporate B2B layout', 'Fully responsive interface'],
            'stack' => ['PHP', 'Laravel MVC', 'MySQL', 'Responsive UI'],
            'role' => 'Development & deployment',
        ],
        [
            'slug' => 'euro-link',
            'title' => 'Euro Link',
            'category' => 'Laravel',
            'industry' => 'Education Consultancy',
            'url' => 'https://eurolinkbd.com',
            'image' => 'eurolink.jpg',
            'summary' => 'Study abroad consultancy website covering university admissions, scholarships, study loans and student visa guidance.',
            'description' => 'A study abroad consultancy website that presents university admissions, scholarships, study loans and student visa guidance in one clear place for prospective students and their families.',
            'features' => ['University admission information', 'Scholarship & study loan pages', 'Student visa guidance', 'Fully responsive interface'],
            'stack' => ['PHP', 'Laravel MVC', 'MySQL', 'Responsive UI'],
            'role' => 'Development & deployment',
        ],
        [
            'slug' => 'finact-advisory-training',
            'title' => 'Finact Advisory Training',
            'category' => 'Laravel',
            'industry' => 'Finance & Training',
            'url' => 'https://finactadvisory.com',
            'image' => 'finact.jpg',
            'summary' => 'Corporate website showcasing accounting, auditing, financial advisory and professional training services.',
            'description' => 'A corporate website for a firm offering accounting, auditing, financial advisory and professional training services, designed to build trust and present each service clearly.',
            'features' => ['Service showcase pages', 'Professional training information', 'Corporate look and feel', 'Fully responsive interface'],
            'stack' => ['PHP', 'Laravel MVC', 'MySQL', 'Responsive UI'],
            'role' => 'Development & deployment',
        ],
        [
            'slug' => 'trip-travello',
            'title' => 'Trip Travello',
            'category' => 'Laravel',
            'industry' => 'Travel & Visa',
            'url' => 'https://triptravello.com',
            'image' => 'triptravello.jpg',
            'summary' => 'Travel services website with flight and hotel booking assistance plus student, tourist, medical and work permit visa services.',
            'description' => 'A travel services website presenting flight and hotel booking assistance alongside student, tourist, medical and work permit visa services.',
            'features' => ['Flight & hotel booking assistance', 'Visa services (student, tourist, medical, work permit)', 'Travel service showcase', 'Fully responsive interface'],
            'stack' => ['PHP', 'Laravel MVC', 'MySQL', 'Responsive UI'],
            'role' => 'Development & deployment',
        ],
        [
            'slug' => 'nebula-web-service',
            'title' => 'Nebula Web Service',
            'category' => 'WordPress',
            'industry' => 'IT Services',
            'url' => 'https://web.nebulaitbd.com',
            'image' => 'nebula-web.jpg',
            'summary' => 'Responsive IT services website showcasing web development, digital marketing, IT consulting and technology solutions.',
            'description' => 'A responsive WordPress website for an IT services company, showcasing web development, digital marketing, IT consulting and technology solutions.',
            'features' => ['Service showcase', 'Responsive layouts', 'Easy content management', 'Theme & plugin customization'],
            'stack' => ['WordPress', 'Elementor', 'Responsive UI'],
            'role' => 'Development & deployment',
        ],
        [
            'slug' => 'nebula-clipping-path',
            'title' => 'Nebula Clipping Path',
            'category' => 'WordPress',
            'industry' => 'Creative Services',
            'url' => 'https://nebulaclippingpath.com',
            'image' => 'nebula-clipping.jpg',
            'summary' => 'WordPress website presenting photo editing, image retouching and clipping path services.',
            'description' => 'A WordPress website presenting photo editing, image retouching and clipping path services to international customers.',
            'features' => ['Service pages', 'Visual-first presentation', 'Easy content management', 'Fully responsive interface'],
            'stack' => ['WordPress', 'Elementor', 'Responsive UI'],
            'role' => 'Development & deployment',
        ],
        [
            'slug' => 'azwajun-fashion',
            'title' => 'Azwajun Fashion',
            'category' => 'WordPress',
            'industry' => 'Fashion',
            'url' => 'https://azwajunfashion.com',
            'image' => 'azwajun.jpg',
            'summary' => 'Fashion website showcasing clothing collections and product information with a responsive browsing experience.',
            'description' => 'A fashion website showcasing clothing collections and product information, built for a smooth browsing experience on every device.',
            'features' => ['Collection showcase', 'Product information pages', 'Responsive browsing experience', 'Easy content management'],
            'stack' => ['WordPress', 'Elementor', 'Responsive UI'],
            'role' => 'Development & deployment',
        ],
        [
            'slug' => 'study-in-new-zealand',
            'title' => 'Study In New Zealand',
            'category' => 'WordPress',
            'industry' => 'Education Consultancy',
            'url' => 'https://studynewzealand.net',
            'image' => 'studynz.jpg',
            'summary' => 'International education consultancy website presenting study opportunities and guidance for prospective students.',
            'description' => 'An international education consultancy website presenting study opportunities in New Zealand and practical guidance for prospective students.',
            'features' => ['Study opportunity pages', 'Student guidance content', 'Easy content management', 'Fully responsive interface'],
            'stack' => ['WordPress', 'Elementor', 'Responsive UI'],
            'role' => 'Development & deployment',
        ],
    ];

    private array $posts = [
        [
            'slug' => 'sslcommerz-laravel-payments',
            'title' => 'Taking SSLCommerz payments safely in Laravel',
            'kind' => 'Guide',
            'date' => 'Oct 2026',
            'read' => '4 min',
            'image' => 'sslcommerz.jpg',
            'excerpt' => 'The success redirect is not proof of payment. Here is the verification flow I follow before marking an order as paid.',
            'body' => [
                [
                    't' => 'p',
                    'c' => 'Payment gateways send the customer back to your site after a payment attempt. That redirect is easy to fake, so it should never be the only reason an order becomes "paid". The safe pattern is to verify every transaction on the server before you change anything.',
                ],
                [
                    't' => 'h',
                    'c' => 'The flow',
                ],
                [
                    't' => 'ul',
                    'c' => [
                        'Create the order with status pending and generate a unique transaction ID.',
                        'Send the customer to the gateway with that transaction ID, amount and callback URLs.',
                        'On the success callback, call the gateway validation API with the validation ID.',
                        'Only mark the order paid if the status, transaction ID and amount all match your record.',
                        'Handle fail, cancel and IPN callbacks too, and make every handler idempotent.',
                    ],
                ],
                [
                    't' => 'h',
                    'c' => 'Validating on the server',
                ],
                [
                    't' => 'code',
                    'c' => '$response = Http::get($validatorUrl, [
    \'val_id\'       => $request->val_id,
    \'store_id\'     => config(\'services.sslcommerz.store_id\'),
    \'store_passwd\' => config(\'services.sslcommerz.store_password\'),
    \'format\'       => \'json\',
])->json();

$valid = in_array($response[\'status\'] ?? \'\', [\'VALID\', \'VALIDATED\'])
    && $response[\'tran_id\'] === $order->tran_id
    && (float) $response[\'amount\'] === (float) $order->amount;

if ($valid && $order->status === \'pending\') {
    $order->update([\'status\' => \'paid\']);
}',
                ],
                [
                    't' => 'h',
                    'c' => 'Small habits that save you later',
                ],
                [
                    't' => 'ul',
                    'c' => [
                        'Keep store credentials in .env and read them through config files.',
                        'Use the sandbox URLs while testing and switch to live only at launch.',
                        'Log every callback payload so disputes are easy to investigate.',
                        'Test success, failure, cancellation and a double callback before going live.',
                    ],
                ],
                [
                    't' => 'p',
                    'c' => 'The same verify-then-update approach works for Stripe, PayPal and bKash: trust your own server-side check, not the browser.',
                ],
            ],
        ],
        [
            'slug' => 'third-party-apis-laravel',
            'title' => 'Integrating third-party APIs without the pain',
            'kind' => 'Guide',
            'date' => 'Oct 2026',
            'read' => '4 min',
            'image' => 'apis.jpg',
            'excerpt' => 'Timeouts, retries and caching: three small decisions that make external API integrations dependable.',
            'body' => [
                [
                    't' => 'p',
                    'c' => 'External APIs such as country lists or airline data are outside your control. They can be slow, rate limited or briefly unavailable, so your application should be built to cope.',
                ],
                [
                    't' => 'h',
                    'c' => 'Wrap, time out, retry, cache',
                ],
                [
                    't' => 'code',
                    'c' => '$countries = Cache::remember(\'countries\', now()->addDay(), function () {
    return Http::timeout(8)
        ->retry(2, 200)
        ->get(config(\'services.countries.url\'))
        ->throw()
        ->json();
});',
                ],
                [
                    't' => 'ul',
                    'c' => [
                        'Always set a timeout so a slow API cannot freeze your page.',
                        'Retry briefly for transient failures, but never retry non-idempotent writes blindly.',
                        'Cache data that rarely changes, such as country or airport lists.',
                        'Keep the API URL and keys in config, never hard-coded.',
                        'Map the response into your own structure so a provider change touches one place.',
                    ],
                ],
                [
                    't' => 'h',
                    'c' => 'Fail gracefully',
                ],
                [
                    't' => 'p',
                    'c' => 'Decide in advance what the user sees when the API is down: cached data, a friendly message, or a manual fallback. A calm error state is part of the feature.',
                ],
            ],
        ],
        [
            'slug' => 'case-study-consultancy-website',
            'title' => 'Case study: planning a study abroad consultancy site',
            'kind' => 'Case study',
            'date' => 'Sep 2026',
            'read' => '3 min',
            'image' => 'case-consultancy.jpg',
            'excerpt' => 'How I approach a consultancy website like Euro Link: structure the journey first, then design and build.',
            'body' => [
                [
                    't' => 'p',
                    'c' => 'Websites for study abroad and visa consultancies serve nervous, research-heavy visitors. They want clear answers about admissions, scholarships, loans and visas, and an easy way to talk to a human.',
                ],
                [
                    't' => 'h',
                    'c' => 'Start with the visitor journey',
                ],
                [
                    't' => 'ul',
                    'c' => [
                        'Which destination and which course?',
                        'Can I afford it, and what scholarships or loans exist?',
                        'What does the visa process involve?',
                        'How do I contact someone today?',
                    ],
                ],
                [
                    't' => 'h',
                    'c' => 'Build for trust and speed',
                ],
                [
                    't' => 'p',
                    'c' => 'Each question gets its own clear section, calls to action stay visible, and pages are lightweight so they load quickly on mobile networks. Inquiry forms stay short because every extra field costs enquiries.',
                ],
                [
                    't' => 'h',
                    'c' => 'Launch properly',
                ],
                [
                    't' => 'p',
                    'c' => 'Before launch I test every form, link and breakpoint, configure hosting and the database, and walk the client through updating content themselves.',
                ],
            ],
        ],
        [
            'slug' => 'launch-checklist-end-to-end-testing',
            'title' => 'Launch checklist: end-to-end testing a web project',
            'kind' => 'Checklist',
            'date' => 'Aug 2026',
            'read' => '3 min',
            'image' => 'checklist.jpg',
            'excerpt' => 'The checks I run on every project before the client sees it, from forms and payments to hosting.',
            'body' => [
                [
                    't' => 'p',
                    'c' => 'Most launch-day surprises come from things nobody clicked. I walk through a project the way a real user would, then the way a careless one would.',
                ],
                [
                    't' => 'h',
                    'c' => 'Functionality',
                ],
                [
                    't' => 'ul',
                    'c' => [
                        'Every form submits, validates and delivers email.',
                        'Every menu link, button and redirect goes where it should.',
                        'Search, filters and pagination behave with empty and large results.',
                    ],
                ],
                [
                    't' => 'h',
                    'c' => 'Payments and data',
                ],
                [
                    't' => 'ul',
                    'c' => [
                        'Successful, failed and cancelled payments update orders correctly.',
                        'Database backups exist and a restore has been tried.',
                        'Environment keys are set for production, not sandbox.',
                    ],
                ],
                [
                    't' => 'h',
                    'c' => 'Devices and hosting',
                ],
                [
                    't' => 'ul',
                    'c' => [
                        'Check phone, tablet and desktop widths.',
                        'Confirm domain, SSL, redirects and cPanel settings.',
                        'Check image sizes and page speed on a slow connection.',
                    ],
                ],
                [
                    't' => 'p',
                    'c' => 'Finish by keeping a short log of what was tested. It becomes the handover note for the client.',
                ],
            ],
        ],
    ];
}
