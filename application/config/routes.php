<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['home'] = 'pages/home';
$route['create'] = 'create/index/$1';
$route['browse'] = 'browse/index/$1';
$route['shoppingcart'] = 'shoppingcart/index/$1';
$route['upload-image'] = 'imageuploadcontroller';
$route['store-image'] = 'imageuploadcontroller/store';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;