<?php
/**
 * Content for the 3D Modeling and Rendering service page (Figma: IW / "3D MODELING AND RENDERING").
 * Items marked "derived" are not written out in Figma and were built from copy that exists elsewhere on the page.
 * Items marked "simplified" trade an elaborate Figma graphic for a plainer HTML/CSS equivalent.
 */

$td_benefits = ['Precision-Driven 3D Modeling', 'Photorealistic Rendering', 'Production-Ready 3D Assets', 'Flexible 3D Workflows'];

/* Portfolio filters (labels only — Figma reuses the video-editing page's filter-tab component) */
$td_filters = ['all' => 'All', 'wireframe' => 'Wireframe', 'material' => 'Material Study', 'detail' => 'Detail View', '360' => '360° View', 'exploded' => 'Exploded View'];

/* Horizontal gallery strip next to the "Exploded View" feature panel. Index 5 (0-based) is the
   Figma-highlighted frame, badge "05". 'cats' (derived — Figma doesn't tag these) ties each tile
   to a filter-tab key so "Wireframe" / "Material Study" / etc. actually filter something. */
$td_gallery = [
    ['img' => 'gallery-1.png',            'cats' => 'detail'],
    ['img' => 'gallery-2.png',            'cats' => 'wireframe detail'],
    ['img' => 'gallery-3.png',            'cats' => 'wireframe'],
    ['img' => 'gallery-4.png',            'cats' => 'material'],
    ['img' => 'gallery-5.png',            'cats' => 'material detail'],
    ['img' => 'gallery-featured-4b403a.png', 'cats' => '360 exploded'],
    ['img' => 'gallery-6.png',            'cats' => 'material'],
    ['img' => 'gallery-7.png',            'cats' => 'detail'],
    ['img' => 'gallery-8.png',            'cats' => 'material'],
    ['img' => 'gallery-9.png',            'cats' => 'exploded'],
    ['img' => 'gallery-10.png',           'cats' => 'exploded detail'],
];

$td_stats_top    = [['2500', 'Projects Delivered'], ['7', 'Countries Global Presence'], ['30', 'Industries Served']];
$td_stats_bottom = [['18', 'Years of Experience'], ['1200', 'Global Clients'], ['120', 'Skilled Professional']];

/* "Why Intelliworkz" benefit cards. Card 2 (Dedicated project team) is the Figma-highlighted one
   (raised card, off-white fill, shadow). */
$td_benefit_cards = [
    ['no' => '01', 'noc' => '#7FB5C8', 'icon' => 'benefit-1.svg', 'ring' => 'var(--c-teal)', 'title' => 'In-house 3D Team',        'text' => 'All 3D modeling and rendering work is handled by our in-house team for consistent quality, control, and communication.', 'raised' => false],
    ['no' => '02', 'noc' => 'var(--c-red)', 'icon' => 'benefit-2.svg', 'ring' => 'var(--c-red)', 'title' => 'Dedicated project team', 'text' => 'The same 3D artist or team works on your project from start to finish, carrying your materials, lighting, and quality standards forward without re-briefing.', 'raised' => true],
    ['no' => '03', 'noc' => '#2D2D2D', 'icon' => 'benefit-3.svg', 'ring' => 'var(--c-near-black)', 'title' => 'Data security',       'text' => 'Your content, files, and unpublished material are handled under strict security, kept within our team and never shared outside.', 'raised' => false],
    ['no' => '04', 'noc' => '#6B8F3E', 'icon' => 'benefit-4.svg', 'ring' => 'var(--c-green)', 'title' => 'Transparent pricing',      'text' => 'All design work produced entirely in-house: no freelancers, no subcontracting.', 'raised' => false],
];

$td_tools = [
    ['tool-vray.svg',    'V-Ray and Corona',    'Realistic Rendering'],
    ['tool-blender.svg', 'Blender and Cycles',  'Creative Flexibility'],
    ['tool-3dsmax.png',  '3ds Max',             'Precision Modelling'],
    ['tool-photoshop.svg', 'Adobe Photoshop',   'Post Production'],
];
/* 5th tile: the exported Figma graphic (file-formats.png) already renders the 4 STP/FBX/STL/OBJ icons */
$td_tool_formats_label = ['CAD and model formats', 'Works with Your Pipeline'];

/* Services accordion. Only "Product Rendering" has bullets in Figma. */
$td_services = [
    ['title' => 'Product Rendering', 'open' => true,
     'points' => ['Studio-style product images for catalogues and eCommerce', 'Lifestyle and in-context scenes that show the product in use', 'Material, colour and finish variations from a single model', 'Exploded views and close-up detail shots for technical clarity']],
    ['title' => 'Commercial and Marketing', 'points' => ['Hero shots and campaign imagery built around your brand', 'Consistent visuals across product ranges', 'Assets sized and formatted for every channel']],
    ['title' => 'Architectural and Interior', 'points' => ['Interior and exterior visualisations for approval and marketing', 'Material and lighting studies for a space', 'Walkthrough-ready scenes for presentations']],
];

/* Workflow: 5 steps in a single row (unlike the circular ring layout on the video-editing page) */
$td_workflow = [
    ['no' => '01', 'color' => 'var(--c-yellow)', 'img' => 'step-1-160f4f.png', 'title' => 'Your files.',           'text' => 'You send a 3D model, a CAD file, or drawings. If you only have drawings, we build the model first. If the model is ready, we move straight to the scene, and we confirm how the images will be used.'],
    ['no' => '02', 'color' => 'var(--c-pink)',   'img' => 'step-2-51cdb9.png', 'title' => 'Materials and lighting.', 'text' => 'We apply accurate materials, colours and finishes to match the real product, then light the scene to suit the setting you want, from a clean studio background to a real-world environment.'],
    ['no' => '03', 'color' => 'var(--c-green)',  'img' => 'step-3.png',        'title' => 'Draft render.',          'text' => 'You see a first version at working quality, so you can check the angle, materials and composition before we commit to the final output. Catching a change here saves time later.'],
    ['no' => '04', 'color' => 'var(--c-gold)',   'img' => 'step-4-293cbb.png', 'title' => 'Review and adjust.',     'text' => 'You give feedback on the draft, and we refine the materials, lighting, and framing within the agreed rounds. Changes at this stage are quick and inexpensive to make.'],
    ['no' => '05', 'color' => 'var(--c-teal)',   'img' => 'step-5-3348cf.png', 'title' => 'Final delivery.',        'text' => 'We render at full resolution, finish each image in post-production, and deliver the files in the sizes and formats you need for print, web, eCommerce, or presentation.'],
];

/* "What we offer" — reuses the video-editing/magazine offer-card image assets (Figma reuses the same image refs). */
$td_offers = [
    ['no' => '01', 'noc' => '#D1C7E6', 'bg' => 'linear-gradient(-42deg, #EAE2F3 0%, #FBF8FF 100%)', 'title' => 'Product Demo Videos', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Show how your product works through clear demonstrations created with accurate 3D models and rendered scenes.'],
    ['no' => '02', 'noc' => '#EAD3C4', 'bg' => 'linear-gradient(-42deg, #FBE7DB 0%, #FFFDFD 100%)', 'title' => '3D Animation', 'img' => 'offer-2-56586a.png', 'x' => 45, 'y' => 265, 'w' => 486, 'h' => 372, 'arrow' => 'offer-arrow-2.svg',
     'text' => 'Bring products, mechanisms and concepts to life with animated sequences that explain movement, assembly and function.'],
    ['no' => '03', 'noc' => '#A2DDDD', 'bg' => 'linear-gradient(-42deg, #C5E3E3 0%, #F0FAFB 100%)', 'title' => 'Visual merchandise', 'img' => 'offer-3-56586b.png', 'x' => 34, 'y' => 265, 'w' => 505, 'h' => 343, 'arrow' => 'offer-arrow-3.svg',
     'text' => 'Create polished retail and campaign visuals that present products across displays, environments and promotional formats.'],
    ['no' => '04', 'noc' => '#D9D3A0', 'bg' => 'linear-gradient(-42deg, #F5F1C4 0%, #FFFEF8 100%)', 'title' => 'Technical Renders', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg', // derived 4th slide so the 4 pagination dots have a slide each - replace
     'text' => 'Precise technical visuals for stakeholders and manufacturing partners, built directly from your CAD data.'],
];

/* FAQs. Question 1 answer is from Figma; answers 2-6 are derived from copy on this page. */
$td_faqs = [
    ['What is 3D rendering?', '3D rendering is where we produce a photorealistic image or video of a 3D model. Software can add textures to it, a degree of lighting, plus minute details to complete the vision, which will look very real; almost photorealistic. Often used to visualize what an object, a space, or a building will look like before it is even built so that sales can take place in advance.'],
    ['Is 3D rendering difficult?', 'The process itself takes specialist software and an experienced team, but for you it is straightforward: you send a model or drawings, review a draft, and give feedback within the agreed rounds.'],
    ['Will AI replace 3D rendering?', 'AI tools can speed up parts of the process, but accurate materials, lighting, and finishing for a specific product or brand still need an experienced in-house team to get right.'],
    ['What software is best for 3D rendering?', 'We work with V-Ray and Corona for realistic rendering, Blender and Cycles for creative flexibility, and 3ds Max for precision modelling, chosen to suit each project.'],
    ['Why should you use 3D rendering for your business?', 'A photorealistic image lets a customer picture owning the product, lets a stakeholder sign off with confidence, and lets your marketing and sales teams start work before the product reaches a shelf.'],
    ['What is included in your 3D rendering services?', 'Model preparation, materials and lighting, a draft render for review, refinement within the agreed rounds, and final delivery in the sizes and formats you need.'],
];
