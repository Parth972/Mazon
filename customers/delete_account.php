
<br>
<h2>Do you really want to DELETE your account?</h2>
<form class="form-inline" action="" method="post">
    <div class="form-group">
        <input type="submit" id="cname" class="btn btn-danger" name="yes" required="" value="Yes" />
    </div>
    <div class="form-group" style="margin-left: 10px">
        <input type="submit" id="cname" class="btn btn-primary" name="no" required="" value="No" />
    </div>
    <!-- <input type="submit" name="yes" value="Yes I want" />  -->
    <!-- <input type="submit" name="no" value="No I was Joking" /> -->
</form>

<?php 
include("includes/db.php"); 
	$user = $_SESSION['customer_email']; 
	if(isset($_POST['yes'])){
	
        $delete_customer = "delete from customers where customer_email='$user'";
        $run_customer = mysqli_query($con,$delete_customer); 
        echo "<script>alert('We are really sorry, your account has been deleted!')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
	}
	if(isset($_POST['no'])){
        echo "<script>alert('oh! do not joke again!')</script>";
        echo "<script>window.open('my_account.php','_self')</script>";
	}
?>