<?php defined('BASEPATH') OR exit('No direct script access allowed');
$admin = ADMIN;

$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_404';
$route['translate_uri_dashes'] = TRUE;

// pages routes
$route["about-israel"] = "pages/about_israel";
$route["about"] = "pages/about";
$route["contact"] = "pages/contact";
$route["terms-and-conditions"] = "pages/terms_and_conditions";
$route["privacy-policy"] = "pages/privacy_policy";
$route["apply/(:any)"]['get'] = "apply/index/$1";
$route["apply/(:any)"]['post'] = "apply/post/$1";

// sitemap routes
$route["sitemap.xml"] = "api/sitemap";
$route["robots.txt"] = "api/robots";

// admin routes
$route["$admin/forgot-password"] = "$admin/login/forgot_password";
$route["$admin/check-otp"] = "$admin/login/check_otp";
$route["$admin/change-password/(:any)"] = "$admin/login/change_password/$1";
$route["$admin/dashboard"] = "$admin/home";