<?php
  class art extends main {
      function __construct(){
          parent::__construct();
          $this->db=new db("shows");
      }

      function show(){
          $result=$this->db->select("select * from shows");

          $obj=new pages(count($result),2);
          $this->smarty->assign("pages",$obj->out());


          $currentResult=$this->db->select("select * from shows,user where shows.uid=user.uid ".$obj->limit);

          $this->smarty->assign("result",$currentResult);





          $this->smarty->display("admin/artshow.html");
      }
  }
?>