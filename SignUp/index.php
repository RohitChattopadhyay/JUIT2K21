<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/png" href="./assets/img/it.png"/>
  <title>JU IT 2021</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background:#2A2850">

<?php
require 'dbconnect.php';
	if(isset($_POST['submitForm'])){
		$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
		if (mysqli_connect_errno())
			{
				echo "Contact admin. Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
		$rollNo="17110010" . addslashes($_POST['inputRoll']);
		$name=addslashes($_POST['inputName']);
		$emailId=addslashes($_POST['inputEmail']);
		$mobileNo=$_POST['inputNumber'];
		$passwrd=md5(addslashes($_POST['inputPswd']));
		echo "<h1 style='color:white;'>";
		
		$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789'); // and any other characters
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$rand = '';
foreach (array_rand($seed, 12) as $k) $rand .= $seed[$k];
		
		$sql = "INSERT INTO students (Roll, Name, Email, Mobile, Password, hash) VALUES ('$rollNo','$name','$emailId','$mobileNo','$passwrd','$rand')";
		if (mysqli_query($con, $sql)) {
				echo "Thank You";
                                echo "<script>window.location.href = '/user'</script>";
		} else {
				echo "Contact Admin <br> Error: " . mysqli_error($con);
		}
                echo "</h1>";
		mysqli_close($con);
	}
        else {
?>

<div class="container" style="padding-right: 15px; padding-left: 15px; margin-right: auto;margin-left: auto;">
<div class="jumbotron text-center" style="position: relative; max-height=200px">
<div class="container-fluid">
<div class="row">
		<div class="col-sm-3"><img src="./assets/img/ju.png" style=" float:left; max-height:130px;"></div>
		<div class="col-sm-6">
			<h2>JU IT 2021</h2>
			<p>Know Your Classmate form</p> 
		</div>
		<div class="col-lg-3 hidden-xs"><img src="./assets/img/it.png" style=" float:right; max-height:130px;"></div>
	</div>
</div>
</div>
<div class="container">
  <div class="row">
	<div class="col-sm-3"></div>
    <div class="col-sm-6" style="background: #fff;">
	<form class="form-horizontal"  data-toggle="validator" action="<?php $_PHP_SELF ?>"  method = "post" >
  <fieldset><br>
  
      <div class="form-group" id="groupRoll">
      <label for="inputRoll" class="col-lg-2 control-label">Roll No</label>
      <div class="col-lg-10">
<!--        <input type="text" class="form-control" id="inputRoll" name="inputRoll" value="0017110010" required onBlur="validateRoll()"> -->
        <div class="input-group">
            <span class="input-group-addon">0017110010</span>
            <input type="number" class="form-control" id="inputRoll" name="inputRoll" required placeholder="XY" min=1 max=99 onblur="validateRoll()">
        </div>
      </div>
    </div>

	<div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" pattern="[a-zA-Z ]{1,}" class="form-control" id="inputName" name="inputName" placeholder="Full Name" required>
      </div>
    </div>
	
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email ID</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="example@example.com" required>
      </div>
    </div>
	
    <div class="form-group" id="groupNumber">
      <label for="inputNumber" class="col-lg-2 control-label">Mobile</label>
      <div class="col-lg-10">
        <input type="number" class="form-control" id="inputNumber" name="inputNumber" placeholder="10 digit mobile number" required onBlur="validateNumber()">
      </div>
    </div>

	<div class="form-group">
      <label class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
  <div class="input-group">
	<input type="password" class="form-control" id="inputPswd" name="inputPswd" placeholder="Set a password for your account in this website" required>
    <span class="input-group-addon" onmouseover="pswdView()" onmouseout="pswdHide()">View</span>
  </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-12 text-center">	  
        <button type="submit" id="submitForm" name="submitForm" class="btn btn-primary btn-lg">Submit</button>
      </div>
    </div>
	
    <div class="form-group">
      <div class="col-lg-12 text-center">	  
	<a target="_Blank" href="./know.txt">Click here to know more</a>
      </div>
    </div>
	
	</fieldset>
</form>
    </div>
	<div class="col-sm-3"></div>
  </div>
</div>
</div>
            <?php
         }
      ?>
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