<div class="mc">
<div class="form">
<input type="text" class="text" id="user_email" value="请输入您的Email地址" onfocus="if(this.value=='请输入您的Email地址'){this.value='';this.style.color='#333'};$('#subscription-prompt').hide()" onblur="if(this.value==''){this.value='请输入您的Email地址';this.style.color='#999'}">
<input type="button" value="订阅" class="button" id="subscription-submit" onclick="add_email_list()">
<span class="clr"></span>
<div id="subscription-prompt"></div>
</div>
</div>
<script type="text/javascript">
var email = document.getElementById('user_email');
function add_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
  }
}
function rep_add_email_list(text)
{
  alert(text);
}
function cancel_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=del&email=' + email.value, '', rep_cancel_email_list, 'GET', 'TEXT');
  }
}
function rep_cancel_email_list(text)
{
  alert(text);
}
function check_email()
{
  if (Utils.isEmail(email.value))
  {
    return true;
  }
  else
  {
    alert('<?php echo $this->_var['lang']['email_invalid']; ?>');
    return false;
  }
}
</script>
