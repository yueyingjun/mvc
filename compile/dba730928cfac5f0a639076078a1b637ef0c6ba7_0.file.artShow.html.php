<?php
/* Smarty version 3.1.30, created on 2017-03-07 02:36:31
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/index/artShow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be0e9f3fe854_28417111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dba730928cfac5f0a639076078a1b637ef0c6ba7' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/index/artShow.html',
      1 => 1488850105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be0e9f3fe854_28417111 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>

</head>
<body>
<!--
 分类表

 cid  name  pid
 内容表
 id  title con  img cid time hits good  posid author
-->
<form action="index.php?m=index&f=art&a=add" method="post">

    <div class="form-group">
        <label for="cid">选择分类</label>
        <select class="form-control" name="cid" id="cid">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>


        </select>
    </div>


    <div class="form-group">
        <label for="stitle">文章标题</label>
        <input type="text" class="form-control" id="stitle" name="stitle" placeholder="标题">
    </div>

    <div class="form-group">
        <label for="scon">文章内容</label>
        <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:1024px;height:500px;" name="scon"><?php echo '</script'; ?>
>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
