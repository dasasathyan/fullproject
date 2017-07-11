<?php
//echo "hi";
$host='localhost';
$dbname='maid';
$dbusername='root';
$dbpassword='';

?>
<html>
<head><link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="theme.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Maid Service Made Simple</title>
<style>
.dummy{
	height:50px;

}

.logo{
	height:400px;
}
</style>
  </head>
<?php
try {
  $DBH = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
  $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
    echo "connection failed";
		file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
}
if(isset($_REQUEST['sub'])){
	$mail=$_REQUEST['email'];
	$pass=$_REQUEST['password'];
	$repass=$_REQUEST['repassword'];
	$mobno=$_REQUEST['mobile'];
	if($pass==$repass){
		echo "going in";
try{

	$STH = $DBH->prepare("INSERT INTO users (mailid, password, mobile) VALUES (:mail,:password,:mobile)");
	$STH->bindParam(':mail',$mail);
	$STH->bindParam(':password',$pass);
	$STH->bindParam(':mobile',$mobno);
	$STH->execute();
	echo "<script>window.location = 'login.php'</script>";
}
catch( PDOException $exception )
{
    echo "PDO error :" . $exception->getMessage();
}
}
else{
	?>
	<script>
	alert("Passwords mismatch");
	</script>
	<?php
}
}
?>
 <body style="background-color:#e64b39">
	 <div class="container">
	 <div class="dummy"></div>
	 <div class="row">
		 <div class="col-md-2"></div>
			 <div class="col-md-2">
			 <button type="button" class="btn btn-warning"><a href="login.php" >LOGIN</a></button>
		 </div>
		 <div class="col-md-6"></div>
		 <div class="col-md-2">
			 <button type="button" class="btn btn-success"><a href="register.php" >REGISTER</a></button>
		 </div>
	 </div>
	 <div class="row">
<div class="dummy"></div>
<div class="col-md-3">
</div>
<div class="col-md-3">
	 <img src="bai8.png" class="logo"/></div>
	 <div class="col-md-6"></div></div>

 <div class="dummy"></div>
   <form class="form-horizontal" method="post" autocomplete="off"><!--action="userCreation.php"-->
     <div class="form-group">
       <div class="row">
       <label for="email" class="col-sm-4 control-label">email</label>
     <div class="col-sm-4">
     <input type="email" name="email" class="form-control" placeholder="Enter your mail ID" required/>
   </div>
 </div><br/>
 <div class="row">
   <label for="todo" class="col-sm-4 control-label">password</label>
 <div class="col-sm-4">
 <input type="password" name="password" pattern=".{8,12}" class="form-control" placeholder="Enter your password" required/>
</div>
</div><br/>
<div class="row">
<label for="todo" class="col-sm-4 control-label">repassword</label>
<div class="col-sm-4">
<input type="password" name="repassword" class="form-control" placeholder="Re-Enter your password" required/>
</div></div><br/>
<div class="row">
<label for="todo" class="col-sm-4 control-label">Mobile</label>
<div class="col-sm-4">
<input type="number" name="mobile" class="form-control" placeholder="Enter your mobile number" required/>
</div><br/>
 </div></div></div>
 <div class="row">
 <div class="col-md-4"></div>
 <div class="col-md-4">
 <input class="btn btn-default" type="submit" name ="sub" value="Signup" />
 </div>
 </div>
 </form>
</div>
 </body>
