<?php
  class index extends indexMain {
      function __construct(){
          parent::__construct();
          $this->db=new db("shows");
      }

      function init(){

          $this->smarty->assign("indexLogin",$this->session->get("indexLogin"));

          $this->smarty->assign("uname",$this->session->get("uname"));

          if($this->session->get("indexLogin")=="yes"){
              $this->session->set("welcome","yes");
          }

          $result=$this->db->where("statu=1")->select();

          $this->smarty->assign("result",$result);


          $this->smarty->display("index/index.html");


      }
  }
?>