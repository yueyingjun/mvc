<?php
/* Smarty version 3.1.30, created on 2017-03-07 03:07:38
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/admin/artshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be15ea89d977_78713773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1351fe9396d82c8e6e82f88c3d9e4383917966a3' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/admin/artshow.html',
      1 => 1488852451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be15ea89d977_78713773 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        th{
            text-align: center;
        }
    </style>
</head>
<body>
    <table class="table text-center">
        <tr>
            <th>
                id
            </th>
            <th>
                标题
            </th>
            <th>
               作者
            </th>
            <th>
                点击数
            </th>
            <th>
                点赞数
            </th>
            <th>
                状态
            </th>
            <th>
                发布时间
            </th>
            <th>
                操作
            </th>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["good"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["statu"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</td>
            <td>
                <a href="">查看</a>
                <a href="">删除</a>
            </td>
        </tr>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</body>
</html><?php }
}
