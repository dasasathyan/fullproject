<html>
<head><link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>AUCTION</title>

  </head>

<?php

$dbConnect = mysql_connect("localhost", "root", "");
if (!$dbConnect) {
    die("Not connected : " . mysql_error());
}
echo nl2br("Logged into MySql\n");

$db_selected = mysql_select_db("client", $dbConnect);
if (!$db_selected) {
    die ("Can't use client : " . mysql_error());
}
//echo "\nClient Database selected\n";
if (isset($_REQUEST['sub'])){
  echo "\ngoing to add\n";
$name=$_REQUEST["name"];
$us=$_REQUEST["us"];
$pass1=$_REQUEST["pass1"];
$pass2=$_REQUEST["pass2"];
$dob=$_REQUEST["dob"];
mysql_query("INSERT INTO marks (name,us,pass1,pass2,dob)VALUES('$name','$us','$pass1','$pass2','$dob')");
echo "added";
?>
<script>
alert("data added to DB");
document.location="removedata.php";
</script>
<?php
}

/*if (isset($_REQUEST['delete'])){
  echo "going to remove";
  ?>
  <script>
  alert("going to remove");
  document.location="removedata.php";
  </script>

  <?php
}*/
?>
<body style="background-color:#00ccff">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <img src="1.png"/>
    </div>
    <div class="col-md-4"></div>
  </div>
  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label for="name" class="col-sm-4 control-label">Name</label>
    <div class="col-sm-8">
    <input type="text" name="name" class="form-control" placeholder="Enter your name"/>
  </div>
</div>
    <div class="form-group">
      <label for="us" class="col-sm-4 control-label">Your user name</label>
    <div class="col-sm-8">
      <input type="text" name="us" class="form-control" placeholder="Enter your user name"/>
    </div>
  </div>
  <div class="form-group">
    <label for="pass1" class="col-sm-4 control-label">The pass1</label>
  <div class="col-sm-8">
    <input type="text" name="pass1" class="form-control" placeholder="Enter your pass1"/>
  </div>
</div>
<div class="form-group">
  <label for="pass2" class="col-sm-4 control-label">The pass2</label>
<div class="col-sm-8">
    <input type="text" name="pass2" class="form-control" placeholder="Enter your pass2"/>
  </div>
</div>
<div class="form-group">
  <label for="dl" class="col-sm-4 control-label">Marks in Digital Logic</label>
<div class="col-sm-8">
    <input type="text" name="dl" class="form-control" placeholder="Enter your Digital Logic mark"/>
  </div>
</div>
  <div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
  <input class="btn btn-default" type="submit" name ="sub" value="ADD Data" >
</div>
</div>
  </form>
</body>
</html
