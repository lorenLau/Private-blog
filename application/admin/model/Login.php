<?php

namespace app\admin\model;

use think\Model;
use think\Db as Db;
use think\captcha\Captcha as Captcha;

class Login extends Model
{
    public function login($user_data){
        $captcha = new Captcha;
        if(!$captcha->check($user_data['code'])){
            return 3;
        }

    	$admin = Db::name('admin_user')->where('username',$user_data['username'])->find();

    	if($admin){
    		if($admin['password'] == md5($user_data['password'])){
    			return 1;
    		}else{
    			return 2;
    		}
    	}
    }
}
