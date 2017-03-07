<?php
class category extends main{

    function __construct(){
        parent::__construct();
        $this->db=new db("category");
    }

    function del(){

    }

    function show(){

    }
    function add(){
        $pid=P("pid");
        $cname=P("cname");
        if($this->db->insert("pid={$pid};cname='$cname'")>0){
            $this->jump("index.php?m=admin&f=category&a=showadd","添加成功");
        }else{
            $this->jump("index.php?m=admin&f=category&a=showadd","添加失败");
        }
    }

    function showadd(){

        /*
         * 1. 后台 前台  每一步的流程
         *
         * 2.
         *
         * */

        $obj=new infinite();
        $obj->tree(0, 0, $this->db->connect, "category");


        $this->smarty->assign("tree",$obj->str);

        $this->smarty->display("admin/showadd.html");
    }
    function edit(){

    }
}