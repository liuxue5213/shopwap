<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_var['lang']['cp_home']; ?><?php if ($this->_var['ur_here']): ?> - <?php echo $this->_var['ur_here']; ?><?php endif; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	background: #333 url(images/bg.jpg);
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
	background: url(images/loginbg.png);
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
	background: #fff url(images/txtbg.gif) repeat-x;
	border:1px solid #aaa;
	line-height: 24px;
}

.logincaptcha {
	padding: 0;
	padding: 0 3px;
	width: 60px;
	height: 24px;
	border: 0;
	background: #fff url(images/txtbg.gif) repeat-x;
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

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

if (window.parent != window)
{
  window.top.location.href = location.href;
}

//-->
</script>
</head>
<body>
<form method="post" action="privilege.php" name='theForm' onsubmit="return validate()">
  <table cellspacing="0" cellpadding="0" align="center" class="loginbg">
    <tr>
      <td height="100" align="center" valign="middle" class="loginlogo"><span>SHOPWAPP B2C</span><br /><a href="javascript:;" title="PC端管理中心" class="current">PC端管理中心</a>&nbsp;&nbsp;&nbsp;<a href="../mobile/swadmin" title="移动端管理中心">移动端管理中心</a></td>
    </tr>
    <tr>
      <td height="200" align="center">
	    <table cellspacing="0" cellpadding="5" width="320" class="loginbox">
          <tr>
            <td width="133"><?php echo $this->_var['lang']['label_username']; ?></td>
            <td colspan="2"><input type="text" name="username" class="logininput" /></td>
          </tr>
          <tr>
            <td><?php echo $this->_var['lang']['label_password']; ?></td>
            <td colspan="2"><input type="password" name="password" class="logininput" /></td>
          </tr>
          <?php if ($this->_var['gd_version'] > 0): ?>
          <tr>
            <td><?php echo $this->_var['lang']['label_captcha']; ?></td>
            <td width="60"><input type="text" name="captcha" class="logincaptcha" maxlength="4" /></td>
            <td width="146"><img src="index.php?act=captcha&<?php echo $this->_var['random']; ?>" width="50" height="24" onclick="this.src='index.php?act=captcha&'+Math.random();" style="cursor:pointer;" alt="captcha" title="<?php echo $this->_var['lang']['click_for_another']; ?>" /></td>
          </tr>
          <?php endif; ?>
          <tr>
            <td></td>
            <td colspan="2"><input type="checkbox" value="1" name="remember" id="remember" />
              <label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></td>
          </tr>
          <tr>
            <td colspan="3" style="text-align:center"><input type="submit" value="<?php echo $this->_var['lang']['signin_now']; ?>" class="loginsignin" /></td>
          </tr>
          <tr>
            <td colspan="3" style="text-align:center"><a href="../" class="fcolor">●&nbsp;<?php echo $this->_var['lang']['back_home']; ?></a>&nbsp;&nbsp;&nbsp;<a href="get_password.php?act=forget_pwd" class="fcolor">●&nbsp;<?php echo $this->_var['lang']['forget_pwd']; ?></a></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>
  <input type="hidden" name="act" value="signin" />
</form>
<script language="JavaScript">
<!--
  document.forms['theForm'].elements['username'].focus();
  
  /**
   * 检查表单输入的内容
   */
  function validate()
  {
    var validator = new Validator('theForm');
    validator.required('username', user_name_empty);
    //validator.required('password', password_empty);
    if (document.forms['theForm'].elements['captcha'])
    {
      validator.required('captcha', captcha_empty);
    }
    return validator.passed();
  }
  
//-->
</script>
</body>
</html>