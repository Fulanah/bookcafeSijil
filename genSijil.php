<?php

include 'monthEngtoMal.php';

$inputnama = $_POST['nama'];
$inputnokp = $_POST['nokp'];
$userID = $_POST['userID'];
$datereg = $_POST['datereg'];
$curDay= date('j');
$curMonth1= date('F'); 
$curYear= date('Y'); 

$month = dateEngtoMal($curMonth1); //Convert month in english to Malay

$current_date = $curDay." ".$month." ".$curYear;
$image = imagecreatefromjpeg('SIJIL EJEN BUKU.jpg');
$textcolor = imagecolorallocate($image, 0, 0, 0);

$font_file = __DIR__.'./Roboto-Light.ttf';
$font_size = 35;

//Untuk SIJIL DROPSHIP
imagettftext($image, $font_size, 0, 283, 1152, $textcolor, $font_file, $current_date);
imagettftext($image, $font_size, 0, 757, 1911, $textcolor, $font_file, $inputnama);
imagettftext($image, $font_size, 0, 757, 1981, $textcolor, $font_file, $inputnokp);
imagettftext($image, $font_size, 0, 757, 2051, $textcolor, $font_file, $userID);
imagettftext($image, $font_size, 0, 757, 2119, $textcolor, $font_file, $datereg);

//output image
header('Content-type: image/jpeg');
header('Content-Disposition: attachment; filename=SIJIL EJEN BUKU.jpg');
imagejpeg($image);
imagedestroy($image); // for clearing memory

?>
