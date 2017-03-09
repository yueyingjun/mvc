<?php
class love extends indexMain{
    function __construct(){
        parent::__construct();
        $this->db=new db("love");
    }

    function shoucang(){
        $this->session->set("near",$_GET["near"]);
        if($this->session->get("indexLogin")){
            $uid=$this->session->get("uid");
            $sid=$_GET["sid"];

            if($this->db->insert("uid=$uid;sid=$sid")) {
                echo "yes";
            }
        }else{

            echo "no";
        }
    }

    function lovecancel(){
        $uid=$this->session->get("uid");
        $sid=$_GET["sid"];

        if($this->db->where("uid=$uid and sid={$sid}")->del()){
            echo "ok";
        }else{
            echo "no";
        }

    }
}