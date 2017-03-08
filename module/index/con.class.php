<?php
 class con extends indexMain{
     function __construct(){
         parent::__construct();
         $this->db=new db("shows");
     }
     function show(){
         $sid=$_GET["id"];
         $result=$this->db->select("select * from shows,user where shows.uid=user.uid and shows.sid=$sid");

         $uid2=$result[0]["uid"];


         if($uid2==$this->session->get("uid")){
             $this->smarty->assign("guanzhu","self");
         }else {

             $result2 = $this->db->select("select * from guanzhu where uid1=" . $this->session->get("uid"));


             $flag = false;
             foreach ($result2 as $v) {
                 if ($v["uid2"] == $uid2) {
                     $flag = true;
                     break;
                 }
             }

             if ($flag) {
                 $this->smarty->assign("guanzhu", "true");
             } else {
                 $this->smarty->assign("guanzhu", "false");
             }


         }





         $this->smarty->assign("result",$result[0]);

         $this->smarty->display("index/show.html");
     }
 }
?>