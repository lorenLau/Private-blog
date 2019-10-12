<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Session;
use app\admin\model\Login as Log;

class Login extends Controller
{
	//展示模板
    public function index(){
    	return view();
    }

    // 处理登录
    public function do_login(Request $request){
    	$user_data = input('post.');
    	$username = $user_data['username'];
    	$password = $user_data['password'];

    	$log = new Log;
    	$status = $log->login($username, $password);

    	if($status == 1){
    		Session::set('user', $username);
    		$this->success('登录成功！', '/admin');
    	}else{
    		$this->error('用户名或者密码错误！', '/admin/login');
    	}

    }
}
