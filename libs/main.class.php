<?php
  class main{

      function __construct(){
          $this->smarty=new Smarty();
          $this->smarty->setCompileDir("compile");
          $this->smarty->setTemplateDir("template");
      }
  }
?>