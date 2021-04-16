<?php
$inputnama = $_POST['nama'];
$inputnokp = $_POST['nokp'];
$userID = $_POST['userID'];
$datereg = $_POST['datereg'];
$curDay= date('j');
$curMonth1= date('F'); 
$curYear= date('Y'); 

//Convert month in english to Malay
switch ($curMonth1){
    case "January":
        $month = 'Januari';
    break;
    case "February":
        $month = 'Februari';
    break;
    case "March":
        $month = 'Mac';
    break;
    case "April":
        $month = 'April';
    break;
    case "May":
        $month = 'Mei';
    break;
    case "June":
        $month = 'Jun';
    break;
    case "July":
        $month = 'Julai';
    break;
    case "August":
        $month = 'Ogos';
    break;
    case "September":
        $month = 'September';
    break;
    case "October":
        $month = 'Oktober';
    break;
    case "November":
        $month = 'November';
    break;
    case "December":
        $month = 'Disember';
    break;
}
 
$current_date = $curDay." ".$month." ".$curYear;
$image = imagecreatefromjpeg('SIJIL EJEN WAKAF.jpg');
$textcolor = imagecolorallocate($image, 0, 0, 0);

$font_file = __DIR__.'./Roboto-Light.ttf';
$font_size = 35;

//UNTUK SIJIL WAKAF
imagettftext($image, $font_size, 0, 283, 1150, $textcolor, $font_file, $current_date);
imagettftext($image, $font_size, 0, 757, 1836, $textcolor, $font_file, $inputnama);
imagettftext($image, $font_size, 0, 757, 1910, $textcolor, $font_file, $inputnokp);
imagettftext($image, $font_size, 0, 757, 1980, $textcolor, $font_file, $userID);
imagettftext($image, $font_size, 0, 757, 2048, $textcolor, $font_file, $datereg);

//output image
header('Content-type: image/jpeg');
imagejpeg($image);
imagedestroy($image); // for clearing memory

?>
