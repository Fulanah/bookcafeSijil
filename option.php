<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sijil Pengesahan Dropship dan Ejen Wakaf</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

    </head>

    <body>
    <a class="nav-header" href="index.php"></a>
<!-- Top menu -->
    <div class="row">
    <a href="index.php">
    <img style="display: block; margin-left: auto; margin-right: auto; margin-top: 30px ;margin-bottom: 70px;"
        src="assets/img/logoBC.png" alt="" width="450" height="100"></a>

    <?php $inputnama = $_POST['nama'];
          $inputnokp = $_POST['nokp'];
          $userID = $_POST['userID'];
          $datereg = $_POST['datereg']; ?>

    <form action="genSijil.php" method="post">
    <input type="hidden" name="nama" value=<?php echo $inputnama;?>>
    <input type="hidden" name="nokp" value=<?php echo $inputnokp;?>>
    <input type="hidden" name="userID" value=<?php echo $userID;?>> 
    <input type="hidden" name="datereg" value=<?php echo $datereg;?>>   
    <button type="submit" name="bco" class="btn">Sijil Pengesahan Ejen Dropship</button>
    </form>
    <br></br> 
    <form action="genSijilWakaf.php" method="post">
    <input type="hidden" name="nama" value=<?php echo $inputnama;?>>
    <input type="hidden" name="nokp" value=<?php echo $inputnokp;?>> 
    <input type="hidden" name="userID" value=<?php echo $userID;?>> 
    <input type="hidden" name="datereg" value=<?php echo $datereg;?>>   
    <button type="submit" name="wakaf" class="btn">Sijil Pengesahan Ejen Wakaf</button>
    </form>
    </body>
<!-- AUTO DOWNLOAD FILE FUNCTION
    <script type="text/javascript">
        function DownloadFile(fileName) {
            //Set the File URL.
            var url = "Files/" + fileName;
 
            //Create XMLHTTP Request.
            var req = new XMLHttpRequest();
            req.open("GET", url, true);
            req.responseType = "blob";
            req.onload = function () {
                //Convert the Byte Data to BLOB object.
                var blob = new Blob([req.response], { type: "application/octetstream" });
 
                //Check the Browser type and download the File.
                var isIE = false || !!document.documentMode;
                if (isIE) {
                    window.navigator.msSaveBlob(blob, fileName);
                } else {
                    var url = window.URL || window.webkitURL;
                    link = url.createObjectURL(blob);
                    var a = document.createElement("a");
                    a.setAttribute("download", fileName);
                    a.setAttribute("href", link);
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                }
            };
            req.send();
        };
    </script> -->