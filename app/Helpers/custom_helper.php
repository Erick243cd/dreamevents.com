<?php

// Header data helper
function headerData(?string $page, ?string $lang)
{
    $data  = [
        'doctype' => doctype(),
        'lang' => $lang ?? 'fr',
        'title' => ucfirst($page) . ' | Dream Events',
        'faveicon' => link_tag('public/assets/img/icon/xfavicon.png', 'shortcut icon', 'image/ico'),
        
        'cssLinks' => [
            link_tag('public/assets/css/components.min.css'),
            link_tag('public/assets/css/style.min.css')
        ],

        'scriptLinks' => [
            script_tag('public/assets/js/vendor/modernizr-3.5.0.min.js'),
            script_tag('public/assets/js/vendor/jquery-1.12.4.min.js'),
            script_tag('public/assets/js/plugins.min.js'),
            script_tag('public/assets/js/owl.carousel_slick.min.js'),
            script_tag('public/assets/js/jquery_slicknav.min.js'),
        ],

        'metaHeader' => [
           '<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="description" content="Salles de fêtes, Photographie événementielle, Robes de mariages, Service de décoration, à Lubumbashi">
            <meta name="keywords" content="Salles de fêtes, Photographie événementielle, Robes de mariages, Service de décoration, à Lubumbashi">
            <meta name="author" content="Dream Event - Erick Banze">'
        ],
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
