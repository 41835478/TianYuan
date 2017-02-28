<?php
ob_clean();
$radomstring = str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ');//$const[0] . $vow[0] .$const[2] . $const[1] . $vow[1] . $const[3] . $vow[3] . $const[4];
$string = substr($radomstring,0,5);
$_SESSION['checkcode'] = strtolower($string);
$imageX = strlen($string)*16;
$imageY = 20;
$im = imagecreatetruecolor($imageX, $imageY);

$background = imagecolorallocate($im, rand(180, 250), rand(180, 250), rand(180, 250));
$foregroundArr = array(imagecolorallocate($im, rand(0, 20), rand(0, 20), rand(0, 20)),
                       imagecolorallocate($im, rand(0, 20), rand(0, 10), rand(245, 255)),
                       imagecolorallocate($im, rand(245, 255), rand(0, 20), rand(0, 10)),
                       imagecolorallocate($im, rand(245, 255), rand(0, 20), rand(245, 255)));
$foreground2 = imagecolorallocatealpha($im, rand(20, 100), rand(20, 100), rand(20, 100),80);
$middleground = imagecolorallocate($im, rand(200, 160), rand(200, 160), rand(200, 160));
$middleground2 = imagecolorallocatealpha($im, rand(180, 140), rand(180, 140), rand(180, 140),80);

imagefill($im, 0, 0, imagecolorallocate($im, 250, 253, 254));

$pointcol = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255));
for ($i=0;$i<80;$i++){
    imagesetpixel($im,rand(2,$imageX-2),rand(2,$imageX-2),$pointcol);
}
//random shapes
for ($x=0; $x<10;$x++){
    if(mt_rand(0,$x)%2==0){
        imageline($im, rand(0, 120), rand(0, 120), rand(0, 120), rand(0, 120), rand(0, 999999));
        imageellipse($im, rand(0, 120), rand(0, 120), rand(0, 120), rand(0, 120), $middleground2);
    }else{
        imageline($im, rand(0, 120), rand(0, 120), rand(0, 120), rand(0, 120), rand(0, 999999));
        imageellipse($im, rand(0, 120), rand(0, 120), rand(0, 120), rand(0, 120), $middleground);
    }
}

imagettftext($im, 12, 0, 5, rand(14, 16), $foregroundArr[rand(0,3)], PHPCMS_ROOT.'cloud/img/ALGER.TTF', $string[0]);
imagettftext($im, 12, 0, 20, rand(14, 16), $foregroundArr[rand(0,3)], PHPCMS_ROOT.'cloud/img/ARIALNI.TTF', $string[1]);
imagettftext($im, 12, 0, 35, rand(14, 16), $foregroundArr[rand(0,3)], PHPCMS_ROOT.'cloud/img/ALGER.TTF', $string[2]);
imagettftext($im, 12, 0, 50, rand(14, 16), $foregroundArr[rand(0,3)], PHPCMS_ROOT.'cloud/img/arial.ttf', $string[3]);
imagettftext($im, 12, 0, 65, rand(14, 16), $foregroundArr[rand(0,3)], PHPCMS_ROOT.'cloud/img/arial.ttf', $string[4]);

//output to browser
header("content-type:image/png");
imagepng($im);
imagedestroy($im);