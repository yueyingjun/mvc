<?php
/* Smarty version 3.1.30, created on 2017-03-08 11:12:49
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/index/show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfd9213cb8a4_71857107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e782a6e4588ecd54020c2717da0c3c3ce8f660' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/index/show.html',
      1 => 1488967964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_58bfd9213cb8a4_71857107 (Smarty_Internal_Template $_smarty_tpl) {
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
">
                  <?php echo $_smarty_tpl->tpl_vars['result']->value["uname"];?>

              </span>
          </span>
          <span class="time">时间:
              <span class="date">
                  <?php echo $_smarty_tpl->tpl_vars['result']->value["stime"];?>

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
      <?php }?>





      <a href="javascript:;" class="btn btn-success">收藏</a><br><br>

      <div class="submit submit1">

          <textarea  class="form-control" rows="3"></textarea><br>
          <a href="javascript:;" class="btn btn-primary">留言</a>
          <a href="javascript:;" class="btn btn-danger">取消</a>
      </div>

      <div class="message">
          <h3>共有xxx条留言</h3>
          <div class="liuyanbox">
             <div class="liuyan">
             <div class="userinfo">
                 <div class="phone">

                 </div>
                 <div class="info">
                       <div class="name">xxx</div>
                     <div class="time">2000-20-20</div>
                 </div>
             </div>
              <div class="liuyancon">
                    <p>sakjd</p>
                    <p>sakjd</p>
                    <p>sakjd</p>
                    <p>sakjd</p>
              </div>
              <a href="javascript:;" class="btn btn-default replyBtn replyBtn1">回复1</a>
          </div>
             <div class="reply">

            <div class="replylist">
              <div class="replycon">
                  <span>xxxx:</span>
                  <div class="replyinfo">
                      sakdjaksjdk
                      sjadhjksah
                      dksajdkas

                  </div>

              </div>

                <div class="replystate">
                    <div class="time">2000-22-22</div>
                    <a href="javascript:;" class="btn btn-default replyBtn replyBtn2">回复2</a>
                </div>

            </div>

          </div>

              <div class="submit submit2">

                  <textarea  class="form-control" rows="3"></textarea><br>
                  <a href="javascript:;" class="btn btn-primary">回复</a>
                  <a href="javascript:;" class="btn btn-danger">取消</a>
              </div>
          </div>

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
