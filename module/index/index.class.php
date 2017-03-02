<?php
  class index{
      function init(){
          $smarty=new Smarty();
          $smarty->setCompileDir("compile");
          $smarty->setTemplateDir("template");
          $db=new db("category");
          $result=$db->select();
          $smarty->assign("result",$result);
          $smarty->display("index/index.html");
      }
  }
?>