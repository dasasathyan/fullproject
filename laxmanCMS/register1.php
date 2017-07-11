<html> 

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
 			
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
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
									<a href="login1.php" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						                  </div>
                </div>  
            
        </div>
						</html>