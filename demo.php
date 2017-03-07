<?php

  class pages{
      public $total;
      public $num=10;
      public $pages;
      public $param="pages";
      public $current;

     function __construct($total=50,$num=7,$param="pages"){
         $this->current=isset($_GET[$param])?$_GET[$param]:0;
         $this->total=$total;
         $this->num=$num;
         $this->param=$param;
         $this->pagelist=ceil($this->total/$this->num);
     }

     function out(){

        $pagestr=substr($_SERVER["REQUEST_URI"],0,strrpos($_SERVER["REQUEST_URI"],"=")+1);
        $url=isset($_GET[$this->param])?$pagestr:$_SERVER["REQUEST_URI"]."&".$this->param."=";

        $str="[<a href='{$url}0'>首页</a>]";
        $up=$this->current-1;
        if($up>-1) {
            $str .= "[<a href='{$url}{$up}'>上一页</a>]";
        }

        $start=$this->current-3<0?0:$this->current-3;

        if($this->current>2){
            $end=$this->current+3>$this->pagelist?$this->pagelist:$this->current+3;
        }else{
            $end=$this->current+5>$this->pagelist?$this->pagelist:$this->current+5;
        }

        echo $this->current+3;

        for($i=$start;$i<=$end;$i++){

          $str .= "[<a href='{$url}{$i}'>".$i."</a>]";
         }

        $next=$this->current+1;
        if($next<=$this->pagelist) {
            $str .= "[<a href='{$url}{$next}'>下一页</a>]";
        }


        $str.="[<a href='{$url}{$this->pagelist}'>尾页</a>]";

        echo $str;

     }

  }

  $obj=new pages();
  $obj->out();
?>