<?php 
session_start(); 
?>



<html>
	<head>
		<title>Payment Successful!</title>
	</head>

<body>
<?php 
		include("includes/db.php");
		include("functions/functions.php");
		
		//this is all for product details
		
		$total = 0;
		
		global $con; 
		$invoice = mt_rand();
		$ip = getIp(); 
	$user = $_SESSION['customer_email'];
				
			$get_c = "select * from customers where customer_email='$user'";
				
			$run_c = mysqli_query($con, $get_c); 
				
			$row_c = mysqli_fetch_array($run_c); 
				
			$c_id = $row_c['customer_id'];
		$sel_price = "select * from cart where ip_add='$ip'";
		
		$run_price = mysqli_query($con, $sel_price); 
		
		while($p_price=mysqli_fetch_array($run_price)){
			
			$pro_id = $p_price['p_id']; 
			
			$pro_price = "select * from products where product_id='$pro_id'";
			
			$run_pro_price = mysqli_query($con,$pro_price); 
			
			while ($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_price = $pp_price['product_price'];
			
			$product_id = $pp_price['product_id'];
			
			$pro_name = $pp_price['product_title'];
			
			
			// $values = array_sum($product_price);
			$get_qty = "select * from cart where p_id='$pro_id'";
			
			$run_qty = mysqli_query($con, $get_qty); 
			
			$row_qty = mysqli_fetch_array($run_qty); 
			
			$qty = $row_qty['qty'];
			
			if($qty==0){
			
			$qty=1;
			}
			else {
			
			$qty=$qty;
			
			
			}
			$total +=$product_price*$qty;
				$insert_order = "insert into orders (product_id,qty,p_id, invoice_no, order_date,status) values ('$pro_id','$qty','$c_id','$invoice',NOW(),'Paid')";
				$run_order = mysqli_query($con, $insert_order); 
				
			
			}
		
		
		}
		
			// getting Quantity of the product 
			
			
			// this is about the customer
			// $user = $_SESSION['customer_email'];
				
			// $get_c = "select * from customers where customer_email='$user'";
				
			// $run_c = mysqli_query($con, $get_c); 
				
			// $row_c = mysqli_fetch_array($run_c); 
				
			// $c_id = $row_c['customer_id'];
			#$c_email = $row_c['customer_email'];
			$c_mail  = "samprasdsouza02@gmail.com";
			$c_name = $row_c['customer_name']; 
			
			//payment details from paypal
			
			// $amount = $_GET['amt']; 
			
			// $currency = $_GET['cc']; 
			
			// $trx_id = $_GET['tx']; 

				
			//inserting the payment to table 
			// $insert_payment = "insert into orders (product_id,qty,p_idtrx_id,currency,payment_date) values ('$amoun')";
				
			// $run_payment = mysqli_query($con, $insert_payment); 
				
			// 	// inserting the order into table
			// $insert_order = "insert into orders (product_id,qty,p_id, invoice_no, order_date,status) values ('$pro_id','$c_id','$qty','$invoice',NOW(),'Paid')";
			// 	$run_order = mysqli_query($con, $insert_order); 
				
				//removing the products from cart
				$empty_cart = "delete from cart";
				$run_cart = mysqli_query($con, $empty_cart);
				
        
		////if($amount==$total){
		  echo "<h2>Welcome:" . $_SESSION['customer_email']. "<br>" . "Your Payment was successful!</h2>";
		  echo "<a href='/customers/my_account.php'>Go to your Account</a>";
		//}
		//else {
		///  echo "<h2>Welcome Guest, Payment was failed</h2><br>";
		//  echo "<a href='http://localhost/Ecommerce-website-master/index.php'>Go to Back to shop</a>";
		//}
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // $headers .= 'From: <edwardshi@gmail.com>' . "\r\n";
        // $subject = "Order Details";
      echo"  <html> 
        <p>
        Hello dear <b style='color:blue;'>$c_name</b> you have ordered some products on our website contactwithus.info/myshop, please find your order details, your order will be processed shortly. Thank you!</p>
        <table width='600' align='center' bgcolor='#FFCC99' border='2'>
            <tr align='center'><td colspan='6'><h2>Your Order Details from contactwithus.info/myshop</h2></td></tr>
            <tr align='center'>
                <th><b>S.N</b></th>
                <th><b>Paid Amount</th></th>
                <th>Invoice No</th>
            </tr>
                <tr align='center'>
                <td>1</td>
                
                <td>$total</td>
                <td>$invoice</td>
            </tr>
        </table>
            <h3>Please go to your account and see your order details!</h3>
            <form action='' method ='post'>
            <h2> <button onclick='index1.php' name='message'><a href='http://localhost/Ecommerce-website-master/checkout.php'>Click here</a> to login to your account</button></h2>
            </form>
            <h3> Thank you for your order @ - contactwithus</h3>
        </html>";
            
     //   mail($c_email,$subject,$message,$headers);
?>
        

</body>
</html>

<?php 

//include("includes/index1.php"); 


 ?>



