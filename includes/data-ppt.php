<?php
/**
 * Content for the PPT Design page (Figma: IW / "PPT Design").
 * Items marked "derived" are not written out in Figma and were built from copy that exists elsewhere on the page.
 */

$ppt_benefits = ['Custom PowerPoint Slide Design', 'Brand-Aligned Presentations', 'Clear Charts & Data Visualisation', 'Fully Editable Presentation Files'];

/* Portfolio tabs (Figma labels) and the 5-thumbnail strip (Figma uses the same picture 5x; the 3rd one is the highlighted tile).
   'cats' is derived so the tabs filter something. */
$ppt_filters = ['all' => 'All', 'corporate' => 'Corporate Presentations', 'investor' => 'Investor Pitch Decks', 'sales' => 'Sales Presentations', 'reports' => 'Business Reports', 'templates' => 'PowerPoint Templates', 'training' => 'Training Presentations'];
$ppt_thumbs = [
    ['img' => 'thumb-1.png', 'cats' => 'corporate investor'],
    ['img' => 'thumb-2.png', 'cats' => 'sales reports'],
    ['img' => 'thumb-3.png', 'cats' => 'investor sales corporate'],
    ['img' => 'thumb-4.png', 'cats' => 'templates training'],
    ['img' => 'thumb-5.png', 'cats' => 'reports training'],
];

$ppt_stats_top    = [['2500', 'Projects Delivered'], ['7', 'Countries Global Presence'], ['30', 'Industries Served']];
$ppt_stats_bottom = [['18', 'Years of Experience'], ['1200', 'Global Clients'], ['120', 'Skilled Professional']];

/* Why cards (same card design as the Pre-Press page) */
$ppt_why = [
    ['c' => 'var(--c-teal)',  'tint' => '#B5DEEB', 'no' => '01', 'icon' => 'why-1.svg', 'title' => 'In-House Design Team',            'text' => 'Every presentation is designed by our in-house team, with no freelancers or subcontracting.'],
    ['c' => 'var(--c-red)',   'tint' => '#FFD5D9', 'no' => '02', 'icon' => 'why-2.svg', 'title' => 'Dedicated Presentation Team',     'text' => 'The same or similarly skilled designers work across your presentations, maintaining your brand style without repeated briefing.'],
    ['c' => '#141717',        'tint' => '#666666', 'no' => '03', 'icon' => 'why-3.svg', 'title' => 'Data Security & Confidentiality', 'text' => 'Your presentation content, financial information and unpublished business material stay confidential within our in-house team.'],
    ['c' => 'var(--c-olive)', 'tint' => '#8DAC65', 'no' => '04', 'icon' => 'why-4.svg', 'title' => 'Flexible & Transparent Pricing',  'text' => 'Choose an engagement model that suits your presentation requirements, with the scope and pricing agreed before work begins.'],
];

/* Tools strip: 2 columns of 2. kind: 'mag' = glyph on a tile (assets/icons/magazine), 'svg' = assets/icons/ppt, 'png' = assets/images/ppt */
$ppt_tools = [
    [['svg', 'tool-powerpoint.svg', null, 'Microsoft PowerPoint', 'Design | Present'],   ['mag', 'tool-illustrator.svg', '#330000', 'Adobe Illustrator', 'Illustrate | Refine']],
    [['png', 'tool-slides.png', null, 'Google Slides', 'Collaborate | Present'],        ['mag', 'tool-photoshop.svg', '#001834', 'Adobe Photoshop', 'Edit | Enhance']],
    [['png', 'tool-keynote.png', null, 'Apple Keynote', 'Create | Showcase']],
];

/* Services accordion. "Business and Sales" bullets are from Figma; the other two rows' bullets are derived from the page copy. */
$ppt_services = [
    ['title' => 'Business and Sales', 'open' => true,
     'points' => ['Sales and pitch presentations', 'Company profiles and capability decks', 'Product and service presentations', 'Proposal and tender decks']],
    ['title' => 'Investor and Corporate',
     'points' => ['Investor pitch decks', 'Business reports', 'Corporate presentations']],
    ['title' => 'Templates and Internal',
     'points' => ['Custom PowerPoint templates', 'Internal and training decks', 'Rebuilds of old or rough decks']],
];

/* Workflow (video-page ring layout): [no, colour, number left, number width, art image, x, y, w, h, title, text] */
$ppt_workflow = [
    ['01', '#F6B700', 46, 51, 'step-1.png', 25.96, 83.58,  165.86, 122.08, 'Brief',           'We start with your content, your audience, and what you need the presentation to achieve, so the design has a clear purpose from the outset.'],
    ['02', '#CF6CB9', 26, 71, 'step-2.png', 25.2,  100.31, 167.37, 88.62,  'Structure',       'We shape the story and the slide flow, making sure the message is clear and builds in the right order before any design begins.'],
    ['03', '#59B38D', 25, 72, 'step-3.png', 20,    95.62,  164.91, 98,     'Design',          'We design each slide to your brand, turning your content into clean, clear visuals and simplifying anything dense or hard to follow.'],
    ['04', '#C9AC61', 25, 72, 'step-4.png', 16.64, 96,     167.37, 97.23,  'Your feedback',   'You review the deck, and we refine it across the revision rounds we agree upfront.'],
    ['05', '#53A2BC', 22, 75, 'step-5.png', 10.5,  90.29,  167.29, 108.66, 'Delivery',        'We hand over fully editable files, ready to present, along with a reusable template where you need one.'],
    ['06', '#7F68CE', 22, 75, 'step-6.png', 23.7,  97.44,  170.37, 94.37,  'Ongoing support', 'Where you present regularly, we keep producing decks to the same standard as you need them, so your presentations stay consistent over time.'],
];

/* What we offer: cards are from Figma (images reuse the video-page offer art); card 4 is a derived placeholder. */
$ppt_offers = [
    ['no' => '01', 'noc' => '#D1C7E6', 'bg' => 'linear-gradient(-42deg, #EAE2F3 0%, #FBF8FF 100%)', 'title' => 'Marketing & Sales Collaterals', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Professionally designed marketing materials and sales presentations that communicate your message clearly and strengthen your brand.'],
    ['no' => '02', 'noc' => '#EAD3C4', 'bg' => 'linear-gradient(-42deg, #FBE7DB 0%, #FFFDFD 100%)', 'title' => 'Corporate Communication', 'img' => 'offer-2-56586a.png', 'x' => 45, 'y' => 265, 'w' => 486, 'h' => 372, 'arrow' => 'offer-arrow-2.svg',
     'text' => 'Consistent, brand-aligned communication materials that help businesses share information effectively with internal and external audiences.'],
    ['no' => '03', 'noc' => '#A2DDDD', 'bg' => 'linear-gradient(-42deg, #C5E3E3 0%, #F0FAFB 100%)', 'title' => 'Advertising Services', 'img' => 'offer-3-56586b.png', 'x' => 34, 'y' => 265, 'w' => 505, 'h' => 343, 'arrow' => 'offer-arrow-3.svg',
     'text' => 'Creative advertising materials designed to capture attention, communicate your brand message and support your marketing campaigns.'],
    ['no' => '04', 'noc' => '#D9D3A0', 'bg' => 'linear-gradient(-42deg, #F5F1C4 0%, #FFFEF8 100%)', 'title' => 'Pitch Deck Design', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341, 'arrow' => 'offer-arrow-1.svg',
     'text' => 'Investor-ready pitch decks that tell your story in a clear order, one point per slide.'],
];

/* FAQs. Figma has 6 questions and writes out only answer 1; answers 2-6 are derived from copy on this page. */
$ppt_faqs = [
    ['What is included in your PPT design services?', 'Content structuring, slide design, custom icons, charts and data visuals, and a finished deck built to your brand. We can also build a reusable template. You always receive fully editable files, and you can bring us raw content, a draft, or an existing deck to rebuild.'],
    ['In which file formats do you deliver the presentation?', 'We hand over fully editable files, ready to present. We work in Microsoft PowerPoint, Google Slides and Apple Keynote, and can also deliver a reusable template.'],
    ['Is it safe to outsource confidential presentation content?', 'Yes. Your presentation content, financial information and unpublished business material stay confidential within our in-house team, with no freelancers or subcontracting.'],
    ['What types of PowerPoint presentations do you design?', 'Sales and pitch presentations, company profiles and capability decks, product and service presentations, proposal and tender decks, investor decks, business reports, and templates for internal use.'],
    ['Can I outsource PowerPoint design to your team?', 'Yes. You can hand us raw content, a rough draft, a Word document, or an old deck that needs rebuilding, and we turn it into a finished, professional presentation.'],
    ['Do you design pitch decks and investor presentations?', 'Yes. We design high-stakes pitches that have to win in one meeting: the story in a clear order, each slide cut down to the one point it needs to make, and the design matched to your brand.'],
];
