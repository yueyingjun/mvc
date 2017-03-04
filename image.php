<?php
 header("content-type:image/png;charset=utf-8");
 $img=imagecreatetruecolor(200,80);
 $bgcolor=imagecolorallocate($img,255,0,0);
 imagefill($img,0,0,$bgcolor);
 $fontcolor=imagecolorallocate($img,255,255,0);
 $linecolor=imagecolorallocate($img,255,0,255);
  $rect=imagettfbbox(20,0,"微软雅黑+Arial","我是岳英俊");

  $w=$rect[2]-$rect[0];
  $h=$rect[1]-$rect[5];

  imagettftext($img,20,0,(200-$w)/2,(80-$h)/2+$h,$fontcolor,"微软雅黑+Arial","我是岳英俊");

  imageline($img,0,0,200,80,$linecolor);

  imagepng($img);

?>