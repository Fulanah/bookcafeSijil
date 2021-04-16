<?php 
include('pageHeader.html');
?>
<body>
<?php 
include 'api.php';
include 'monthEngtoMal.php';

$email = isset($_POST["email"]) ? $_POST["email"] : ''; 
$nama = isset($_POST["nama"]) ? $_POST["nama"] : ''; 
$nokp = isset($_POST["nokp"]) ? $_POST["nokp"] : '';
$space = str_repeat('&nbsp;', 1); //white space

//get user using API access
$cscartapi = new CSCartApi(
    array(
        'api_key' => '9M498W25425J8EF1M59i5jR4g65ufSwP',
        'user_login' => 'fared@pts.com.my',
        'api_url' => 'http://bco.com.my/'

       /* 'api_key' => 'S303Pphg6o35o5iZ5fj0f51219L4453u',
        'user_login' => 'balqis@pts.com.my',
        'api_url' => 'http://bukuonline.tk/' */
    )
);

$usergroups = $cscartapi->get("users/?email=$email&user_type=C&company_id=4&status=A"); 
//email extract from API
$CSemail = isset($usergroups["users"][0]->user_login) ? $usergroups["users"][0]->user_login:'';
/////////////////////////////////////DECLARATION & API ACCESS////////////////////////////////////////// 
?>
    <div class="col-sm-8 col-sm-offset-2 text">
    <h1>Sijil rasmi Ejen Buku dan Wakaf Buku Bookcafe</h1>
        <div class="description">
            <p> 
	        Sila masukkan emel anda bagi sistem mengesahkan nombor ahli anda. 
	        Sijil rasmi boleh dimuat turun selepas ahli anda telah disahkan.
            </p>
        </div>
    </div>
</div>
<?php 

if($email==""){ ?>      
    <!--user input their email here -->  
<p><strong>Sila masukkan emel anda:</strong></p>
    <form action="index.php" method="post" class="registration-form">
        <div class="form-group">
            <input type="text" name="email"><br>
        </div>
        <button type="submit" name="submitemail" class="btn">HANTAR</button>
    </form>
<?php }?>
 
<?php
//extract customer data from API after 'Submit'
if(($email!="") and isset($_POST['submitemail'])){   

    //VALIDATE FORMAT EMEL
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ ?>
        <p><strong style="color: red;">Format emel tidak betul. Sila isikannya semula:</strong></p>
            <form action="index.php" method="post" class="registration-form">
            <div class="form-group">
                <input type="text" name="email"><br>
            </div>
            <button type="submit" name="submitemail" class="btn">HANTAR</button>
            </form> <?php
    }else if($email != $CSemail){
        ?><p><strong style="color: red;">Harap maaf. Emel anda tidak dijumpai.<strong></p> 
          <form action ="index.php"><button type="submit" class="btn" >KEMBALI</button></form>
        <?php
    }else{
        echo "<p> </p>";
        print("Tahniah! Anda adalah Dropshipper BCO yang sah."); 
     
    $userID = $usergroups["users"][0]->user_id; //get user_id
    $timereg = $usergroups["users"][0]->timestamp; //get date registered via timestamp

    $dateday = date('j', $timereg);
    $datemonth1 = date('F', $timereg);
    $datemonth = dateEngtoMal($datemonth1); //function convert month English to Malay

    $dateyear = date('Y', $timereg); 
    $datereg = $dateday.$space.$datemonth.$space.$dateyear; 

?>

<!--Customer input name and IC to generate into certificate-->
<p><strong>Sila masukkan nama penuh anda:</strong></p>
<form action="option.php" method="post" class="registration-form" style="width: 80%; margin: auto;">
    <div class="form-group">
        <input type="text" name="nama"><br>
    </div><p></p>

<p><strong>Nombor kad pengenalan:<span style="color: red"> Tanpa tanda "-"</span></strong></p>
    <div class="form-group" class="registration-form" style="width: 60%; margin: auto;">
    <script src="onlyNumberKey.js"></script>
        <input type="text" onkeypress="return onlyNumberKey(event)" maxlength="12" name="nokp"><br>
    </div>

<input type="hidden" name="userID" value=<?php echo $userID;?>> 
<input type="hidden" name="datereg" value=<?php echo $datereg;?>>
<!--print_r($_POST) //to see what value passed -->
<p></p>
<button type="submit" name="submitsijil" class="btn" style="margin-bottom: 20px;" >HANTAR</button>
</form>
</body>

<?php }}?>