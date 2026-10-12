<?php
/**
 * Content for the Packaging Design page (Figma: IW / "Packaging Design").
 * Items marked "derived" are not written out in Figma and were built from copy that exists elsewhere on the page.
 */

$pk_benefits = ['Creative & Production-Ready Design', 'Accurate Packaging Artwork', 'Multi-SKU Packaging Rollouts', 'Flexible Engagement Models'];

/* Portfolio tabs (Figma labels). Grid tiles sit at fixed Figma coordinates inside the 1800x685 block.
   Figma's tile captions are placeholders ("Lorem ipsum" / "Lorem ipsum dolor sit") and are kept as such.
   'cats' is derived so the tabs filter something. */
$pk_filters = ['all' => 'All', 'design' => 'Packaging Design', 'boxes' => 'Custom Boxes', 'labels' => 'Product Labels', 'rollout' => 'Packaging Rollout', 'mockups' => '3D Mockups', 'prepress' => 'Pre-Press'];
$pk_tiles = [
    ['img' => 'tile-a.png', 'x' => 0,    'y' => 0,   'w' => 570, 'h' => 685, 'ih' => 615, 'cats' => 'design boxes'],
    ['img' => 'tile-b.png', 'x' => 585,  'y' => 0,   'w' => 600, 'h' => 335, 'ih' => 258, 'cats' => 'design labels'],
    ['img' => 'tile-c.png', 'x' => 1200, 'y' => 0,   'w' => 600, 'h' => 335, 'ih' => 258, 'cats' => 'rollout mockups'],
    ['img' => 'tile-d.png', 'x' => 585,  'y' => 350, 'w' => 395, 'h' => 335, 'ih' => 258, 'cats' => 'boxes prepress'],
    ['img' => 'tile-e.png', 'x' => 995,  'y' => 350, 'w' => 395, 'h' => 335, 'ih' => 258, 'cats' => 'labels rollout'],
    ['img' => 'tile-f.png', 'x' => 1405, 'y' => 350, 'w' => 395, 'h' => 335, 'ih' => 258, 'cats' => 'mockups prepress'],
];

/* Stats: [value, suffix, label (two lines)] */
$pk_stats = [
    [['500', '+', 'Packaging Projects<br>Completed'], ['1000', '+', 'SKU Variants<br>Adapted'], ['150', '+', 'Brands<br>Supported']],
    [['98', '%', 'On-Time<br>Delivery'], ['250', '+', 'Packaging Formats<br>Handled'], ['15', '+', 'Years of<br>Design Expertise']],
];

/* Why cards. c = border/icon accent, num = number colour, tint = bottom fade of the photo */
$pk_why = [
    ['c' => 'var(--c-teal)',  'no' => '01', 'icon' => 'why-1.svg', 'bg' => 'why-bg-1.png', 'title' => 'In-House Design Team',           'text' => 'Every marketing and sales collateral piece is designed by our in-house team, with no freelancers or subcontracting.'],
    ['c' => '#E31E36',        'no' => '02', 'icon' => 'why-2.svg', 'bg' => 'why-bg-2.png', 'title' => 'Dedicated Design Team',          'text' => 'The skilled designers work across your marketing materials, maintaining brand consistency without repeated briefing.'],
    ['c' => '#141717',        'no' => '03', 'icon' => 'why-3.svg', 'bg' => 'why-bg-3.png', 'title' => 'Data Security & Confidentiality', 'text' => 'Your marketing plans, sales materials and confidential business information are handled securely within our in-house team.'],
    ['c' => 'var(--c-olive)', 'no' => '04', 'icon' => 'why-4.svg', 'bg' => 'why-bg-4.png', 'title' => 'Flexible & Transparent Pricing', 'text' => 'Choose an engagement model that suits your design requirements, with the scope and pricing agreed before work begins.'],
];

/* Tools strip (assets/icons/magazine glyphs on coloured tiles) */
$pk_tools = [
    ['tool-indesign.svg',    '#54001A', 'Adobe InDesign',    'Layout | Publish'],
    ['tool-illustrator.svg', '#330000', 'Adobe Illustrator', 'Illustrate | Create'],
    ['tool-photoshop.svg',   '#001834', 'Adobe Photoshop',   'Edit | Retouch'],
];

/* Services accordion. "Packaging Design" bullets are from Figma; "Packaging Rollout" bullets are derived from the workflow copy. */
$pk_services = [
    ['title' => 'Packaging Design', 'open' => true,
     'points' => ['Custom Packaging Design', 'Packaging rollout', 'Custom Box Packaging Design', 'Product Label Design', 'Packaging Concepts', 'Brand Identity Integration', 'Product Mockups & 3D Visualizations']],
    ['title' => 'Packaging Rollout',
     'points' => ['Approved artwork adapted across multiple SKUs', 'Product variants and packaging formats', 'Language and artwork localisation']],
];

/* Workflow: 5 steps. no = number position inside the art block, img = picture size, c = colour of the dot / accent.
   Figma's 4th timeline segment is purple, so step 4 is purple (there is no gold in this workflow). */
$pk_flow = [
    ['no' => '01', 'c' => '#F6B700', 'nx' => 47.51, 'img' => 'step-1.png', 'iw' => 296,    'ih' => 222,    'title' => 'Discovery',         'text' => 'Understand your products, packaging requirements, brand guidelines, production workflow, and project objectives.'],
    ['no' => '02', 'c' => '#CF6CB9', 'nx' => 34.51, 'img' => 'step-2.png', 'iw' => 310,    'ih' => 212,    'title' => 'Design',            'text' => 'Develop packaging concepts that balance creativity, functionality, and brand consistency.'],
    ['no' => '03', 'c' => '#59B38D', 'nx' => 34.51, 'img' => 'step-3.png', 'iw' => 287.34, 'ih' => 198.77, 'title' => 'Packaging Rollout', 'text' => 'Adapt approved artwork across multiple SKUs, product variants, languages, and packaging formats.'],
    ['no' => '04', 'c' => '#7F68CE', 'nx' => 34.51, 'img' => 'step-4.png', 'iw' => 296,    'ih' => 211,    'title' => 'Pre-Press',         'text' => 'Validate artwork, refine technical specifications, and prepare accurate print-ready files.'],
    ['no' => '05', 'c' => '#53A2BC', 'nx' => 31.01, 'img' => 'step-5.png', 'iw' => 310,    'ih' => 217,    'title' => 'Delivery',          'text' => 'Deliver production-ready artwork that supports faster approvals and efficient manufacturing.'],
];

/* What we offer: cards 1-3 are Figma (images reuse the video-page offer art); card 4 is a derived placeholder. */
$pk_offers = [
    ['no' => '01', 'noc' => '#D1C7E6', 'bg' => 'linear-gradient(-42deg, #EAE2F3 0%, #FBF8FF 100%)', 'title' => 'Brand Identity & Design', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Create a distinctive brand identity through consistent visual design, packaging graphics & creative elements that strengthen brand recognition across every customer touchpoint.'],
    ['no' => '02', 'noc' => '#EAD3C4', 'bg' => 'linear-gradient(-42deg, #FBE7DB 0%, #FFFDFD 100%)', 'title' => 'Marketing & Sales Collaterals', 'img' => 'offer-2-56586a.png', 'x' => 45, 'y' => 265, 'w' => 486, 'h' => 372, 'arrow' => 'offer-arrow-2.svg',
     'text' => 'Develop professionally designed brochures, catalogues, presentations and promotional materials that communicate your brand support your marketing and sales activities.'],
    ['no' => '03', 'noc' => '#A2DDDD', 'bg' => 'linear-gradient(-42deg, #C5E3E3 0%, #F0FAFB 100%)', 'title' => 'Corporate Communication', 'img' => 'offer-3-56586b.png', 'x' => 34, 'y' => 265, 'w' => 505, 'h' => 343, 'arrow' => 'offer-arrow-3.svg',
     'text' => 'Design consistent, brand-aligned corporate materials that help businesses communicate effectively through company profiles, internal publications, professional business documents.'],
    ['no' => '04', 'noc' => '#D9D3A0', 'bg' => 'linear-gradient(-42deg, #F5F1C4 0%, #FFFEF8 100%)', 'title' => 'Pre-Press Services', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Validated artwork and accurate print-ready files, prepared for a smooth transition from design to press.'],
];

/* FAQs. Figma has 6 questions and writes out only answer 1; answers 2-6 are derived from copy on this page. */
$pk_faqs = [
    ['What are packaging design services, and what do they include?', 'Packaging design services encompass activities such as design of packaging, revisions on current packaging designs and artwork, and preparation of the design for printing. Services may include label design, packaging launch, artwork revision, pre-press assistance, and file preparation. The objective is to ensure that your packaging design is perfect and production-ready.'],
    ['How do I choose the right packaging design company?', 'Look for a team that understands both the creative and the technical side of packaging: one that designs the artwork, adapts it across SKUs, and prepares print-ready files, working with you and your printers for consistent, on-time delivery.'],
    ['Do you offer custom box packaging design for unique product shapes?', 'Yes. Our packaging design services include custom box packaging design, packaging concepts, and product mockups and 3D visualizations so you can see the result before production.'],
    ['What makes a luxury packaging design agency different from a standard one?', 'Technical accuracy and consistency. Luxury packaging depends on precise artwork, brand identity integration and production-ready files that hold up through approval, pre-press and printing without delay.'],
    ['Do you provide product label design along with packaging design?', 'Yes. Product label design is part of our packaging design services, alongside custom packaging, packaging rollout and pre-press.'],
    ['Can you redesign our existing packaging instead of starting from scratch?', 'Yes. We handle package redesigns as well as new product launches, adapting approved artwork across multiple SKUs, variants, languages and packaging formats.'],
];
