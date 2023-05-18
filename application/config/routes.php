<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['administrator/login'] = 'admin/auth';
$route['administrator/login/process'] = 'admin/auth/process_login';
$route['administrator/logout'] = 'admin/auth/logout';
$route['dashboard'] = 'admin/dashboard';


$route['berita'] = 'Berita';
$route['contact'] = 'Contact';
$route['periksa'] = 'Periksa';
