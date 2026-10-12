<?php
/**
 * Content for the Marketing & Sales Collaterals service page (Figma: IW / "Marketing & Sales Collaterals").
 * Items marked "derived" are not written out in Figma and were built from copy that exists elsewhere on the page.
 */

$cl_benefits = ['Consistent Brand Collateral Design', 'Print & Digital Marketing Materials', 'Customisable & Reusable Templates', 'Sales & Marketing Design Support'];

/* Portfolio filter tabs (Figma labels). The strip in Figma is 5 tiles that alternate between two images;
   'cats' is derived so the tabs filter something. */
$cl_filters = ['all' => 'All', 'brochures' => 'Brochures & Catalogues', 'sales' => 'Sales Collateral', 'digital' => 'Digital Marketing Materials'];
$cl_strip = [
    ['img' => 'strip-a.png', 'cats' => 'brochures'],
    ['img' => 'strip-b.png', 'cats' => 'sales'],
    ['img' => 'strip-a.png', 'cats' => 'digital'],
    ['img' => 'strip-b.png', 'cats' => 'brochures sales'],
    ['img' => 'strip-a.png', 'cats' => 'sales digital'],
];

/* Metrics row: [icon (assets/icons/magazine), value, label] */
$cl_metrics = [
    ['m-send.svg', '2500', 'Projects Delivered'], ['m-globe.svg', '7', 'Countries Global Presence'],
    ['m-briefcase.svg', '30', 'Industries Served'], ['m-clock.svg', '18', 'Years of Experience'],
    ['m-users.svg', '1200', 'Global Clients'], ['m-award.svg', '120', 'Skilled Professional'],
];

/* Why cards: c = accent, num = number colour, tab = tab-shape svg, img = background photo */
$cl_why = [
    ['c' => 'var(--c-teal)', 'num' => '#53A2BC', 'no' => '01', 'tab' => 'tab-1.svg', 'icon' => 'why-1.svg', 'bg' => 'why-bg-1.png', 'title' => 'In-House Design Team',           'text' => 'Every marketing and sales collateral piece is designed by our in-house team, with no freelancers or subcontracting.'],
    ['c' => 'var(--c-red)',  'num' => '#E32329', 'no' => '02', 'tab' => 'tab-2.svg', 'icon' => 'why-2.svg', 'bg' => 'why-bg-2.png', 'title' => 'Dedicated Design Team',          'text' => 'The skilled designers work across your marketing materials, maintaining brand consistency without repeated briefing.'],
    ['c' => '#141717',       'num' => '#141717', 'no' => '03', 'tab' => 'tab-3.svg', 'icon' => 'why-3.svg', 'bg' => 'why-bg-3.png', 'title' => 'Data Security & Confidentiality', 'text' => 'Your marketing plans, sales materials and confidential business information are handled securely within our in-house team.'],
    ['c' => 'var(--c-olive)', 'num' => '#6B8F3E', 'no' => '04', 'tab' => 'tab-4.svg', 'icon' => 'why-4.svg', 'bg' => 'why-bg-4.png', 'title' => 'Flexible & Transparent Pricing', 'text' => 'Choose an engagement model that suits your design requirements, with the scope and pricing agreed before work begins.'],
];

/* Tools strip. [icon in assets/icons/magazine, tile colour, name, tagline]. The 4th ("PowerPoint & Google Slides") is a white 108x72 tile image. */
$cl_tools = [
    ['tool-indesign.svg',    '#54001A', 'Adobe InDesign',    'Layout | Publish'],
    ['tool-illustrator.svg', '#330000', 'Adobe Illustrator', 'Illustrate | Create'],
    ['tool-photoshop.svg',   '#001834', 'Adobe Photoshop',   'Edit | Retouch'],
    ['tool-ppt.png',         null,      'PowerPoint & Google Slides', 'Design | Present'],
    ['tool-acrobat.svg',     '#B40B00', 'Adobe Acrobat',     'Review | Share'],
];

/* Services accordion. "Marketing Material" bullets are from Figma; the bullets of the other two are derived
   from the same Figma copy (hero + "what we offer" text). */
$cl_services = [
    ['title' => 'Marketing Material', 'open' => true,
     'points' => ['Brochures, flyers and leaflets', 'Company profiles and corporate presentations', 'Posters, banners and event material', 'Product catalogues and datasheets']],
    ['title' => 'Sales Material',
     'points' => ['Sales presentations and proposals', 'Product sheets', 'Case studies']],
    ['title' => 'Digital Collateral',
     'points' => ['Digital marketing materials', 'Customisable and reusable templates', 'Print-ready and digital files']],
];

/* Workflow: absolute layout inside Figma's 1824x392 canvas.
   seg = x of the 304px coloured line, img = x of the 245x184 picture, dot = x of the circle, tx/tw = x/width of the text block.
   Figma titles are all literally numbered "1." (a list artefact); they are numbered 1-6 here. */
$cl_flow = [
    ['c' => '#C42030', 'seg' => 0,    'img' => 29.33,   'dot' => 145,     'tx' => 37,     'tw' => 230, 'title' => '1. Brief',               'text' => 'We begin with what you need, who it is for, and how your team will use it. That defines the format and the approach.'],
    ['c' => '#CF6CB9', 'seg' => 304,  'img' => 337.1,   'dot' => 452.77,  'tx' => 335.27, 'tw' => 230, 'title' => '2. Brand and content',   'text' => 'We work from your brand and your content, and address anything missing before design begins.'],
    ['c' => '#59B38D', 'seg' => 608,  'img' => 655.95,  'dot' => 771.61,  'tx' => 663.61, 'tw' => 230, 'title' => '3. Design',              'text' => 'We design the piece, or the template, and present it for your review.'],
    ['c' => '#C9AC61', 'seg' => 912,  'img' => 940.35,  'dot' => 1056.02, 'tx' => 948.02, 'tw' => 230, 'title' => '4. Refinement',          'text' => 'You share your feedback, and we refine it across the revision rounds we agree upfront.'],
    ['c' => '#53A2BC', 'seg' => 1216, 'img' => 1245.33, 'dot' => 1361,    'tx' => 1253,   'tw' => 230, 'title' => '5. Delivery',            'text' => 'We hand over print-ready and digital files, along with editable templates where you need them.'],
    ['c' => '#7F68CE', 'seg' => 1520, 'img' => 1568.76, 'dot' => 1684.43, 'tx' => 1554.93, 'tw' => 269, 'title' => '6. Ongoing partnership', 'text' => 'Where the work is continuous, we keep producing new material to the same standard, so your brand stays consistent over time.'],
];
$cl_flow_next = [291, 611, 921, 1241, 1551];

/* What we offer. Cards 1-3 are Figma (images reuse the video-page offer art, same Figma image refs); card 4 is a derived placeholder. */
$cl_offers = [
    ['no' => '01', 'noc' => '#D1C7E6', 'bg' => 'linear-gradient(-42deg, #EAE2F3 0%, #FBF8FF 100%)', 'title' => 'PPT Design Services', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'A presentation is often where your idea first meets an investor, a client or your own team. '],
    ['no' => '02', 'noc' => '#EAD3C4', 'bg' => 'linear-gradient(-42deg, #FBE7DB 0%, #FFFDFD 100%)', 'title' => 'Corporate Communication', 'img' => 'offer-2-56586a.png', 'x' => 45, 'y' => 265, 'w' => 486, 'h' => 372, 'arrow' => 'offer-arrow-2.svg',
     'text' => 'Consistent, brand-aligned communication materials that help businesses share information effectively with internal and external audiences.'],
    ['no' => '03', 'noc' => '#A2DDDD', 'bg' => 'linear-gradient(-42deg, #C5E3E3 0%, #F0FAFB 100%)', 'title' => 'Advertising Services', 'img' => 'offer-3-56586b.png', 'x' => 34, 'y' => 265, 'w' => 505, 'h' => 343, 'arrow' => 'offer-arrow-3.svg',
     'text' => 'Creative advertising materials designed to capture attention, communicate your brand message and support your marketing campaigns.'],
    ['no' => '04', 'noc' => '#D9D3A0', 'bg' => 'linear-gradient(-42deg, #F5F1C4 0%, #FFFEF8 100%)', 'title' => 'Product Catalogues', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Clear, consistent product catalogues and datasheets, designed for print and digital use.'],
];

/* FAQs. Figma has 6 questions and writes out only answer 1; answers 2-6 are derived from copy on this page. */
$cl_faqs = [
    ['What are marketing and sales collateral design services?', 'They cover the design of the material your teams use to market and sell, from brochures and presentations to proposals, product sheets and case studies. The purpose is to make every piece clear and credible, so your brand carries weight. '],
    ['What types of marketing and sales collateral do you design?', 'Brochures, flyers and leaflets, company profiles and corporate presentations, posters, banners and event material, product catalogues and datasheets, sales material, and digital collateral.'],
    ['Do you provide outsourced sales collateral design for global businesses?', 'Yes. Our 100% in-house team works with businesses across 7 countries, and the same or similarly skilled designers work on your orders every time, so delivery stays smooth and consistent.'],
    ['Do you provide B2B marketing and sales collateral design?', 'Yes. We design the full range of material your marketing and sales teams use, all held to one standard and shaped around how your business sells.'],
    ['Can you create white-label marketing and sales collateral for agencies?', 'Yes. We work with marketing agencies, and because everything is produced by our in-house team with no freelancers or subcontracting, your clients\' confidential material stays within our team.'],
    ['How can professional sales collateral design help improve sales?', 'When your brochures, decks and proposals are designed well and all look part of the same brand, your business looks credible and your team\'s job gets easier at every step of the sale.'],
];
