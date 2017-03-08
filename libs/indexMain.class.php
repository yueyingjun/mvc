<?php
  class indexMain{
      function __construct(){
          $this->smarty=new Smarty();
          $this->smarty->setCompileDir("compile");
          $this->smarty->setTemplateDir("template");
          $this->session=new session();
          $this->smarty->assign("indexLogin",$this->session->get("indexLogin"));

          $this->smarty->assign("uname",$this->session->get("uname"));
      }
      function checkLogin(){
          $session=$this->session;
          if(!($session->get("indexLogin")&&MVC=="yes")){
              $this->jump("index.php?m=index&f=index&a=init","请登录");
              exit;
          }else{
              return true;
          }
      }
      function jump($url,$message){
          $this->smarty->assign("url",$url);
          $this->smarty->assign("message",$message);
          $this->smarty->display("admin/message.html");
      }
  }
?>