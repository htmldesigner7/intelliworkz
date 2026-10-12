<?php
/**
 * Content for the Pre-Press Service page (Figma: IW / "Pre-Press Service").
 * Items marked "derived" are not written out in Figma and were built from copy that exists elsewhere on the page.
 */

$pp_benefits = ['Accurate Artwork Verification', 'Professional Colour Management', 'Preflight & Quality Checks', 'Production-Ready File Delivery'];

/* Portfolio tabs (Figma labels) + the 5-tile strip (same two images as the Collaterals page). 'cats' is derived. */
$pp_filters = ['all' => 'All', 'packaging' => 'Packaging Pre-Press', 'commercial' => 'Commercial Print', 'digital' => 'Digital Pre-Press', 'colour' => 'Colour Management & Proofing'];
$pp_strip = [
    ['img' => 'strip-a.png', 'cats' => 'packaging'],
    ['img' => 'strip-b.png', 'cats' => 'commercial'],
    ['img' => 'strip-a.png', 'cats' => 'digital'],
    ['img' => 'strip-b.png', 'cats' => 'colour'],
    ['img' => 'strip-a.png', 'cats' => 'packaging commercial'],
];

$pp_stats_top    = [['2500', 'Projects Delivered'], ['7', 'Countries Global Presence'], ['30', 'Industries Served']];
$pp_stats_bottom = [['18', 'Years of Experience'], ['1200', 'Global Clients'], ['120', 'Skilled Professional']];

/* Why cards. c = accent, tint = the light shade of the accent (number + corner tab) */
$pp_why = [
    ['c' => 'var(--c-teal)',  'tint' => '#B5DEEB', 'no' => '01', 'icon' => 'why-1.svg', 'title' => 'In-House Pre-Press Team',        'text' => 'Every artwork file is prepared and checked by our experienced in-house pre-press specialists, with no freelancers or subcontracting.'],
    ['c' => 'var(--c-red)',   'tint' => '#FFD5D9', 'no' => '02', 'icon' => 'why-2.svg', 'title' => 'Dedicated Project Team',         'text' => 'The same or similarly skilled specialists work across your print projects, maintaining technical accuracy and consistency without repeated briefing.'],
    ['c' => '#141717',        'tint' => '#666666', 'no' => '03', 'icon' => 'why-3.svg', 'title' => 'Data Security & Confidentiality', 'text' => 'Your artwork files, packaging designs and confidential production information are handled securely within our in-house team.'],
    ['c' => 'var(--c-olive)', 'tint' => '#8DAC65', 'no' => '04', 'icon' => 'why-4.svg', 'title' => 'Flexible & Transparent Pricing',  'text' => 'Choose an engagement model that suits your pre-press requirements, with the scope, timelines and pricing agreed before work begins.'],
];

/* Tools strip: 3 columns. kind: 'mag' = svg glyph on a coloured tile (assets/icons/magazine), 'png'/'svg' = ready-made 72px tile */
$pp_tools = [
    [['mag', 'tool-illustrator.svg', '#330000', 'Adobe Illustrator', 'Create | Refine'],        ['png', 'tool-esko-artpro.png', null, 'Esko ArtPro+', 'Preflight | Optimise'],            ['svg', 'tool-gmg.svg', null, 'GMG Color Management', 'Calibrate | Match']],
    [['mag', 'tool-indesign.svg', '#54001A', 'Adobe InDesign', 'Layout | Prepare'],             ['png', 'tool-esko-automation.png', null, 'Esko Automation Engine', 'Automate | Streamline'], ['png', 'tool-pitstop.png', null, 'Enfocus PitStop Pro', 'Preflight | Correct']],
    [['mag', 'tool-photoshop.svg', '#001834', 'Adobe Photoshop', 'Edit | Enhance'],             ['mag', 'tool-acrobat.svg', '#B40B00', 'Adobe Acrobat Pro', 'Inspect | Validate']],
];

/* Services accordion. "Artwork Preparation" bullets are from Figma; the other two rows' bullets are derived from the workflow copy. */
$pp_services = [
    ['title' => 'Artwork Preparation', 'open' => true,
     'points' => ['File verification', 'Resolution and image checks', 'Font and typography validation', 'Bleed, margins, and crop mark setup', 'Layout optimization']],
    ['title' => 'Print Production Support',
     'points' => ['Print optimization for offset, flexo, gravure, or digital', 'Overprinting and trapping checks', 'Production-ready file delivery']],
    ['title' => 'Quality Assurance',
     'points' => ['Digital proofs and pre-flights', 'Colour, alignment and typo checks', 'Client review and approval']],
];

/* Workflow: 6 cards (580x580). bg = card tint, c = number colour, iy = top of the picture inside the card */
$pp_flow = [
    ['no' => '01', 'bg' => '#EFF7FA', 'c' => '#53A2BC', 'iy' => 234,    'title' => 'Artwork Review',            'text' => 'First, we examine your design files. We then use the dimensions, specifications, and production guidelines for the print run and the colors you require to check for any problems before the file gets into production.'],
    ['no' => '02', 'bg' => '#FAEFEF', 'c' => '#CF6CB9', 'iy' => 234,    'title' => 'File Preparation',          'text' => 'After that, artwork will be prepared, where we will be checking image quality and resolution, fonts used, bleed settings, profiles used, etc., and also overprinting and trapping will be checked; layout is also checked.'],
    ['no' => '03', 'bg' => '#FAF6EF', 'c' => '#C9AC61', 'iy' => 263.23, 'title' => 'Proofing & Quality Checks', 'text' => 'Digital proofs & pre-flights: they run a check for color(s), alignment(s), and typos and check for any technical problem(s) & omissions (the ‘pre’ phase for pre-press).'],
    ['no' => '04', 'bg' => '#EFF7FA', 'c' => '#59B38D', 'iy' => 234,    'title' => 'Print Optimization',        'text' => 'The artwork file is adapted for the print method of choice (offset, flexo, gravure, or digital) so as to enable an accurate color result and efficient production.'],
    ['no' => '05', 'bg' => '#FAEFFA', 'c' => '#7F68CE', 'iy' => 234,    'title' => 'Client Review & Approval',  'text' => 'Final proofs are then sent out for production approval. Any necessary amendments are made to ensure artwork complies with specifications and the brand.'],
    ['no' => '06', 'bg' => '#FAF6EF', 'c' => '#53A2BC', 'iy' => 234,    'title' => 'Production-Ready Delivery', 'text' => 'Files are then delivered as final, ready-to-print; specifications will transition seamlessly to the printing stage.'],
];

/* What we offer. Text and cards are from Figma (they are the Magazine page's cards); card 4 is a derived placeholder. */
$pp_offers = [
    ['no' => '01', 'noc' => '#D1C7E6', 'bg' => 'linear-gradient(-42deg, #EAE2F3 0%, #FBF8FF 100%)', 'title' => 'Desktop Publishing Services', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Document publishing is much more than writing good content; it is about designing the right layouts, formatting, applying the correct typography, and ensuring document preparation is done.'],
    ['no' => '02', 'noc' => '#EAD3C4', 'bg' => 'linear-gradient(-42deg, #FBE7DB 0%, #FFFDFD 100%)', 'title' => 'Newsletter Design', 'img' => 'offer-2-56586a.png', 'x' => 45, 'y' => 265, 'w' => 486, 'h' => 372, 'arrow' => 'offer-arrow-2.svg',
     'text' => 'A newsletter is not a one-off project. It goes out weekly, monthly, or quarterly, and every time it lands, it either reinforces your brand or quietly undermines it.'],
    ['no' => '03', 'noc' => '#A2DDDD', 'bg' => 'linear-gradient(-42deg, #C5E3E3 0%, #F0FAFB 100%)', 'title' => 'Scientific Journal', 'img' => 'offer-3-56586b.png', 'x' => 34, 'y' => 265, 'w' => 505, 'h' => 343, 'arrow' => 'offer-arrow-3.svg',
     'text' => 'Journal publication is the process of having your finished research paper evaluated, approved, and published in a scholarly publication or journal.'],
    ['no' => '04', 'noc' => '#D9D3A0', 'bg' => 'linear-gradient(-42deg, #F5F1C4 0%, #FFFEF8 100%)', 'title' => 'Product Catalogue Design', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'A catalogue is only useful when it is easy to browse. We keep product information consistent, accurate, and ready for print and digital output.'],
];

/* FAQs. Figma has 6 questions and writes out only answer 1; answers 2-6 are derived from copy on this page. */
$pp_faqs = [
    ['What are pre-press services?', 'Pre-press services involve preparing digital artwork for printing through processes such as file verification, colour management, proofing, layout validation, and print optimization. This ensures every file is technically ready before production begins.'],
    ['What is included in professional pre-press services?', 'Artwork review, file preparation (resolution, fonts, bleed, colour profiles, overprinting and trapping), proofing and quality checks, print optimization, client review and approval, and production-ready delivery.'],
    ['How long does the pre-press process take?', 'The timeline depends on the number of files and how much preparation each one needs. It is agreed with you before work begins, together with the scope and pricing.'],
    ['What software is used for pre-press?', 'We work with Adobe Illustrator, InDesign, Photoshop and Acrobat Pro, Esko ArtPro+ and Automation Engine, GMG colour management, and Enfocus PitStop Pro.'],
    ['What industries use pre-press services?', 'Any business that prints: packaging and label printers, commercial print, marketing collateral, brochures and wide-format display work.'],
    ['Do I need pre-press services for digital printing?', 'Yes. Colour shifts, low-resolution images, missing fonts and incorrect layouts cause problems in digital printing too. A pre-press check catches them before the first page is printed.'],
];
