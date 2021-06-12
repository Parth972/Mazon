<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
include("includes/db.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
        <link rel="stylesheet" href="styles/ss.css" media="all" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
    <body>
        <!-- Main Container starts here-->
        <div class="bg-skew bg-skew-light">
            <!-- Header ends here-->
            
            <!-- Navegation Bar starts here-->
            <div class="shadow rounded">
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 0px;">
            <a class="navbar-brand" href="#" style='margin:0px 23px;'>Amazon</a>
            
             <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul id="menu" class="navbar-nav" >
                
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="all_products.php">all products</a></li>
                <li class="nav-item"><a class="nav-link" href="customers/my_account.php">my account</a></li>
                <li class="nav-item"><a class="nav-link" href="cart.php">shopping</a></li>
                <li class="nav-item"><a class="nav-link" href="contact_us.php">contact us</a></li>
                
                <div id="form" style="margin-left: 400px">
                <form class="form-inline my-2 my-lg-0" method="GET" action="results.php" enctype="multipart/form-data">
                <input type="text" class="form-control mr-sm-2" name="user_query" placeholder="Search a product...">
                <input type="submit" class="btn btn-outline-primary" name="search" value="Search" >
                <!-- <a class="navbar-toggler-icon" data-toggle="collapse" href="#mySidenav" role="button" aria-expanded="false" aria-controls="collapseExample" style="padding-left: 50px;"></a> -->
                </form> 
                
                </div>
                

        </ul>
    </div>
    
        </nav>
    </div>

            <!-- Navegation Bar ends here-->
            
            <!-- Content starts here-->
            
                
                <?php cart(); ?>
                <!-- <div id="shopping_cart">
                    <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
                        Welcome Guest! <b style="color:yellow">Shopping Cart-</b>Total Items: <?php total_items(); ?>  Total Price: <?php total_price(); ?><a href="cart.php" style="color:yellow"> Go to Cart</a>
                    </span>
                </div> -->
                <br>
                 
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-9 col-lg-6">
                                <h1 class="h2 text-center my-3">Create an Account</h1>
                
                    <form method="post" action="" class="py-4"> 
                            <div class="form-group">
                                <label for="cname" class="small text-uppercase">Name</label>
                                <input type="text" id="cname" class="form-control" name="c_name" required="">
                            </div>
                            <div class="form-group">
                                <label for="email" class="small text-uppercase">Email Address</label>
                                <input type="email" id="email" class="form-control" name="c_email" required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="small text-uppercase">Password</label>
                                <small id="password-hint" class="d-block text-muted mb-2">Must be at least 8 characters</small>
                                <input type="password" id="password" class="form-control" name="c_pass" aria-describedby="password-hint" required="">
                            </div>
                            
                            <div class="custom-file">
                            <label class="custom-file-label"  for="customFile">Choose file</label>
  <input type="file" class="custom-file-input" name="c_image" id="customFile">
  
</div>

                            <div class="form-group">
                                <label for="country" class="small text-uppercase">Country</label>
                                <select name="c_country" class="custom-select mr-sm-2">
                                    <option>Select a Country</option>
                                    <option>Afghanistan</option>
                                    <option>India</option>
                                    <option>Japan</option>
                                    <option>Pakistan</option>
                                    <option>Israel</option>
                                    <option>Nepal</option>
                                    <option>United Arab Emirates</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city" class="small text-uppercase">City</label>
                                <input type="text" id="city" class="form-control" name="c_city" required="">
                            </div>
                            <div class="form-group">
                                <label for="ph" class="small text-uppercase">Contact</label>
                                <input type="text" id="ph" class="form-control" name="c_contact" required="">
                            </div>
                            <div class="form-group">
                                <label for="add" class="small text-uppercase">Address</label>
                                <input type="text" id="add" class="form-control" name="c_address" required="">
                            </div>
                            <div style="text-align: center;">
                                <button type="submit" name='register' class="btn btn-primary" >Sign Up</button>
                            </div>
                            
                        </form>
                        <hr role="presentation">
                        <div class="text-secondary text-center">
                            <small>Already have an account? <a href="checkout.php">Login</a></small>
                        </div>

                            
        </div>
    </div>
</div>
</div>
            <!-- Content ends here-->
            
            <!-- Footer starts here-->
            <div id="footer">
                <h2 style="text-align: center; padding-top: 30px;">&copy;
                    2016 by edward-shi<!-- -->
                </h2>
            </div>
            <!-- Footer ends here-->
        <!-- Main Container ends here-->
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
        echo $ip,$c_name;
        
		move_uploaded_file($c_image_tmp,"customers/customer_images/$c_image");
		
        $insert_c = "insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";
        
        $run_c = mysqli_query($con, $insert_c); 
		$sel_cart = "select * from cart where ip_add='$ip'";
		$run_cart = mysqli_query($con, $sel_cart); 
		$check_cart = mysqli_num_rows($run_cart); 
        if($check_cart==0){
            $_SESSION['customer_email']=$c_email; 
            echo "<script>alert('Account has been created successfully, Thanks!')</script>";
            echo "<script>window.open('customers/my_account.php','_self')</script>";
        }else {
            $_SESSION['customer_email']=$c_email; 
            echo "<script>alert('Account has been created successfully, Thanks!')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
		}
    }
?>