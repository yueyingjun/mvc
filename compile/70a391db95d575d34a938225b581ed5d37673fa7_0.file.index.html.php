<?php
/* Smarty version 3.1.30, created on 2017-03-08 10:31:51
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/index/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfcf873bbe26_03122537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70a391db95d575d34a938225b581ed5d37673fa7' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/index/index.html',
      1 => 1488957713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_58bfcf873bbe26_03122537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <li>
        <h1>
            <a href="index.php?m=index&f=con&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>

        </h1>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</ul>


</body>
</html><?php }
}
