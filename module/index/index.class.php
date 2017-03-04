<?php
  class index {
      function init(){
          $smarty=new Smarty();
          $smarty->setCompileDir("compile");
          $smarty->setTemplateDir("template");

          $smarty->display("index/index.html");
      }
  }
?>