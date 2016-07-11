<?php echo $this->fetch('library/user_header.lbi'); ?>

<div class="user-register">
	<?php if ($this->_var['enabled_sms_signin'] == 1): ?>
    <ul class="nav nav-tabs" role="tablist">
    	<li class="active"><a href="#one" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['mobile_login']; ?></a></li>
        <li><a href="#two" role="tab" data-toggle="tab"><?php echo $this->_var['lang']['emaill_login']; ?></a></li>
    </ul>
    <div class="tab-content">
    	<div class="tab-pane active" id="one">
        	<div class="Registr">
                <form action="<?php echo url('user/register');?>" method="post" name="formUser" onsubmit="return register2();">
                    <input type="hidden" name="flag" id="flag" value="register" />
                    <div class="flow-consignee ect-bg-colorf">
                    	<section>
                            <ul>
                                <li><div class="input-text"><b><?php echo $this->_var['lang']['mobile']; ?>：</b><span><input placeholder="<?php echo $this->_var['lang']['no_mobile']; ?>" name="mobile" id="mobile_phone" type="text"></span></div></li>
                                <li><div class="input-text input-text02 code"><b><?php echo $this->_var['lang']['code']; ?>：</b><span><input placeholder="<?php echo $this->_var['lang']['no_code']; ?>" name="mobile_code" id="mobile_code" type="text"></span><a class="pull-right ect-bg PhoneSub" id="zphone" name="sendsms" onClick="sendSms();" type="botton"><?php echo $this->_var['lang']['get_code']; ?></a></div></li>
                            </ul>
                        </section>
                        <p class="ect-checkbox ect-padding-tb ect-margin-tb ect-margin-bottom0 ect-padding-lr">
                            <input id="agreement" name="agreement" type="checkbox" value="1" checked="checked" />
                            <label for="agreement"> <?php echo $this->_var['lang']['agreement']; ?><i></i></label>
                        </p>
                        <p class="ect-checkbox ect-padding-tb ect-margin-tb ect-margin-bottom0 ect-padding-lr">
                            <label style="font-size:0.1em;">提示：手机号注册，验证码即是登录密码，请妥善保存或登录到会员中心修改密码。</label>
                        </p>
                        <div class="blank10"></div>
                        <div class="ect-padding-lr ect-padding-tb goods-info">
                            <input name="act" type="hidden" value="act_register" />
                            <input name="enabled_sms" type="hidden" value="1" />
                            <input type="hidden" name="sms_code" value="<?php echo $this->_var['sms_code']; ?>" id="sms_code" />
                            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                            <button  name="Submit" type="submit" class="btn btn-info ect-btn-info ect-colorf"><?php echo $this->_var['lang']['register']; ?></button>
                        </div>
                        <span class="blank10"></span>
                        <p class="ect-padding-lr ect-margin-tb text-right ect-margin-bottom0 forgetkey" style="clear:both"><a href="<?php echo url('user/login');?>" class="f_l">已有账号，去登录>></a></p>
                    </div>
                </form>
            </div>

        </div>
        <script type="text/javascript" src="__PUBLIC__/js/sms.js"></script>
        <?php endif; ?>
        <div class="tab-pane" id="two">

            <div class="Registr">
            <form action="<?php echo url('user/register');?>" method="post" name="formUser" class="validforms">
                <input type="hidden" name="flag" id="flag" value="register" />
                <div class="flow-consignee ect-bg-colorf">
                    <section>
                        <ul>
                            <li><div class="input-text input-text02"><b><?php echo $this->_var['lang']['label_username']; ?>：</b><span><input placeholder="<?php echo $this->_var['lang']['no_username']; ?>" name="username" type="text" id="username" datatype="*3-15" errormsg="<?php echo $this->_var['lang']['msg_mast_length']; ?>" /></span></div></li>
                            <li><div class="input-text input-text03"><b><?php echo $this->_var['lang']['email']; ?>：</b><span><input placeholder="<?php echo $this->_var['lang']['no_emaill']; ?>" name="email" type="text" id="email" datatype="e" /></span></div></li>
                            <li><div class="input-text"><b><?php echo $this->_var['lang']['password']; ?>：</b><span><input  placeholder="<?php echo $this->_var['lang']['no_password']; ?>" class="inputBg" name="password" id="password1" type="password" datatype="*6-16"><input placeholder="<?php echo $this->_var['lang']['no_password']; ?>" class="inputBg" id="password_text" type="text" style="display:none;"></span><i class="glyphicon glyphicon-eye-open" onClick="clickText();"></i></div></li>
                            <?php if ($this->_var['enabled_captcha']): ?>
                            <li><div class="input-text input-text02 code"><b><?php echo $this->_var['lang']['code']; ?>：</b><span><input placeholder="<?php echo $this->_var['lang']['no_code']; ?>"  name="captcha" id="captcha" type="text" datatype="*" /></span><img class="pull-right" src="<?php echo url('public/captcha', array('rand'=>$this->_var['rand']));?>" alt="captcha"  onClick="this.src='<?php echo url('public/captcha');?>&t='+Math.random()" /></div></li>
                            <?php endif; ?>
                        </ul>
                    </section>
                    <p class="ect-checkbox ect-padding-tb ect-margin-tb ect-margin-bottom0 ect-padding-lr">
                        <input id="agreement" name="agreement" type="checkbox" value="1" checked="checked" />
                        <label for="agreement"> <?php echo $this->_var['lang']['agreement']; ?><i></i></label>
                    </p>
                    <div class="blank10"></div>
                    <div class="ect-padding-lr ect-padding-tb goods-info">
                        <input name="act" type="hidden" value="act_register" />
                        <input name="enabled_sms" type="hidden" value="0" />
                        <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                        <button name="Submit" type="submit" class="btn btn-info ect-btn-info ect-colorf"><?php echo $this->_var['lang']['next']; ?></button>
                    </div>
                    <span class="blank10"></span>
                    <p class="ect-padding-lr ect-margin-tb text-right ect-margin-bottom0 forgetkey" style="clear:both"><a href="<?php echo url('user/login');?>" class="f_l">已有账号，去登录>></a></p>
                </div>
            </form>
            </div>



            <ul class="introduce clearfix">
                <li>
                    <span class="promise_zp"></span>
                    <p>100%正品保证</p>
                </li>
                <li>
                    <span class="seven_return"></span>
                    <p>七天无理由退货</p>
                </li>
                <li>
                    <span class="quily_fh"></span>
                    <p>退货免运费</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/page_footer_flow.lbi'); ?> 
<script type="text/javascript">
/*点击更换密码框为文本框*/
function clickText(){
	if($("#password_text").is(":hidden")&&$("#password1").is(":visible")&&!$(".input-text .glyphicon-eye-open").hasClass("glyphicon-eye-close")){
	  	var pwd = $("#password1").val();
       	$("#password1").hide();
       	$("#password_text").val(pwd).show();
		$(".input-text .glyphicon-eye-open").addClass("glyphicon-eye-close");
	}else{
		var pwd_text = $("#password_text").val();
       	$("#password_text").hide();
       	$("#password1").val(pwd_text).show();;;		
		$(".input-text .glyphicon-eye-open").removeClass("glyphicon-eye-close");			
	}
}
$(function(){
	var tit=$(".nav-tabs"),con=$(".Registr");
	con.hide().first().show();
	tit.find("li").click(function(){
		var num=tit.find("li").index(this);
		con.hide().eq(num).show();
	});
});
//购物车页面带有悬浮内容，须撑高body高度
var navbarDefaultH=$(".navbarDefault").height();
$("body").css({paddingBottom:navbarDefaultH,background:"#e8e8e8"});
</script>