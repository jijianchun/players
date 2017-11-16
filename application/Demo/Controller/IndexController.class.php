<?php
namespace Demo\Controller;
use Common\Controller\HomebaseController;

// 指定允许其他域名访问
header('Access-Control-Allow-Origin:*');
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with,content-type');

class IndexController extends HomebaseController{

	function index(){

		$player_model = D("Common/Players");
		$players=$player_model->select();
		echo '<pre>';
		print_r($players);exit;
	}

	function category(){
		$data = cmf_get_site_info();
		echo json_encode($data);die();
	}

	function add(){
		$this->display();
	}

	// 根据姓名搜索球员
	function query(){
		$name = I('post.name');
		$player_model = D("Common/Players");
		$player = $player_model->where("`player_name` like '%$name%'")->select();

		//echo D("Common/Players")->getLastSql();exit;

		// 对图片地址做个处理，变成完整链接
		$new_player = array();
		foreach($player as $key=>$value){
			foreach($value as $ke=>$val){
				if($ke == 'player_image'){
					$new_player[$key][$ke] = sp_get_image_url($val);
				}else{
					$new_player[$key][$ke] = $val;
				}
			}
			
		}

		echo json_encode($new_player);exit;
	}

}