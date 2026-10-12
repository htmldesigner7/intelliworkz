<?php
/**
 * Content for the SEO Services page (Figma: IW / "SEO SERVICES").
 * Items marked "derived" are not written out in Figma and were built from copy that exists elsewhere on the page.
 */

$seo_benefits = ['Qualified Lead Generation', 'End-to-End SEO Management', 'Launch & Migration Support', 'Multi-Region SEO Campaigns'];

/* Portfolio filter tabs (Figma tab labels) and the 11-tile strip (index 5 = Figma's highlighted tile, badge "05").
   'cats' is derived (Figma doesn't tag the tiles) so each tab filters something. */
$seo_filters = ['all' => 'All', 'strategy' => 'SEO Strategy', 'leads' => 'Lead Generation', 'launches' => 'Website Launches', 'migrations' => 'Migrations', 'content' => 'Content SEO', 'multi' => 'Multi-Region'];
$seo_gallery = [
    ['img' => 'thumb-1.png',        'cats' => 'strategy'],
    ['img' => 'thumb-2.png',        'cats' => 'leads'],
    ['img' => 'thumb-3.png',        'cats' => 'launches'],
    ['img' => 'thumb-4.png',        'cats' => 'migrations'],
    ['img' => 'thumb-5.png',        'cats' => 'content'],
    ['img' => 'thumb-featured.png', 'cats' => 'strategy leads'],
    ['img' => 'thumb-6.png',        'cats' => 'multi'],
    ['img' => 'thumb-7.png',        'cats' => 'content'],
    ['img' => 'thumb-8.png',        'cats' => 'launches'],
    ['img' => 'thumb-9.png',        'cats' => 'migrations'],
    ['img' => 'thumb-10.png',       'cats' => 'multi'],
];

/* Metrics row: [icon, value, label] */
$seo_metrics = [
    ['m-globe.svg', '7',    'Countries Global Presence'],
    ['m-clock.svg', '18',   'Years of Experience'],
    ['m-users.svg', '1200', 'Global Clients'],
    ['m-award.svg', '120',  'Skilled Professional'],
];

/* Why Intelliworkz cards. c = accent, noa = alpha of the white number */
$seo_why = [
    ['c' => 'var(--c-teal)',     'no' => '01', 'noa' => .2,  'icon' => 'why-1.svg', 'title' => 'Technical SEO',                'text' => 'Site architecture and crawlability, Core Web Vitals and page speed, schema and structured data, indexation management, JavaScript SEO, and site-health monitoring.'],
    ['c' => 'var(--c-red)',      'no' => '02', 'noa' => .2,  'icon' => 'why-2.svg', 'title' => 'On-Page & Content SEO',        'text' => 'Keyword and intent mapping, on-page optimisation, internal linking structure, SEO content and copywriting, topical authority building, and content optimised for AI answer engines.'],
    ['c' => 'var(--c-charcoal)', 'no' => '03', 'noa' => .15, 'icon' => 'why-3.svg', 'title' => 'Off-Page SEO & Link Building', 'text' => 'Digital PR and editorial outreach, backlink strategy and vetting, brand-authority building, competitor link analysis, and local and international link acquisition.'],
    ['c' => 'var(--c-olive)',    'no' => '04', 'noa' => .2,  'icon' => 'why-4.svg', 'title' => 'B2B & International SEO',      'text' => 'Long, considered buying cycles where technical buyers research for weeks. Multi-language, multi-region rollouts with hreflang and market-specific content.'],
];

/* Tools strip: 3 columns x 3 rows. [image, name, tagline, image is a PNG in images/seo (else an SVG in icons/seo)] */
$seo_tools = [
    [['tool-gsc.png', 'Google Search Console', 'Monitor | Optimise'],   ['tool-gtm.png', 'Google Tag Manager', 'Manage | Track'],      ['tool-ahrefs.svg', 'Ahrefs', 'Backlinks | Research']],
    [['tool-gbp.png', 'Google Business Profile', 'Local | Visibility'], ['tool-bing.png', 'Bing Webmaster', 'Index | Monitor'],       ['tool-screamingfrog.png', 'Screaming Frog', 'Crawl | Audit']],
    [['tool-ga4.png', 'Google Analytics 4', 'Track | Analyse'],         ['tool-semrush.png', 'Semrush', 'Research | Analyse'],         ['tool-surfer.svg', 'Surfer', 'Content | Optimise']],
];

/* Services accordion. "Technical SEO" bullets are from Figma. Figma's other five rows still carry the Magazine page's
   titles (Layout and Editorial Design, ...), so these are derived from this page's own copy (why cards, tools, workflow). */
$seo_services = [
    ['title' => 'Technical SEO', 'open' => true,
     'points' => ['Site architecture and crawlability', 'Core Web Vitals and page speed', 'Schema and structured data', 'Indexation management', 'JavaScript SEO', 'Site-health monitoring']],
    ['title' => 'On-Page & Content SEO',
     'points' => ['Keyword and intent mapping', 'On-page optimisation', 'Internal linking structure', 'SEO content and copywriting', 'Topical authority building', 'Content optimised for AI answer engines']],
    ['title' => 'Off-Page SEO & Link Building',
     'points' => ['Digital PR and editorial outreach', 'Backlink strategy and vetting', 'Brand-authority building', 'Competitor link analysis', 'Local and international link acquisition']],
    ['title' => 'B2B & International SEO',
     'points' => ['Long, considered buying cycles', 'Multi-language, multi-region rollouts', 'Hreflang implementation', 'Market-specific content']],
    ['title' => 'Local SEO',
     'points' => ['Google Business Profile management', 'Local visibility and citations', 'Local link acquisition']],
    ['title' => 'SEO Reporting & Analytics',
     'points' => ['Transparent monthly reporting', 'Traffic, leads, and revenue tracking', 'Clear next steps']],
];

/* Workflow: 5 steps. art = [left, top, width, height] of the image inside the 300x300 white tile */
$seo_workflow = [
    ['no' => '01', 'color' => 'var(--c-yellow)', 'img' => 'step-1.png', 'art' => [-0.92, 0,     301.84, 300],    'title' => 'Discover',  'text' => 'Understand your business, market, competitors, target audience, and commercial objectives.'],
    ['no' => '02', 'color' => 'var(--c-pink)',   'img' => 'step-2.png', 'art' => [0,     31.19, 300,    237.61], 'title' => 'Audit',     'text' => 'Assess technical health, content gaps, backlink profile, and ranking opportunities in a clear, prioritised report.'],
    ['no' => '03', 'color' => 'var(--c-green)',  'img' => 'step-3.png', 'art' => [9.76,  23.52, 280.49, 252.96], 'title' => 'Strategy',  'text' => 'Build a keyword and content roadmap mapped to buyer intent and ranked by commercial impact.'],
    ['no' => '04', 'color' => 'var(--c-gold)',   'img' => 'step-4.png', 'art' => [9.44,  34.91, 281.13, 230.19], 'title' => 'Execution', 'text' => 'Implement technical fixes, on-page optimisation, content, and authority building against the roadmap.'],
    ['no' => '05', 'color' => 'var(--c-teal)',   'img' => 'step-5.png', 'art' => [1.29,  29.14, 297.43, 241.72], 'title' => 'Reporting', 'text' => 'Deliver transparent monthly reporting tied to traffic, leads, and revenue, with clear next steps.'],
];

/* What we offer. Cards 1-3 are Figma (images: images/seo); card 4 (so the 4 dots each have a slide) is a derived placeholder. */
$seo_offers = [
    ['no' => '01', 'noc' => '#D1C7E6', 'bg' => 'linear-gradient(-42deg, #EAE2F3 0%, #FBF8FF 100%)', 'title' => 'AEO Services', 'dir' => 'seo', 'img' => 'offer-1.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Make your content easier for AI assistants and answer engines to discover, understand and reference. Our AEO services focus on structured content, search intent and clear answers that improve visibility across AI-powered search experiences.'],
    ['no' => '02', 'noc' => '#EAD3C4', 'bg' => 'linear-gradient(-42deg, #FBE7DB 0%, #FFFDFD 100%)', 'title' => 'GEO Services', 'dir' => 'seo', 'img' => 'offer-2.png', 'x' => 45, 'y' => 265, 'w' => 486, 'h' => 372, 'arrow' => 'offer-arrow-2.svg',
     'text' => 'Build visibility across generative AI search platforms. Our GEO services improve how your brand, expertise and content are represented/'],
    ['no' => '03', 'noc' => '#A2DDDD', 'bg' => 'linear-gradient(-42deg, #C5E3E3 0%, #F0FAFB 100%)', 'title' => 'Lead Generation Campaigns', 'dir' => 'seo', 'img' => 'offer-3.png', 'x' => 34, 'y' => 265, 'w' => 505, 'h' => 343, 'arrow' => 'offer-arrow-3.svg',
     'text' => 'Turn search visibility into business opportunities with targeted lead generation campaigns. We combine audience research, campaign planning, landing page optimisation.'],
    ['no' => '04', 'noc' => '#D9D3A0', 'bg' => 'linear-gradient(-42deg, #F5F1C4 0%, #FFFEF8 100%)', 'title' => 'Local SEO Services', 'dir' => 'video', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Get found by customers in the places you operate. We manage your Google Business Profile, local citations and local link acquisition.'],
];

/* FAQs. Figma shows 7 questions but only writes out the answer to #1; answers 2-7 are derived from copy on this page. */
$seo_faqs = [
    ['What is included in your SEO services?', 'A technical audit to begin with, then keyword and content strategy, on-page optimisation, content production, link building, and monthly reporting. The technical fixes get implemented by our own developers rather than handed back to you as a to-do list. Scope is agreed upfront, based on what you are trying to achieve.'],
    ['What engagement models do you offer for SEO outsourcing?', 'Four models: FTE / Retainership (a fixed monthly cost), GCC (a Build, Operate, Deliver approach), Transaction (pay on invoice), and One-time / Milestone-based. How you work with us depends on what you need.'],
    ['How is your SEO outsourcing model different from hiring a freelancer or building an in-house team?', 'Our 100% in-house team gives you senior expertise without the cost of hiring. We do not outsource further or engage freelancers, the same or similarly skilled resources work on your account every time, and a dedicated project manager is your point of contact.'],
    ['Can your team work in our time zone?', 'Yes. Resources work exclusively on your account for 40 hours every week, in the preferred shift timing of our client.'],
    ['Do you only work with a specific industry?', 'No. We work across manufacturing, industrial and engineering, B2B services, retail and eCommerce, healthcare, education, real estate, logistics and distribution, and startups and SaaS.'],
    ['How do you measure SEO success?', 'Rankings matter, but so do traffic quality and pipeline. We deliver transparent monthly reporting tied to traffic, leads, and revenue, with clear next steps.'],
    ['How long does SEO take to show results?', 'It depends on your starting point, your market and the competition. Search growth that lasts needs a solid technical base, content that earns its place, and authority built up slowly enough to hold, and we confirm the roadmap and priorities at the strategy stage.'],
];
