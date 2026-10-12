<?php
/**
 * Content for the Contact page (Figma: IW / "Contact").
 * The INDIA office is written out in Figma. USA and DUBAI only exist there as tabs, so their details are taken
 * from the footer office block of the same Figma file (derived).
 */

$ct_offices = [
    'india' => [
        'tab' => 'INDIA', 'country' => 'India', 'city' => 'Ahmedabad, Gujarat',
        'blocks' => [
            [['Registered Office', 'Block-B, B912-A, World Trade Tower, Nr. BMW Showroom, SG Highway, Ahmedabad - 380051 Gujarat – India.']],
        ],
        'phone' => '+91 92740 02997, +91 9427801299', 'email' => 'hello@intelliworkz.tech', 'call' => '+919274002997',
        'blocks2' => [
            ['Tech Product Division', 'Shivalik Corporate Park B Wing, Second Floor 202-202A, 205-205A,Opp. Ashwamedh Bunglows Part 1, Satellite, Ahmedabad 380015'],
            ['Service Division', 'A Wing, 401-411, World Trade Tower, Nr. BMW Showroom, SG Highway, Ahmedabad - 380051 Gujarat – India'],
        ],
        'map' => 'https://www.google.com/maps/search/?api=1&query=World+Trade+Tower+SG+Highway+Ahmedabad',
    ],
    'usa' => [
        'tab' => 'USA', 'country' => 'USA', 'city' => 'Lewis Center, Ohio',
        'blocks' => [
            [['Office', '5511, Mercier Street, Lewis Center, Ohio 43035']],
        ],
        'phone' => '+1 614 999 2286', 'email' => 'hello@intelliworkz.tech', 'call' => '+16149992286',
        'blocks2' => [],
        'map' => 'https://www.google.com/maps/search/?api=1&query=5511+Mercier+Street+Lewis+Center+Ohio+43035',
    ],
    'dubai' => [
        'tab' => 'DUBAI', 'country' => 'Dubai', 'city' => 'Sheikh Zayed Road, UAE',
        'blocks' => [
            [['Office', 'Office No. 25, 13th Floor, Al Saqar Business Tower, Nr. Future Museum, Sheikh Zayed Road, Dubai, UAE.']],
        ],
        'phone' => '+971 56 343 5362', 'email' => 'hello@intelliworkz.tech', 'call' => '+971563435362',
        'blocks2' => [],
        'map' => 'https://www.google.com/maps/search/?api=1&query=Al+Saqar+Business+Tower+Sheikh+Zayed+Road+Dubai',
    ],
];

/* Red dots + labels on the world map: [label, dot left, dot top, label left, label top] (Figma coordinates inside the dark block) */
$ct_pins = [
    ['USA',   269.31, 546.97, 295.04, 560.14],
    ['Dubai', 567.25, 601.49, 497.82, 573.52],
    ['India', 621.2,  611.64, 646.93, 624.81],
];

/* FAQs. Figma has 6 questions and writes out only answer 1; answers 2-6 are derived from copy elsewhere in the Figma file. */
$ct_faqs = [
    ['What services does Intelliworkz provide?', 'We provide brand, creative, digital, technology, publishing, post-production, animation, engineering and dedicated team services. The right combination depends on your business requirement, project scope and objectives.'],
    ['Can you handle both one-time projects and ongoing work?', 'Yes. We work on one-time and milestone-based projects as well as ongoing work, through engagement models such as FTE / retainership, GCC, transaction and one-time.'],
    ['Can I discuss my requirement before deciding to work with you?', 'Yes. Tell us what you are trying to build, improve, market or manage, and we will understand your requirement, identify the right capabilities and connect you with the right team. Where it helps, we can run a proof of concept on a paid or free trial.'],
    ['Will I have a dedicated team for my project?', 'Yes. The same or similarly skilled resources work on your orders every time, with a dedicated project manager as your point of contact.'],
    ['Do you outsource the work to freelancers?', 'No. Our 100% in-house team does not further outsource or engage freelance teams to execute orders, which ensures client confidentiality.'],
    ['Can you work with our existing brand guidelines and materials?', 'Yes. We work from your brand guidelines and existing content, and address anything missing before design begins.'],
];
