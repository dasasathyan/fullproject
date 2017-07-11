<html>
<head><link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="theme.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Maid Service Made Simple</title>

  </head>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "maid";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
	if(isset($_REQUEST['sub'])){
		echo "going in";
		$mailid=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		try{
		$STH = $DBH->prepare("SELECT mailid password from users WHERE mailid = :mailid AND password = :password");
		$STH->bindParam(':mailid',$mailid);
		$STH->bindParam(':password',$password);
	}

/*$statement = $conn->prepare("select mailid,mobile from users where name = :name");
$name=$_REQUEST['email'];
$statement->execute(array(':name' => '$name'));
$row = $statement->fetch();
$row;*/
}
  ?>
  <body>
    <form class="form-horizontal" method="post" ><!--action="loginphp.php">-->
      <div class="form-group">
        <div class="row">
        <label for="email" class="col-sm-4 control-label">email</label>
      <div class="col-sm-4">
      <input type="text" name="email" class="form-control" placeholder="Enter what do you want to do"/>
    </div>
  </div><br/>
  <div class="row">
    <label for="password" class="col-sm-4 control-label">password</label>
  <div class="col-sm-4">
  <input type="password" name="password" class="form-control" placeholder="Enter your password"/>
 </div>
 </div></br>
 <div class="row"><div class="col-md-4"></div>
   <div class="col-sm-4">
 <input class="btn btn-default" type="submit" name ="sub" value="Login" />
 </div></div></div>
 </form>
 </body>
