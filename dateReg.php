<?php
    ?>
    <form action ="" method="POST">
    <input type="hidden" name="timereg" value=<?php echo $timereg;?>> </form> <?php //passing variable from one page to another
   
    $timereg = $_POST['timereg'];
    $dateday = date('j', $timereg);
    $datemonth1 = date('F', $timereg);

    //Convert month in english to Malay
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


    $dateyear = date('Y', $timereg); 
    $datereg = $dateday.$space.$datemonth.$space.$dateyear;
    ?>