<?php
class message extends indexMain{
    function __construct(){
        parent::__construct();
        $this->db=new db("message");
    }

    function add(){
        $this->session->set("near",$_GET["near"]);
        if($this->session->get("uid")){
            $uid1=$this->session->get("uid");
            $uid2=$_GET["uid2"];
            $sid=$_GET["sid"];
            $mcon=$_GET["mcon"];

            if($this->db->insert("uid1={$uid1};uid2={$uid2};sid={$sid};mcon={$mcon};pid=0")){
                echo "ok";
            }


        }else{
            echo "no";
        }
    }
}