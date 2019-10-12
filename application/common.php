<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

// P打印函数

if(!function_exists('p')){

	function p($var){

		echo '<pre style="width:98%; padding:1%; background:#007979; font-size:14px; font-family:YaHei; margin:0 auto; border-radius:33px; color:fff;">';
		if(is_bool($var) || is_null($var)){
			var_dump($var);
		}else{
			print_r($var);
		}
		echo '</pre>';
	}
	
}

