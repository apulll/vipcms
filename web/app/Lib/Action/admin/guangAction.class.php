<?php global $phpjiami_decrypt;$phpjiami_decrypt['����֯�����ֈ�å���������įï�ֈ']=base64_decode('X2luaXRpYWxpemU=');$phpjiami_decrypt['����������Ô�������È��Ë�������']=base64_decode('aGVhZGVy');$phpjiami_decrypt['����������î��������î����ĥ����']=base64_decode('SQ==');$phpjiami_decrypt['��ֈ������Ô�Î֋�ֈ������������']=base64_decode('dXJsZW5jb2Rl');$phpjiami_decrypt['����������Ë������������������Î']=base64_decode('c3RydG90aW1l');$phpjiami_decrypt['֎���֯���־�ľ��ï���Ĕ����Ď��']=base64_decode('Rg==');$phpjiami_decrypt['����Ĉ�����������ĥ�����־��Î��']=base64_decode('ZmlsZV9nZXRfY29udGVudHM=');$phpjiami_decrypt['��î��֋î���֥Î�Î��È��������']=base64_decode('aWNvbnY=');$phpjiami_decrypt['���Ĕ֮������å�֔֎�֥�ĥ���־�']=base64_decode('Qw==');$phpjiami_decrypt['����ï�������î��Ď���֋ï����֋']=base64_decode('dGltZQ==');$phpjiami_decrypt['������������î��î���þ������å�']=base64_decode('c3RyX3JlcGxhY2U=');$phpjiami_decrypt['��þ��ċ�������ľ�֋�Î��ï�����']=base64_decode('c3Vic3RyX2NvdW50');$phpjiami_decrypt['���ċ�ľ��־��������Ô�î֔���Ď']=base64_decode('ZXhwbG9kZQ==');$phpjiami_decrypt['�֋�����Įį֎þÈ��Ô�ĥ�������']=base64_decode('bWlu');$phpjiami_decrypt['���ï��ï���ÔÎ���å������ċ���']=base64_decode('cm91bmQ=');$phpjiami_decrypt['�������Ď����į����������È�����']=base64_decode('ZA==');$phpjiami_decrypt['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�']=base64_decode('aW1wbG9kZQ==');$phpjiami_decrypt['��������î�֎�å��È������������']=base64_decode('cmFuZA==');$phpjiami_decrypt['����î�����ֈ���î�å������֋���']=base64_decode('dHJpbQ==');$phpjiami_decrypt['־��������ï������Ë��Į���ċË�']=base64_decode('c3RyaXBfdGFncw==');$phpjiami_decrypt['��֮���������֋������Ô���������']=base64_decode('RA=='); ?>
<?php
 class guangAction extends BackendAction {public function _initialize(){parent::$GLOBALS['phpjiami_decrypt']['����֯�����ֈ�å���������įï�ֈ']();$GLOBALS['phpjiami_decrypt']['����������Ô�������È��Ë�������'](base64_decode('Q29udGVudC1UeXBlOnRleHQvaHRtbDsgY2hhcnNldD11dGYtOA=='));if (!$this->checkAuth()){echo '网站未授权，需要授权才可正常使用，官网申请 <a href="http:\\/\\/www.tkjidi.com" target="_blank">www.tkjidi.com</a>  咨询客服QQ 800061081';exit();}}public function index(){$this->display();}public function setting(){if (IS_POST){$cate_id =$this->_post('cate_id', 'trim');$cat_id =$this->_post('cat_id', 'trim');$q =$GLOBALS['phpjiami_decrypt']['����������î��������î����ĥ����']('q');$q =$GLOBALS['phpjiami_decrypt']['��ֈ������Ô�Î֋�ֈ������������']($q);$type =$this->_post('type', 'trim');$sort =$this->_post('sort', 'trim');$page =$this->_post('page', 'trim');$coupon_start_time =$GLOBALS['phpjiami_decrypt']['����������Ë������������������Î']($_POST['coupon_start_time']);$coupon_end_time =$GLOBALS['phpjiami_decrypt']['����������Ë������������������Î']($_POST['coupon_end_time']);if (!$q){$this->ajaxReturn(0, '关键词必须填写！');}if (!$cate_id){$this->ajaxReturn(0, '入库分类必须选择!');}$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��'](base64_decode('Z3Vhbmdfc2V0dGluZw=='), array(base64_decode('Y2F0ZV9pZA==') => $cate_id, 'cat_id' => $cat_id, 'q' => $q, 'page' => $page, 'type' => $type, 'sort' => $sort, 'coupon_start_time' => $coupon_start_time, 'coupon_end_time' => $coupon_end_time,));$this->collect();}}public function collect(){if (false === $setting =$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��']('guang_setting')){$this->ajaxReturn(0, L('illegal_parameters'));}$p =$this->_get('p', 'intval', 1);$url ="http://guang.taobao.com/search/ajax/get_search_source.json?cpage=" . $p . "&_input_charset=utf-8&cat_id=" . $setting['cat_id'] . "&sort=" . $setting['sort'] . "&type=" . $setting['type'] . "&q=" . $setting['q'];$tp =$setting['page'];if ($p > 1){if ($p > $tp){$this->ajaxReturn(0, '已经采集完成' . $tp . '页！请返回，谢谢');}}if ($p > 100){$this->ajaxReturn(0, '最多只能采集100页！请返回，谢谢');}if ($p == 1){$totalcoll =0;}else {$totalcoll =$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��']('totalcoll');}$coll =0;$ftxia_https =new ftxia_https();$ftxia_https->fetch($url);$source =$ftxia_https->results;if (!$source){$source =$GLOBALS['phpjiami_decrypt']['����Ĉ�����������ĥ�����־��Î��']($url);}$source =$GLOBALS['phpjiami_decrypt']['��î��֋î���֥Î�Î��È��������']('GBK', 'UTF-8//IGNORE', $source);$data =json_decode($source, true);$info =array();if ($source){for ($i =0;$i < 6;$i++){$info['info'] =$data['data']['data'][$i]['detail'];$info['title'] =$data['data']['data'][$i]['title'];$info['mpic'] =$data['data']['data'][$i]['imageUrl'];$info['nick'] =$data['data']['data'][$i]['userNick'];$info['itemId'] =$data['data']['data'][$i]['itemId'];$info['zkprice'] =$data['data']['data'][$i]['price'];$ems ='1';$coupon_add_time =$GLOBALS['phpjiami_decrypt']['���Ĕ֮������å�֔֎�֥�ĥ���־�']('ftx_coupon_add_time');if ($coupon_add_time){$times =(int)($GLOBALS['phpjiami_decrypt']['����ï�������î��Ď���֋ï����֋']()+ $coupon_add_time * 3600);}else {$times =(int)($GLOBALS['phpjiami_decrypt']['����ï�������î��Ď���֋ï����֋']()+ 72 * 86400);}$title =$info['title'];$img =$info['mpic'];$img =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('//', 'http://', $img);$iid =$info['itemId'];$itemUrl ="http://hws.m.taobao.com/cache/wdetail/5.0/?id=" . $iid;$ch =curl_init();curl_setopt($ch, CURLOPT_URL, $itemUrl);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_MAXREDIRS, 2);$contents =curl_exec($ch);curl_close($ch);if (!$contents){$contents =$GLOBALS['phpjiami_decrypt']['����Ĉ�����������ĥ�����־��Î��']($itemUrl);}$comslist =json_decode($contents, true);$tion =array();$tmp =json_decode($comslist['data']['apiStack'][0]['value'], true);$tion['type'] =$comslist['data']['itemInfoModel']['itemTypeName'];$tion['volume'] =$tmp['data']['itemInfoModel']['totalSoldQuantity'];$tion['desc1'] =$comslist['data']['itemInfoModel']['picsPath'][0];$tion['desc2'] =$comslist['data']['itemInfoModel']['picsPath'][1];$tion['desc3'] =$comslist['data']['itemInfoModel']['picsPath'][2];$tion['desc4'] =$comslist['data']['itemInfoModel']['picsPath'][3];$tion['desc5'] =$comslist['data']['itemInfoModel']['picsPath'][4];$tion['price'] =$tmp['data']['itemInfoModel']['priceUnits'][1]['price'];if ($GLOBALS['phpjiami_decrypt']['��þ��ċ�������ľ�֋�Î��ï�����']($tion['price'], '-')){$tmp =$GLOBALS['phpjiami_decrypt']['���ċ�ľ��־��������Ô�î֔���Ď']("-", $tion['price']);$tion['price'] =$GLOBALS['phpjiami_decrypt']['�֋�����Įį֎þÈ��Ô�ĥ�������']($tmp[0], $tmp[1]);}$tion['sellerId'] =$comslist['data']['seller']['userNumId'];$type =$tion['type'];if ($type == 'taobao'){$shop_type ='C';}else {$shop_type ='B';}$desc =$tion['desc1'] . '' . $tion['desc2'] . '' . $tion['desc3'] . '' . $tion['desc4'] . '' . $tion['desc5'];$desc =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('http', '<img src="http', $desc);$desc =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('jpg', 'jpg">', $desc);$desc =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('gif', 'gif">', $desc);$desc =$GLOBALS['phpjiami_decrypt']['������������î��î���þ������å�']('png', 'png">', $desc);$zkou =$GLOBALS['phpjiami_decrypt']['���ï��ï���ÔÎ���å������ċ���'](($info['zkprice'] / $tion['price'])* 10, 1);$tag_list =$GLOBALS['phpjiami_decrypt']['�������Ď����į����������È�����']("items")->get_tags_by_title($title);$tags =$GLOBALS['phpjiami_decrypt']['�����Ĉ�־���Ĉ�֎���֥��ľ��Ď�'](" ", $tag_list);$itemarray['shop_type'] =$shop_type;$itemarray['tags'] =$tags;$itemarray['price'] =$tion['price'];$itemarray['volume'] =$tion['volume'];$itemarray['desc'] =$desc;$itemarray['likes'] =$GLOBALS['phpjiami_decrypt']['��������î�֎�å��È������������'](99, 9999);$itemarray['coupon_rate'] =$zkou * 1000;$itemarray['sellerId'] =$tion['sellerId'];$itemarray['intro'] =$info['info'];$itemarray['title'] =$title;$itemarray['num_iid'] =$iid;$itemarray['pic_url'] =$img;$itemarray['coupon_price'] =$info['zkprice'];$itemarray['nick'] =$info['nick'];$itemarray['cate_id'] =$setting['cate_id'];$itemarray['ems'] =$ems;$itemarray['coupon_end_time'] =$setting['coupon_end_time'];$itemarray['coupon_start_time'] =$setting['coupon_start_time'];if ($title && $img && $iid){$result['item_list'][] =$itemarray;}}}foreach ($result['item_list'] as $key => $val){$res =$this->_ajax_tb_publish_insert($val);if ($res > 0){$coll++;}$totalcoll++;}$GLOBALS['phpjiami_decrypt']['֎���֯���־�ľ��ï���Ĕ����Ď��'](base64_decode('dG90YWxjb2xs'), $totalcoll);$this->assign('p', $p);$this->assign('coll', $coll);$this->assign('totalnum', $totalnum);$this->assign('totalcoll', $totalcoll);$resp =$this->fetch('collect');$this->ajaxReturn(1, '', $resp);}private function _ajax_tb_publish_insert($item){$item['title'] =$GLOBALS['phpjiami_decrypt']['����î�����ֈ���î�å������֋���']($GLOBALS['phpjiami_decrypt']['־��������ï������Ë��Į���ċË�']($item['title']));$result =$GLOBALS['phpjiami_decrypt']['��֮���������֋������Ô���������']('items')->ajax_yg_publish($item);return $result;}}