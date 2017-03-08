<?php
/* Smarty version 3.1.30, created on 2017-03-08 10:05:37
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/index/notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfc961890ba4_99986191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b3c7880bf725e8bd2807a1b0eaf7ebb61987138' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/index/notice.html',
      1 => 1488963093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bfc961890ba4_99986191 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .notice-login{
        padding:30px 0;
        width:200px;
        background: #ccc;
        border-radius: 10px;
        text-align: center;
        line-height: 20px;
        position: fixed;
        left:0;top:40%;right:0;bottom: 40%;
        margin:auto;
        display: none;
    }
</style>
<div class="notice-login">
    请先 <a href="index.php?m=index&f=login&a=init">登陆</a>
    再进行操作<br>
    <a href="javascript:;" class="btn btn-danger quxiao" style="margin-top:5px;">取消登陆</a>
</div><?php }
}
