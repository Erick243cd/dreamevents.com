<?php

namespace App\Controllers;

use Config\UserAgents;

class Pages extends BaseController
{
    public function views($page = 'home')
    {

        $agent = $this->request->getUserAgent();

        if (file_exists(APPPATH . 'views/pages/' . localLang() . '/' . $page . '.php')) {
            //Head and footer Links
            $limit = $page == 'services' ? 10 : 4;
            $data = [
                'links' => headerData($page, localLang()),
                'page' => $page,
                'lang' => localLang(),
                'isMobile' => $agent->isMobile(),
                'services' => ($page == 'home' || $page == 'services') ? $this->serviceModel->asObject()->limit($limit)->find() : $this->serviceModel->asObject()->limit($limit)->find()
            ];
            
            return view('pages/' . localLang() . '/' . $page, $data);
        } else {
            return view('errors/404');
        }
    }

    public function index()
    {
        return view('welcome_message');
    }
}
