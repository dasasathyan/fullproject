<!DOCTYPE>
<?php

session_start();
include("functions/functions.php");
include ("includes/db.php");
?>
    <head>
	      <title> fashion </title>
		  
		  
		  <link rel="stylesheet" href="styles/style.css" media="all" />

    </head>
	
<body background="FASG.jpg">
<!--main coontainer starts here--->
       <div class="main_wrapper">
	   
	   <!--header starts here--->
	   <div class="header_wapper"> 
	   
	      
		 <a href="index.php"> <img src="images/logo.gif" /> </a>
		 
		 <marquee behavior="alternate" direction="up" width="80%"><marquee direction="right"><img src="images/fashion.jpeg" width="250" height="100" alt="Tutorials " border="0"></marquee></marquee>
		 
		  
	   </div>
	   <!--header ends here--->
	   
	   
	   <!--navigation bar starts here--->
	   <div class="menubar">
	   
	       <ul id="menu">
		      <li><a href="index.php">home</a></li>
			  <li><a href="all_products.php">all product</a></li>
			  <li><a href="customer/my_account.php">my account</a></li>
			  <li><a href="#">sign up</a></li>
			  <li><a href="cart.php">shopping cart</a></li>
			  <li><a href="#">contact us</a></li>
            </ul>
	   <div id="form">
	         <form method="get" action="results.php" enctype="multipart/form-data">
	         <input type="text" name="user_query" placeholder="Search a product" />
			 <input type="submit" name="search" value="Search" />
			 </form>
		</div>
	   </div>
	   <!--navigation bar ends here--->
	   
	   
	   <!--content starts here--->
	   <div class="content_wrapper">
	  
	   <div id="sidebar">
	       <div id="sidebar_title">Categories</div>
	   
	       <ul id="cats">
		   
            <?php getCats();  ?>		     
			 
		          </ul>
	   
	     
	       <div id="sidebar_title">Brands</div>
	   
	       <ul id="cats">
		     
		   <?php getBrands();  ?>
		   
		          </ul>
	   </div>
	   
	   <div id="content_area">
	   
	   <?php cart(); ?>
	      <div id="shopping_cart">
		  
		         <span style="float:right; font-size:18px;padding:5px; line-height:40px ;"> 
				 
				 Welcome Guest ! <b style="color:yellow">Shopping cart- </b>  Total Items :<?php total_items()?>    Total Price:<?php total_price()?> <a href="cart.php" style="color:yellow">Go to Cart </a>

				 </span>
		  </div>
		  
		  <form action = "customer_register.php" method="post" enctype="multipart/form-data">
		  
		  
		  <table align="center" width="750">
		  
		  <tr align="center"> 
		     <td colspan="6"><h2>Create an Account </h2></td>
		  </tr>
		  <tr>
		  
		  <td align="right">Customer Name:</td>
		  <td><input type="text" name="c_name" required /></td>
		  
		  </tr>
		  
		  <tr>
		  
		  <td align="right">Customer Email:</td>
		  <td><input type="text" name="c_email" required /></td>
		  
		  </tr>
		  
		  <tr>
		  
		  <td align="right">Customer Password:</td>
		  <td><input type="password" name="c_pass" required /></td>
		  
		  </tr>
		  
		  
		  <tr>
		  
		  <td align="right">Customer Image:</td>
		  <td><input type="file" name="c_image" required /></td>
		  
		  </tr>
		  
		  
		  
		  <tr>
		  
		  <td align="right">Customer Country:</td>
		  <td>
		  <select name="c_country">
		       <option >Select a country</option>
			   <option > India </option>
			   <option >Afghanistan  </option>
			   <option >Japan  </option>
			   <option >Pakistan  </option>
			   <option >Isreal  </option>
			   <option > Nepal </option>
			   <option > UK</option>
			   <option >USA</option>
		  </td>
		  
		  </tr>
		  
		  
		  <tr>
		  
		  <td align="right">Customer City:</td>
		  <td><input type="text" name="c_city" required /></td>
		  
		  </tr>
		  
		  
		  <tr>
		  
		  <td align="right">Customer contact:</td>
		  <td><input type="text" name="c_contact" required /></td>
		  
		  </tr>
		  
		  
		  <tr>
		  
		  <td align="right">Customer Address:</td>
		  <td><input type="text" name="c_address" required /></td>
		  
		  </tr>
		   
		  
		  <tr align="center">
		  
		 
		  <td colspan="6"><input type="submit" name="register" value="create account"/></td>
		  
		  </tr>
		  
		  
		  </table>
		  
		  
		  </form>
		  
		  
	 
	   </div>
	   
	  </div>
	   <!--content ends here--->
	   
	   <div id="footer">

        <h2 style="text-align:center;padding-top:30px;">&copy; 2017 by Guelord and Safari </h2>


	   </div>


        </div>
		<!--main coontainer ends here--->

</body>
</html>
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