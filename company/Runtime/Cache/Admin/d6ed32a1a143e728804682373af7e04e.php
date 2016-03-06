<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>总后台</title>
    <script src="/Public/jquery/jquery-1.7.2.js"></script>
    <link href="/Public/youmi_admin/style/css/User.css" type="text/css" rel="stylesheet" />
</head>
<body class="B_reg">
<div class="TX_reg">
    <div class="reg_hd">
        <div class="top_lnk"> <a href="#">管理后台</a>|<a href="#" target="_blank">帮助</a></div>
    </div>
    <div class="reg_main clearfix">
        <div class="main_title">
            <div class="main_tab">
                <a href="<?php echo U('Admin/Index/UserLogin');?>" id="mail-register"  class="current">用户登陆</a>
        	</div>
        </div>
        <div class="reg_info clearfix"> 
            <!--录入信息-->
            <div class="reg_form reg_mail" id="phone">
                <form action="<?php echo U('Admin/Index/UserLogin');?>" method="post" id="forms" name="Login">
                    <div class="info_list clearfix">
                        <div class="tit"><i>*</i>用户名：</div>
                        <div class="ipt">
                            <input class="reg_ipt" type="text" name="username" data-check="UserNmae"/>
                        </div>
                    </div>
                    <div class="info_list clearfix">
                        <div class="tit"><i>*</i>密码：</div>
                        <div class="ipt">
                            <input class="reg_ipt" type="password" name="password" maxlength="16" data-check="NumberOrLetter"/>
                        </div>
                    </div>
                    <div class="info_list clearfix">
                        <div class="tit"><i>*</i>验证码：</div>
                        <div class="ipt ver_code">
                            <input class="reg_ipt" type="text" name="Code" maxlength="5">
                            <span class="ver_pic"><img width="144px" height="32px" src="<?php echo U('admin/admin/Verify?t='.$time);?>" class="Refresh"></span><a class="Refresh" href="#">看不清？</a>
                        </div>
                    </div>
                    <div class="info_submit">
                        <div class="ipt"> <a href="#" id="submit" data="Login" class="btn_sub"><span>立即登陆</span></a></div>
                    </div>
                    <div class="info_list clearfix">
                        <div class="ipt verify">
                            <p class="agreement"><a target="_blank" href="#">《微游人服务使用协议》</a></p>
                        </div>
                    </div>
                    <input type="submit" value="" class="none">
                </form>
            </div>
            <!--/录入信息--> 
            
        </div>
    </div>
</div>
        <div style=" clear:both;"></div>
        <!--底部-->
         <div class="reg_foot">
            <p><a target="_blank" href="#">关于GPX</a><a target="_blank" href="#">关于我们</a><a target="_blank" href="#">联系我们</a><a target="_blank" href="#">意见反馈</a></p>
            <p></p>
        </div>
     
</div>

</body>
</html>
<script src="/Public/youmi/js/WeiZhuan.js" type="text/javascript"></script> 
<script type="text/javascript">
	//需要使用的方法放到init,如果后面跟一个参数，框架内部会实例化
	WeiZhuan.init({'init':'Submit'});

	var AjaxUrl = {
		VerifyUrl : "<?php echo U('admin/admin/Verify');?>",
	};
	
	$('.Refresh').click(function(){
		$('img.Refresh').attr('src',AjaxUrl.VerifyUrl+'?'+Date.parse( new Date()));
	});
</script>