<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'processes/index';
$route['login'] = 'processes/login';
$route['register'] = 'processes/register';
$route['post'] = 'processes/addproduct';
$route['logout'] = 'processes/logout';
$route['show/(.*)'] = '/processes/showOne/$1';
$route['delete/(.*)'] = '/processes/delete/$1';
$route['gohomepage'] = '/processes/bringmeresultpage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
