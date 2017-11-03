<?php
namespace Admin\Controller;

use Common\Controller\AdminbaseController;

class PlayerController extends AdminbaseController{
	
	protected $player_model;
	
	public function _initialize() {
		parent::_initialize();
		$this->player_model = D("Common/Players");
	}
	
	// 后台球员列表
	public function index(){
		$players=$this->player_model->select();
		$this->assign("players",$players);
		/*echo '<pre>';
		print_r($players);exit;*/
		$this->display();
	}
	
	// 球员添加
	public function add(){
		// $this->assign("targets",$this->targets);
		$this->display();
	}
	
	// 友情链接添加提交
	public function add_post(){
		/*echo '<pre>';
		print_r($_POST);exit;*/
		if(IS_POST){
			if ($this->player_model->create()!==false) {
				if ($this->player_model->add()!==false) {
					$this->success("添加成功！", U("player/index"));
				} else {
					$this->error("添加失败！");
				}
			} else {
				$this->error($this->player_model->getError());
			}
		
		}
	}
	
	// 友情链接编辑
	public function edit(){
		$id=I("get.id",0,'intval');
		$player=$this->player_model->where(array('player_id'=>$id))->find();
		$this->assign($player);
		$this->display();
	}
	
	// 友情链接编辑
	public function edit_post(){
		if (IS_POST) {
			if ($this->player_model->create()!==false) {
				if ($this->player_model->save()!==false) {
					$this->success("保存成功！");
				} else {
					$this->error("保存失败！");
				}
			} else {
				$this->error($this->player_model->getError());
			}
		}
	}
	
	// 友情链接排序
	public function listorders() {
		$status = parent::_listorders($this->link_model);
		if ($status) {
			$this->success("排序更新成功！");
		} else {
			$this->error("排序更新失败！");
		}
	}
	
	// 友情链接删除
	public function delete(){
		if(isset($_POST['ids'])){
			
		}else{
			$id = I("get.id",0,'intval');
			if ($this->link_model->delete($id)!==false) {
				$this->success("删除成功！");
			} else {
				$this->error("删除失败！");
			}
		}
	
	}

	// 友情链接显示/隐藏
	public function toggle(){
		if(isset($_POST['ids']) && $_GET["display"]){
			$ids = I('post.ids/a');
			if ($this->link_model->where(array('link_id'=>array('in',$ids)))->save(array('link_status'=>1))!==false) {
				$this->success("显示成功！");
			} else {
				$this->error("显示失败！");
			}
		}
		
		if(isset($_POST['ids']) && $_GET["hide"]){
			$ids = I('post.ids/a');
			if ($this->link_model->where(array('link_id'=>array('in',$ids)))->save(array('link_status'=>1))!==false) {
				$this->success("隐藏成功！");
			} else {
				$this->error("隐藏失败！");
			}
		}
	}
	
}