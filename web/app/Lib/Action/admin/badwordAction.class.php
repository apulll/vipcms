<?php global $phpjiami_decrypt;$phpjiami_decrypt['����֯�����ֈ�å���������įï�ֈ']=base64_decode('X2luaXRpYWxpemU=');$phpjiami_decrypt['�֎���������Ĉ���å������ċ�־��']=base64_decode('TA==');$phpjiami_decrypt['���ĥ�Î���������ċ�ֈ���ÈľĈ�']=base64_decode('VQ==');$phpjiami_decrypt['��֮���������֋������Ô���������']=base64_decode('RA=='); ?>
<?php
 class badwordAction extends BackendAction {public function _initialize(){parent::$GLOBALS['phpjiami_decrypt']['����֯�����ֈ�å���������įï�ֈ']();$this->_mod =D('badword');}public function _before_index(){$_var_0 =array('title' => $GLOBALS['phpjiami_decrypt']['�֎���������Ĉ���å������ċ�־��']('添加敏感词'), 'iframe' => $GLOBALS['phpjiami_decrypt']['���ĥ�Î���������ċ�ֈ���ÈľĈ�']('badword/add'), 'id' => 'add', 'width' => '500', 'height' => '130');$this->assign('big_menu', $_var_0);}protected function _search(){$_var_1 =array();($_var_2 =$this->_request('word_type', 'trim'))&& $_var_1['word_type'] =array('eq', $_var_2);($_var_3 =$this->_request('keyword', 'trim'))&& $_var_1['badword'] =array('like', '%' . $_var_3 . '%');$this->assign('search', array('keyword' => $_var_3, 'word_type' => $_var_2,));return $_var_1;}public function ajax_check_name(){$_var_4 =$this->_get('badword', 'trim');$_var_5 =$this->_get('id', 'intval');if ($GLOBALS['phpjiami_decrypt']['��֮���������֋������Ô���������'](base64_decode('YmFkd29yZA=='))->name_exists($_var_4, $_var_5)){$this->ajaxReturn(0, L('该敏感词已存在'));}else {$this->ajaxReturn(1);}}}