<?php 

function dateEngtoMal($datemonth1){
    
    switch ($datemonth1){
        case "January":
            $datemonth = 'Januari';
        break;
        case "February":
            $datemonth = 'Februari';
        break;
        case "March":
            $datemonth = 'Mac';
        break;
        case "April":
            $datemonth = 'April';
        break;
        case "May":
            $datemonth = 'Mei';
        break;
        case "June":
            $datemonth = 'Jun';
        break;
        case "July":
            $datemonth = 'Julai';
        break;
        case "August":
            $datemonth = 'Ogos';
        break;
        case "September":
            $datemonth = 'September';
        break;
        case "October":
            $datemonth = 'Oktober';
        break;
        case "November":
            $datemonth = 'November';
        break;
        case "December":
            $datemonth = 'Disember';
        break;
    }

    $datemonth = $datemonth1;
    return $datemonth;

}

?>