
<div class="w">
  <div id="footer"> 

    
    <div class="copyright"> 
   <?php echo $this->_var['copyright']; ?><br />
     <?php if ($this->_var['shop_address']): ?> 
     <?php echo $this->_var['shop_address']; ?> <br /> 
     <?php endif; ?> 
      <?php if ($this->_var['shop_postcode']): ?> 
     <?php echo $this->_var['shop_postcode']; ?><br /> 
          <?php endif; ?> 
      <?php if ($this->_var['service_phone']): ?> 
      Tel: <?php echo $this->_var['service_phone']; ?> <br />
      <?php endif; ?> 
      <?php if ($this->_var['service_email']): ?> 
      E-mail: <?php echo $this->_var['service_email']; ?><br />
      <?php endif; ?> 

      <?php if ($this->_var['icp_number']): ?> 
      <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a> 
      <?php endif; ?> <script language=javascript>

window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65\x6c\x6e"]("\x3c\x61 \x68\x72\x65\x66\x3d\"\x68\x74\x74\x70\x3a\/\/\x62\x62\x73\x2e\x67\x6f\x70\x65\x2e\x63\x6e\/\" \x74\x61\x72\x67\x65\x74\x3d\"\x5f\x62\x6c\x61\x6e\x6b\" \x73\x74\x79\x6c\x65\x3d\"\x63\x6f\x6c\x6f\x72\x3a\x23\x30\x30\x30\x30\x43\x44\x3b\" \x3e\x3c\x62\x3e\u72d7\u6251\u6e90\u7801\u793e\u533a\x3c\/\x62\x3e\x3c\/\x61\x3e");

</script>
      
    </div>
        
  </div>
</div>



<div class="w backpanel hide" id="backpanel0708" style="display: none; "><div class="backpanel-inner"><div class=" bp-item bp-item-home-setting" data-top="0">    <a href="./user.php" class="home-setting" target="_self">会员中心</a><s></s></div><div class=" bp-item bp-item-survey">    <a href="message.php" class="survey" target="_blank">我要反馈</a><s></s></div><div class=" bp-item bp-item-backtop" data-top="0">    <a href="#none" class="backtop" target="_self">返回顶部</a><s></s></div></div></div>


<div id="cart_show" class="m">
	<div class="cart_show_wrap">
			<div class="success">
                <div class="success-b">
                    <h3>商品已成功加入购物车！</h3>
                 
                </div>
                	<div class="clr"></div>
            <div id="initCart_next_go"><a class="btn-pay " href="./flow.php" id="GotoShoppingCart">去结算</a><a class="btn-continue " href="javascript:void(0)" onclick="easyDialog.close();">继续购物</a>
            	<div class="clr"></div>
            </div></div>
			</div>
		</div>
<script>
$(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 300){
			$(".backpanel").fadeIn(500);
		}
		else
		{
			$(".backpanel").fadeOut(500);
		}
		
	});
	
	$(".backtop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});

})

</script>
