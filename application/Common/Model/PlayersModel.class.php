<?php
namespace Common\Model;

use Common\Model\CommonModel;

class PlayersModel extends CommonModel{
	
	//自动验证
	protected $_validate = array(
		//array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
		array('full_name', 'require', '球员英文名称不能为空！', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
	);
	
	protected function _before_write(&$data) {
		parent::_before_write($data);
	}
	
}




