<?php
/**
 * Content for the About Us page.
 * Copy follows the approved About-page structure (11 sections). Only layout data lives here; styling is in assets/css/about.css.
 */

/* Point on a circle (SVG diagrams are generated from the capability list, so adding a discipline redraws the map). */
function ab_pt(float $cx, float $cy, float $r, float $deg): array {
    $a = deg2rad($deg);
    return [round($cx + $r * cos($a), 1), round($cy + $r * sin($a), 1)];
}

/* Hero: headline metrics (same figures as the homepage metrics row) */
$ab_metrics = [
    ['value' => '18',   'suffix' => '+', 'label' => 'Years of Experience'],
    ['value' => '1200', 'suffix' => '+', 'label' => 'Global Clients'],
    ['value' => '2500', 'suffix' => '+', 'label' => 'Projects Delivered'],
    ['value' => '7',    'suffix' => '',  'label' => 'Countries Global Presence'],
];

/* The six primary service areas. Used by hero ticker, chain, capability map and the capabilities slider.
   img = shared service artwork (assets/images/<dir>/services.png); null = drawn inline (Technology). */
$ab_caps = [
    ['no' => '01', 'name' => 'Brand',        'c' => 'var(--c-blue)',   'img' => 'collaterals/services.png', 'alt' => 'Brand and corporate collateral system',
     'text' => 'Brand strategy, logo design, visual identity and brand guidelines.',
     'items' => ['Brand strategy', 'Logo design', 'Visual identity', 'Brand guidelines']],
    ['no' => '02', 'name' => 'Creative',     'c' => 'var(--c-orange)', 'img' => 'packaging/services.png',   'alt' => 'Packaging and creative design work',
     'text' => 'Packaging, outdoor communication, presentations, marketing collateral and corporate branding.',
     'items' => ['Packaging', 'Outdoor communication', 'Presentations', 'Marketing collateral', 'Corporate branding']],
    ['no' => '03', 'name' => 'Digital',      'c' => 'var(--c-green)',  'img' => 'seo/services.png',         'alt' => 'SEO and digital marketing dashboard',
     'text' => 'SEO, lead generation, digital campaigns, social media content and email marketing.',
     'items' => ['SEO', 'Lead generation', 'Digital campaigns', 'Social media content', 'Email marketing']],
    ['no' => '04', 'name' => 'Technology',   'c' => 'var(--c-purple)', 'img' => null,                       'alt' => '',
     'text' => 'Websites, custom software, portals, eCommerce platforms and mobile applications.',
     'items' => ['Websites', 'Custom software', 'Portals', 'eCommerce platforms', 'Mobile applications']],
    ['no' => '05', 'name' => 'Motion',       'c' => 'var(--c-pink)',   'img' => 'video/services.png',       'alt' => 'Video editing and motion graphics workflow',
     'text' => 'Explainer videos, motion graphics, product demonstrations, software demos and corporate films.',
     'items' => ['Explainer videos', 'Motion graphics', 'Product demonstrations', 'Software demos', 'Corporate films']],
    ['no' => '06', 'name' => 'Experiential', 'c' => 'var(--c-yellow)', 'img' => '3d/services.png',          'alt' => '3D, AR and VR visualisation',
     'text' => 'UI/UX, AR, VR and mixed reality experiences.',
     'items' => ['UI/UX', 'AR', 'VR', 'Mixed reality']],
];

/* Section 03: the four disciplines in one line each (word is highlighted) */
$ab_diff_lines = [
    ['Technology', 'can solve problems.'],
    ['Creativity', 'can create connections.'],
    ['Digital',    'can create visibility.'],
    ['Strategy',   'can provide direction.'],
];

/* Section 04: how we think. word + short descriptor, drawn as one typographic rail */
$ab_think = [
    ['BUSINESS',    'Model, audience and existing ecosystem'],
    ['UNDERSTAND',  'Challenges, customers, processes and goals'],
    ['DEFINE',      'A direction built around the organisation'],
    ['COLLABORATE', 'Creative, digital and technology teams together'],
    ['BUILD',       'Planning, design, development and testing'],
    ['IMPROVE',     'Implementation, feedback and refinement'],
];

/* Section 05: values */
$ab_values = [
    ['no' => '01', 'icon' => '<circle cx="9" cy="8" r="4"/><path d="M2 21c0-4 3-7 7-7s7 3 7 7"/><path d="M16 11l2 2 4-4"/>', 'tag' => 'Client First',          'title' => 'Your Business Comes First',                 'text' => 'We start by understanding your objectives, challenges, customers and expectations, then build solutions around what genuinely matters to the business.'],
    ['no' => '02', 'icon' => '<path d="M22 7l-8.5 8.5-5-5L2 17"/><path d="M16 7h6v6"/>', 'tag' => 'Result Driven',         'title' => 'Ideas Matter. Outcomes Matter More.',       'text' => 'We focus on work that serves a business purpose — improving experiences, strengthening brands, streamlining operations or creating new opportunities.'],
    ['no' => '03', 'icon' => '<path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M8.5 12l2.5 2.5L16 9.5"/>', 'tag' => 'Accountability',        'title' => 'Built on Transparency and Ownership',       'text' => 'We communicate openly, take responsibility for our work and remain accountable throughout the engagement.'],
    ['no' => '04', 'icon' => '<path d="M9 18h6"/><path d="M10 21h4"/><path d="M12 3a6 6 0 0 0-4 10.5c.7.7 1 1.5 1 2.5h6c0-1 .3-1.8 1-2.5A6 6 0 0 0 12 3z"/>', 'tag' => 'Continuously Curious',  'title' => 'Curious Minds. Diverse Skills. Shared Commitment.', 'text' => 'Our teams continue learning, exploring new technologies and adapting to changing digital behaviour.'],
];

/* Section 07: how we work */
$ab_steps = [
    ['no' => '01', 'title' => 'Understand', 'text' => 'We learn about your business, audience, objectives, challenges and existing ecosystem.'],
    ['no' => '02', 'title' => 'Define',     'text' => 'We identify priorities, requirements and opportunities and establish a clear direction.'],
    ['no' => '03', 'title' => 'Create',     'text' => 'Our creative, digital and technology teams collaborate to develop the solution.'],
    ['no' => '04', 'title' => 'Execute',    'text' => 'We move from concepts into production through structured development, implementation and testing.'],
    ['no' => '05', 'title' => 'Review',     'text' => 'We evaluate the outcome, gather feedback and refine where required.'],
    ['no' => '06', 'title' => 'Grow',       'text' => 'We continue supporting, improving and scaling the solution as the business evolves.'],
];

/* Section 08: team collage. Tiles reuse existing work imagery (swap for real team photography when available). */
$ab_team_tiles = [
    ['img' => 'video/pf-base-19393f.png',         'label' => 'Motion',          'cls' => 'is-a'],
    ['img' => 'magazine/ex-mockup.png',           'label' => 'Print & Brand',   'cls' => 'is-b'],
    ['img' => 'seo/portfolio-main.png',           'label' => 'Digital & UI',    'cls' => 'is-c'],
    ['img' => 'packaging/tile-a.png',             'label' => 'Packaging',       'cls' => 'is-d'],
    ['img' => 'manufacture/collage.png',          'label' => 'Technology',      'cls' => 'is-e'],
];
$ab_team_tags = ['Young & passionate', 'Multidisciplinary', 'Continuously learning'];

/* Section 09: group companies */
$ab_eco = [
    ['name' => 'Safal Infosoft',        'cat' => 'Enterprise Technology',                   'tags' => ['ERP', 'CRM', 'DMS', 'POS', 'Agile Development', 'Mobile Applications']],
    ['name' => 'Ideaz Ventures India',  'cat' => 'Business & Startup Consulting',           'tags' => ['Startup Strategy', 'Technology Implementation', 'Financial Management']],
    ['name' => 'Intel-iot Automation',  'cat' => 'Industrial Automation & Smart Technology', 'tags' => ['Factory Automation', 'Robotics', 'Machine Learning', 'Energy Monitoring', 'Industry 4.0']],
];

/* Section 10: why clients stay */
$ab_stay = [
    ['icon' => '<path d="M10 13a5 5 0 0 0 7 0l3-3a5 5 0 0 0-7-7l-1 1"/><path d="M14 11a5 5 0 0 0-7 0l-3 3a5 5 0 0 0 7 7l1-1"/>', 'title' => 'One Connected Team',    'text' => 'Work across multiple capabilities without managing disconnected vendors.'],
    ['icon' => '<circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/>', 'title' => 'Business Understanding', 'text' => 'We take time to understand the business behind the requirement.'],
    ['icon' => '<path d="M21 2v6h-6"/><path d="M3 12a9 9 0 0 1 15-6.7L21 8"/><path d="M3 22v-6h6"/><path d="M21 12a9 9 0 0 1-15 6.7L3 16"/>', 'title' => 'Long-Term Support',     'text' => 'Continue improving, supporting and scaling after initial delivery.'],
    ['icon' => '<path d="M12 2l10 5-10 5L2 7z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>', 'title' => 'Adaptable Expertise',   'text' => 'Bring in the right capabilities as business requirements evolve.'],
];
