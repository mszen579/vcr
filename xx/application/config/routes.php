<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'processes';
$route['join'] = 'processes/bringmejoin';
$route['add'] = 'processes/bringmeaddpage';
$route['register'] = 'processes/insertuser';
$route['login'] = 'processes/login';
$route['logout'] = 'processes/logout';
$route['addlisting'] = 'processes/addlisting';
$route['show/(:any)'] = 'processes/showone/$1';
$route['delet/(:any)'] = 'processes/delet/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
