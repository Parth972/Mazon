<?php 
include("includes/db.php");
// include("functions/functions.php");
?>
    <link rel="stylesheet" href="styles/ss.css" >   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<div class="container">
		<div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <h1 class="h2 text-center my-3">Login here</h1>
                        <form method="post" action="" class="py-4"> 
                            <div class="form-group">
                                <label for="email" class="small text-uppercase">Email Address</label>
                                <input type="email" id="email" class="form-control" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="small text-uppercase">Password</label>
                                <small id="password-hint" class="d-block text-muted mb-2">Must be at least 8 characters</small>
                                <input type="password" id="password" class="form-control" name="pass" aria-describedby="password-hint" required="">
                            </div>
                            <div class="form-group form-check mb-4">
                                <input type="checkbox" id="terms" class="form-check-input">
                                <label for="terms" class="form-check-label small">I agree with the <a href="#">terms and conditions</a></label>
                            </div>
                            <button type="submit" name='login' class="btn btn-pill btn-primary btn-block">Login</button>
                        </form>
                        <hr role="presentation">
                        <div class="text-secondary text-center">
                            <small>Don't have an account? <a href="customer_register.php">Sign Up</a></small>
                        </div>
	</form>
	
	<?php
    if(isset($_POST['login'])){
    	echo "dvikvn0";
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		$sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
		$run_c = mysqli_query($con, $sel_c);
		$check_customer = mysqli_num_rows($run_c); 
		if($check_customer==0){
            echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
            exit();
		}
        $ip = getIp(); 
		$sel_cart = "select * from cart where ip_add='$ip'";
		$run_cart = mysqli_query($con, $sel_cart); 
		$check_cart = mysqli_num_rows($run_cart); 
		if($check_customer>0 AND $check_cart==0){
            $_SESSION['customer_email']=$c_email; 
            echo "<script>alert('You logged in successfully, Thanks!')</script>";
            echo "<script>window.open('customer/my_account.php','_self')</script>";
		}
		else {
		    $_SESSION['customer_email']=$c_email;
		    echo $c_email;
            echo "<script>alert('You logged in successfully, Thanks!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
    ?>
    </div>
                </div>
</div>
</div>