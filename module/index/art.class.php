<?php
 class art extends indexMain {

     function __construct(){
         parent::__construct();
         $this->db=new db("category");
         $this->db1=new db("shows");
     }

     function show(){
         $obj=new infinite();
         $obj->tree(0, 0, $this->db->connect, "category");


         $this->smarty->assign("tree",$obj->str);
       if($this->checkLogin()){
           $this->smarty->display("index/artShow.html");
       }
     }

     function add(){
        $cid=P("cid");
        $stitle=P("stitle");
        $scon=P("scon");
        $uid=$this->session->get("uid");

       if( $this->db->insert("insert into shows (stitle,scon,cid,uid) VALUES ('$stitle','$scon',$cid,$uid)")){

         $this->jump("index.php?m=index&f=art&a=show","保存成功");
       }else{
           $this->jump("index.php?m=index&f=art&a=show","保存失败");
       }


     }
 }
?>