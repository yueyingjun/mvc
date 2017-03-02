<?php
  class index extends main {
      function init(){
          include "template/admin/index.html";
      }

      function login(){
            $this->smarty->display("admin/login.html");
      }
  }
?>