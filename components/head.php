<?php
function renderHead($page)
{
    $seoData = [
        'home' => [
            'title' => 'Home - Cüneyt Kaya Web Development',
            'description' => 'Welcome to Cüneyt Kaya\'s official website. Specializing in web development services.',
            'keywords' => 'home, web development, services',
            'image' => 'https://kayacuneyt.com/assets/images/laci-arkaplan.jpg'
        ],
        'about' => [
            'title' => 'About Me - Cüneyt Kaya',
            'description' => 'Learn more about Cüneyt Kaya, a professional web developer with years of experience.',
            'keywords' => 'about, Cüneyt Kaya, web developer, experience',
            'image' => 'https://kayacuneyt.com/assets/images/laci-arkaplan.jpg'
        ],
        'portfolio' => [
            'title' => 'Portfolio - Cüneyt Kaya Web Development',
            'description' => 'Check out my portfolio showcasing various web development projects.',
            'keywords' => 'portfolio, previous works, web development, projects, showcase',
            'image' => 'https://kayacuneyt.com/assets/images/laci-arkaplan.jpg'
        ],
        'contact' => [
            'title' => 'Contact - Cüneyt Kaya Web Development',
            'description' => 'Get in touch with Cüneyt Kaya for professional web development services.',
            'keywords' => 'contact, web development, get in touch, services',
            'image' => 'https://kayacuneyt.com/assets/images/laci-arkaplan.jpg'
        ]
    ];


    $title = isset($seoData[$page]) ? $seoData[$page]['title'] : 'Home - Cüneyt Kaya Web Development';
    $description = isset($seoData[$page]) ? $seoData[$page]['description'] : 'Welcome to Cüneyt Kaya\'s official website.';
    $keywords = isset($seoData[$page]) ? $seoData[$page]['keywords'] : 'web development, services';
    $image = isset($seoData[$page]) ? $seoData[$page]['image'] : 'https://kayacuneyt.com/assets/images/default-image.jpg';
    $url = 'https://kayacuneyt.com/' . $page;

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="' . $description . '" />
        <meta name="author" content="Cüneyt Kaya" />
        <meta name="keywords" content="' . $keywords . '" />
        <meta name="robots" content="index, follow">
        
        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="' . $title . '" />
        <meta property="og:description" content="' . $description . '" />
        <meta property="og:image" content="' . $image . '" />
        <meta property="og:url" content="' . $url . '" />
        <meta property="og:type" content="website" />
        
        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="' . $title . '" />
        <meta name="twitter:description" content="' . $description . '" />
        <meta name="twitter:image" content="' . $image . '" />
        <meta name="twitter:url" content="' . $url . '" />
        
        <!-- Canonical Link -->
        <link rel="canonical" href="' . $url . '" />
        
        <!-- Favicon -->
        <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
        
        <!-- Page Title -->
        <title>' . $title . '</title>
        
        <!-- CSS Stylesheets -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./assets/css/styles.css" rel="stylesheet" />
    </head>
    <body data-page="' . $page . '" class="d-flex flex-column h-100 bg-light">';
}
