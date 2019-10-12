<?php

namespace app\admin\controller;

use think\Controller;

class Common extends Controller
{
    public function _initialize(){
    	if(!session('user')){
    		$this->error('请先登录！', url('/admin/login'));
    	}
    }
}
