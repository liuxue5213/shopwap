{include file="pageheader"}
<div class="container-fluid" style="padding:0">
	<div class="row" style="margin:0">
	  <div class="col-md-2 col-sm-2 col-lg-1" style="padding-right:0;">{include file="wechat_left_menu"}</div>
	  <div class="col-md-10 col-sm-10 col-lg-11" style="padding-right:0;">
		<div class="panel panel-default">
			<div class="panel-heading">提醒设置</div>
			<div class="panel-body">
			     <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#order_remind" role="tab" data-toggle="tab">订单提醒</a></li>
              <li><a href="#pay_remind" role="tab" data-toggle="tab">支付提醒</a></li>
              <li><a href="#send_remind" role="tab" data-toggle="tab">发货提醒</a></li>
              <li><a href="#register_remind" role="tab" data-toggle="tab">自动注册</a></li>
			     </ul>
			</div>
			
			<div class="panel-body">
        <div class="tab-content">
          <div class="tab-pane active" id="order_remind">
            <form action="{url('remind')}" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-1 col-md-1 col-lg-1 control-label">标题</label>
                <div class="col-sm-4 col-md-4 col-lg-4"><input type="text" class="form-control" placeholder="请输入标题" name="data[name]" value="{$order_remind['name']}"></div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 col-md-1 col-lg-1 control-label">提醒设置</label>
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <label class="radio-inline">
                    <input type="radio" name="data[enable]" value="1" {if $order_remind['enable'] == 1}checked{/if} />开启
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="data[enable]" value="0" {if $order_remind['enable'] == 0}checked{/if} />关闭
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 col-md-1 col-lg-1 control-label">提示模版</label>
                <div class="col-sm-4 col-md-4 col-lg-4"><textarea class="form-control" placeholder="请输入提示内容" name="config[template]" rows="3">{$order_remind['config']['template']}</textarea></div>
                <span class="help-block">例：[$order_id] 订单已成功生成。变量请不要更改。</span>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-1">
                  <input type="hidden" name="command" value="order_remind" />
                  <input type="submit" value="确认" class="btn btn-primary" />
                  <input type="reset" value="重置" class="btn btn-default" />
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane" id="pay_remind">
            <form action="{url('remind')}" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-1 col-md-1 col-lg-1 control-label">标题</label>
                <div class="col-sm-4 col-md-4 col-lg-4"><input type="text" class="form-control" placeholder="请输入标题" name="data[name]" value="{$pay_remind['name']}"></div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 col-md-1 col-lg-1 control-label">提醒设置</label>
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <label class="radio-inline">
                    <input type="radio" name="data[enable]" value="1" {if $pay_remind['enable'] == 1}checked{/if} />开启
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="data[enable]" value="0" {if $pay_remind['enable'] == 0}checked{/if} />关闭
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 col-md-1 col-lg-1 control-label">提示模版</label>
                <div class="col-sm-4 col-md-4 col-lg-4"><textarea class="form-control" placeholder="请输入提示内容" name="config[template]" rows="3">{$pay_remind['config']['template']}</textarea></div>
                <span class="help-block">例：[$order_id] 订单已成功支付。变量请不要更改。</span>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-1">
                  <input type="hidden" name="command" value="pay_remind" />
                  <input type="submit" value="确认" class="btn btn-primary" />
                  <input type="reset" value="重置" class="btn btn-default" />
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane" id="send_remind">
            <form action="{url('remind')}" method="post" class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-sm-1 col-md-1 col-lg-1 control-label">标题</label>
                <div class="col-sm-4 col-md-4 col-lg-4"><input type="text" class="form-control" placeholder="请输入标题" name="data[name]" value="{$send_remind['name']}"></div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 col-md-1 col-lg-1 control-label">提醒设置</label>
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <label class="radio-inline">
                    <input type="radio" name="data[enable]" value="1" {if $send_remind['enable'] == 1}checked{/if} />开启
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="data[enable]" value="0" {if $send_remind['enable'] == 0}checked{/if} />关闭
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-1 col-md-1 col-lg-1 control-label">提示模版</label>
                <div class="col-sm-4 col-md-4 col-lg-4"><textarea class="form-control" placeholder="请输入提示内容" name="config[template]" rows="3">{$send_remind['config']['template']}</textarea></div>
                <span class="help-block">例：[$order_id] 订单商品已发货。变量请不要更改。</span>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-1">
                  <input type="hidden" name="command" value="send_remind" />
                  <input type="submit" value="确认" class="btn btn-primary" />
                  <input type="reset" value="重置" class="btn btn-default" />
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane" id="register_remind">
            <form action="{url('remind')}" method="post" class="form-horizontal" role="form">
            <table class="table table-hover swtouch-table">
              <tr>
                <td class="col-sm-1 col-md-1 col-lg-1"><label class="control-label">用户名前缀</label></td>
                <td>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <input name="config[user_pre]" placeholder="用户名前缀" value="{$register_remind['config']['user_pre']}" class="form-control"  />
                  </div>
                  <span class="help-block">wx_ + 时间戳 + 随机2位数 生成：wx_141636330110。不能超过3位，超过则截取前3位，如果为空默认为wx_。</span>
                </td>
              </tr>
              <tr>
                <td class="col-sm-1 col-md-1 col-lg-1"><label class="control-label">密码前缀</label></td>
                <td>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <input name="config[pwd_pre]" placeholder="密码前缀" value="{$register_remind['config']['pwd_pre']}" class="form-control"  />
                  </div>
                  <span class="help-block">密码前缀默认为ecmoban</span>
                </td>
              </tr>
              <tr>
                <td class="col-sm-1 col-md-1 col-lg-1"><label class="control-label">随机密码位数</label></td>
                <td>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <input name="config[pwd_rand]" placeholder="随机密码位数" value="{$register_remind['config']['pwd_rand']}" class="form-control"  />
                  </div>
                  <span class="help-block">密码前缀+随机密码 生成：ecmoban231。不填写则默认为3位</span>
                </td>
              </tr>
              <tr>
                <td class="col-sm-1 col-md-1 col-lg-1"><label class="control-label">状态</label></td>
                <td>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <label class="radio-inline">
                      <input type="radio" name="data[enable]" value="1" {if $register_remind['enable'] == 1}checked{/if} />开启
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="data[enable]" value="0" {if $register_remind['enable'] == 0}checked{/if} />关闭
                    </label>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="col-sm-1 col-md-1 col-lg-1"><label class="control-label">提示模版</label></td>
                <td>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <textarea name="config[template]" placeholder="提示模版" class="form-control" rows="3">{$register_remind['config']['template']}</textarea>
                  </div>
                  <span class="help-block">例：默认用户名：[$username],默认密码：[$password]，变量请用示例中的。微信中换行用 \r\n</span>
                </td>
              </tr>
              <tr>
                <td class="col-sm-1 col-md-1 col-lg-1"></td>
                <td>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <input type="hidden" name="command" value="register_remind" />
                    <input type="submit" value="确认" class="btn btn-primary" />
                    <input type="reset" value="重置" class="btn btn-default" />
                  </div>
                </td>
              </tr>
            </table>
            </form>
          </div>
        </div>
      </div>
		</div>
		</div>
	</div>
</div>
{include file="pagefooter"}