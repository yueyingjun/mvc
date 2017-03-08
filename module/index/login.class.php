<?php
 class login extends indexMain {

     function __construct(){
         parent::__construct();
         $this->db=new db("user");
     }

     // 登陆处理

     function init(){
        if($this->session->get("welcome")=="yes"){
            header("location:index.php");
        }else {
            $this->smarty->display("index/login.html");
        }
     }

     //检查登陆

     function check(){
         $code=$_POST["code"];
         if($code!==$this->session->get("code")){
             $this->jump("index.php","验证码错误");
             exit;
         }

         $uname=$_POST["uname"];
         $upass=md5($_POST["upass"]);
         $result=$this->db->select();
         foreach ($result as $v){
             if($v["uname"]==$uname){
                 if($v["upass"]==$upass){
                     $this->session->set("indexLogin","yes");
                     $this->session->set("uname",$uname);
                     $this->session->set("uid",$v["uid"]);

                     $url=$this->session->get("near")?$this->session->get("near"):"index.php";
                     $this->jump($url,"登陆成功");
                     exit;
                 }
             }
         }


         $this->jump("index.php","登陆失败");

     }

     //注册页面

     function reg(){
         if($this->session->get("welcome")=="yes"){
             header("location:index.php");

         }else {
             $this->smarty->display("index/reg.html");
         }
     }

     //异步验证用户名
     function ajax(){
           $uname=$_POST["uname"];

           $result=$this->db->select("uname");

           foreach ($result as $v){
                if($v["uname"]==$uname){
                    echo "false";
                    exit;
                }
           }

           echo "true";
     }
//异步验证 验证码
     function ajaxCode(){
         $code=$_POST["code"];
         if($code==$this->session->get("code")){
             echo "true";
         }else{
             echo "false";
         }
     }

     //添加用户
     function addReg(){
        $uname=P("uname");
        $upass=md5(P("upass"));

        if($this->db->insert("uname='$uname';upass='$upass'")>0){
             $this->jump("index.php","注册成功");
        }else{
            $this->jump("index.php?m=index&f=login&a=reg","注册失败");
        }
     }
     //退出登陆

    function logout(){
         $this->session->clear();
         $this->jump("index.php","退出成功");
    }
 }

?>