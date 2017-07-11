   <html>
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
									<a href="register1.php" class="to_register">Join us</a>
								</p>


                            </form>
							</html>