<?php
 class guanzhu extends indexMain{
     function __construct(){
         parent::__construct();
         $this->db=new db("guanzhu");
     }
     function addguanzu(){
        $this->session->set("near",$_GET["near"]);
        if($this->session->get("indexLogin")){
            $uid1=$this->session->get("uid");
            $uid2=$_GET["uid2"];

            if($this->db->insert("uid1=$uid1;uid2=$uid2")) {
                echo "yes";
            }
        }else{
            //高度抽象  指导你的现实生活  哲学
            echo "no";
        }
     }

     function quxiaoguanzu(){
         $uid1=$this->session->get("uid");
         $uid2=$_GET["uid2"];

         if($this->db->where("uid1={$uid1} and uid2={$uid2}")->del()){
             echo "ok";
         }else{
             echo "no";
         }


     }


 }
?>