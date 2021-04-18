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
    