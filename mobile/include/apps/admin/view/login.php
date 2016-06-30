<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$lang['cp_home']}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/artDialog/jquery.artDialog.js?skin=aero"></script>
<!--[if lt IE 8]>
<script src="__PUBLIC__/bootstrap/js/ie8-responsive-file-warning.js"></script>
<![endif]-->
<style type="text/css">
* {
	margin: 0;
	padding: 0;
	list-style: none;
	vertical-align: middle;
}

body {
	margin: 0;
	padding: 0;
	width: 100%;
	background: #fff;
	background: #333 url(__ASSETS__/images/bg.jpg);
	background-position: center top;
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-clip: border-box;
	background-origin: padding-box;
	font: normal 12px/22px 微软雅黑;
}

img {
	border: 0;
}

a {
	color: #555;
	text-decoration: none;
}

.loginbox td {
	padding: 5px;
	text-align: left;
}

.loginbg {
	margin: auto;
	margin-top: 212px;
	width: 521px;
	height: 327px;
	background: url(__ASSETS__/images/loginbg.png);
	color: #555;
	font-size: 12px;
}

.loginlogo {
	padding-top: 20px;
	height: 80px;
	font-weight: 700;
	font-size: 14px;
	line-height: 28px;
}

.loginbg a:hover,.loginlogo .current {
	color: #d03400;
}

.loginlogo span {
	font-size: 36px;
}

.logininput {
	padding: 0;
	padding: 0 3px;
	width: 214px;
	height: 24px;
	border: 0;
	background: #fff url(__ASSETS__/images/txtbg.gif) repeat-x;
	border:1px solid #aaa;
	line-height: 24px;
}

.logincaptcha {
	padding: 0;
	padding: 0 3px;
	width: 60px;
	height: 24px;
	border: 0;
	background: #fff url(__ASSETS__/images/txtbg.gif) repeat-x;
	border:1px solid #aaa;
	text-transform: uppercase;
}

.logininput:hover,.logincaptcha:hover {
	border:1px solid #d03400;
}

.loginsignin {
	padding: 0;
	width: 118px;
	height: 28px;
	border: 0;
	background: #3c792b;
	color: #fff;
	line-height: 28px;
	cursor: pointer;
}

.loginsignin:hover {
	background: #d03400;
}
</style>
</head>

<body>
<form method="post" action="{url('login')}" name='theForm'>
  <table cellspacing="0" cellpadding="0" align="center" class="loginbg">
    <tr>
      <td height="100" align="center" valign="middle" class="loginlogo"><span>SHOPWAPP B2C</span><br /><a href="../swadmin" title="PC端管理中心">PC端管理中心</a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" title="移动端管理中心" class="current">移动端管理中心</a></td>
    </tr>
    <tr>
      <td height="200" align="center"><table cellspacing="0" cellpadding="5" width="320" class="loginbox">
          <tr>
            <td width="133">{$lang['label_username']}</td>
            <td colspan="2"><input type="text" name="username" class="logininput" /></td>
          </tr>
          <tr>
            <td>{$lang['label_password']}</td>
            <td colspan="2"><input type="password" name="password" class="logininput" /></td>
          </tr>
          {if gd_version() > 0}
          <tr>
            <td>{$lang['label_captcha']}</td>
            <td width="60"><input name="captcha" type="text" class="logincaptcha" maxlength="4" /></td>
            <td width="146"><img src="{url('verify')}" width="50" height="24" onclick="this.src='{url('verify')}&v='+Math.random();" title="{$lang['click_for_another']}" style="cursor: pointer;" /></td>
          </tr>
          {/if}
          <tr>
            <td></td>
            <td colspan="2"><input type="checkbox" value="1" name="remember" id="remember" />
              <label for="remember">{$lang['remember']}</label></td>
          </tr>
          <tr>
            <td colspan="3" style="text-align:center"><input type="submit" value="{$lang['signin_now']}" class="loginsignin" /></td>
          </tr>
          <tr>
            <td colspan="3" style="text-align:center"><a href="./" class="fcolor">●&nbsp;{$lang['back_home']}</a>&nbsp;&nbsp;&nbsp;<a href="{url('forget')}" class="fcolor">●&nbsp;{$lang['forget_pwd']}</a></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>
  <input type="hidden" name="act" value="signin" />
</form>
<script type="text/javascript">
if (window.parent != window)
{
  window.top.location.href = location.href;
}
document.forms['theForm'].elements['username'].focus();

$(function(){
	$('form[name="theForm"]').submit(function(){
		var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();
		var captcha = $('input[name="captcha"]').val();
		var remember = $('input[name="remember"]').is(':checked') ? 1:0;
		$.post("{url('login')}", {username:username, password:password, captcha:captcha, remember:remember}, function(result){
			if(result.err > 0){
				art.dialog({
					id: 'tipBox',
					time: 1,
					icon: 'warning',
					content: result.msg,
					lock: true
				});
			}else{
				window.location.href = "__ROOT__/index.php?m=admin";
			}
		}, 'json');
		return false;
	})
})
</script>
</body>
</html>