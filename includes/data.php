<?php
/**
 * Static content for the homepage (later this can come from a DB / CMS).
 */

$site = [
    'name'      => 'Intelliworkz',
    'copyright' => 'Copyright © 2026 Intelliworkz Business Solutions Pvt. Ltd. All Rights Reserved.',
];

/* Sub-nav: label => dropdown links (label => url). Replace '#' with real pages later. */
$sub_nav = [
    'Branding & Creative' => ['Brand Development' => '#', 'Creative Design' => '#', 'Graphic Design' => '#', 'UI/UX Design' => '#', 'Video & Animation' => 'video-editing.php', '3D Visualization' => '#'],
    'Digital Marketing'   => ['SEO' => '#', 'Social Media Marketing' => '#', 'Content Marketing' => '#', 'Performance Marketing' => '#', 'Digital Marketing' => '#'],
    'Print & Publication' => ['InDesign Services' => '#', 'DTP' => '#', 'Pre-Press' => '#', 'Magazine Design' => 'magazine-design.php', 'Newsletter Design' => '#', 'Scientific Journal' => '#', 'Product Catalogue Design' => '#'],
    'Post-Production'     => ['Image Editing' => '#', 'Video Editing' => 'video-editing.php', 'Motion Graphics' => '#'],
    'Technology'          => ['Website Design & Development' => '#', 'Mobile App Development' => '#', 'Custom Software Development' => '#', 'CRM & ERP Development' => '#', 'API & System Integration' => '#', 'Portal Development' => '#', 'eCommerce Development' => '#', 'Maintenance & Support' => '#'],
    'Animation'           => ['2D Animation' => '#', '3D Animation' => '#', '3D Modeling and Rendering' => '3d-modeling-rendering.php', 'Explainer Videos' => '#'],
    'Engineering Services'=> ['ERP & Custom Software Development' => '#', 'Mobile Application Development' => '#', 'Web Development' => '#', 'Application Maintenance & Support' => '#'],
    'Hire Talent'         => ['FTE / Retainership Model' => '#', 'GCC Model' => '#', 'Transaction Model' => '#', 'One-time / Milestone-based' => '#'],
];

$metrics = [
    ['icon' => 'icon-send.svg',      'value' => '2500', 'label' => 'Projects Delivered'],
    ['icon' => 'icon-globe.svg',     'value' => '7',    'label' => 'Countries Global Presence'],
    ['icon' => 'icon-briefcase.svg', 'value' => '30',   'label' => 'Industries Served'],
    ['icon' => 'icon-clock.svg',     'value' => '18',   'label' => 'Years of Experience'],
    ['icon' => 'icon-users.svg',     'value' => '1200', 'label' => 'Global Clients'],
];

$domains = [
    [
        'title' => 'Brand & Creative', 'color' => 'var(--c-blue)',
        'intro' => 'From defining how your brand looks and communicates to creating the visual and digital assets that represent it, our creative teams work across the brand lifecycle.',
        'items' => ['Brand Development', 'Creative Design', 'Graphic Design', 'UI/UX Design', 'Video & Animation', '3D Visualization'],
        'cta'   => 'Explore Brand & Creative Services',
    ],
    [
        'title' => 'Digital Marketing', 'color' => 'var(--c-orange)',
        'intro' => 'We help businesses build visibility, reach the right audiences, and create a consistent digital presence through strategy and ongoing execution.',
        'items' => ['SEO', 'Social Media Marketing', 'Content Marketing', 'Performance Marketing', 'Digital Marketing'],
        'cta'   => 'Explore Digital Marketing Services',
    ],
    [
        'title' => 'Technology', 'color' => 'var(--c-charcoal)',
        'intro' => 'From websites and mobile applications to business software and integrated platforms, we build technology around the way your business works.',
        'items' => ['Website Design & Development', 'Mobile App Development', 'Custom Software Development', 'CRM & ERP Development', 'API & System Integration', 'Portal Development', 'eCommerce Development', 'Maintenance & Support'],
        'cta'   => 'Explore Technology Services',
    ],
    [
        'title' => 'Publishing & Production', 'color' => 'var(--c-olive)',
        'intro' => 'We support businesses that need structured, accurate, and production-ready content across publishing and document workflows.',
        'items' => ['InDesign Services', 'DTP', 'Pre-Press', 'Magazine Design', 'Newsletter Design', 'Scientific Journal', 'Product Catalogue Design'],
        'cta'   => 'Explore Publishing & Production Services',
    ],
];

$outsourcing_steps = [
    ['img' => 'step-1.svg', 'title' => 'Define the Need',          'text' => 'Project, capability or team requirement defined upfront.'],
    ['img' => 'step-2.svg', 'title' => 'Match the Expertise',      'text' => 'We align the right creative or technical resources.'],
    ['img' => 'step-3.svg', 'title' => 'Integrate With Your Team', 'text' => 'Our specialists fit into your tools and processes.'],
    ['img' => 'step-4.svg', 'title' => 'Scale When Required',      'text' => 'Increase or reduce capacity as requirements change.'],
];

$outsourcing_cards = [
    [
        'no' => '01', 'title' => 'Creative Service Outsourcing', 'class' => 'is-creative',
        'lead' => 'Extend your creative capacity with professionals working across:',
        'items' => ['Brand Development', 'Creative Design', 'Graphic Design', 'UI/UX Design', 'Video & Animation', '3D Visualization'],
        'img' => 'outsource-creative.png',
    ],
    [
        'no' => '02', 'title' => 'Engineering & IT Outsourcing', 'class' => 'is-tech',
        'lead' => 'Bring in specialized technology resources for:',
        'items' => ['ERP & Custom Software Development', 'Mobile Application Development', 'Web Development', 'eCommerce Development', 'API & System Integration', 'Portal Development', 'Application Maintenance & Support'],
        'img' => 'outsource-tech.png',
    ],
    [
        'no' => '03', 'title' => 'Digital Marketing Outsourcing', 'class' => 'is-marketing',
        'lead' => 'Extend your marketing team with resources across:',
        'items' => ['SEO', 'Social Media', 'Content', 'Performance Marketing', 'Digital Marketing'],
        'img' => 'outsource-marketing.png',
    ],
    [
        'no' => '04', 'title' => 'Dedicated Teams', 'class' => 'is-dedicated',
        'text' => 'Build a team around your specific requirements with dedicated resources, project management, and the flexibility to scale as your workload changes. The team can work alongside your existing employees, follow your processes, and collaborate within your preferred working structure.',
        'img' => 'outsource-dedicated.png',
    ],
];

/* Shown on card hover (same copy as the Figma Healthcare card) – override per card with a 'text' key */
$industry_text = 'Our teams bring domain expertise into the projects they work on, adapting the approach to the audience, processes, technology environment, and objectives involved.';

$industries = [
    ['title' => 'B2B Services',             'img' => null,                     'font' => 'alt'],
    ['title' => 'Manufacturing',            'img' => 'ind-manufacturing.png'],
    ['title' => 'Industrial & Engineering', 'img' => 'ind-industrial.png'],
    ['title' => 'Retail & eCommerce',       'img' => 'ind-retail.png'],
    ['title' => 'Healthcare',               'img' => 'ind-healthcare.png'],
    ['title' => 'Education',                'img' => 'ind-education.png'],
    ['title' => 'Real Estate',              'img' => 'ind-realestate.png'],
    ['title' => 'Logistics & Distribution', 'img' => 'ind-logistics.png'],
    ['title' => 'Startups & SaaS',          'img' => null,                     'font' => 'alt'],
];

$reasons = [
    ['100% In-House',        'Our work is handled by our own team. We do not further outsource or engage freelance teams to execute client requirements.'],
    ['Domain Expertise',     'Our teams bring specialized knowledge across creative, digital, technology, publishing, and business applications, allowing requirements to be understood.'],
    ['Multiple Capabilities','Brand, creative, digital, technology, and outsourcing capabilities work together seamlessly under one roof.'],
    ['One Partner',          'You can bring different requirements to the same team instead of coordinating multiple vendors for connected work.'],
    ['Built to Scale',       'Your requirement can start with one project or a small team. As the workload grows, the engagement can grow with it.'],
    ['Consistent Delivery',  'Dedicated resources, project management, and established processes help maintain consistency across ongoing engagements.'],
];

/* Products tabs. DataNote = Figma copy. Formezy / Docezy copy + images are PLACEHOLDERS (not in the Figma frame) – replace. */
$products_data = [
    [
        'name' => 'DataNote', 'tag' => 'ERP, CRM & POS in One Business Platform',
        'text' => 'DataNote brings core business functions together through ERP, CRM, and POS capabilities. It supports areas including inventory, sales, customer engagement, production, procurement, logistics, HR, and administration, helping businesses connect information and manage operations more effectively.',
        'features' => [
            ['ERP Framework', 'Connects inventory, production, procurement, logistics, HR and administration so operations run from one system.'],
            ['CRM Framework', 'Keeps sales and customer engagement together, so every conversation and follow-up lives in one place.'],
            ['POS', 'Handles point-of-sale alongside the rest of your business data, so sales feed straight into inventory and reporting.'],
            ['Mobile Apps', 'Access key business information and tasks from your mobile device, wherever your team works.'],
        ],
        'img' => 'datanote-2df198.png',
    ],
    [
        'name' => 'Formezy', 'tag' => 'Smart Online Form Builder',
        'text' => 'Formezy helps businesses create, publish, and manage online forms without writing code. Collect responses, route submissions to the right teams, and keep every enquiry, registration, and feedback in one place.',
        'features' => [
            ['Drag & Drop Builder', 'Build and publish online forms visually, with no code required.'],
            ['Response Tracking', 'Every enquiry, registration and feedback response is collected and tracked in one place.'],
            ['Workflow Rules', 'Route submissions to the right teams automatically as they come in.'],
            ['Integrations', 'Connect Formezy with the tools your teams already use, so responses flow where they are needed.'],
        ],
        'img' => 'datanote-2df198.png',
    ],
    [
        'name' => 'Docezy', 'tag' => 'Document Management Made Simple',
        'text' => 'Docezy brings your documents into one secure workspace. Store, organise, share, and track files with version control and role-based access, so teams always work on the latest version.',
        'features' => [
            ['Secure Storage', 'Keep all your documents together in one secure workspace.'],
            ['Version Control', 'Track every change so teams always work on the latest version.'],
            ['Access Roles', 'Control who can view, edit or share each file with role-based access.'],
            ['Smart Search', 'Find the file you need quickly across everything you have stored.'],
        ],
        'img' => 'datanote-2df198.png',
    ],
];

$process_row_1 = [
    ['no' => '01', 'color' => 'var(--c-pink)',   'tint' => '#FAEBEB', 'icon' => 'card-search.svg',    'title' => 'Understand', 'img' => 'process-1.png', 'fade' => 'linear-gradient(-90deg, rgba(255,255,255,0) 41%, #fff 100%)', 'text' => 'We look at your requirement, business objective, audience, existing systems, and expected outcome.'],
    ['no' => '02', 'color' => 'var(--c-yellow)', 'tint' => '#FCF7E0', 'icon' => 'card-clipboard.svg', 'title' => 'Plan',       'img' => 'process-2.png', 'fade' => 'linear-gradient(-90deg, rgba(255,255,255,0) 30%, #fff 50%)', 'text' => 'We determine the right approach, capabilities, resources, technology, and delivery structure.'],
    ['no' => '03', 'color' => 'var(--c-green)',  'tint' => '#E5F7F0', 'icon' => 'card-users.svg',     'title' => 'Assign',     'img' => 'process-3.png', 'fade' => 'linear-gradient(270deg, rgba(255,255,255,0) 30%, #fff 63%)', 'text' => 'The right in-house specialists are brought into the engagement based on the work involved.'],
];
$process_row_2 = [
    ['no' => '06', 'color' => 'var(--c-teal)',   'tint' => '#EDF5F7', 'icon' => 'card-chart.svg', 'title' => 'Scale',   'img' => 'process-4.png', 'fade' => 'linear-gradient(-90deg, rgba(255,255,255,0) 39%, #fff 65%)', 'text' => 'If your requirements grow, the team or scope can grow with them through an engagement model suited to your needs.'],
    ['no' => '05', 'color' => 'var(--c-violet)', 'tint' => '#F2E8FA', 'icon' => 'card-check.svg', 'title' => 'Review',  'img' => 'process-3.png', 'fade' => 'linear-gradient(-90deg, rgba(255,255,255,0) 41%, #fff 100%)', 'text' => 'Work is reviewed, feedback is incorporated, and the solution is refined before completion.'],
    ['no' => '04', 'color' => 'var(--c-gold)',   'tint' => '#FAF7EF', 'icon' => 'card-code.svg',  'title' => 'Execute', 'img' => 'process-6.png', 'fade' => 'linear-gradient(-90deg, rgba(255,255,255,0) 34%, #fff 67%)', 'text' => 'The team works on the agreed scope while maintaining communication, quality, and delivery commitments.'],
];

$showcase_cards = [
    ['img' => 'showcase-1-f932ad.png', 'tag' => 'Lifestyle & Travel', 'tag_color' => 'var(--c-purple)', 'filled' => true], // Figma: only card 1 has the red-filled button
    ['img' => 'showcase-2.png',        'tag' => 'Lifestyle & Travel', 'tag_color' => 'var(--c-purple)'],
    ['img' => 'showcase-3.png',        'tag' => 'Lifestyle & Travel', 'tag_color' => 'var(--c-teal)'],
    ['img' => 'showcase-1-f932ad.png', 'tag' => 'Lifestyle & Travel', 'tag_color' => 'var(--c-purple)'], // 4th slide (Figma has 4 dots but 3 cards) – replace with real content
];

$engagement_models = [
    [
        'no' => '01', 'title' => 'FTE / <br>Retainership Model', 'tag' => 'Fixed <br>monthly Cost',
        'color' => '#6565FE', 'num_color' => '#716AFD', 'img' => 'model-1-64ffad.png', 'panel' => 'is-image', 'height' => 'tall',
        'bullets' => [
            'Skilled resources are identified and assigned to work on your specific account.',
            'The resource works exclusively on your account for 40 hours every week, in the preferred shift timing of our client.',
            'Resources can be managed directly by you.',
            'A dedicated project manager is assigned as your point of contact.',
            "If you are not happy with a resource's performance, we provide a replacement at no extra cost.",
            'You pay a fixed monthly cost for the number of resources you engage.',
            'You can scale up or scale down with a written notice of 30 to 45 days, depending on the number of resources.',
        ],
    ],
    [
        'no' => '02', 'title' => 'GCC Model', 'tag' => '30% Advance',
        'color' => '#E85260', 'num_color' => '#F15B65', 'img' => 'model-2-466154.png', 'panel' => 'is-radial', 'height' => 'tall', 'img_class' => 'is-wide',
        'bullets' => [
            'This model lets you set up your own offshore team through a Build, Operate, Deliver (BOT) approach.',
            'You get the advantage of a dedicated offshore team without handling the setup yourself.',
            'We take care of compliance, infrastructure, and hiring on your behalf.',
            'We also manage the overall day-to-day running of the team, so it stays smooth and hands-off for you.',
        ],
    ],
    [
        'no' => '03', 'title' => 'Transaction <br>Model', 'tag' => 'Pay on Invoice',
        'color' => '#C8B083', 'num_color' => '#CEA16D', 'img' => 'model-3.png', 'panel' => 'is-radial', 'height' => 'short',
        'bullets' => [
            'This model fits you well if you do not have consistent orders or tasks to assign.',
            'The cost per unit of delivery is defined after we complete a proof of concept, on a paid or free trial.',
            'We send you a report of the orders delivered in a given month, and you pay on receipt of the invoice.',
            'The job is carried out by competent resources to ensure consistent delivery every time.',
        ],
    ],
    [
        'no' => '04', 'title' => 'One-time / <br>Milestone-based', 'tag' => 'Hands-off Setup',
        'color' => '#7CAF9E', 'num_color' => '#63B59D', 'img' => 'model-4.png', 'panel' => 'is-radial', 'height' => 'short', 'img_class' => 'is-wide',
        'bullets' => [
            'This model suits you best when you have a large backlog to complete.',
            'We share the cost per unit of delivery and the timeline to complete the order after we perform a proof of concept on a paid or free trial.',
            'You pay an advance, normally 30% of the project cost, with the balance released as per the mutually agreed milestones.',
        ],
    ],
];

$blog_posts = [
    ['img' => 'blog-1.png', 'date' => 'May 2026', 'title' => 'How AI Workflows Are Reshaping Global Brand Operations in 2025'],
    ['img' => 'blog-2.png', 'date' => 'May 2026', 'title' => 'How AI Workflows Are Reshaping Global Brand Operations in 2025'],
    ['img' => 'blog-3.png', 'date' => 'May 2026', 'title' => 'How AI Workflows Are Reshaping Global Brand Operations in 2025'],
];

$footer_cols = [
    'industries' => ['Industries', ['Manufacturing', 'Industrial & Engineering', 'B2B Services', 'Retail & eCommerce', 'Healthcare', 'Education', 'Real Estate', 'Logistics & Distribution', 'Startups & SaaS']],
    'products'   => ['Products',   ['DataNote', 'Formezy', 'Docezy']],
    'company'    => ['Company',    ['About Us', 'Why Intelliworkz', 'Our Process', 'Careers', 'Contact Us']],
    'services'   => ['Services',   ['Branding & Creative', 'Digital Marketing', 'Print & Publication', 'Post-Production', 'Technology', 'Animation', 'Engineering Services', 'Hire Talent']],
    'insights'   => ['Insights',   ['Blog', 'Guides', 'Case Studies', 'News & Updates', 'Resources']],
    'policies'   => ['Company Policies', ['Privacy Policy', 'Terms of Use', 'Cookies']],
];

$offices = [
    ['flag' => 'flag-india.svg', 'map' => 'map-india.png',         'map_opacity' => '.4', 'name' => 'India', 'address' => 'Block-B, B912-A, World Trade Tower, Nr. BMW Showroom, SG Highway, Ahmedabad - 380051 Gujarat - India.', 'phone' => '+91 92740 02997 , +91 92740 02997'],
    ['flag' => 'flag-usa.svg',   'map' => 'map-usa-35ebcb.png',    'map_opacity' => '.4', 'name' => 'USA',   'address' => '5511, Mercier Street,<br>Lewis Center, <br>Ohio 43035', 'phone' => '+1 614 999 2286'],
    ['flag' => 'flag-dubai.svg', 'map' => 'map-dubai.png',         'map_opacity' => '.5', 'name' => 'Dubai', 'address' => 'Office No. 25, 13th Floor, Al Saqar Business Tower, Nr. Future Museum, Sheikh Zayed Road, Dubai, UAE.', 'phone' => '+971 56 343 5362'],
];
