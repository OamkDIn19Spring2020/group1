<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['create'] = 'create/index';
$route['(:any)'] = 'create/index/$1';
$route['(:any)'] = 'pages/view/$1';
$route['home'] = 'pages/home';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;