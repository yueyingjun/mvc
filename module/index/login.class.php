<?php
 class login extends indexMain {

     function init(){
        $this->smarty->display("index/login.html");
     }

     function reg(){
         $this->smarty->display("index/reg.html");
     }
 }

?>