<?php

if (!function_exists('is_logged')) {

    function isLoggedIn()
    {
        $data['user_data'] = session()->get('user_data');
        
        if ($data['user_data'] == null) {
            return false;
        } else {
            return true;
        }
    }
}


// Header data helper
function headerData(?string $page, ?string $lang)
{
    $data  = [
        'doctype' => doctype(),
        'lang' => $lang ?? 'fr',
        'title' => ucfirst($page) . ' | Tayari-Events',
        'faveicon' => link_tag('public/assets/images/favicon.ico', 'shortcut icon', 'image/ico'),

        'metaHeader' => [
            '<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
            <meta name="robots" content="index, follow"/>
            <meta name="keywords" content=""/>
            <meta name="description" content=""/>'
        ],

        'home' => ($lang === 'fr') ? 'Accueil' : 'Home',
        'about' => ($lang === 'fr') ? 'A propos' : 'About',
        'news' => ($lang === 'fr') ? 'Nouveautés' : 'News',
        'contact' => ($lang === 'fr') ? 'Contact' : 'Contact',
        'listings' => ($lang === 'fr') ? 'Services' : 'Listings',
        'profile' => ($lang === 'fr') ? 'Mon profile' : 'My profile',
        'login_signin' => ($lang === 'fr') ? 'Connexion & Inscription' : 'Login & Signin',
        'dashboard' => ($lang === 'fr') ? 'Panneau de contrôle' : 'dashboard',
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
