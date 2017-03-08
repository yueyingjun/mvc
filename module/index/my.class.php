<?php
  class my extends indexMain{
      function __construct(){
          parent::__construct();
      }

      function init(){

            $this->smarty->display("index/home.html");
      }
  }
?>