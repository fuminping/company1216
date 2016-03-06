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
      <li class="active nav_li"><a href="<?php echo U('Index/Index');?>">首页</a></li>
      <li class="nav_li"><a href="<?php echo U('Goods/GoodsHot');?>">热销商品</a></li>
      <li class="nav_li"><a href="<?php echo U('Goods/GroupGoods');?>">团购商品</a></li>
      <li class="nav_li"><a href="<?php echo U('Goods/DiscountGoods');?>">打折商品</a></li>
      <li class="nav_li"><a href="<?php echo U('Article/NewsList');?>">资讯管理</a></li>
      <li class="nav_li"><a href="<?php echo U('Integral/Shop');?>">积分商城</a></li>
      <div class="clear"></div>
    </ul>
  </div>
</div>

<div id="content view_cont">
<div class="regi">
	<h3><span>我已经注册，现在就 <a href="/login.htm">登录</a></span>用户注册</h3>
    <form id="form1" class="form1" name="form1" method="post" action="registering.htm">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="b_1">
      <tbody><tr>
        <td class="logn1" valign="top">您的邮箱：</td>
        <td align="left"><input name="account" type="text" class="logn2" id="account">
          <span>请用邮箱注册，推荐使用gmail，hotmail，126.com，163.com，QQ邮箱等注册</span></td>
      </tr>
      <tr>
        <td class="logn1" valign="top">密码  ：</td>
        <td align="left"><input name="password" type="password" id="password" class="logn2"></td>
      </tr>
      <tr>
      </tr><tr>
        <td class="logn1" valign="top">确认密码  ：</td>
        <td align="left"><input name="confirm_password" type="password" id="confirm_password" class="logn2"></td>
      </tr>
      <tr>
      </tr><tr>
        <td class="logn1" valign="top">手机：</td>
        <td align="left"><input name="mobile" type="text" id="mobile" value="" class="logn2">
          <span>接收订单状态、通知等短信提醒</span></td>
      </tr>
      <tr>
        <td class="logn1" valign="top">验证码 ：</td>
        <td align="left"><input name="validateCode" type="text" class="logn4" id="validateCode" maxlength="4"> 
        <img src="./regvericode.htm" alt="" border="0" id="imgVerify"></td>
      </tr>
        <tr><td class="logn1">&nbsp;</td>
        <td align="left"><input type="button" name="btn_register" id="btn_register" class="register">
        	<input type="hidden" value="./?c=login" id="prevurl" name="prevurl">
        </td>
      </tr>
    </tbody></table>
  </form>
 </div>
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