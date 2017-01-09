<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';

$route['Index'] = 'Home';
$route['pendaftaran'] = 'pendaftaran';
$route['kontak'] = 'kontak';
$route['visimisi'] = 'visimisi';
$route['pengurus'] = 'pengurus';
$route['kegiatan'] = 'kegiatan';
$route['gallery'] = 'gallery';
$route['pembatalan'] = 'pembatalan';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
