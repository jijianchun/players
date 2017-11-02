<?php
namespace Demo\Controller;
use Common\Controller\HomebaseController;

// 指定允许其他域名访问
header('Access-Control-Allow-Origin:*');
// 响应类型
//header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with,content-type');

class IndexController extends HomebaseController{
	
	function index(){
		echo sp_random_string();
	}

	function category(){
		$data = cmf_get_site_info();
		echo json_encode($data);die();
	}

	function add(){
		$this->display();
	}

}