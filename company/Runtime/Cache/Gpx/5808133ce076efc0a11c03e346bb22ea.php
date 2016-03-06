<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>沉香商城</title>
<link rel="stylesheet" href="<?php echo (TEMDIR_URL); ?>bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (TEMDIR_URL); ?>bootstrap/css/bootstrap-responsive.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo (TEMDIR_URL); ?>css/shop_lay.css" type="text/css" />
<script type="text/javascript" src="<?php echo (TEMDIR_URL); ?>bootstrap/scripts/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo (TEMDIR_URL); ?>bootstrap/scripts/bootstrap.min.js"></script>

</head>
<body>
<div id="topbar">
  <div class="topbar">
    <p><a href="<?php echo U('Usercenter/MyOrder');?>">我的订单</a> | <a href="<?php echo U('Article/Help');?>">帮助中心</a></p>
    您好！欢迎来到沉香商城！<a href="<?php echo U('Member/UserLogin');?>" class="lo_re">[请登录]</a><a href="<?php echo U('Member/UserReg');?>" class="lo_re">[免费注册]</a> </div>
</div>
<div class="head"><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/logo.jpg" width="270" height="80" class="logo" /></a>
  <form action="/?c=browse" method="post" id="sosuo">
    <input name="keyword" type="text" class="search" value="请输入你想查询的字" onfocus="if (value =='请输入你想查询的字'){value =''}" onblur="if (value ==''){value=''}">
    <input name="搜索" type="submit" value="搜索" class="search1">
    <div class="clear"></div>
    <p class="sousuo"><strong>关键词：</strong><a href="#">佛珠</a> | <a href="#">礼品</a> | <a href="#">杂项珍玩</a> | <a href="#">晒单</a></p>
  </form>
  <div class="tel"></div>
</div>
<div class="nav_by">
  <div class="nav">
    <ul>
      <li class="w lee nav_li">全部商品分类
      <div class="all_cat">
        <div class="list even">
          <dl class="cat">
            <dt class="catname diaoke"> <strong class="cat1"><a href="#" title="沉香雕刻">沉香雕刻</a></strong><span class="rg">&gt;</span> </dt>
          </dl>
        </div>
        <div class="list hover">
          <dl class="cat">
            <dt class="catname fozhu"> <strong class="cat1"><a href="#" title="沉香佛珠">沉香佛珠</a></strong><span class="rg">&gt;</span> </dt>
          </dl>
          <div class="all_hover">
            <div class="subcat">
              <div class="col">
                <dl class="item">
                  <dt class="dt"><a href="#">灯饰/照明</a></dt>
                  <dd class="dd">
                  <a href="#">吊灯</a> | 
                  <a href="#">壁灯</a> | 
                  <a href="#">吸顶灯</a> | 
                  <a href="#">台灯</a> | 
                  <a href="#">落地灯</a> | 
                  <a href="#">吸顶灯</a> | 
                  <a href="#">台灯</a> | 
                  <a href="#">落地灯</a> |
                  <a href="#">天灯</a> |
                  <a href="#">吸顶灯</a> | 
                  <a href="#">台灯</a> | 
                  <a href="#">落地灯</a> | 
                  <a href="#">吸顶灯</a> |
                  </dd>
                </dl>
              </div>
              <div class="col">
                <dl class="item">
                  <dt class="dt"><a href="#">厨房用品</a></dt>
                  <dd class="dd">
                  <a href="#">厨盆/水槽</a> | 
                  <a href="#">厨房挂件</a> | 
                  <a href="#">其他配件</a> | 
                  <a href="#">厨房龙头</a> |
                  <a href="#">厨盆/水槽</a> | 
                  <a href="#">厨房挂件</a> | 
                  <a href="#">其他配件</a> | 
                  <a href="#">厨房龙头</a>
                  </dd>
                </dl>
              </div>
              <div class="col">
                <dl class="item">
                  <dt class="dt"><a href="#">卫浴用品</a></dt>
                  <dd class="dd">
                  <a href="#">浴缸</a> | 
                  <a href="#">淋浴房</a> | 
                  <a href="#">浴室柜</a> | 
                  <a href="#">座便器</a> | 
                  <a href="#">卫浴龙头</a> | 
                  <a href="#">花洒</a> | 
                  <a href="#">地漏</a> | 
                  <a href="#">洗脸盆</a> |
                  <a href="#">卫浴龙头</a> | 
                  <a href="#">花洒</a> | 
                  <a href="#">地漏</a> | 
                  <a href="#">洗脸盆</a>
                  </dd>
                </dl>
              </div>
              <div class="col">
                <dl class="item">
                  <dt class="dt"><a href="#">客厅</a></dt>
                  <dd class="dd">
                  <a href="#">沙发</a> | 
                  <a href="#">茶几和边桌</a> | 
                  <a href="#">电视柜</a> | 
                  <a href="#">酒柜</a> | 
                  <a href="#">鞋柜</a> | 
                  <a href="#">客厅套房</a>
                  </dd>
                </dl>
              </div>
              <div class="col">
                <dl class="item">
                  <dt class="dt"><a href="#">卧室</a></dt>
                  <dd class="dd">
                  <a href="#">床</a> | <a href="#">床头柜</a> | 
                  <a href="#">衣柜</a> | <a href="#">斗柜</a> | 
                  <a href="#">妆台镜</a> | <a href="#">妆台镜/妆凳</a> | 
                  <a href="#">床垫</a> | <a href="#">床尾凳</a> | 
                  <a href="#">穿衣镜</a>
                  </dd>
                </dl>
              </div>
              <div class="col">
                <dl class="item">
                  <dt class="dt"><a href="#">定制家具</a></dt>
                  <dd class="dd"><a href="#">定制衣柜</a> | <a href="#">定制橱柜</a> | <a href="#">定制书柜</a> | <a href="#">书台</a> | <a href="#">其他定制</a></dd>
                </dl>
              </div>
              <div class="col">
                <dl class="item">
                  <dt class="dt"><a href="#">客厅</a></dt>
                  <dd class="dd">
                  <a href="#">沙发</a> | 
                  <a href="#">茶几和边桌</a> | 
                  <a href="#">电视柜</a> | 
                  <a href="#">酒柜</a> | 
                  <a href="#">鞋柜</a> | 
                  <a href="#">客厅套房</a>
                  </dd>
                </dl>
              </div>
              <div class="col">
                <dl class="item">
                  <dt class="dt"><a href="#">卧室</a></dt>
                  <dd class="dd">
                  <a href="#">床</a> | <a href="#">床头柜</a> | 
                  <a href="#">衣柜</a> | <a href="#">斗柜</a> | 
                  <a href="#">妆台镜</a> | <a href="#">妆台镜/妆凳</a> | 
                  <a href="#">床垫</a> | <a href="#">床尾凳</a> | 
                  <a href="#">穿衣镜</a>
                  </dd>
                </dl>
              </div>
              <div class="col">
                <dl class="item">
                  <dt class="dt"><a href="#">定制家具</a></dt>
                  <dd class="dd"><a href="#">定制衣柜</a> | <a href="#">定制橱柜</a> | <a href="#">定制书柜</a> | <a href="#">书台</a> | <a href="#">其他定制</a></dd>
                </dl>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div class="list even">
          <dl class="cat">
            <dt class="catname xiaojian"> <strong class="cat1"><a href="#" title="沉香小件">沉香小件</a></strong><span class="rg">&gt;</span> </dt>
          </dl>
        </div>
        <div class="list">
          <dl class="cat">
            <dt class="catname xunxiang"> <strong class="cat1"><a href="#" title="香道熏香">香道熏香</a></strong><span class="rg">&gt;</span> </dt>
          </dl>
        </div>
        <div class="list even">
          <dl class="cat">
            <dt class="catname jingpin"> <strong class="cat1"><a href="#" title="精品沉香">精品沉香</a></strong><span class="rg">&gt;</span> </dt>
          </dl>
        </div>
        <div class="list">
          <dl class="cat">
            <dt class="catname tanxiang"> <strong class="cat1"><a href="#" title="檀香系列">檀香系列</a></strong><span class="rg">&gt;</span> </dt>
          </dl>
        </div>
        <div class="list even">
          <dl class="cat">
            <dt class="catname qinan"> <strong class="cat1"><a href="#" title="奇楠精品">奇楠精品</a></strong><span class="rg">&gt;</span> </dt>
          </dl>
        </div>
        <div class="list">
          <dl class="cat">
            <dt class="catname zhenwan"> <strong class="cat1"><a href="#" title="杂项珍玩系列">杂项珍玩系列</a></strong><span class="rg">&gt;</span></dt>
          </dl>
        </div>
        <div class="list even">
          <dl class="cat">
            <dt class="catname lipin"> <strong class="cat1"><a href="#" title="礼品套装">礼品套装</a></strong><span class="rg">&gt;</span></dt>
          </dl>
        </div>
      </div>
      </li>
      <li  class='<?php if($head_nav == 'Index'): ?>active<?php endif; ?> nav_li'><a href="<?php echo U('Index/Index');?>">首页</a></li>
      <li class="<?php if($head_nav == 'GoodsHot'): ?>active<?php endif; ?> nav_li"><a href="<?php echo U('Goods/GoodsHot');?>">热销商品</a></li>
      <li class="<?php if($head_nav == 'GroupGoods'): ?>active<?php endif; ?> nav_li"><a href="<?php echo U('Goods/GroupGoods');?>">团购商品</a></li>
      <li class="<?php if($head_nav == 'DiscountGoods'): ?>active<?php endif; ?> nav_li"><a href="<?php echo U('Goods/DiscountGoods');?>">打折商品</a></li>
      <li class="<?php if($head_nav == 'NewsList'): ?>active<?php endif; ?> nav_li"><a href="<?php echo U('Article/NewsList');?>">资讯管理</a></li>
      <li class="<?php if($head_nav == 'Shop'): ?>active<?php endif; ?> nav_li"><a href="<?php echo U('Integral/Shop');?>">积分商城</a></li>
      <div class="clear"></div>
    </ul>
  </div>
</div>

<div class="e_b">
  <div class="big_erji">
    <div class="hot_cp">
       			<h3>热销商品</h3>
            <ul>
            	<li class="danpin">
                	<a href="#" class="p_pic lf"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" width="70" height="70"/></a>
                    <div class="n_val lf">
                   <a href="#" class="name">同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                   <div class="value"><span class="v_red">￥300.00</span></div>
                   </div>
                   <div class="clear"></div>
                </li>
                <li class="danpin">
                	<a href="#" class="p_pic lf"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" width="70" height="70"/></a>
                    <div class="n_val lf">
                   <a href="#" class="name">同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                   <div class="value"><span class="v_red">￥300.00</span></div>
                   </div>
                   <div class="clear"></div>
                </li>
                <li class="danpin">
                	<a href="#" class="p_pic lf"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" width="70" height="70"/></a>
                    <div class="n_val lf">
                   <a href="#" class="name">同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                   <div class="value"><span class="v_red">￥300.00</span></div>
                   </div>
                   <div class="clear"></div>
                </li>
                <li class="danpin">
                	<a href="#" class="p_pic lf"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" width="70" height="70"/></a>
                    <div class="n_val lf">
                   <a href="#" class="name">同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                   <div class="value"><span class="v_red">￥300.00</span></div>
                   </div>
                   <div class="clear"></div>
                </li>
                <li class="danpin">
                	<a href="#" class="p_pic lf"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" width="70" height="70"/></a>
                    <div class="n_val lf">
                   <a href="#" class="name">同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                   <div class="value"><span class="v_red">￥300.00</span></div>
                   </div>
                   <div class="clear"></div>
                </li>
            </ul>
        </div>
</div>
</div>
<div id="content">
	<div class="l_list_rg rg">
        	<div class="crumb_nav">您当前的位置：产品列表页</div>
            <div id="paixu">
              <ul>
              <li>排序</li>
                <li><a href="#">价格</a>&nbsp;<img src="<?php echo (TEMDIR_URL); ?>images/p_02.jpg" width="7" height="10"></li>
                <li> <a href="#">默认排序</a> &nbsp;<img src="<?php echo (TEMDIR_URL); ?>images/p_03.jpg" width="7" height="8"></li>
                <li class="paixu_1">
                  <form id="form1" name="form1" method="post" action="">
                   价格筛选： <input name="pmin" type="text" id="pmin" value="" size="5"> 
                    -
                    <input name="pmax" type="text" id="pmax" value="" size="5">
                    <input type="submit" name="button" id="button" value="提交" class="button1">
                  </form>
                </li>
              </ul>
    		</div>
            <div id="pages">
              <span class="pages_1"> <a title="首页" href="#">首页</a></span>
              <span class="pages_1 "> <a title="前10页" href="#">前10页</a></span>
              <span class="pages_1"> <a title="上一页" href="#">上一页</a></span>
              <span class="pages_1 pages_ov"> <a id="page_1" title="第1页" href="#">1</a></span>
              <span class="pages_1"> <a id="page_2" title="第2页" href="#">2</a></span>
              <span class="pages_1"> <a id="page_3" title="第3页" href="#">3</a></span>
              <span class="pages_1"> <a id="page_4" title="第4页" href="#">4</a></span>
              <span class="pages_1"> <a id="page_5" title="第5页" href="#">5</a></span>
              <span class="pages_1"> <a title="下一页" href="#">下一页</a></span>
              <span class="pages_1"> <a title="后10页" href="#">后10页</a></span>
              <span class="pages_1">  <a title="最后页" href="#">最后页</a></span>
              <span>&nbsp;&nbsp;( 共 155 件 / 10 页 )</span>
			</div>
            <div class="chanpin">
            	<ul class="list_cp_ul">
                  <li class="one_cp_li lf">
                  <p><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" /></a></p>
                  <a class="cp_tit"  href="#">禅心阁 同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                  <p class="cp_value">本店价：<strong>￥1800.00</strong></p>
                  </li>
                  <li class="one_cp_li lf">
                  <p><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" /></a></p>
                  <a class="cp_tit"  href="#">禅心阁 同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                  <p class="cp_value">本店价：<strong>￥1800.00</strong></p>
                  </li>
                  <li class="one_cp_li lf">
                  <p><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" /></a></p>
                  <a class="cp_tit"  href="#">禅心阁 同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                  <p class="cp_value">本店价：<strong>￥1800.00</strong></p>
                  </li>
                  <li class="one_cp_li lf">
                  <p><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" /></a></p>
                  <a class="cp_tit"  href="#">禅心阁 同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                  <p class="cp_value">本店价：<strong>￥1800.00</strong></p>
                  </li>
                  <li class="one_cp_li lf">
                  <p><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" /></a></p>
                  <a class="cp_tit"  href="#">禅心阁 同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                  <p class="cp_value">本店价：<strong>￥1800.00</strong></p>
                  </li>
                  <li class="one_cp_li lf">
                  <p><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" /></a></p>
                  <a class="cp_tit"  href="#">禅心阁 同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                  <p class="cp_value">本店价：<strong>￥1800.00</strong></p>
                  </li>
                  <li class="one_cp_li lf">
                  <p><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" /></a></p>
                  <a class="cp_tit"  href="#">禅心阁 同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                  <p class="cp_value">本店价：<strong>￥1800.00</strong></p>
                  </li>
                  <li class="one_cp_li lf">
                  <p><a href="#"><img src="<?php echo (TEMDIR_URL); ?>images/pic_01.jpg" /></a></p>
                  <a class="cp_tit"  href="#">禅心阁 同料顺纹金丝棕眼小叶紫檀6mm108颗佛珠</a>
                  <p class="cp_value">本店价：<strong>￥1800.00</strong></p>
                  </li>
                <div class="clear"></div>
              </ul>
                <div class="clear"></div>
            </div>
            <div id="pages">
              <span class="pages_1"> <a title="首页" href="#">首页</a></span>
              <span class="pages_1 "> <a title="前10页" href="#">前10页</a></span>
              <span class="pages_1"> <a title="上一页" href="#">上一页</a></span>
              <span class="pages_1 pages_ov"> <a id="page_1" title="第1页" href="#">1</a></span>
              <span class="pages_1"> <a id="page_2" title="第2页" href="#">2</a></span>
              <span class="pages_1"> <a id="page_3" title="第3页" href="#">3</a></span>
              <span class="pages_1"> <a id="page_4" title="第4页" href="#">4</a></span>
              <span class="pages_1"> <a id="page_5" title="第5页" href="#">5</a></span>
              <span class="pages_1"> <a title="下一页" href="#">下一页</a></span>
              <span class="pages_1"> <a title="后10页" href="#">后10页</a></span>
              <span class="pages_1">  <a title="最后页" href="#">最后页</a></span>
              <span>&nbsp;&nbsp;( 共 155 件 / 10 页 )</span>
			</div>
        </div>
  <div class="clear"></div>
</div>
<div class="bottom">
  <ul>
    <li>
      <p class="li_p">关于我们</p>
      <p><a href="#">联系我们</a></p>
      <p><a href="#">公司简介</a></p>
      <p><a href="#">人才招聘</a></p>
      <p><a href="#">CEO致辞</a></p>
    </li>
    <li>
      <p class="li_p">新手指南</p>
      <p><a href="#">付款方式</a></p>
      <p><a href="#">注册新用户</a></p>
      <p><a href="#">订购流程</a></p>
      <p><a href="#">常见问题解答</a></p>
    </li>
    <li>
      <p class="li_p">配送安装</p>
      <p><a href="#">物流配送</a></p>
      <p><a href="#">体验馆服务费</a></p>
      <p><a href="#">收货指南</a></p>
    </li>
    <li>
      <p class="li_p">售后服务</p>
      <p><a href="#">45天退换货</a></p>
      <p><a href="#">如何申请退款</a></p>
      <p><a href="#">维修补件说明</a></p>
    </li>
    <li>
      <p class="li_p">购物保障</p>
      <p><a href="#">免责声明</a></p>
      <p><a href="#">隐私保护</a></p>
      <p><a href="#">注册协议</a></p>
      <p><a href="#">正品保证</a></p>
    </li>
    <li>
      <p class="li_p">支付方式</p>
      <p><a href="#">免责声明</a></p>
      <p><a href="#">隐私保护</a></p>
      <p><a href="#">注册协议</a></p>
      <p><a href="#">正品保证</a></p>
    </li>
    <div class="clear"></div>
  </ul>
</div>
<div class="smallnav">
  <div class="foot">
    <div class="foot_rg">
    <a class="ic1" href="#" title="送货服务"></a>
    <a class="ic2" href="#" title="45天退换"></a>
    <a class="ic3" href="#" title="正品保证"></a>
    <a class="ic4" href="#" title="买贵补差"></a>
    <a class="ic5" href="#" title="支付宝特约商家"></a>
    </div>
    <div class="clear"></div>
  </div>
  <p class="sm_nav"><a href="#" title="商城首页">商城首页</a> | 
  <a href="#" title="所有商品">所有商品</a> | 
  <a href="#" title="关注我们">关注我们</a> | 
  <a href="#" title="我的订单">我的订单</a> | 
  <a href="#" title="收藏本店">收藏本店</a> | 
  <a href="#" title="返回顶部">返回顶部</a>
  </p>
  <p>© 版权所有：亚洲沉香文化协会 服务邮箱:15515064@qq.com 粤ICP备10095469号 技术支持：<a href="#">铱王星</a></p>
</div>
</body>
</html>