<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*start*/
$route['start'] = 'WelController/wel_func';

/*register*/

$route['register']['GET'] = 'Auth/RegController/reg_func';
$route['register']['POST'] = 'Auth/RegController/reg_post_func';

/*login*/

$route['login']['GET'] = 'Auth/LoginController/log_func';
$route['login']['POST'] = 'Auth/LoginController/log_post_func';

/*CRUD COR UPLOAD*/
$route['psched']['GET'] = 'Auth/COR_fileController/upfile_func';
$route['psched']['POST'] = 'Auth/COR_fileController/upfile_post_func';

$route['file_upload']['GET'] = 'Auth/COR_fileController/file_func';
$route['file_upload']['POST'] = 'Auth/COR_fileController/file_post_func';

/*bootstrap*/
$route['bootstrap'] = 'bootstrap/bootController/b_func';
$route['save'] = 'Users/index';
$route['insert'] = 'Users/insertuser';

