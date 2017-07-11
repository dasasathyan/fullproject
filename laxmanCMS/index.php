<!DOCTYPE>
<?php

session_start();
include ("includes/db.php");
?>   


   <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Auction | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="csslogin/demo.css" />
        <link rel="stylesheet" type="text/css" href="csslogin/style3.css" />
		<link rel="stylesheet" type="text/css" href="csslogin/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
            </div><!--/ Codrops top bar -->
            <header>
               
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
					
					
					
  <!-- LOGIN STARTS HERE-->					
                        <div id="login" class="animate form">
                            <form  action="checklogin.php" autocomplete="on" onsubmit="return myFunction()" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. Password28" /> 
                                </p>
                                <p class="keeplogin"> 
									
									
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">

									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>


                            </form>
                        </div>

						
						
  <!-- SIGN UP STARTS HERE-->
						
                        <div id="register" class="animate form">
                            <form  action="signup.php" autocomplete="on"  onsubmit="return myFunction()" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">NAME</label>
                                    <input id="usernamesignup" name="name" required="required" type="text" placeholder="Jone Davis" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email (This will be your Username)</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="rajram@gmail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="pass1" name="password" required="required" type="password" placeholder="eg. Password28"/>
                                </p>
								<p> 
								 <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Confirm password </label>
									<div class="input">
                                    <input id="pass2" name="pass2" required="required" type="password" placeholder="eg. Password28"/>
									<span class="tooltip">Please Retype yor password</span></div>
                                <label id="warning" style="color:red">****Passwords doesnt match</label>
								</p>
								</p>
								<script>
			 document.getElementById("warning").style.display = "none";

	</script>
	 <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Phone Number</label>
                                    <input id="emailsignup" name="phone" required="required" type="text" placeholder="8286878958"/> 
                                </p>
                                <p> 
								
                                  <label for="age" class="age" data-icon="u">DOB</label>
                                    <input id="phone" name="dob" required="required" type="date" placeholder="Phone number" />  
                                </p>
                                         
                                   <p>
                                    <label for="address" class="address" data-icon="u">Your Address</label>
                                    <input id="address" name="address" required="required" type="address"/>  
                                </p>
                                </p>
								<p> 
                                 <label for="pin" class="pin" data-icon="u">Your Pincode</label>
                                    <input id="pin" name="pin" required="required" type="text" placeholder="eg. 560036 " />  
                                </p>
								<p> 
                                 <label for="image"  data-icon="u">Image</label>
                                    <input id="image" name="image" required="required" type="file" placeholder="upload ur image " />  
                                </p>
								
                                <p> 
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
							
							<?php

  if(isset($_POST['register'])){
	  
	  $ip = getIp();
	  
	 $c_name = $_POST['c_name'];
	 $c_email = $_POST['c_email'];
	 $c_pass = $_POST['c_pass'];
	 $c_image = $_FILES['c_image']['name'];
	 $c_image_tmp = $_FILES['c_image']['tmp_name'];
     $c_country = $_POST['c_country'];
	 $c_city = $_POST['c_city'];
	 $c_contact = $_POST['c_contact'];
	 $c_address = $_POST['c_address'];
	 
	 move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
	 
	$insert_c = "insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image') ";
	
	$run_c = mysqli_query($con, $insert_c);
	
    $sel_cart =" select * from cart where ip_add='$ip'"	;
	
	$run_cart = mysqli_query($con , $sel_cart);
	
	$check_cart = mysqli_num_rows($run_cart);
	
	if($check_cart==0){
		
		$_SESSION['customer_email'] = $c_email;
		
		echo "<script>alert('Account created successfully!')</script>";
		
		echo "<script>window.open('customer/my_account.php','_self')</script>";
	}
	
	else {
		$_SESSION['customer_email'] = $c_email;
		
		echo "<script>alert('Account created successfully!')</script>";
		
		echo "<script>window.open('checkout.php','_self')</script>";
	}
	  
	  
  }








?>
							
							
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
		<script>
		function myFunction() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("pass1").style.borderColor = "#6495ED";
        document.getElementById("pass2").style.borderColor = "#6495ED";
	document.getElementById("warning").style.display = "block";
        ok = false;
    }
    
    return ok;
}
		</script>
		<style>
		.radio{
		width:10px !important;}
		.input {
    position: relative;
	    margin-top: -9px;
}

.tooltip {
    display: none;
    padding: 10px;
}

.input:hover .tooltip {
    background: rgba(10, 10, 10, 0.3);
    border-radius: 3px;
    bottom: -60px;
    color: white;
    display: inline;
    height: 20px;
    left: 20px;
    line-height: 30px;
    position: absolute;
}

.input:hover .tooltip:before {
    display: block;
    content: "";
    position: absolute;
    top: -5px;
    width: 0; 
	height: 0; 
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	
	border-bottom: 5px solid blue;
}
		</style>

    </body>
</html>