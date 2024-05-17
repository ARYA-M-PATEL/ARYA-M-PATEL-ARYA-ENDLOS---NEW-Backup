<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends Public_Controller
{

    public function index($page = 'mobile')
    {
        $data['name'] = 'apply';
        $data['page'] = $page;
        

        switch ($page) {
            case 'otp-verification':
                $data['pageTitle'] = 'OTP Verification';
                break;
            case 'login-information':
                $data['pageTitle'] = 'Login Information';
                break;
            case 'personal-information':
                $data['datetimepicker'] = true;
                $data['pageTitle'] = 'Personal Information';
                break;
            case 'contact-information':
                $data['pageTitle'] = 'Contact Information';
                break;
            case 'family-information':
                $data['pageTitle'] = 'Family Information';
                break;
            case 'linguistic-skills':
                $data['pageTitle'] = 'Linguistic Skills';
                break;
            case 'professional-information':
                $data['pageTitle'] = 'Professional Information';
                break;
            case 'professional-experience':
                $data['pageTitle'] = 'Professional Experience';
                break;
            case 'bank-account-details':
                $data['pageTitle'] = 'Bank Account Details';
                break;
            case 'documents':
                $data['pageTitle'] = 'Documents';
                break;
            
            default:
                $data['pageTitle'] = 'Mobile Number';
                break;
        }

        return $this->template->load('template', 'apply/home', $data);
    }
}