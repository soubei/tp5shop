<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:37:"./themes/default/index/edit_pass.html";i:1504864759;}*/ ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<title>修改密码</title>

<link rel=stylesheet type=text/css href="<?php echo config('theme_path'); ?>/index/new/css/user_pwd.css" />
<script type="text/javascript" src="<?php echo config('theme_path'); ?>/index/new/js/user_pwd.js"></script>
<style type="text/css">
.jl_tj{ width:99%; height:38px;line-height:38px; text-align:center; display:block; background:#fff; border:1px #E7E7E7 solid; color:#000; cursor:pointer; font-size:1.4em;border-radius:3px; }
.jl_tj:hover{ opacity:0.8; }
.jl_tj2{ width:100%; height:38px;line-height:38px; text-align:center; display:block; background:#EC1A5B;  color:#fff; cursor:pointer; font-size:1.4em;border-radius:3px; }
.jl_tj2:hover{ opacity:0.8; }
.register_dl{ width:100%; height:45px; background:#EC1A5B;border:0; color:#FFFFFF; font-weight:500;font-family:Microsoft YaHei;  cursor:pointer; font-size:18px;border-radius:2px; }
.register_dl:hover{ opacity:0.8; }
.tijiao{ width:80px; height:37px; background:#EC1A5B;border:0; color:#FFFFFF; cursor:pointer; font-size:16px; }
.tijiao:hover{ opacity:0.8; }
.register_tc{ background:#fff; border:1px #E7E7E7 solid; margin:0 10px 0 10px;text-align:center;margin-top:10px;margin-bottom:10px;padding:12px;border-radius:3px; }
.register_tc a{font-size:16px; color:#EC1A5B;}
.register_tc:hover{ opacity:0.8; }input{cursor: pointer; -webkit-appearance: none;}
.nr img{ width:300px;}
</style>
</head>
<body><script>
function cbCheckForm(input,$form){
    var password        =$("#password").val();
    var newpassword     =$("#newpassword").val();
    var repassword      =$("#repassword").val();
  $.ajax({
     type:'post',
     url:"<?php echo url('user/editPassword'); ?>",
     data:{  "password"   :password, 
		     "newpassword":newpassword,
		     "repassword" :repassword, 
          },
     dataType:'json',
     success: function(data) {
            if (data.code) {
            	alert(data.msg);
          setTimeout(function () {
          location.href = data.url;
        }, 1000);
        } else {
        	alert(data.msg);
        }
        },
        error: function(request) {
 			alert('页面错误');
      }
  });
}

function goBack(){
	history.back();
}
</script>
<div class="yingdao" align="center">
  <p><b>修改密码</b><a href="javascript:;" onclick="history.back()" title="返回" class="left"></a> <a href="<?php echo url('user/usercenter'); ?>" title="会员中心" class="right"></a> </p></div>  
       <div class="admin_xfl">
                    <ul>
            <li><a href="<?php echo url('user/userProfile'); ?>"  >账号设置</a></li>
            <li><a href="<?php echo url('user/editmobile'); ?>" >手机绑定</a></li>
            <li><a href="<?php echo url('user/editpassword'); ?>" class="on">修改密码</a> </li>
                    </ul>
           </div>	
 <div class="p15" style="margin-top:-10px"><div class="register">
	    <form onSubmit="return checkForm($(this),cbCheckForm)" action="">
    <table border="0" width="100%" cellpadding="0" cellspacing="0" >
	   		<tr height="40">
		  <td><input id="password" placeholder="请输入登录密码" class="ddinput" dd-required type="password" /></td>
		</tr>
		<tr height="40">
		  <td><input id="newpassword" placeholder="请输入新密码" class="ddinput"  dd-required type="password"></td>
		</tr>
		<tr height="40">
		  <td><input id="repassword" value="" dd-equal="newpassword" class="ddinput"  dd-required placeholder="请输重复新密码" type="password"></td>
		</tr>
		<tr height="40">
		  <td height="90" colspan="2">  
          <input type="submit" value="提交保存" id="sub"  class="register_dl"></td>
		  <td></td>
		</tr>
	  </table>
      </form>	 
   </div>	
</div>
﻿ <style type="text/css">
 	/*底部样式*/ /************尾部固定导航*************/.fix-bottom {box-sizing: border-box;
	position:fixed;
	left:0;
	bottom:0;
	width:100%;
	border-top:#eee solid 1px;
	background:#f9f9f9;
	padding:6px 0;
	z-index:90;
	height: 48px;
}
.fix-bottom .fix-b-a {
	display:block;
	float:left;
	width:25%;
	text-align:center;
	height:40px;
	color:#666;
	font-size:11px;    line-height: 1em;
}
.fix-bottom .fix-b-a img {
	width:20px;
	height:20px;
	margin-bottom:2px
}
.fix-bottom .bottom-n-cur {
	color:#ee4f4f;
}
 </style>
 <div class="fix-bottom">
	<a href="<?php echo url('Index/index'); ?>" class="fix-b-a bottom-n-cur">
		<img src="<?php echo config('theme_path'); ?>/index/new/picture/today2.png"><br>首页
	  </a>
	  <a href="<?php echo url('order/orderLists'); ?>" class="fix-b-a ">
		  <img src="<?php echo config('theme_path'); ?>/index/new/picture/fenlei.png"><br>订单
	  </a>

	  <a href="<?php echo url('user/score_detail'); ?>" class="fix-b-a ">
		  <img src="<?php echo config('theme_path'); ?>/index/new/picture/coupon.png"><br>明细
	  </a>
	  <a href="<?php echo url('user/userCenter'); ?>" class="fix-b-a ">
		  <img src="<?php echo config('theme_path'); ?>/index/new/picture/pinp.png"><br>个人中心
	  </a>
</div> 

</body></html>