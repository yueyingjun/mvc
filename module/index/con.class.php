<?php
 class con extends indexMain{
     function __construct(){
         parent::__construct();
         $this->db=new db("shows");
     }

     /*处理整个show页面*/
     function show(){

         $sid=$_GET["id"];
         $result=$this->db->select("select * from shows,user where shows.uid=user.uid and shows.sid=$sid");

         /*关注*/

         $this->guanzhu($result);

         /*收藏*/

         $this->love($result);

         /*留言*/

         $this->message();




         $this->smarty->assign("result",$result[0]);

         $this->smarty->display("index/show.html");
     }


     /*用来查询留言*/

     function message(){
         $sid=$_GET["id"];
         $result=$this->db->select("select * from message,user where message.sid={$sid} and message.uid1=user.uid");

         $arr=array();

         foreach ($result as $v){
             if($v["pid"]==0){
                 $arr[]=$v;
             }
         }
         $this->smarty->assign("liuyanArr",$arr);

         foreach ($result as $v){
             if($v["pid"]!==0){
                foreach ($arr as $k=>$v1){
                    if(!isset($arr[$k]["son"])){
                        $arr[$k]["son"]=array();
                    }
                    if($v["pid"]==$v1["mid"]){
                        $arr[$k]["son"][]=$v;
                    }
                }

             }
         }

        $this->smarty->assign("arr",$arr);

     }

     /*
         * 处理收藏的函数
         * */
     function love($result){
         if($this->session->get("uid")){
             $uid=$result[0]["uid"];
             if ($uid == $this->session->get("uid")) {
                 $this->smarty->assign("love", "self");
             }else{

                 $result=$this->db->select("select * from love where uid=".$this->session->get("uid")." and sid=".$_GET["id"]);

                 if(count($result)>0){

                     $this->smarty->assign("love", "true");
                 }else{
                     $this->smarty->assign("love", "false");
                 }




             }



         }else{
             $this->smarty->assign("love","nosession");
         }
     }

     /*
      * 处理关注的函数
      * */

     function guanzhu($result){
         $uid2=$result[0]["uid"];
         if(!$this->session->get("uid")){
             $this->smarty->assign("guanzhu", "nosession");
         }else {

             if ($uid2 == $this->session->get("uid")) {
                 $this->smarty->assign("guanzhu", "self");
             } else {

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
         }
     }
 }
?>