{include file="pageheader"}
<div class="container-fluid" style="padding:0">
    <div class="row" style="margin:0">
      <div class="col-sm-2 col-md-2 col-lg-1" style="padding-right:0;">{include file="wechat_left_menu"}</div>
      <div class="col-sm-10 col-md-10 col-lg-11" style="padding-right:0;">
        <div class="panel panel-default">
            <div class="panel-heading">素材管理</div>
            <div class="panel-body">
                <ul class="nav nav-pills pull-left" role="tablist">
                     <li role="presentation" class="active"><a href="{url('article')}">图文消息</a></li>
                     <li role="presentation"><a href="{url('picture')}">图片</a></li>
                     <li role="presentation"><a href="{url('voice')}">语音</a></li>
                     <li role="presentation"><a href="{url('video')}">视频</a></li>
                 </ul>
                 <a href="{url('article_edit_news')}" class="btn btn-primary pull-right">多图文添加</a>
                 <a href="{url('article_edit')}" class="btn btn-primary pull-right">图文添加</a>
            </div>
            <style>
            .article{border:1px solid #ddd;padding:5px 5px 0 5px;height: 290px;overflow: hidden;}
            .cover{height:160px; position:relative;margin-bottom:5px;overflow:hidden;}
            .article .cover img{width:100%; height:auto;}
            .article h4{height:19px;overflow:hidden;}
            .article span{height:40px; line-height:40px; display:block; z-index:5; position:absolute;width:100%;bottom:0px; color:#fff; padding:0 10px; background-color:rgba(0,0,0,0.6)}
            .article_list{padding:5px;border:1px solid #ddd;border-top:0;overflow:hidden;}
            </style>
            <div class="container-fluid panel-body">
                <div class="row">
                {loop $list $key $val}
                    <div class="col-sm-6 col-md-4 col-lg-2 swtouch-mb">
                        {if $val['article_id']}
                            {loop $val['articles'] $k $v}
                                {if $k == 0}
                            <div class="article">
                                <p>{date('Y年m月d日', $v['add_time'])}</p>
                                <div class="cover"><img src="{$v['file']}" /><span>{$v['title']}</span></div>
                            </div>
                                {else}
                            <div class="article_list">
                                <span>{$v['title']}</span>
                                <img src="{$v['file']}" width="78" height="78" class="pull-right" />
                            </div>
                                {/if}
                            {/loop}
                            <div class="bg-info">
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                <li role="presentation"><a href="{url('article_edit_news', array('id'=>$val['id']))}" title="编辑" class="swtouch-fs18"><span class="glyphicon glyphicon-pencil"></span></a></li>
                                <li role="presentation"><a href="javascript:if(confirm('{$lang['confirm_delete']}')){window.location.href='{url('article_del', array('id'=>$val['id']))}'};" title="删除" class="swtouch-fs18"><span class="glyphicon glyphicon-trash"></span></a></li>
                                </ul>
                            </div>
                        {else}
                        <div class="article">
                            <h4>{$val['title']}</h4>
                            <p>{date('Y年m月d日', $val['add_time'])}</p>
                            <div class="cover"><img src="{$val['file']}" /></div>
                            <p>{$val['content']}</p>
                            
                        </div>
                        <div class="bg-info">
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                <li role="presentation"><a href="{url('article_edit', array('id'=>$val['id']))}" title="编辑" class="swtouch-fs18"><span class="glyphicon glyphicon-pencil"></span></a></li>
                                <li role="presentation"><a href="javascript:if(confirm('{$lang['confirm_delete']}')){window.location.href='{url('article_del', array('id'=>$val['id']))}'};" title="删除" class="swtouch-fs18"><span class="glyphicon glyphicon-trash"></span></a></li>
                                </ul>
                            </div>
                        {/if}
                    </div>
                    {if ($key+1)%6 == 0}
                    </div>
                    <div class="row">
                    {/if}
                {/loop}
                 </div>
            </div>
        </div>
        {include file="pageview"}
      </div>
    </div>
</div>
{include file="pagefooter"}