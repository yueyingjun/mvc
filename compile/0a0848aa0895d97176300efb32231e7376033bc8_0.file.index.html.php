<?php
/* Smarty version 3.1.30, created on 2017-03-09 08:42:21
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/admin/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c1075d79a201_38450183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a0848aa0895d97176300efb32231e7376033bc8' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/admin/index.html',
      1 => 1488851880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c1075d79a201_38450183 (Smarty_Internal_Template $_smarty_tpl) {
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
/adminIndex.css">
</head>
<body>
<div class="header">
    <h1><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
欢迎来到后台管理系统</h1>
    <a href="index.php?m=admin&f=index&a=logout">退出</a>
</div>
<div class="main">

    <div class="left">
        <ul>
            <li>用户管理
                <ul>
                    <li>
                        <a href="" target="right">添加用户</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=user&a=select" target="right">管理用户</a>
                    </li>
                </ul>
            </li>

            <li>栏目管理
                <ul>
                    <li>
                        <a href="index.php?m=admin&f=category&a=showadd" target="right">添加栏目</a>
                    </li>
                    <li>
                        <a href="" target="right">管理栏目</a>
                    </li>
                </ul>
            </li>


            <li>栏目管理
                <ul>
                    <li>
                        <a href="" target="right">添加内容</a>
                    </li>
                    <li>
                        <a href="index.php?m=admin&f=art&a=show" target="right">管理内容</a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="right">

        </iframe>
    </div>
</div>

</body>
</html><?php }
}
