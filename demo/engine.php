<?php
/*
 *
 * {lo $data $v}
      <li>{$v}</li>
   {/lo}
php
nodejs
 * */
$str=file_get_contents("demo.html");
$preg='/\{lo\s+(\$\w+)\s+(\$\w+)\}([^\{]*)\{(\$\w+)\}([^\{]*)\{\/lo\}/';
preg_match($preg,$str,$arr);

$result="<?php
 foreach({$arr[1]} as {$arr[2]}){
   echo '{$arr[3]}'.$arr[4].'{$arr[5]}';
 }
?>";
file_put_contents("demo.php",preg_replace($preg,$result,$str));




