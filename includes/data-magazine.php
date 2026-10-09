<?php
/**
 * Content for the Magazine Design service page (Figma: IW / "Magazine design").
 * Items marked "derived" are not written out in Figma; they were built from copy that exists elsewhere on the page.
 */

$mg_benefits = ['Creative-Driven Efficiency', 'Deadline-Guaranteed Workflows', 'Print & Digital Ready', 'Flexible Engagement Models'];

/* "Our Examples" strip: type => image. 'frame' = white tile with an offset image (as in Figma) */
$mg_examples = [
    ['type' => 'blank'],
    ['type' => 'img',   'img' => 'ex-fashion.png'],
    ['type' => 'frame', 'img' => 'ex-mockup.png'],
    ['type' => 'img',   'img' => 'ex-fashion.png'],
    ['type' => 'img',   'img' => 'ex-magazine.png'],
    ['type' => 'frame', 'img' => 'ex-mockup.png'],
    ['type' => 'img',   'img' => 'ex-magazine.png'],
    ['type' => 'blank-border'],
];

$mg_metrics = [
    ['m-send.svg', '2500', 'Projects Delivered'], ['m-globe.svg', '7', 'Countries Global Presence'],
    ['m-briefcase.svg', '30', 'Industries Served'], ['m-clock.svg', '18', 'Years of Experience'],
    ['m-users.svg', '1200', 'Global Clients'], ['m-award.svg', '120', 'Skilled Professional'],
];

$mg_why = [
    ['c' => 'var(--c-teal)',     'no' => '01', 'noa' => .25, 'icon' => 'why-1.svg', 'shadow' => true,  'border' => false, 'title' => 'In-house design team',   'text' => 'All design work produced entirely in-house: no freelancers, no subcontracting.'],
    ['c' => 'var(--c-red)',      'no' => '02', 'noa' => .2,  'icon' => 'why-2.svg', 'shadow' => true,  'border' => true,  'title' => 'Dedicated project team',  'text' => 'The same designer or team works on your publication every issue: your standards carry forward without re-briefing.'],
    ['c' => 'var(--c-charcoal)', 'no' => '03', 'noa' => .15, 'icon' => 'why-3.svg', 'shadow' => false, 'border' => true,  'title' => 'Data security',          'text' => 'Your content, files, and unpublished material are handled under strict security, kept within our team and never shared outside.'],
    ['c' => 'var(--c-olive)',    'no' => '04', 'noa' => .2,  'icon' => 'why-4.svg', 'shadow' => false, 'border' => true,  'title' => 'Transparent pricing',    'text' => 'All design work produced entirely in-house: no freelancers, no subcontracting.'],
];

$mg_tools = [
    ['tool-indesign.svg',    '#54001A', 'Adobe InDesign',    'Layout | Publish'],
    ['tool-illustrator.svg', '#330000', 'Adobe Illustrator', 'Illustrate | Create'],
    ['tool-photoshop.svg',   '#001834', 'Adobe Photoshop',   'Edit | Retouch'],
    ['tool-figma.svg',       '#1A1A1A', 'Figma',             'Design | Collaborate'],
    ['tool-acrobat.svg',     '#B40B00', 'Adobe Acrobat',     'Review | Share'],
];

/* Services accordion. "Cover Design" is from Figma; the other five are derived from the workflow / why copy. */
$mg_services = [
    ['title' => 'Cover Design', 'open' => true, 'dots' => true,
     'points' => ['Cover concept development from your issue brief', 'Typography and image composition for the cover', 'Cover variations for print and digital formats']],
    ['title' => 'Layout and Editorial Design', 'points' => ['Spreads designed section by section against the approved grid', 'Typography system applied across every page', 'Captions, pull quotes, and supporting elements set in place']],
    ['title' => 'Digital Magazine Design', 'points' => ['Digital editions exported and tested across devices', 'Layouts adapted for on-screen reading', 'Cover variations for digital formats']],
    ['title' => 'Print Magazine Design', 'points' => ['Print-ready PDFs to your printer\'s specifications', 'Cover variations for print formats', 'Source files organised for future use']],
    ['title' => 'Custom Magazine Design', 'points' => ['Layouts built around your brief and content plan', 'Grid, typography and cover format documented to your brand rules', 'The same team on every issue']],
    ['title' => 'Template and Style Guide Development', 'points' => ['Templates that carry your grid and typography forward', 'A style guide documenting your brand rules', 'Source files that your team can edit']],
];

/* Workflow blocks: position in the 1771x678 canvas, width, text-align */
$mg_flow = [
    ['x' => 0,    'y' => 14,  'w' => 276, 'tw' => 245, 'align' => 'left',   'title' => 'Brief and content plan',  'text' => 'We confirm the issue scope: theme, content structure, page count, and format. Print, digital, or both are agreed at this stage along with the delivery date.'],
    ['x' => 64,   'y' => 296, 'w' => 313, 'tw' => 313, 'align' => 'left',   'title' => 'Cover concept',           'text' => 'Cover direction and key design decisions for the issue are developed and approved before internal layout work begins.'],
    ['x' => 336,  'y' => 539, 'w' => 364, 'tw' => 364, 'align' => 'left',   'title' => 'Layout design',           'text' => 'Spreads are designed section by section against the approved grid and typography system. You review at agreed checkpoints, not at the end when changes become expensive.'],
    ['x' => 1094, 'y' => 539, 'w' => 289, 'tw' => 289, 'align' => 'center', 'title' => 'Content integration',     'text' => 'Final copy and images are placed into approved layouts. Captions, pull quotes, and supporting elements are set at this stage.'],
    ['x' => 1401, 'y' => 296, 'w' => 274, 'tw' => 274, 'align' => 'center', 'title' => 'Review and revisions',     'text' => 'You review the full issue and provide consolidated feedback. Revisions are completed within the agreed rounds.'],
    ['x' => 1469, 'y' => 14,  'w' => 302, 'tw' => 302, 'align' => 'left',   'title' => 'Final delivery',          'text' => 'Print-ready PDFs go to your printer\'s specifications. Digital editions are exported and tested across devices. Source files are transferred on completion, organised for future use.'],
];

/* What we offer. Cards 1-3 are Figma; card 4 (so the 4 dots have a slide each) is a derived placeholder. */
$mg_offers = [
    ['no' => '01', 'noc' => '#D1C7E6', 'bg' => 'linear-gradient(-42deg, #EAE2F3 0%, #FBF8FF 100%)', 'title' => 'Desktop Publishing Services', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Document publishing is much more than writing good content; it is about designing the right layouts, formatting, applying the correct typography, and ensuring document preparation is done.'],
    ['no' => '02', 'noc' => '#EAD3C4', 'bg' => 'linear-gradient(-42deg, #FBE7DB 0%, #FFFDFD 100%)', 'title' => 'Newsletter Design', 'img' => 'offer-2-56586a.png', 'x' => 45, 'y' => 265, 'w' => 486, 'h' => 372, 'arrow' => 'offer-arrow-2.svg',
     'text' => 'A newsletter is not a one-off project. It goes out weekly, monthly, or quarterly, and every time it lands, it either reinforces your brand or quietly undermines it.'],
    ['no' => '03', 'noc' => '#A2DDDD', 'bg' => 'linear-gradient(-42deg, #C5E3E3 0%, #F0FAFB 100%)', 'title' => 'Scientific Journal', 'img' => 'offer-3-56586b.png', 'x' => 34, 'y' => 265, 'w' => 505, 'h' => 343, 'arrow' => 'offer-arrow-3.svg',
     'text' => 'Journal publication is the process of having your finished research paper evaluated, approved, and published in a scholarly publication or journal.'],
    ['no' => '04', 'noc' => '#D9D3A0', 'bg' => 'linear-gradient(-42deg, #F5F1C4 0%, #FFFEF8 100%)', 'title' => 'Product Catalogue Design', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'A catalogue is only useful when it is easy to browse. We keep product information consistent, accurate, and ready for print and digital output.'],
];

/* FAQs. Answer 1 is from Figma; 2-7 are derived from the workflow / why copy. */
$mg_faqs = [
    ['What are magazine design services?', 'Magazine design services cover the end-to-end design of a publication: cover design, layout design, typography, image treatment, and file preparation for print or digital output. The scope depends on whether you need a single issue or an ongoing production arrangement.'],
    ['What is the difference between print and digital magazine design?', 'Print files are prepared to your printer\'s specifications. Digital editions are exported and tested across devices. Both can be produced for the same issue.'],
    ['Do you offer custom magazine design or work from templates?', 'Both. We design custom magazines around your brief, and we develop templates and style guides so your format stays consistent.'],
    ['How long does it take to design a magazine?', 'The timeline is agreed at the start, once the issue scope, page count, format and delivery date are confirmed.'],
    ['Can you design both the cover and internal layouts?', 'Yes. The scope covers the cover concept, the internal layouts, and the placement of final copy and images.'],
    ['What file formats do you deliver?', 'Print-ready PDFs, digital editions, and the source files, organised for future use.'],
    ['Do you handle ongoing issues or only one-off projects?', 'Both. The same designer or team can work on your publication every issue, so your standards carry forward without re-briefing.'],
];
