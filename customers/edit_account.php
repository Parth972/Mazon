		<?php 	
				include("includes/db.php"); 
				
				$user = $_SESSION['customer_email'];
				
				$get_customer = "select * from customers where customer_email='$user'";
				
				$run_customer = mysqli_query($con, $get_customer); 
				
				$row_customer = mysqli_fetch_array($run_customer); 
				
				$c_id = $row_customer['customer_id'];
				$name = $row_customer['customer_name'];
				$email = $row_customer['customer_email'];
				$pass = $row_customer['customer_pass'];
				$country = $row_customer['customer_country'];
				$city = $row_customer['customer_city'];
				$contact = $row_customer['customer_contact'];
				$address= $row_customer['customer_address'];
				$image = $row_customer['customer_image'];
		?>
		<div class="container" style="width: 600px" >
		<form method="post" action="" enctype="multipart/form-data" class="py-4"> 
                            <div class="form-group">
                                <label for="cname" class="small text-uppercase">Name</label>
                                <input type="text" id="cname" class="form-control" name="c_name" value="<?php echo $name;?>" required="">
                            </div>
                            <div class="form-group">
                                <label for="email" class="small text-uppercase">Email Address</label>
                                <input type="email" id="email" class="form-control" name="c_email" value="<?php echo $email;?>" required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="small text-uppercase">Password</label>
                                <small id="password-hint" class="d-block text-muted mb-2">Must be at least 8 characters</small>
                                <input type="password" id="password" class="form-control" name="c_pass" value="<?php echo $pass;?>"aria-describedby="password-hint"  required="">
                            </div>
                            
                            <div class="custom-file">
                            <label class="custom-file-label"  for="customFile">Choose file</label>
  <input type="file" class="custom-file-input" name="c_image" id="customFile">
  <img src="customer_images/<?php echo $image; ?>" width="50" height="50"/>
</div>

                            <div class="form-group">
                                <label for="country" class="small text-uppercase">Name</label>
                                <select name="c_country" class="custom-select mr-sm-2" disabled>
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
                                <label for="city" class="small text-uppercase">Name</label>
                                <input type="text" id="city" class="form-control" name="c_city" value="<?php echo $city;?>" required="">
                            </div>
                            <div class="form-group">
                                <label for="ph" class="small text-uppercase">Name</label>
                                <input type="text" id="ph" class="form-control" name="c_contact" value="<?php echo $contact;?>"required="">
                            </div>
                            <div class="form-group">
                                <label for="add" class="small text-uppercase">Name</label>
                                <input type="text" id="add" class="form-control" name="c_address" value="<?php echo $address;?>"required="">
                            </div>
                            
                            <button type="submit" name='update' class="btn btn-pill btn-primary btn-block">Update</button>
                        </form>
		</div>
					
					
<?php 
	if(isset($_POST['update'])){
		$ip = getIp();
		$customer_id = $c_id;
        
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_image = $_FILES['c_image']['name'];
		$c_image_tmp = $_FILES['c_image']['tmp_name'];
		$c_city = $_POST['c_city'];
		$c_contact = $_POST['c_contact'];
		$c_address = $_POST['c_address'];
	
		
		move_uploaded_file($c_image_tmp,"customer_images/$c_image");
		
		 $update_c = "update customers set customer_name='$c_name', customer_email='$c_email', customer_pass='$c_pass',customer_city='$c_city', customer_contact='$c_contact',customer_address='$c_address',customer_image='$c_image' where customer_id='$customer_id'";
	
		$run_update = mysqli_query($con, $update_c); 
		
		if($run_update){
		  echo "<script>alert('Your account successfully Updated')</script>";
		  echo "<script>window.open('my_account.php','_self')</script>";
		}
	}
?>










