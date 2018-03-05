<?php
$hasher= $_GET["hash"];
require 'config.php';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $formEmail=mysqli_real_escape_string($db,$_POST['inputEmail']);
	  $formPswd=md5(mysqli_real_escape_string($db,$_POST['inputPswd']));
      
		$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789'); // and any other characters
		shuffle($seed); // probably optional since array_is randomized; this may be redundant
		$rand = '';
		foreach (array_rand($seed, 12) as $k) $rand .= $seed[$k];
		$newHash = $rand;
		
	  $sql = "UPDATE students SET Password='" . $formPswd . "',hash='" . $newHash . "' WHERE Email='" . $formEmail . "' AND hash='" . $hasher . "'";

	  if (mysqli_query($db, $sql)) {

		$notifier = "If you provided correct details, your password has been changed. Click <a href='/'>here</a> to login.";
		$to = $mailEmail;
		$subject = "Password Changed | JU IT 2K21";
		$txt = "Hi,\r\n If you have provided correct details, your password has been successfully changed, login using the link below.\r\n 
				www.juit2k21.ml \r\n Thank You";
		$headers = "From: \"JU IT 2K21\" <no-reply@juit2k21.ml>" . "\r\n" .
				"BCC: password_reset@juit2k21.ml";

		mail($to,$subject,$txt,$headers);

      }else {
         $notifier = "Something went wrong, contact Admin " . mysqli_error($db);
      }
   }
   
mysqli_close($db);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/png" href="/user/SignUp/assets/img/it.png"/>
  <title>Password Reset | JU IT 2021</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/user/SignUp/assets/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background:#2A2850">
<div class="container" style="padding-right: 15px; padding-left: 15px; margin-right: auto;margin-left: auto;">
<div class="jumbotron text-center" style="position: relative; max-height=200px">
<div class="container-fluid">
<div class="row">
		<div class="col-sm-3"><img src="/user/SignUp/assets/img/ju.png" style=" float:left; max-height:130px;"></div>
		<div class="col-sm-6">
			<h2>JU IT 2021</h2>
			<p>Password Reset</p> 
		</div>
		<div class="col-lg-3 hidden-xs"><img src="/user/SignUp/assets/img/it.png" style=" float:right; max-height:130px;"></div>
	</div>
</div>
</div>
<div class="container">
  <div class="row">
	<div class="col-sm-3"></div>
    <div class="col-sm-6" style="background: #fff;">
	<form class="form-horizontal"  data-toggle="validator" action=""  method = "post" >
  <fieldset><br>
  
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email ID</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="example@example.com" required>
      </div>
    </div>


		<div class="form-group">
      <label class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
  <div class="input-group">
	<input type="password" class="form-control" id="inputPswd" name="inputPswd" placeholder="New Password" required>
    <span class="input-group-addon" onmouseover="pswdView()" onmouseout="pswdHide()">View</span>
  </div>
      </div>
    </div>
	
	    <div class="form-group">
      <div class="col-lg-12 text-center">	  
        <button type="submit" id="submitForm" name="submitForm" class="btn btn-primary btn-lg">Submit</button><br>
		<p style="color:green;"><?php echo $notifier; ?></p>
		<p style="color:red;"><?php echo $error; ?></p>
      </div>
    </div>
	
	</fieldset>
</form>
    </div>
	<div class="col-sm-3"></div>
  </div>
</div>
</div>

<script>
function validateNumber() {
 var value = document.getElementById('inputNumber').value;
 if (value.length != 10) {
	document.getElementById('groupNumber').className+=" has-error";
 }
 else {
 	document.getElementById('groupNumber').className="form-group";
 }
}
function validateRoll() {
 var value = document.getElementById('inputRoll').value;
 if (value.length != 2) {
	document.getElementById('groupRoll').className+=" has-error";
 }
 else {
 	document.getElementById('groupRoll').className="form-group";
 }
}

function pswdView() {
var arr = document.getElementsByTagName("input");
for (var i = 0; i < arr.length; i++) {
    if (arr[i].type == 'password') arr[i].setAttribute('type','text');
 }
}

function pswdHide() {
document.getElementById("inputPswd").setAttribute('type','password');
}

</script>
</body>
</html>