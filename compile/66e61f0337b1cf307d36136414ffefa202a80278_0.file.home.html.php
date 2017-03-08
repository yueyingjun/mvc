<?php
/* Smarty version 3.1.30, created on 2017-03-08 10:35:46
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/index/home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfd0728fef14_18165916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66e61f0337b1cf307d36136414ffefa202a80278' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/index/home.html',
      1 => 1488944225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58bfd0728fef14_18165916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/home.css">


<!--

a.
   skajdks      sid=10
   dsakhdjksa
                   id pid       sid
   b.  b留言        1  0         10
     c.  c回复b     c id  pid
     b.  b回复c      5   1
                    b id   pid
                     10   5
     a.  回复
   c.  c留言         id   pid
                     2    0
      d. d回复




  1.  留言是给谁留的  双方
  2.  留言给哪一篇文章留的
  3.  留言的时间
  4.  留言之间的关系



-->
<div class="container main">
    <div class="row">
        <div class="col-sm-8 main-left">

            <!--头像部分-->
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-sm-4">
                         头像
                     </div>
                      <div class="col-sm-2">
                          关注数量 <span>1</span>
                      </div>
                     <div class="col-sm-2">
                         粉丝数量 <span>1</span>
                     </div>
                     <div class="col-sm-2">
                         文章数量 <span>1</span>
                     </div>
                     <div class="col-sm-2">
                         留言数量 <span>1</span>
                     </div>
                 </div>
            </div>

            <div class="line"></div>

            <!--菜单部分-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        收藏的内容
                    </div>
                    <div class="col-sm-4">
                        发表的内容
                    </div>
                    <div class="col-sm-4">
                        xxx的内容
                    </div>
                </div>
            </div>

            <!--具体的内容-->

            <ul class="mui-table-view">
                <li class="mui-table-view-cell mui-media">
                    <a href="javascript:;">
                        <img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">
                        <div class="mui-media-body">
                            幸福
                            <p class="mui-ellipsis">能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？</p>
                        </div>
                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="javascript:;">
                        <img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">
                        <div class="mui-media-body">
                            木屋
                            <p class="mui-ellipsis">想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.</p>
                        </div>
                    </a>
                </li>
                <li class="mui-table-view-cell mui-media">
                    <a href="javascript:;">
                        <img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">
                        <div class="mui-media-body">
                            CBD
                            <p class="mui-ellipsis">烤炉模式的城，到黄昏，如同打翻的调色盘一般.</p>
                        </div>
                    </a>
                </li>
            </ul>


        </div>
        <div class="col-sm-4 main-right">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    浏览排行榜
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>


            <div class="list-group">
                <a href="#" class="list-group-item active">
                    关注排行榜
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
    </div>
</div>

</body>
</html><?php }
}
