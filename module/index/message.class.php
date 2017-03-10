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

            if($this->db->insert("uid1={$uid1};uid2={$uid2};sid={$sid};mcon='{$mcon}';pid=0")){
                $arr["mid"]=$this->db->connect->insert_id;
                $arr["uid"]=$this->session->get("uid");

                $arr["message"]="ok";

                 echo json_encode($arr);
            }


        }else{
            $arr["message"]="no";
            echo json_encode($arr);
        }
    }

    /*回复的数据的处理*/
    function reply(){
        $this->session->set("near",$_GET["near"]);

        if($this->session->get("uid")){
            $sid=$_GET["sid"];
            $uid1=$this->session->get("uid");
            $uid2=$_GET["uid2"];
            $pid=$_GET["pid"];
            $mcon=$_GET["mcon"];

            if($this->db->insert("sid=$sid;uid1=$uid1;uid2=$uid2;pid=$pid;mcon='{$mcon}'")){


                $arr["uid"]=$this->session->get("uid");
                $arr["message"]="ok";
                echo json_encode($arr);

            }



        }else{
            $arr["message"]="no";
            echo json_encode($arr);
        }
    }

    /*操作点击量*/
    function hit (){
       $sid=$_GET["sid"];
       if($this->db->update("update shows set hits=hits+1 where sid=$sid")){
           echo "ok";
       }else{
           echo "no";
       }
    }
}