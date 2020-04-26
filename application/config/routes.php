<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['home'] = 'pages/home';
$route['create'] = 'create/index/$1';
$route['browse'] = 'browse/index/$1';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;