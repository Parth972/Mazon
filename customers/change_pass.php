<h2 style="text-align:center;">Change Your Password</h2>
<form action="" method="post" class="py-4"> 
    <div class="container" style="width: 400px;">
        <div class="form-group">
                                <label for="password" class="small text-uppercase">Old Password</label>
                                <!-- <small id="password-hint" class="d-block text-muted mb-2">Must be at least 8 characters</small> -->
                                <input type="password" id="password" class="form-control" name="current_pass" aria-describedby="password-hint" required="">
                            </div>
        <div class="form-group">
                                <label for="password" class="small text-uppercase">New Password</label>
                                <!-- <small id="password-hint" class="d-block text-muted mb-2">Must be at least 8 characters</small> -->
                                <input type="password" id="password" class="form-control" name="new_pass" aria-describedby="password-hint" required="">
                            </div>
        <div class="form-group">
                                <label for="password" class="small text-uppercase">Confirm Password</label>
                                <!-- <small id="password-hint" class="d-block text-muted mb-2">Must be at least 8 characters</small> -->
                                <input type="password" id="password" class="form-control" name="new_pass_again" aria-describedby="password-hint" required="">
                            </div>
            <input type="submit" name="change_pass" class="btn btn-success" value="Change Password"/>
    </div>
</form>
<?php 
include("includes/db.php"); 
	if(isset($_POST['change_pass'])){
		$user = $_SESSION['customer_email']; 
		$current_pass = $_POST['current_pass']; 
		$new_pass = $_POST['new_pass']; 
		$new_again = $_POST['new_pass_again']; 
		$sel_pass = "select * from customers where customer_pass='$current_pass' AND customer_email='$user'";
		$run_pass = mysqli_query($con, $sel_pass); 
		$check_pass = mysqli_num_rows($run_pass); 
		if($check_pass==0){
            echo "<script>alert('Your Current Password is wrong!')</script>";
            exit();
		}
		if($new_pass!=$new_again){
		  echo "<script>alert('New password do not match!')</script>";
		  exit();
		}else {
            $update_pass = "update customers set customer_pass='$new_pass' where customer_email='$user'";
            $run_update = mysqli_query($con, $update_pass); 
            echo "<script>alert('Your password was updated succesfully!')</script>";
            echo "<script>window.open('my_account.php','_self')</script>";
		}
	}
?>

