<include file="public:header" />
<link rel="stylesheet" type="text/css" href="__STATIC__/js/calendar/calendar-blue.css"/>
<script type="text/javascript" src="__STATIC__/js/calendar/calendar.js"></script>
<div class="subnav">
  <h1 class="title_2 line_x">采集器修改</h1>
</div>
<div class="pad_lr_10" >
  <form id="info_form" action="{:U('alimama/edit')}" name="searchform" method="post" >
    <table width="100%" cellspacing="0" class="table_form">
      <tbody>
        <tr>
          <th width="150">名称：</th>
          <td>
            <input name="name" type="text" id="J_name" class="input-text" size="50" value="{$info.name}"/>
            <span class="gray ml10">采集器名称</span>
          </td>
        </tr>
        <tr>
          <th><font color="red">[新]</font>&nbsp; 采集模式：</th>
          <td>
            <label class="radio_lalel">阿里妈妈联盟采集</label>
          </td>
        </tr>
                <tr>
          <th>入库分类：</th>
          <td>
            <select class="J_cate_select mr10" data-pid="0" data-uri="{:U('items_cate/ajax_getchilds', array('type'=>0))}" data-selected="{$selected_ids}"></select>
            <input type="hidden" name="cate_id" id="J_cate_id" value="{$info.cate_id}" />
            <span class="red ml10">必选。请选择采集后要写入的分类。</span>
          </td>
        </tr>

        <tr>
          <th width="150">关键词 :</th>
          <td>
            <input name="keyword" type="text" class="input-text" size="50" value="{$info.keyword}"/>
            <span class="red ml10">必填</span>
          </td>
        </tr>
        <tr>
          <th width="150">姓别 :</th>
          <td>
            <select name="sex">
              <option value="0" <if condition="$info.sex eq '0'"> selected</if>>无</option>
              <option value="1" <if condition="$info.sex eq '1'"> selected</if>>男</option>
              <option value="2" <if condition="$info.sex eq '2'"> selected</if>>女</option>
            </select>
            <span class="gray ml10">可不选。仅为采集后的商品添加新属性</span>
          </td>
        </tr>
        <tr>
          <th width="150">分类CAT :</th>
          <td>
            <input type="text" name="cat" class="input-text" size="35" value="{$info.cat}" />
            <span class="gray ml10">可不填。
            &nbsp;
            <a href="http://daxue.tkjidi.com" target="_blank">如何获取?</a></span>
          </td>
        </tr>
        <tr>
          <th width="150">佣金百分比 :</th>
          <td>
            <input type="text" name="startTkRate" class="input-text" size="5" value="{$info.startTkRate}" /> - 
            <input type="text" name="endTkRate" class="input-text" size="5" value="{$info.endTkRate}" />
            <span class="red ml10">可不填（推荐填写）。请填写1-90整数（最大值不可超过90）。</span>
          </td>
        </tr>
        <tr>
          <th width="150">销量下限 :</th>
          <td>
            <input type="text" name="startBiz30day" class="input-text" size="35" value="{$info.startBiz30day}" />
            <span class="gray ml10">可不填。如：要限制只采集销量100以上商品填写100即可。</span>
          </td>
        </tr>
        <tr>
          <th width="150">折扣比率下限 :</th>
          <td>
            <input type="text" name="startRlRate" class="input-text" size="35" value="{$info.startRlRate}" />
            <span class="gray ml10">可不填。请填写1-100之间的整数，数值越大，则让利越多，无折扣限制则不填写。</span>
          </td>
        </tr>
        <tr>
          <th width="150">价格范围 :</th>
          <td>
            <input type="text" name="start_price" size="5" class="input-text" value="{$info.start_price}"/> -
            <input type="text" name="end_price" size="5" class="input-text" value="{$info.end_price}"/>
            <span class="gray ml10">可不填。最低价格不能为0元</span>
          </td>
        </tr>
        <tr>
          <th width="150">商品来源 :</th>
          <td>
            <select name="user_type">
              <option value="">全部</option>
              <option value="1" <if condition="$info.user_type eq '1'"> selected</if> >天猫</option>
              <option value="0" <if condition="$info.user_type eq '0'"> selected</if>>淘宝</option>
            </select>
            <span class="gray ml10">可不选</span>
          </td>
        </tr>
        <tr>
          <th width="150">排序方式 :</th>
          <td>
             <select name="sort">
              <option value="">综合排序</option>
              <option value="1" <if condition="$info.sort eq '1'"> selected</if>>佣金比率从高到低</option>
              <option value="3" <if condition="$info.sort eq '3'"> selected</if>>价格从高往低</option>
              <option value="4" <if condition="$info.sort eq '4'"> selected</if>>价格从低往高</option>
              <option value="5" <if condition="$info.sort eq '5'"> selected</if>>月推广量从高到低</option>
              <option value="7" <if condition="$info.sort eq '7'"> selected</if>>月支出佣金从高到低</option>              
            </select>
            <span class="gray ml10">可不选</span>
          </td>
        </tr>        
        <tr>
          <th width="150">图片质量 :</th>
          <td>
            <select name="picQuality">
              <option value="">全部</option>
              <option value="1" <if condition="$info.picQuality eq '1'"> selected</if>>中等质量图片</option>
              <option value="2" <if condition="$info.picQuality eq '2'"> selected</if>>高质量图片</option>
            </select>
            <span class="red ml10">可不选。图片美观，清晰等综合评价</span>
          </td>
        </tr>
        <tr>
          <th width="150">图片有无牛皮廯 :</th>
          <td>
             <select name="npxType">
              <option value="">不限</option>
              <option value="2" <if condition="$info.npxType eq '2'"> selected</if>>图片轻微牛皮廯</option>
              <option value="1" <if condition="$info.npxType eq '1'"> selected</if>>图片无牛皮廯</option>
            </select>
            <span class="gray ml10">可不选</span>
          </td>
        </tr>
        <tr>
          <th>是否包邮：</th>
          <td>
            <select name="ems">
              <option value="">不限</option>
              <option value="1" <if condition="$info.sort eq '1'"> selected</if>>包邮</option>
            </select>
            <span class="gray ml10">可不选</span>
           </td>
        </tr>        
        <tr>
          <th width="150">商品库存量下限 :</th>
          <td>
            <input type="text" name="startQuantity" size="5" class="input-text" value="{$info.startQuantity}"/>
            <span class="gray ml10">可不填</span>
          </td>
        </tr>
        <tr>
          <th width="150">地区 :</th>
          <td>
            <input type="text" name="loc" size="5" class="input-text" value="{$info.loc}"/>
            <span class="gray ml10">可不填。省例：浙江、湖南，市例：杭州、长沙（多个地区用逗号分隔）</span>
          </td>
        </tr>
        <tr>
          <th width="150">卖家信用 :</th>
          <td>
             <select name="startRatesum">
             <option value="">不限</option>
              <option value="1">1心以上</option>
              <option value="2">2心以上</option>
              <option value="3">3心以上</option>
              <option value="4">4心以上</option>
              <option value="5">5心以上</option>
              <option value="6">1钻以上</option>
              <option value="7">2钻以上</option>
              <option value="8">3钻以上</option>
              <option value="9">4钻以上</option>
              <option value="10">5钻以上</option>
              <option value="11">1皇冠以上</option>
              <option value="12">2皇冠以上</option>
              <option value="13">3皇冠以上</option>
              <option value="14">4皇冠以上</option>
              <option value="15">5皇冠以上</option>
              <option value="16">1金冠以上</option>
              <option value="17">2金冠以上</option>
              <option value="18">3金冠以上</option>
              <option value="19">4金冠以上</option>
              <option value="20">5金冠以上</option>
            </select>
            <span class="gray ml10">可不选</span>
          </td>
        </tr>
        <tr>
          <th width="150">店铺动态评分下限 :</th>
          <td>
             <select name="startDsr">
              <option value="">不限</option>
              <option value="4.5" <if condition="$info.startDsr eq '4.5'"> selected</if>>4.5分及以上</option>
              <option value="4.6" <if condition="$info.startDsr eq '4.6'"> selected</if>>4.6分及以上</option>
              <option value="4.7" <if condition="$info.startDsr eq '4.7'"> selected</if>>4.7分及以上</option>
              <option value="4.8" <if condition="$info.startDsr eq '4.8'"> selected</if>>4.8分及以上</option>
              <option value="4.9" <if condition="$info.startDsr eq '4.9'"> selected</if>>4.9分及以上</option>
              <option value="5.0" <if condition="$info.startDsr eq '5.0'"> selected</if>>5.0分及以上</option>
            </select>
            <span class="gray ml10">可不选</span>
          </td>
        </tr>        
        <tr>
          <th width="150">是否高人气 :</th>
          <td>
            <select name="queryType">
              <option value="0" <if condition="$info.queryType eq '1'"> selected</if>>不限</option>
              <option value="2" <if condition="$info.queryType eq '1'"> selected</if>>高人气</option>
            </select>
            <span class="gray ml10">可不选</span>
          </td>
        </tr>
        <tr>
          <th width="150">是否加入消费者保障 :</th>
          <td>
             <select name="xfzbz">
              <option value="">不限</option>
              <option value="1" <if condition="$info.xfzbz eq '1'"> selected</if>>已加入消费者保障</option>
            </select>
            <span class="gray ml10">可不选</span>
           </td>
        </tr>
        <tr>
          <th width="150">是否7天包退换 :</th>
          <td>
             <select name="qtth">
              <option value="">不限</option>
              <option value="1" <if condition="$info.qtth eq '1'"> selected</if>>7天包退换</option>
             </select>
             <span class="gray ml10">可不选</span>
          </td>
        </tr>
        <tr>
          <th width="150">是否聚划算 :</th>
          <td>
            <select name="jhs">
              <option value="">不限</option>
              <option value="1" <if condition="$info.jhs eq '1'"> selected</if> >聚划算</option>
            </select>
            <span class="gray ml10">可不选</span>
          </td>
        </tr>
        <tr>
          <th>采集页数：</th>
          <td>
             <select name="page">
              <?php for($a=1;$a<=100;$a++){?>
              <option value="<?=$a?>" <if condition="$info.page eq $a"> selected</if>>采集<?=$a?>页</option>
              <?php }?>
            </select>
          </td>
        </tr>
        <tr>
          <th>设置开始时间 :</th>
          <td><input type="text" name="coupon_start_time" id="coupon_start_time"  class="date" value="{$info.coupon_start_time|date='Y-m-d H:i',###}"/></td>
        </tr>
        <tr>
          <th>设置结束时间 :</th>
          <td><input type="text" name="coupon_end_time" id="coupon_end_time" class="date" value="{$info.coupon_end_time|date='Y-m-d H:i',###}"/></td>
        </tr>
        <tr>
          <th></th>
          <td>
            <input type="hidden" name="id"  value="{$info.id}" />
            <input type="submit" name="search" class="smt  mr10" value="{:L('submit')}" />
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
<include file="public:footer" /> 
<script>
$('.J_cate_select').cate_select('请选择');
$(function(){
	$.formValidator.initConfig({formid:"info_form",autotip:true});
	$("#J_name").formValidator({onshow:'请填写采集器名称',onfocus:'请填写采集器名称'}).inputValidator({min:1,onerror:'请填写采集器名称'});
});
</script> 
<script language="javascript" type="text/javascript">
Calendar.setup({
	inputField     :    "coupon_start_time",
	ifFormat       :    "%Y-%m-%d %H:%M:%S",
	showsTime      :    'true',
	timeFormat     :    "24"
});
</script> 
<script language="javascript" type="text/javascript">
Calendar.setup({
	inputField     :    "coupon_end_time",
	ifFormat       :    "%Y-%m-%d %H:%M:%S",
	showsTime      :    'true',
	timeFormat     :    "24"
});
</script>
</body>
</html>