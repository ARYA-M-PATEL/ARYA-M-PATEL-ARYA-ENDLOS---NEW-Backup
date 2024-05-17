<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller
{
    public function index()
    {
        $data['name'] = 'home';

        return $this->template->load('template', 'home', $data);
    }
}