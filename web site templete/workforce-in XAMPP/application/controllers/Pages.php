<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Public_Controller
{
    public function about_israel()
    {
        $data['name'] = 'about-israel';
        $data['breadcumb'] = 'About Israel';

        return $this->template->load('template', 'pages/about-israel', $data);
    }

    public function about()
    {
        $data['name'] = 'about';
        $data['breadcumb'] = 'About Us';

        return $this->template->load('template', 'pages/about', $data);
    }

    public function contact()
    {
        $data['name'] = 'contact';
        $data['breadcumb'] = 'Contact Us';

        return $this->template->load('template', 'pages/contact', $data);
    }

    public function terms_and_conditions()
    {
        $data['name'] = 'terms-and-conditions';
        $data['breadcumb'] = 'Terms & Conditions';

        return $this->template->load('template', 'pages/terms-and-conditions', $data);
    }

    public function privacy_policy()
    {
        $data['name'] = 'privacy-policy';
        $data['breadcumb'] = 'Privacy Policy';

        return $this->template->load('template', 'pages/privacy-policy', $data);
    }
}