/* ==========================================================================
   PROJECTS DATA — add all your 38+ websites here.
   Copy one object, change the fields, and every page updates automatically
   (home, projects list, project detail page, filters, counts).

   slug      unique, lowercase, no spaces (used in project.html?slug=...)
   category  'Laravel' | 'WordPress' | any new name you like (filter buttons are auto-created)
   image     tall full-page screenshot (e.g. assets/images/projects/name.jpg) – it scrolls on hover
   featured  true = shown on the Home page (keep ~4)
   ========================================================================== */
window.PROJECTS = [
  {
    slug: 'hongkong-nextgen', title: 'Hongkong Nextgen', category: 'Laravel', industry: 'B2B / Electronics',
    url: 'https://hknextgenint.com', image: 'assets/images/projects/hknextgen.jpg', featured: true,
    summary: 'B2B corporate website for a global supplier of semiconductors, electronic components, IT products and testing equipment.',
    description: 'A corporate B2B website for a global supplier of semiconductors, electronic components, IT products and testing equipment. The site presents product sourcing information clearly and gives business customers a simple way to send inquiries.',
    features: ['Product sourcing information', 'Business inquiry support', 'Corporate B2B layout', 'Fully responsive interface'],
    stack: ['PHP', 'Laravel MVC', 'MySQL', 'Responsive UI'], role: 'Development & deployment'
  },
  {
    slug: 'euro-link', title: 'Euro Link', category: 'Laravel', industry: 'Education Consultancy',
    url: 'https://eurolinkbd.com', image: 'assets/images/projects/eurolink.jpg', featured: true,
    summary: 'Study abroad consultancy website covering university admissions, scholarships, study loans and student visa guidance.',
    description: 'A study abroad consultancy website that presents university admissions, scholarships, study loans and student visa guidance in one clear place for prospective students and their families.',
    features: ['University admission information', 'Scholarship & study loan pages', 'Student visa guidance', 'Fully responsive interface'],
    stack: ['PHP', 'Laravel MVC', 'MySQL', 'Responsive UI'], role: 'Development & deployment'
  },
  {
    slug: 'finact-advisory-training', title: 'Finact Advisory Training', category: 'Laravel', industry: 'Finance & Training',
    url: 'https://finactadvisory.com', image: 'assets/images/projects/finact.jpg', featured: false,
    summary: 'Corporate website showcasing accounting, auditing, financial advisory and professional training services.',
    description: 'A corporate website for a firm offering accounting, auditing, financial advisory and professional training services, designed to build trust and present each service clearly.',
    features: ['Service showcase pages', 'Professional training information', 'Corporate look and feel', 'Fully responsive interface'],
    stack: ['PHP', 'Laravel MVC', 'MySQL', 'Responsive UI'], role: 'Development & deployment'
  },
  {
    slug: 'trip-travello', title: 'Trip Travello', category: 'Laravel', industry: 'Travel & Visa',
    url: 'https://triptravello.com', image: 'assets/images/projects/triptravello.jpg', featured: true,
    summary: 'Travel services website with flight and hotel booking assistance plus student, tourist, medical and work permit visa services.',
    description: 'A travel services website presenting flight and hotel booking assistance alongside student, tourist, medical and work permit visa services.',
    features: ['Flight & hotel booking assistance', 'Visa services (student, tourist, medical, work permit)', 'Travel service showcase', 'Fully responsive interface'],
    stack: ['PHP', 'Laravel MVC', 'MySQL', 'Responsive UI'], role: 'Development & deployment'
  },
  {
    slug: 'nebula-web-service', title: 'Nebula Web Service', category: 'WordPress', industry: 'IT Services',
    url: 'https://web.nebulaitbd.com', image: 'assets/images/projects/nebula-web.jpg', featured: true,
    summary: 'Responsive IT services website showcasing web development, digital marketing, IT consulting and technology solutions.',
    description: 'A responsive WordPress website for an IT services company, showcasing web development, digital marketing, IT consulting and technology solutions.',
    features: ['Service showcase', 'Responsive layouts', 'Easy content management', 'Theme & plugin customization'],
    stack: ['WordPress', 'Elementor', 'Responsive UI'], role: 'Development & deployment'
  },
  {
    slug: 'nebula-clipping-path', title: 'Nebula Clipping Path', category: 'WordPress', industry: 'Creative Services',
    url: 'https://nebulaclippingpath.com', image: 'assets/images/projects/nebula-clipping.jpg', featured: false,
    summary: 'WordPress website presenting photo editing, image retouching and clipping path services.',
    description: 'A WordPress website presenting photo editing, image retouching and clipping path services to international customers.',
    features: ['Service pages', 'Visual-first presentation', 'Easy content management', 'Fully responsive interface'],
    stack: ['WordPress', 'Elementor', 'Responsive UI'], role: 'Development & deployment'
  },
  {
    slug: 'azwajun-fashion', title: 'Azwajun Fashion', category: 'WordPress', industry: 'Fashion',
    url: 'https://azwajunfashion.com', image: 'assets/images/projects/azwajun.jpg', featured: false,
    summary: 'Fashion website showcasing clothing collections and product information with a responsive browsing experience.',
    description: 'A fashion website showcasing clothing collections and product information, built for a smooth browsing experience on every device.',
    features: ['Collection showcase', 'Product information pages', 'Responsive browsing experience', 'Easy content management'],
    stack: ['WordPress', 'Elementor', 'Responsive UI'], role: 'Development & deployment'
  },
  {
    slug: 'study-in-new-zealand', title: 'Study In New Zealand', category: 'WordPress', industry: 'Education Consultancy',
    url: 'https://studynewzealand.net', image: 'assets/images/projects/studynz.jpg', featured: false,
    summary: 'International education consultancy website presenting study opportunities and guidance for prospective students.',
    description: 'An international education consultancy website presenting study opportunities in New Zealand and practical guidance for prospective students.',
    features: ['Study opportunity pages', 'Student guidance content', 'Easy content management', 'Fully responsive interface'],
    stack: ['WordPress', 'Elementor', 'Responsive UI'], role: 'Development & deployment'
  }
];
