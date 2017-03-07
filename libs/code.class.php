<?php
class code
{
    private $letter = "abcdefgABCDEFG3456789hjkmnHJKMNQrRsStTuUvVwWxXYyZz";
    private $currentLetter;
    public $letterUrl;
    private $letterNum = 4;
    public $resultLetter;
    public $width = 200;
    public $height = 80;
    public $lineNum = 5;
    public $pixNum = 50;
    public $fontSize = array("min" => 15, "max" => 25);
    public $imgType = "png";
    public $img;

    private function getColor()
    {
        $arr[0] = mt_rand(0, 128);
        $arr[1] = mt_rand(0, 128);
        $arr[2] = mt_rand(0, 128);
        return $arr;
    }

    private function getTextColor()
    {
        $arr[0] = mt_rand(129, 256);
        $arr[1] = mt_rand(129, 256);
        $arr[2] = mt_rand(129, 256);
        return $arr;
    }


    private function create()
    {
        $this->img = imagecreatetruecolor($this->width, $this->height);
        $colorArr = $this->getColor();
        $bgcolor = imagecolorallocate($this->img, $colorArr[0], $colorArr[1], $colorArr[2]);
        imagefill($this->img, 0, 0, $bgcolor);
    }

    private function getLetter()
    {
        $len = strlen($this->letter) - 1;
        for ($i = 0; $i < $this->letterNum; $i++) {
            $this->currentLetter .= $this->letter[mt_rand(0, $len)];
        }
        $this->resultLetter = strtolower($this->currentLetter);

    }

    private function createText()
    {
        $this->getLetter();
        $x = $this->width / $this->letterNum;
        for ($i = 0; $i < $this->letterNum; $i++) {
            $arr = $this->getTextColor();
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
            $fontsize = mt_rand($this->fontSize["min"], $this->fontSize["max"]);
            $angle = mt_rand(-15, 15);

            $rect = imagettfbbox($fontsize, $angle, $this->letterUrl, $this->currentLetter[$i]);

            $y = mt_rand($rect[1] - $rect[5], $this->height);

            imagettftext($this->img, $fontsize, $angle, ($x * $i) + mt_rand(-10, 10), $y, $color, $this->letterUrl, $this->currentLetter[$i]);
        }
    }

    private function createLine()
    {

        for ($i = 0; $i < $this->lineNum; $i++) {
            $arr = $this->getTextColor();
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
            $x1 = mt_rand(0, $this->width / 2);
            $x2 = mt_rand($this->width / 2 + 1, $this->width);
            $y1 = mt_rand(0, $this->height / 2);
            $y2 = mt_rand($this->height / 2 + 1, $this->height);
            imageline($this->img, $x1, $y1, $x2, $y2, $color);

        }

        for ($i = 0; $i < $this->pixNum; $i++) {
            $arr = $this->getTextColor();
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
            $x1 = mt_rand(0, $this->width);
            $y1 = mt_rand(0, $this->height);
            imagesetpixel($this->img, $x1, $y1, $color);

        }


    }

    public function output()
    {
        header("content-type:image/" . $this->imgType);
        $out = "image" . $this->imgType;
        //1. 创建画布->填充颜色
        $this->create();
        //2. 创建文字->随机->颜色
        $this->createText();
        //3.  干扰线->随机->颜色
        $this->createLine();
        $out($this->img);
        $this->resultLetter;
        imagedestroy($this->img);
    }
}



?>