<?php global $phpjiami_decrypt;$phpjiami_decrypt['����֯�����ֈ�å���������įï�ֈ']=base64_decode('X2luaXRpYWxpemU=');$phpjiami_decrypt['���ĥ�Î���������ċ�ֈ���ÈľĈ�']=base64_decode('VQ==');$phpjiami_decrypt['��֮���������֋������Ô���������']=base64_decode('RA=='); ?>
<?php
 class score_item_cateAction extends BackendAction {public function _initialize(){parent::$GLOBALS['phpjiami_decrypt']['����֯�����ֈ�å���������įï�ֈ']();$this->_mod =D('score_item_cate');}public function _before_index(){$_var_0 =array('title' => '添加分类', 'iframe' => $GLOBALS['phpjiami_decrypt']['���ĥ�Î���������ċ�ֈ���ÈľĈ�']('score_item_cate/add'), 'id' => 'add', 'width' => '400', 'height' => '130');$this->assign('big_menu', $_var_0);$this->sort ='ordid';$this->order ='ASC';}protected function _search(){$_var_1 =array();($_var_2 =$this->_request('keyword', 'trim'))&& $_var_1['name'] =array('like', '%' . $_var_2 . '%');$this->assign('search', array('keyword' => $_var_2,));return $_var_1;}public function ajax_check_name(){$_var_3 =$this->_get('name', 'trim');$_var_4 =$this->_get('id', 'intval');if ($GLOBALS['phpjiami_decrypt']['��֮���������֋������Ô���������'](base64_decode('c2NvcmVfaXRlbV9jYXRl'))->name_exists($_var_3, $_var_4)){$this->ajaxReturn(0, '该分类名称已存在');}else {$this->ajaxReturn(1);}}}