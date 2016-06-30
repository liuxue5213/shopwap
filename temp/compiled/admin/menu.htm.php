<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ShopWapp Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
<!--
var noHelp   = "<p align='center' style='color: #666'><?php echo $this->_var['lang']['no_help']; ?></p>";
var helpLang = "<?php echo $this->_var['help_lang']; ?>";
//-->
</script>

<style type="text/css">
body {
  background: #4f4b4c;
}
#tabbar-div {
  height: 26px;
  padding-left: 5px;
  border-bottom: 1px dashed #5c5c5c;
}
#tabbar-div p {
  margin:0;
}
.tab-front {
  line-height: 26px;
  font-weight: bold;
}
.tab-front a{
  color: #aaa;
}
.tab-front a:hover {
  color: #fff;
  text-decoration: none;
}
.tab-back {
  color: #e8f5e5;
  line-height: 20px;
  padding: 4px 15px 4px 18px;
  cursor: hand;
  cursor: pointer;
}
.tab-hover {
  color: #e8f5e5;
  line-height: 20px;
  padding: 4px 15px 4px 18px;
  cursor: hand;
  cursor: pointer;
  background: #2F9DB5;
}
#top-div
{
  padding: 3px 0 2px;
  background: #BBDDE5;
  margin: 5px;
  text-align: center;
}
#menu-list {
  padding: 0;
  margin: 0;
}
#menu-list ul {
  padding: 0;
  margin: 0;
  list-style-type: none;
  color: #aaa;
}
#menu-list li {
  padding-left: 21px;
  line-height: 30px;
  cursor: hand;
  cursor: pointer;
  border-bottom: 1px dashed #5c5c5c;
}
#menu-list li:hover {
  color: #fff;
  background: #322c2d url(images/menu_minus.gif) no-repeat 5px 9px;
}
#main-div a:visited, #menu-list a:link {
  color: #aaa;
  display: block;
  text-decoration: none;
}
#menu-list a:hover {
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}
#menu-list a:active {
  color: #fff;
}
.explode {
  background: #322c2d url(images/menu_minus.gif) no-repeat 5px 9px;
  font-weight: bold;
  color: #fff;
}
.collapse {
  background: url(images/menu_plus.gif) no-repeat 5px 9px;
  font-weight: bold;
}
#menu-list li ul {
  margin-left: -21px;
}
#menu-list li.menu-item {
  font-weight: normal;
  line-height: 30px;
  padding-left: 0;
  border-bottom: none;
}
#menu-list li.menu-item a {
  background: url(images/menu_arrow.gif) no-repeat 5px 9px;
  padding-left: 21px;
}
#menu-list li.menu-item a:hover{
  background: #468e33;
}
#help-title {
  font-size: 14px;
  color: #000080;
  margin: 5px 0;
  padding: 0px;
}
#help-content {
  margin: 0;
  padding: 0;
}
.tips {
  color: #CC0000;
}
.link {
  color: #000099;
}
</style>

</head>
<body>
<div id="tabbar-div">
<p><span style="float:right; padding: 7px 5px;" ><a href="javascript:toggleCollapse();"><img id="toggleImg" src="images/menu_plus.gif" width="11" height="11" border="0" alt="<?php echo $this->_var['lang']['expand_all']; ?>" /></a></span>
  <span class="tab-front" id="menu-tab"><a href="javascript:toggleCollapse();"><?php echo $this->_var['lang']['menu']; ?></a></span>
</p>
</div>
<div id="main-div">
<div id="menu-list">
<ul id="menu-ul">
<?php $_from = $this->_var['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'menu');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['menu']):
?>
<?php if ($this->_var['menu']['action']): ?>
  <li class="collapse"><a href="<?php echo $this->_var['menu']['action']; ?>" target="main-frame"><?php echo $this->_var['menu']['label']; ?></a></li>
<?php else: ?>
  <li class="collapse" key="<?php echo $this->_var['k']; ?>" name="menu">
    <?php echo $this->_var['menu']['label']; ?>
    <?php if ($this->_var['menu']['children']): ?>
    <ul style="display:none">
    <?php $_from = $this->_var['menu']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
      <li class="menu-item"><a href="<?php echo $this->_var['child']['action']; ?>" target="main-frame"><?php echo $this->_var['child']['label']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <?php endif; ?>
  </li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <li class="collapse" key="20_yun" name="menu">
    云服务中心
    <ul style="display:none">
      <li class="menu-item"><a href="cloud.php?act=sms&amp;ent_id&amp;ent_ac&amp;t&amp;admin_url&amp;sess_id&amp;certificate_id&amp;token" target="main-frame">短信服务</a></li>
      <li class="menu-item"><a href="http://www.gope.cn/" target="_blank">狗扑分享论坛</a></li>
      <li class="menu-item"><a href="http://www.gope.cn/" target="_blank">支持论坛</a></li>
    </ul>
  </li>
</ul>
</div>
<div id="help-div" style="display:none">
<h1 id="help-title"></h1>
<div id="help-content"></div>
</div>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/global.js,../js/utils.js,../js/transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'./js/menu.js')); ?>
<script language="JavaScript">
<!--
var collapse_all = "<?php echo $this->_var['lang']['collapse_all']; ?>";
var expand_all = "<?php echo $this->_var['lang']['expand_all']; ?>";
var collapse = false;

function toggleCollapse()
{
  var items = document.getElementsByTagName('LI');
  for (i = 0; i < items.length; i++)
  {
    if (collapse)
    {
      if (items[i].className == "explode")
      {
        toggleCollapseExpand(items[i], "collapse");
      }
    }
    else
    {
      if ( items[i].className == "collapse")
      {
        toggleCollapseExpand(items[i], "explode");
        ToggleHanlder.Reset();
      }
    }
  }

  collapse = !collapse;
  document.getElementById('toggleImg').src = collapse ? 'images/menu_minus.gif' : 'images/menu_plus.gif';
  document.getElementById('toggleImg').alt = collapse ? collapse_all : expand_all;
}

function toggleCollapseExpand(obj, status)
{
  if (obj.tagName.toLowerCase() == 'li' && obj.className != 'menu-item')
  {
    for (i = 0; i < obj.childNodes.length; i++)
    {
      if (obj.childNodes[i].tagName == "UL")
      {
        if (status == null)
        {
          if (obj.childNodes[1].style.display != "none")
          {
            obj.childNodes[1].style.display = "none";
            ToggleHanlder.RecordState(obj.getAttribute("key"), "collapse");
            obj.className = "collapse";
          }
          else
          {
            obj.childNodes[1].style.display = "block";
            ToggleHanlder.RecordState(obj.getAttribute("key"), "explode");
            obj.className = "explode";
          }
          break;
        }
        else
        {
          if( status == "collapse")
          {
            ToggleHanlder.RecordState(obj.getAttribute("key"), "collapse");
            obj.className = "collapse";
          }
          else
          {
            ToggleHanlder.RecordState(obj.getAttribute("key"), "explode");
            obj.className = "explode";
          }
          obj.childNodes[1].style.display = (status == "explode") ? "block" : "none";
        }
      }
    }
  }
}
document.getElementById('menu-list').onclick = function(e)
{
  var obj = Utils.srcElement(e);
  toggleCollapseExpand(obj);
}

document.getElementById('tabbar-div').onmouseover=function(e)
{
  var obj = Utils.srcElement(e);

  if (obj.className == "tab-back")
  {
    obj.className = "tab-hover";
  }
}

document.getElementById('tabbar-div').onmouseout=function(e)
{
  var obj = Utils.srcElement(e);

  if (obj.className == "tab-hover")
  {
    obj.className = "tab-back";
  }
}

document.getElementById('tabbar-div').onclick=function(e)
{
  var obj = Utils.srcElement(e);

 // var mnuTab = document.getElementById('menu-tab');
  var hlpTab = document.getElementById('help-tab');
  var mnuDiv = document.getElementById('menu-list');
  var hlpDiv = document.getElementById('help-div');

  //if (obj.id == 'menu-tab')
//  {
//    mnuTab.className = 'tab-front';
//    hlpTab.className = 'tab-back';
//    mnuDiv.style.display = "block";
//    hlpDiv.style.display = "none";
//  }

  if (obj.id == 'help-tab')
  {
    mnuTab.className = 'tab-back';
    hlpTab.className = 'tab-front';
    mnuDiv.style.display = "none";
    hlpDiv.style.display = "block";

    loc = parent.frames['main-frame'].location.href;
    pos1 = loc.lastIndexOf("/");
    pos2 = loc.lastIndexOf("?");
    pos3 = loc.indexOf("act=");
    pos4 = loc.indexOf("&", pos3);

    filename = loc.substring(pos1 + 1, pos2 - 4);
    act = pos4 < 0 ? loc.substring(pos3 + 4) : loc.substring(pos3 + 4, pos4);
    loadHelp(filename, act);
  }
}

/**
 * 创建XML对象
 */
function createDocument()
{
  var xmlDoc;

  // create a DOM object
  if (window.ActiveXObject)
  {
    try
    {
      xmlDoc = new ActiveXObject("Msxml2.DOMDocument.6.0");
    }
    catch (e)
    {
      try
      {
        xmlDoc = new ActiveXObject("Msxml2.DOMDocument.5.0");
      }
      catch (e)
      {
        try
        {
          xmlDoc = new ActiveXObject("Msxml2.DOMDocument.4.0");
        }
        catch (e)
        {
          try
          {
            xmlDoc = new ActiveXObject("Msxml2.DOMDocument.3.0");
          }
          catch (e)
          {
            alert(e.message);
          }
        }
      }
    }
  }
  else
  {
    if (document.implementation && document.implementation.createDocument)
    {
      xmlDoc = document.implementation.createDocument("","doc",null);
    }
    else
    {
      alert("Create XML object is failed.");
    }
  }
  xmlDoc.async = false;

  return xmlDoc;
}

//菜单展合状态处理器
var ToggleHanlder = new Object();

Object.extend(ToggleHanlder ,{
  SourceObject : new Object(),
  CookieName   : 'Toggle_State',
  RecordState : function(name,state)
  {
    if(state == "collapse")
    {
      this.SourceObject[name] = state;
    }
    else
    {
      if(this.SourceObject[name])
      {
        delete(this.SourceObject[name]);
      }
    }
    var date = new Date();
    date.setTime(date.getTime() + 99999999);
    document.setCookie(this.CookieName, this.SourceObject.toJSONString(), date.toGMTString());
  },

  Reset :function()
  {
    var date = new Date();
    date.setTime(date.getTime() + 99999999);
    document.setCookie(this.CookieName, "{}" , date.toGMTString());
  }
});

ToggleHanlder.CookieName += "_<?php echo $this->_var['admin_id']; ?>";
//-->
</script>

</body>
</html>