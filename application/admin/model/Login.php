<?php

namespace app\admin\model;

use think\Model;
use think\Db as Db;

class Login extends Model
{
    public function login($username, $password){
    	$admin = Db::name('admin_user')->where('username',$username)->find();

    	if($admin){
    		if($admin['password'] == md5($password)){
    			return 1;
    		}else{
    			return 2;
    		}
    	}
    }
}
