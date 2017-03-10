<?php
/* Smarty version 3.1.30, created on 2017-03-10 04:00:31
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/index/show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c216cfb13a77_92743893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e782a6e4588ecd54020c2717da0c3c3ce8f660' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/index/show.html',
      1 => 1489114795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_58c216cfb13a77_92743893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/show.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/show.js"><?php echo '</script'; ?>
>


  <div class="container">
      <h1 class="text-center">
          <?php echo $_smarty_tpl->tpl_vars['result']->value["stitle"];?>

          <br>
          <span class="author">作者:
              <span class="name author-name" attr="<?php echo $_smarty_tpl->tpl_vars['result']->value['uid'];?>
" sid="<?php echo $_smarty_tpl->tpl_vars['result']->value['sid'];?>
">
                  <?php echo $_smarty_tpl->tpl_vars['result']->value["uname"];?>

              </span>
          </span>
          <span class="time">时间:
              <span class="date">
                  <?php echo $_smarty_tpl->tpl_vars['result']->value["stime"];?>

              </span>
          </span>

          <span class="hits">点击量:
              <span class="hitnum">
                   <?php echo $_smarty_tpl->tpl_vars['result']->value["hits"];?>

              </span>
          </span>
      </h1>
      <div class="con">
      <?php echo $_smarty_tpl->tpl_vars['result']->value["scon"];?>

      </div>
      <!--交互-->

      <?php if ($_smarty_tpl->tpl_vars['guanzhu']->value == "true") {?>
      <a href="javascript:;" class="btn btn-success guanzhu" style="display:none">关注</a>
      <a href="javascript:;" class="btn btn-success quxiaoguanzhu">取消关注</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "false") {?>
      <a href="javascript:;" class="btn btn-success guanzhu">关注</a>
      <a href="javascript:;" class="btn btn-success quxiaoguanzhu" style="display: none">取消关注</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "nosession") {?>
      <a href="javascript:;" class="btn btn-success guanzhu">关注</a>
      <a href="javascript:;" class="btn btn-success quxiaoguanzhu" style="display: none">取消关注</a>

      <?php }?>



      <?php if ($_smarty_tpl->tpl_vars['love']->value == "true") {?>
      <a href="javascript:;" class="btn btn-success loveBtn" style="display:none">收藏</a>
      <a href="javascript:;" class="btn btn-success loveCancel" >取消收藏</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "false") {?>
      <a href="javascript:;" class="btn btn-success loveBtn" >收藏</a>
      <a href="javascript:;" class="btn btn-success loveCancel" style="display:none">取消收藏</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "nosession") {?>
      <a href="javascript:;" class="btn btn-success loveBtn" >收藏</a>
      <a href="javascript:;" class="btn btn-success loveCancel" style="display:none">取消收藏</a>

      <?php }?>






      <br><br>

      <div class="submit submit1">

          <textarea  class="form-control mcon" rows="3"></textarea><br>
          <a href="javascript:;" class="btn btn-primary message-btn">留言</a>
          <a href="javascript:;" class="btn btn-danger">取消</a>
      </div>

      <div class="message">

          <div class="liuyanbox" style="display: none">
              <div class="liuyan">
                  <div class="userinfo">
                      <div class="phone">

                      </div>
                      <div class="info">
                          <div class="name">11</div>
                          <div class="time">11</div>
                      </div>
                  </div>
                  <div class="liuyancon">
                      11
                  </div>
                  <a href="javascript:;" class="btn btn-default replyBtn replyBtn1" uid2="11" pid="11">回复1</a>
              </div>
              <div class="reply">

                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
                  <div class="replylist">
                      <div class="replycon">
                          <span><?php echo $_smarty_tpl->tpl_vars['v1']->value["uname"];?>
</span>
                          <div class="replyinfo">
                              <?php echo $_smarty_tpl->tpl_vars['v1']->value["mcon"];?>

                          </div>

                      </div>

                      <div class="replystate">
                          <div class="time"><?php echo $_smarty_tpl->tpl_vars['v1']->value["mtime"];?>
</div>
                          <a href="javascript:;" class="btn btn-default replyBtn replyBtn2" uid2="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复2</a>
                      </div>

                  </div>

                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


              </div>

              <div class="submit submit2">

                  <textarea  class="form-control" rows="3"></textarea><br>
                  <a href="javascript:;" class="btn btn-primary replyBtn3">回复</a>
                  <a href="javascript:;" class="btn btn-danger">取消</a>
              </div>
          </div>

          <?php if (count($_smarty_tpl->tpl_vars['arr']->value) < 1) {?>
          <h3>没有 <span></span> 留言</h3>
          <?php } else { ?>
          <h3>共有 <span><?php echo count($_smarty_tpl->tpl_vars['liuyanArr']->value);?>
</span>条留言</h3>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
          <div class="liuyanbox">
             <div class="liuyan">
             <div class="userinfo">
                 <div class="phone">

                 </div>
                 <div class="info">
                       <div class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</div>
                     <div class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value["mtime"];?>
</div>
                 </div>
             </div>
              <div class="liuyancon">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>

              </div>
              <a href="javascript:;" class="btn btn-default replyBtn replyBtn1" uid2="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复1</a>
          </div>
             <div class="reply">

                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
            <div class="replylist">
              <div class="replycon">
                  <span><?php echo $_smarty_tpl->tpl_vars['v1']->value["uname"];?>
</span>
                  <div class="replyinfo">
                     <?php echo $_smarty_tpl->tpl_vars['v1']->value["mcon"];?>

                  </div>

              </div>

                <div class="replystate">
                    <div class="time"><?php echo $_smarty_tpl->tpl_vars['v1']->value["mtime"];?>
</div>
                    <a href="javascript:;" class="btn btn-default replyBtn replyBtn2" uid2="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复2</a>
                </div>

            </div>

                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


          </div>

              <div class="submit submit2">

                  <textarea  class="form-control" rows="3"></textarea><br>
                  <a href="javascript:;" class="btn btn-primary replyBtn3">回复</a>
                  <a href="javascript:;" class="btn btn-danger">取消</a>
              </div>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


          <?php }?>


      </div>

  </div>

   <div class="mask">

   </div>
   <?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <div class="notice">操作成功</div>
</body>
</html><?php }
}
