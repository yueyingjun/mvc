<?php
  class art extends main {
      function __construct(){
          parent::__construct();
          $this->db=new db("shows");
      }

      function show(){
          $result=$this->db->select();
          $this->smarty->assign("result",$result);
          $this->smarty->display("admin/artshow.html");
      }
  }
?>