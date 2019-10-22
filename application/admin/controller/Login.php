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

    // 判断用户是否已经登录
    public function is_login(){

        if(is_numeric(Session::get('user.id')) || !empty(Session::get('user'))){
            return $this->success('已登陆', url('/admin/index'));
        }
    }

    // 处理登录
    public function do_login(Request $request){


    	$user_data = input('post.');

        if(session('user') == $user_data['username']){
            return $this->is_login();
        }

    	$log = new Log;
    	$status = $log->login($user_data);

    	if($status == 1){
    		Session::set('user', $user_data['username']);
    		$this->success('登录成功！', '/admin/index');
    	}elseif ($status ==3) {
            $this->error('验证码错误', '/admin/login');
        }else {
    		$this->error('用户名或者密码错误！', '/admin/login');
    	}

    }

    public function logout(){
        session('user',null);
        return $this->success('退出成功',url('/admin/login'));
    }
}
