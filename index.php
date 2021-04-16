<!---------------------------------------------HTML HEADER PART----------------------------------------------------->  
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
<!---------------------------------------------HTML HEADER PART----------------------------------------------------->  
<body>
<?php 
include 'api.php';

$email = isset($_POST["email"]) ? $_POST["email"] : ''; 
$nama = isset($_POST["nama"]) ? $_POST["nama"] : ''; 
$nokp = isset($_POST["nokp"]) ? $_POST["nokp"] : '';
$space = str_repeat('&nbsp;', 1); //white space

//get user using API access
$cscartapi = new CSCartApi(
    array(
        'api_key' => 'S303Pphg6o35o5iZ5fj0f51219L4453u',
        'user_login' => 'balqis@pts.com.my',
        'api_url' => 'http://bukuonline.tk/'
    )
);
//$usergroups = $cscartapi->get("users/?email=$email&user_type=C&company_id=4&status=A"); 
//$CSemail = $usergroups["users"][0]->user_login; //email extract from API
/////////////////////////////////////DECLARATION & API ACCESS////////////////////////////////////////// 
//$usergroups = $cscartapi->get("users/?email=$email&user_type=C&company_id=4&status=A"); 
//$CSemail = isset($usergroups["users"][0]->user_login) ? $usergroups["users"][0]->user_login : '';?>

<a class="nav-header" href="index.php"></a>
<!-- Top menu -->
<div class="row">
<a href="index.php">
<img style="display: block; margin-left: auto; margin-right: auto; margin-top: 30px ;margin-bottom: 70px;"
src="assets/img/logoBC.png" alt="" width="450" height="100"></a>
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
$usergroups = $cscartapi->get("users/?email=$email&user_type=C&company_id=4&status=A"); 
$CSemail = isset($usergroups["users"][0]->user_login) ? $usergroups["users"][0]->user_login : '';
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

    //this is a nested array
    $usergroups = $cscartapi->get("users/?email=$email&user_type=C&company_id=4&status=A"); 
    //print_r($usergroups); 
     
    $userID = $usergroups["users"][0]->user_id; //get user_id
    $timereg = $usergroups["users"][0]->timestamp; //get date registered via timestamp

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

<!--Customer input name and IC to generate into certificate-->
<p><strong>Sila masukkan nama penuh anda:</strong></p>
<form action="option.php" method="post" class="registration-form" style="width: 80%; margin: auto;">
    <div class="form-group">
        <input type="text" name="nama"><br>
    </div><p></p>

<p><strong>Nombor kad pengenalan:</strong></p>
    <div class="form-group" class="registration-form" style="width: 60%; margin: auto;">
        <input type="text" onkeypress="return onlyNumberKey(event)" maxlength="12" name="nokp"><br>
        <script>
   function onlyNumberKey(evt) { //untuk limit text box boleh masuk nombor sahaja denagn limit 12 abjad
          // Only ASCII charactar in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
          return true;
      }
</script>
    </div>

<input type="hidden" name="userID" value=<?php echo $userID;?>> 
<input type="hidden" name="datereg" value=<?php echo $datereg;?>>
<!--print_r($_POST) //to see what value passed -->
<p></p>
<button type="submit" name="submitsijil" class="btn" style="margin-bottom: 20px;" >HANTAR</button>
</form>
  <!--if(($nama!="") and ($nokp!="") and isset($_POST['submitSijil'])){
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nama)) {
       print("Only letters and white space allowed");
      } --> 
</body>

<?php }}?>