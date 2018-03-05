<?php
require 'config.php';

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myRoll = "0017110010" . mysqli_real_escape_string($db,$_POST['username']);
      
      $sql = "SELECT hash,Name,Email FROM students WHERE Roll = '$myRoll'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $mailName = $row['Name'];
      $mailHash = $row['hash'];
      $mailEmail = $row['Email'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

        $_SESSION['login_user'] = $myRoll;
		$notifier = "An email with the password reset link has been sent to your registered email id.";
		$to = $mailEmail;
		$subject = "Password Reset | JU IT 2K21";
		$txt = "Hi " . $mailName . ", we have received a password reset request for your roll number. Open the link below to reset your password.\r\n 
				www.juit2k21.ml/user/reset/resetPSWD.php?hash=" . $mailHash . "\r\n Ignore this message if you have not requested for password change.\r\n Thank You";
		$headers = "From: \"JU IT 2K21\" <no-reply@juit2k21.ml>" . "\r\n" .
				"BCC: password_reset@juit2k21.ml";

		mail($to,$subject,$txt,$headers);

      }else {
         $error = "Something went wrong, contact Admin";
      }
   }
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
  
      <div class="form-group" id="groupRoll">
      <label for="inputRoll" class="col-lg-2 control-label">Roll No</label>
      <div class="col-lg-10">
<!--        <input type="text" class="form-control" id="inputRoll" name="inputRoll" value="0017110010" required onBlur="validateRoll()"> -->
        <div class="input-group">
            <span class="input-group-addon">0017110010</span>
            <input type="number" class="form-control" id="inputRoll" name="username" placeholder="XY" max=99 onblur="validateRoll()" required>
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