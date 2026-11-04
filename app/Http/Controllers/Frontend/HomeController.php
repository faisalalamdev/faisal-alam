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
}
