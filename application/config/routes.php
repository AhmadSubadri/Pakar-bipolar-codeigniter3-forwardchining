<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['administrator/login'] = 'admin/auth';
$route['administrator/login/process'] = 'admin/auth/process_login';
$route['administrator/logout'] = 'admin/auth/logout';

$route['dashboard'] = 'admin/dashboard';
$route['data-penyakit'] = 'admin/data_penyakit';
$route['data-gejala'] = 'admin/data_gejala';
$route['data-riwayat'] = 'admin/data_riwayat';
$route['data-rule'] = 'admin/data_rule';
$route['data-pasien'] = 'admin/data_pasien';
$route['data-admin'] = 'admin/data_admin';


$route['berita'] = 'Berita';
$route['contact'] = 'Contact';
$route['periksa'] = 'Periksa';
