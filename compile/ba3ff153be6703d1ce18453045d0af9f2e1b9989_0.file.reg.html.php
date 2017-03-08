<?php
/* Smarty version 3.1.30, created on 2017-03-08 11:06:28
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/index/reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfd7a40741b1_29002830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba3ff153be6703d1ce18453045d0af9f2e1b9989' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/index/reg.html',
      1 => 1488608106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bfd7a40741b1_29002830 (Smarty_Internal_Template $_smarty_tpl) {
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
/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.metadata.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/reg.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="box">
    <h3>注册页</h3>
    <form action="index.php?m=index&f=login&a=addReg" method="post" id="myform">
        用户名:<input type="text" name="uname" autocomplete="off"><br><br>
        密&nbsp;&nbsp;&nbsp;码:<input type="text" name="upass" autocomplete="off" id="pass"><br><br>
        确认密码:<input type="text" name="upass2" autocomplete="off"><br><br>


        <input type="text" name="code" size="10">
        <img src="index.php?m=admin&f=index&a=code" alt="" width="100" height="30" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" style="vertical-align:middle"><br><br>

        <input type="submit" value="注册">
    </form>

    已有用户名？请<a href="index.php?m=index&f=login&a=init">登陆</a>

    <a href="index.php">返回主页</a>
</div>

</body>
</html><?php }
}
