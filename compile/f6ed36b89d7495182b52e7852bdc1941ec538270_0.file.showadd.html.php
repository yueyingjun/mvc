<?php
/* Smarty version 3.1.30, created on 2017-03-06 10:25:40
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/admin/showadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bd2b1466ca15_04669628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ed36b89d7495182b52e7852bdc1941ec538270' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/admin/showadd.html',
      1 => 1488792335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bd2b1466ca15_04669628 (Smarty_Internal_Template $_smarty_tpl) {
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

</head>
<body>
<form action="index.php?m=admin&f=category&a=add" method="post">
    <div class="form-group">
        <label for="pid">选择分类</label>
        <select class="form-control" name="pid" id="pid">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>


    <div class="form-group">
        <label for="cname">分类名称</label>
        <input type="text" class="form-control" id="cname" name="cname" placeholder="标题">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html><?php }
}
