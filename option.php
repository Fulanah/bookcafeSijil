<?php

include('pageHeader.html');

          $inputnama = $_POST['nama'];
          $inputnokp = $_POST['nokp'];
          $userID = $_POST['userID'];
          $datereg = $_POST['datereg']; ?>

    <form action="genSijil.php" method="post">
    <input type="hidden" name="nama" value="<?php echo $inputnama;?>">
    <input type="hidden" name="nokp" value="<?php echo $inputnokp;?>">
    <input type="hidden" name="userID" value="<?php echo $userID;?>"> 
    <input type="hidden" name="datereg" value="<?php echo $datereg;?>">   
    <button type="submit" name="bco" class="btn">Sijil Pengesahan Ejen Dropship</button>
    </form>
    <br></br> 
    <form action="genSijilWakaf.php" method="post">
    <input type="hidden" name="nama" value="<?php echo $inputnama;?>">
    <input type="hidden" name="nokp" value="<?php echo $inputnokp;?>"> 
    <input type="hidden" name="userID" value="<?php echo $userID;?>"> 
    <input type="hidden" name="datereg" value="<?php echo $datereg;?>">   
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