<?php
class user extends main{

    function __construct(){
        parent::__construct();
        $this->db=new db("user");
    }

    //查询所有用户
    function select(){
         $result=$this->db->select();
         $this->smarty->assign("result",$result);
         $this->smarty->display("admin/usershow.html");
    }

    //删除用户名

    function del(){
        $uid=$_GET["id"];
        if($this->db->where("uid=".$uid)->del()>0){
            $this->jump("index.php?m=admin&f=user&a=select","删除成功");
        }else{
            $this->jump("index.php?m=admin&f=user&a=select","删除失败");
        }
    }



}

?>