<?php
class session{
     function __construct(){
        session_start();
     }

     function set($k,$v){
        if(is_array($k)){
            foreach ($k as $k1=>$v1){
                $_SESSION[$k1]=$v1;
            }
        }else {
            $_SESSION[$k] = $v;
        }
     }

     function del($k){
        unset($_SESSION[$k]);
     }

     function clear(){
         foreach ($_SESSION as $k=>$v){
         unset($_SESSION[$k]);

         }
     }

     function get($k){
         return isset($_SESSION[$k])?$_SESSION[$k]:null;
     }
}

