<?php

// Header data helper
function headerData(?string $page, ?string $lang)
{
    $data  = [
        'doctype' => doctype(),
        'lang' => $lang ?? 'fr',
        'title' => ucfirst($page) . ' | Afrinewsoft',
        'faveicon' => link_tag('public/favicon.png', 'shortcut icon', 'image/ico'),
        'cssLinks' => link_tag('public/assets/main.css'),
        'scriptLinks' => [
            script_tag('public/assets/js/bootstrap.bundle.min.js'),
            script_tag('public/assets/js/tiny-slider.js'),
            script_tag('public/assets/js/main.js'),
        ],
        'metaHeader' => [
            '<meta charset="utf-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Free Web tutorials">
            <meta name="keywords" content="Afrinewsoft, Agence digital RDC, Startup Numérique de Lubumbashi">
            <meta name="author" content="Afrinewsoft Erick Banze">'
        ],
        'home' => ($lang === 'fr') ? 'Accueil' : 'Home',
        'about' => ($lang === 'fr') ? 'A propos' : 'About Us',
        'services' => ($lang === 'fr') ? 'Nos Services' : 'Our Services Us',
        'contact' => ($lang === 'fr') ? 'Contact' : 'Contact Us',
        'gallery' => ($lang === 'fr') ? 'Galerie' : 'Gallery',
    ];

    return (object)$data;
}

//Get agent long
function localLang()
{
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['fr', 'en'];

    $lang = in_array($lang, $acceptLang) ? $lang : 'fr';

    return $lang;
}
