<?php
/* Smarty version 3.1.30, created on 2017-03-09 08:42:09
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/admin/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c107516e3b67_93734379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f07864d102d88a5992f273f423086df886ad9d55' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/admin/login.html',
      1 => 1488613892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c107516e3b67_93734379 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3>后台登录页</h3>
    <form action="index.php?m=admin&f=index&a=check" method="post">
        用户名:<input type="text" name="aname" autocomplete="off"><br><br>
        密&nbsp;&nbsp;&nbsp;码:<input type="text" name="apass" autocomplete="off"><br><br>


        <input type="text" name="code" size="10" >
        <img src="index.php?m=admin&f=index&a=code" alt="" width="100" height="30" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" style="vertical-align:middle"><br><br>


        <input type="submit" value="登陆">
    </form>
</div>

</body>
</html><?php }
}
