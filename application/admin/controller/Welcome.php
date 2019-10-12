<?php

namespace app\admin\controller;

use think\Controller;
use think\Session;
use think\Db;

class Welcome extends Controller
{
    public function index(){	
    	$version = Db::query('select VERSION() as ver');
    	$data = [
    		'session_name' 		=> Session::get('user'),			// 当前用户登录名	
	    	'now_time' 			=> date("Y-m-d H:i:s",time()),		//当前登录时间
	    	'server_addr' 		=> $_SERVER['SERVER_ADDR'],			//服务器ip
	    	'server_name' 		=> $_SERVER['SERVER_NAME'],			//服务器的主机名
	    	'server_software' 	=> $_SERVER['SERVER_SOFTWARE'],		//标识字符串
	    	'php_version' 		=> PHP_VERSION,						//PHP版本
	    	'php_runway' 		=> php_sapi_name(),					//PHP运行方式
	    	'php_mysql_version' => $version[0]['ver'],				//mysql版本
	    	'think_version' 	=> THINK_VERSION,					//thinkPHP版本
	    	'max_upload_size'	=> ini_get('upload_max_filesize'),	//最大上传限制
    	];
    									

    	$this->assign('data', $data);
    	return view();
    }
}
