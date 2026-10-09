<?php
/**
 * Content for the Video Editing service page (Figma: IW / "Video Editing").
 * Items marked "derived" are not written out in Figma and were built from copy that exists elsewhere on the page.
 */

$ve_benefits = [
    '100% In-House Editing Team',
    'Turnaround Confirmed Upfront',
    'Same / Similar Editors Across Projects',
    'Multi-Format & Multi-Platform Delivery',
];

$ve_form_fields = [
    ['Full Name', 'Enter your first name', 'text'],
    ['Company Name', 'Enter your company name', 'text'],
    ['Email ID', 'Enter your email ID', 'email'],
    ['Contact Number', 'Enter your contact number', 'tel'],
];

/* Portfolio filters + cards (cats = filter keys) */
$ve_filters = [
    'all' => 'All', 'brand-films' => 'Brand Films', 'commercials' => 'Commercials',
    'product-videos' => 'Product Videos', 'events' => 'Events', 'social' => 'Social', 'training' => 'Training',
];
/* 'video' = mp4 URL or YouTube/Vimeo link. PLACEHOLDER sample clips - replace with the real videos. */
$ve_cards = [
    ['title' => 'Brand Film',    'meta' => 'Brand Films&nbsp; /&nbsp; Commercials', 'cats' => 'brand-films commercials', 'overlay' => null, 'video' => 'https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4'],
    ['title' => 'Product Video', 'meta' => 'Product Videos&nbsp; /&nbsp; Social',   'cats' => 'product-videos social', 'overlay' => 'pf-overlay-1.png', 'video' => 'https://www.w3schools.com/html/mov_bbb.mp4'],
    ['title' => 'Commercial',    'meta' => 'Commercials&nbsp; /&nbsp; Brand Films', 'cats' => 'commercials brand-films', 'overlay' => 'pf-overlay-2.png', 'video' => 'https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4'],
    ['title' => 'Event Film',    'meta' => 'Events&nbsp; /&nbsp; Social',           'cats' => 'events social', 'overlay' => 'pf-overlay-3.png', 'video' => 'https://www.w3schools.com/html/mov_bbb.mp4'],
];

$ve_stats_top    = [['2500', 'Projects Delivered'], ['7', 'Countries Global Presence'], ['30', 'Industries Served']];
$ve_stats_bottom = [['18', 'Years of Experience'], ['1200', 'Global Clients'], ['120', 'Skilled Professional']];

$ve_pillars = [
    ['img' => 'feature-1.png',          'icon' => 'feat-1.svg', 'ring' => '#7FB5C8', 'bg' => '#EDF4FA', 'x' => 116.58, 'title' => 'In-house editing team',  'text' => 'All video editing work is handled entirely in-house. No freelancers, no subcontracting.'],
    ['img' => 'feature-2-19c91a.png',   'icon' => 'feat-2.svg', 'ring' => 'var(--c-red)', 'bg' => '#FFFFFF', 'x' => 116.58, 'title' => 'Dedicated project team', 'text' => 'The same team works on your project from start to finish. Your standards and feedback are carried forward.'],
    ['img' => 'feature-3.png',          'icon' => 'feat-3.svg', 'ring' => '#2D2D2D', 'bg' => 'linear-gradient(135deg, #EDF2FC 0%, #FFFFFF 100%), #F5F5F5', 'x' => 56, 'title' => 'Secure your content', 'text' => 'Your footage, files and unpublished material are handled under strict security protocols.'],
    ['img' => 'feature-4-68b7aa.png',   'icon' => 'feat-4.svg', 'ring' => '#6B8F3E', 'bg' => '#FEFEFE', 'x' => 77.82, 'title' => 'Transparent pricing',   'text' => 'All video editing work is quoted clearly in advance. No hidden costs, no surprises.'],
];

$ve_tools = [
    ['tool-premiere.png',            'Adobe Premiere Pro', 'Edit | Assemble'],
    ['tool-aftereffects.png',        'Adobe After Effects', 'Animate | Composite'],
    ['tool-finalcut.png',            'Final Cut Pro',       'Edit | Deliver'],
    ['tool-davinci.png',             'DaVinci Resolve',     'Grade | Finish'],
    ['tool-audition.png',            'Adobe Audition',      'Clean | Mix'],
    ['tool-frameio-1658d8.png',      'Frame.io',            'Review | Approve'],
];

/* Services accordion. Only "Editing and Assembly" has bullets in Figma; "Finishing and Post" bullets are derived from the FAQ answer. */
$ve_services = [
    [
        'title' => 'Editing and Assembly', 'icon' => 'acc-icon-1.svg', 'open' => true,
        'points' => ['Footage review, take selection, and story structure', 'Multi-camera synchronisation', 'Rough Cut', 'Pacing, sequencing, and narrative construction', 'Audio Sync'],
    ],
    [
        'title' => 'Finishing and Post', 'icon' => 'acc-icon-2.svg', 'open' => false,
        'points' => ['Colour grading', 'Audio cleanup and sound design', 'Motion graphics and VFX', 'Subtitling and captions', 'Platform-specific exports'],
    ],
    [
        'title' => 'Digital Magazine Design', 'icon' => 'acc-icon-3.svg', 'open' => false, // title kept exactly as in Figma (looks like a leftover - rename)
        'points' => ['Corporate brand films', 'Commercials', 'Product videos', 'Documentaries', 'Training content', 'Event coverage', 'Short-form social content'], // derived from the services intro copy
    ],
];

/* Workflow: number position inside the 194px ring, art size/position, accent colour */
$ve_workflow = [
    ['01', '#F6B700', 46, 51, 'step-art-1.png', 48.89, 69.84, 103.41, 124.16, 'Brief and Goal',     'We start by agreeing on what the video is for, who it is for, and where it will be shown. Everything after this follows from it.'],
    ['02', '#CF6CB9', 26, 71, 'step-art-2.png', 48.89, 91.91, 100,    102.09, 'Footage Review',     'We go through all your raw footage, pick the best material, and plan the edit before we start.'],
    ['03', '#59B38D', 25, 72, 'step-art-3.png', 42.45, 99.4,  112.88, 94.6,   'First Cut',          'We put together the first version so you can see the structure and pacing early.'],
    ['04', '#C9AC61', 25, 72, 'step-art-4.png', 40.33, 99.4,  117.12, 94.6,   'Refinement',         'We add color grading, sound, motion graphics, and final timing to complete the video.'],
    ['05', '#53A2BC', 22, 75, 'step-art-5.png', 33.65, 83.32, 130.48, 110.68, 'Final Delivery',     'We export the video in every resolution and aspect ratio you need, ready for each platform.'],
    ['06', '#7F68CE', 22, 75, 'step-art-6.png', 48.89, 74.4,  100,    119.6,  'Your Review',        'You share your feedback, and we make the changes for as many rounds as you need.'],
];

$ve_offers = [
    ['no' => '01', 'noc' => '#D1C7E6', 'bg' => 'linear-gradient(-42deg, #EAE2F3 0%, #FBF8FF 100%)', 'title' => 'Motion Graphics', 'arrow' => 'offer-arrow-1.svg', 'img' => 'offer-1-625569.png', 'x' => 58, 'y' => 277, 'w' => 457, 'h' => 341,
     'text' => 'From animated logos and lower thirds to full-sequence motion design, we create graphics that bring energy, clarity, and brand consistency to every frame.'],
    ['no' => '02', 'noc' => '#EAD3C4', 'bg' => 'linear-gradient(-42deg, #FBE7DB 0%, #FFFDFD 100%)', 'title' => 'Explainer Videos', 'arrow' => 'offer-arrow-2.svg', 'img' => 'offer-2-56586a.png', 'x' => 45, 'y' => 265, 'w' => 486, 'h' => 372,
     'text' => 'We distil complex ideas into clear, engaging narratives using a mix of live action, animation, and motion graphics tailored to your audience and platform.'],
    ['no' => '03', 'noc' => '#A2DDDD', 'bg' => 'linear-gradient(-42deg, #C5E3E3 0%, #F0FAFB 100%)', 'title' => 'Product Video', 'arrow' => 'offer-arrow-3.svg', 'img' => 'offer-3-56586b.png', 'x' => 34, 'y' => 265, 'w' => 505, 'h' => 343,
     'text' => 'Showcase your product with polished visuals, precise pacing, and platform-ready edits designed to drive engagement and conversion across every channel.'],
    ['no' => '04', 'noc' => '#D9D3A0', 'bg' => 'linear-gradient(-42deg, #F5F1C4 0%, #FFFEF8 100%)', 'title' => 'Event Films', 'arrow' => 'offer-arrow-1.svg', 'img' => 'pf-overlay-3.png', 'x' => 45, 'y' => 265, 'w' => 486, 'h' => 372, // 4th slide: placeholder, replace
     'text' => 'Complete coverage of conferences, launches and live events, edited into highlight reels, recaps and social-ready clips.'],
];

/* FAQs. Question 1 answer is from Figma; answers 2-6 are derived from copy on this page. */
$ve_faqs = [
    ['What video editing services do professional video editing companies offer?', 'Editing and assembly, colour grading, audio, motion graphics, subtitling, and platform-ready exports.'],
    ['What are the different types of video editing?', 'Corporate brand films, commercials, product videos, documentaries, training content, event coverage and short-form social content.'],
    ['What video editing software do you use?', 'Adobe Premiere Pro, Adobe After Effects, Final Cut Pro, DaVinci Resolve, Adobe Audition and Frame.io.'],
    ['How long does the editing process take?', 'Turnaround is confirmed upfront, based on the length and complexity of the video and the delivery date you have agreed on.'],
    ['What is included in video post-production services?', 'Finishing work is part of the scope rather than quoted separately: colour grading, sound, motion graphics, subtitling and final exports.'],
    ['How do you handle feedback, revisions, and creative direction?', 'You share your feedback, and we make the changes for as many rounds as you need.'],
];
