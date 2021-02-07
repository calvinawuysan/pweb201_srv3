<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['rooms/(:any)'] = 'room/roomlist/$1';
$route['rooms'] = 'room/roomlist';
$route['guests/(:any)'] = 'guest/guestlist/$1';
$route['guests'] = 'guest/guestlist';
$route['members/(:any)'] = 'member/memberlist/$1';
$route['members'] = 'member/memberlist';

$route['login/(:num)'] = 'member/login/$1';
$route['login'] = 'member/login';
$route['loginauth'] = 'member/auth';
$route['logout'] = 'member/logout';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
