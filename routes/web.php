<?php

use Illuminate\Support\Facades\Route;

$projects = [

//GENPRO APPS
    'genpro-apps' => ['title' => 'Genpro Apps', 
    'type' => 'Mobile app', 
    'role' => 'UI/UX Designer', 
    'timeline' => '8 weeks', 
    'color' => 'bg-[#dff6f3]', 
    'accent' => 'bg-[#a5e3dc]', 
    'image' => asset('images/portfolio/genpro/Frame 1000001416.png'), 
    'tags' => ['UI/UX Design', 'Mobile App', 'Health', 'Stunting'], 

    'description' => "Genpro Apps is an innovative app for stunting prevention in Indonesia, equipped with comprehensive sanitation and anthropometry features to monitor children's growth and development.", 

    'overview' => 'Genpro is a mobile experience for young professionals who want clarity over their everyday finances without feeling overwhelmed by spreadsheets. The project focused on transforming complex health information into a calmer, more approachable product.', 

    'problem' => 'The existing experience made important information difficult to understand and act on. We needed to create a product that felt useful for families, while giving professionals a clear way to monitor progress.', 

    'result' => 'A calmer dashboard and goal-first flow made the product easier to understand at a glance, with users completing their first task 2.4x faster in testing.'],


//BAKSO PAK EKO
    'bakso-pak-eko' => ['title' => 'Bakso Kuning & Mi Ayam Rendang Pak Eko', 
    'type' => 'Food & beverage', 
    'role' => 'UI/UX Designer', 
    'timeline' => '4 weeks', 
    'color' => 'bg-[#ffe7b4]', 
    'accent' => 'bg-[#f8cc72]', 
    'image' => asset('images/portfolio/bakso/Frame 1000001417.png'), 
    'tags' => ['UI/UX Design', 'Website', 'Food & Beverage'], 
    
    'description' => "The official website of Warung Bakso Kuning & Mi Ayam Rendang Pak Eko. Discover the authentic and unique flavors of our special menu, and order conveniently from the comfort of your home.", 
    
    'overview' => 'Pak Eko is a local food brand with a loyal following and an unmistakable menu. The new site gives that personality a digital home and makes ordering feel as welcoming as visiting in person.', 
    
    'problem' => 'The menu lived in scattered social posts, making it difficult for new customers to find the right location, hours, and signature dishes.', 
    
    'result' => 'The final site turns the menu into the main character, pairing useful information with the warmth and humor customers already love in person.'],


//TUKU TIKET DOLAN
    'tuku-tiket-dolan' => ['title' => 'Website Tuku Tiket Dolan', 
    'type' => 'Travel platform', 
    'role' => 'UI/UX Designer', 
    'timeline' => '6 weeks', 
    'color' => 'bg-[#91b5ff]', 
    'accent' => 'bg-[#5c87ea]', 
    'image' => asset('images/portfolio/tukutiket/Frame 1000001418.png'), 
    'tags' => ['UI/UX Design', 'Website', 'Ticket'], 
    
    'description' => "Tuku Tiket Dolan is a dedicated digital platform designed to help you find and purchase tickets for the best tourist destinations in the Kebumen area. With a user-friendly interface, we make your adventure exploring the local beauty more exciting and hassle-free.", 
    
    'overview' => 'Tuku Tiket Dolan brings local experiences, events, and weekend escapes into one inviting place for curious travelers.', 
    
    'problem' => 'People struggled to compare local events and trust unfamiliar organizers. The interface needed to make inspiration and practical trip planning feel like one continuous journey.', 
    
    'result' => 'A clearer discovery structure helped visitors move from browsing to booking with confidence, while the flexible content system gave organizers a stronger voice.'],
    

];

Route::get('/', fn () => view('index', ['projects' => $projects]));
Route::get('/about', fn () => view('about'));
Route::get('/portfolio/{slug}', function (string $slug) use ($projects) {
    abort_unless(isset($projects[$slug]), 404);

    if ($slug === 'bakso-pak-eko') {
        return view('portfolio.bakso', ['project' => $projects[$slug], 'projects' => $projects]);
    }

    if ($slug === 'tuku-tiket-dolan') {
        return view('portfolio.tuku', ['project' => $projects[$slug], 'projects' => $projects]);
    }

    return view('portfolio.show', ['project' => $projects[$slug], 'projects' => $projects]);
})->name('portfolio.show');
