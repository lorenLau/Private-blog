<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

// 后台路由组
Route::group('admin',[
	'index'			=> 'admin/Index/index',
	'/login' 		=> 'admin/Login/index',
	'/do_login' 	=> 'admin/Login/do_login',
	'/logout' 		=> 'admin/Login/logout',
]);




// 前台路由组
Route::rule('/','index/Index/index');
Route::group('index',[
	'/' => 'index/Index/index',

]);