<?php
/* Smarty version 3.1.30, created on 2017-03-08 10:05:42
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/index/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfc9667dd445_66179417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f712ad87f6b5f7abceea127bac0d86c6b6c9032' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/index/login.html',
      1 => 1488609298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bfc9667dd445_66179417 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<div class="box">
    <h3>登录页</h3>
    <form action="index.php?m=index&f=login&a=check" method="post">
        用户名:<input type="text" name="uname" autocomplete="off"><br><br>
        密&nbsp;&nbsp;&nbsp;码:<input type="text" name="upass" autocomplete="off"><br><br>


        <input type="text" name="code" size="10" >
        <img src="index.php?m=admin&f=index&a=code" alt="" width="100" height="30" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" style="vertical-align:middle"><br><br>


        <input type="submit" value="登陆">
    </form>

    没有用户名？请<a href="index.php?m=index&f=login&a=reg">注册</a>
    <a href="index.php">返回主页</a>
</div>

</body>
</html><?php }
}
