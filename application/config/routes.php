<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Engin/gohome';

$route['login'] = 'Engin/login';
$route['register'] = 'Engin/register';
$route['logout'] = 'Engin/logout';
$route['gotologregpage'] = 'Engin/gotologreg';



$route['logoutcp'] = 'Engin/logoutadmin';// to logout form the admin home
$route['cpadmin'] = 'Engin/gotologregadmin';// for admins
$route['adminlog'] = 'Engin/loginadmin';


$route['404_override'] = '';
$route['translate_uri_dashes'] = false;


