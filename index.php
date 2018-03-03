<?php

   include("config.php");

   session_start();

   

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form 

      

      $myRoll = "0017110010" . mysqli_real_escape_string($db,$_POST['username']);

      $myPassword = md5(mysqli_real_escape_string($db,$_POST['password'])); 

      

      $sql = "SELECT Name FROM students WHERE Roll = '$myRoll' and Password = '$myPassword'";

      $result = mysqli_query($db,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $active = $row['active'];
      

      $count = mysqli_num_rows($result);

      

      // If result matched $myusername and $mypassword, table row must be 1 row

		

      if($count == 1) {



         $_SESSION['login_user'] = $myRoll;

         

         header("location: contacts.php");

      }else {

         $error = "Your Login Name or Password is invalid";

      }

   }

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <link rel="shortcut icon" type="image/png" href="./SignUp/assets/img/it.png"/>

  <title>Log In | JU IT 2021</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./SignUp/assets/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<body style="background:#2A2850">

<div class="container" style="padding-right: 15px; padding-left: 15px; margin-right: auto;margin-left: auto;">

<div class="jumbotron text-center" style="position: relative; max-height=200px">

<div class="container-fluid">

<div class="row">

		<div class="col-sm-3"><img src="./SignUp/assets/img/ju.png" style=" float:left; max-height:130px;"></div>

		<div class="col-sm-6">

			<h2>JU IT 2021</h2>

			<p>Log In form<br><a href="./SignUp"class="btn btn-primary btn-lg">Register</a></p> 

		</div>

		<div class="col-lg-3 hidden-xs"><img src="./SignUp/assets/img/it.png" style=" float:right; max-height:130px;"></div>

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

      <label class="col-lg-2 control-label">Password</label>

      <div class="col-lg-10">

  <div class="input-group">

	<input type="password" class="form-control" id="inputPswd" name="password" placeholder="Enter Password" required>

    <span class="input-group-addon" onmouseover="pswdView()" onmouseout="pswdHide()">View</span>

  </div>

      </div>

    </div>



    <div class="form-group">

      <div class="col-lg-12 text-center">	  

        <button type="submit" id="submitForm" name="submitForm" class="btn btn-primary btn-lg">Login</button><br>

		<a href="./reset/resetEMAIL.php" target="_blank">Forgot password?</a><br>

		<p style="color:red"><?php echo $error; ?></p>

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