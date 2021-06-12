<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
include("includes/db.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
        <link rel="stylesheet" href="styles/ss.css"/>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
    <body>
        <!-- Main Container starts here-->
        <div class="main_wrapper">
            <!-- Header starts here-->
            
            <!-- Header ends here-->
            
            <!-- Navegation Bar starts here-->
            <div class="shadow-lg rounded">
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
            <br>
            <div class="bg-skew bg-skew-light">
                
                <?php cart(); ?>
                <div class="container">
                    
                    <div id="products_box">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table align="center" class="table table-hover" width="700">
                                <tr align="center">
                                    <th scope="col"><b>Remove</b></th>
                                    <th scope="col"><b>Product(S)</th>
                                    <th scope="col"><b>Quantity</th>
                                    <th scope="col"><b>Total Price</th>
                                </tr>
                                <?php 
                                $total = 0;
                                $arr = array();
                                $arrQ = array();
                                global $con; 
                                $ip = getIp(); 
                                $sel_price = "select * from cart where ip_add='$ip'";
                                $run_price = mysqli_query($con, $sel_price); 
                                while($p_price=mysqli_fetch_array($run_price)){
                                    $pro_id = $p_price['p_id']; 
                                    $pro_price = "select * from products where product_id='$pro_id'";
                                    $run_pro_price = mysqli_query($con,$pro_price); 
                                    while ($pp_price = mysqli_fetch_array($run_pro_price)){
                                 //   $product_price = array($pp_price['product_price']);
                                         $product_price = $pp_price['product_price'];
                                    array_push($arr,$product_price);
                                    $product_title = $pp_price['product_title'];
                                    $product_image = $pp_price['product_image']; 
                                    $single_price = $pp_price['product_price'];
                                    $qy = "select qty from cart where p_id='$pro_id'";
                                      $run_qy = mysqli_query($con, $qy);
                                      while($run = mysqli_fetch_array($run_qy)){
                                        $pro =  $run['qty'];
                                        if($pro==0){
                                        $pro=1;
                                    }
                                }
                                        //   $values = array_sum($product_price); 
                                   // $total += $values; 
                                    $total+=$product_price*$pro;
                                ?>
                                <tr align="center">
                                <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
                                <td><?php echo $product_title; ?><br>
                                <img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
                                </td>
                                <?php 
                                if(isset($_POST['update_cart'])){
                                    $qty = $_POST["$pro_id"];
                                    // echo $qty;
                                    
                                    $update_qty = "update cart set qty='$qty' where p_id='$pro_id'";
                                    $run_qty = mysqli_query($con, $update_qty); 

                                   // $_SESSION['qty']=$qty;
                                    $total += $product_price*$qty;
                                }
                                ?>
                                <?php 
                                     $qy = "select qty from cart where p_id='$pro_id'";
                                      $run_qy = mysqli_query($con, $qy);
                                      while($run = mysqli_fetch_array($run_qy)){
                                        $pro =  $run['qty'];
                                        if($pro==0){
                                        $pro=1;
                                    }
                                        // echo $pro;
                                      }
                                ?>
                                <td><div id="abc"><input id="ran" type="number" class="form-control" style="width:75px" name="<?php echo $pro_id ?>" value="<?php echo "$pro"; ?>"></div>
                                    <!-- <script type="text/javascript">
                                        // var div=document.getElementById('abc');
                                        var val=document.getElementById('ran');
                                        // var x= document.createElement('p');
                                        //  x.innerHTML = val.value;
                                        // div.appendChild(x);
                                        // val.oninput = function() {
                                        //         x.innerHTML = this.value;
                                        //         console.log(this.value);
                                        // }
                                        console.log(val);

                                    </script> -->
                                </td>
                                
                                <td><?php echo "$" . $single_price; ?></td>
                            </tr>
                            <?php } } ?>
                            </table>
                            <hr>
                            <tr align="center">
                                    <td colspan="2"><input type="submit" class="btn btn-danger btn-sm" name="update_cart" value="Update Cart"/></td>
                                    <td><input type="submit" name="continue" class="btn btn-primary btn-sm" value="Continue Shopping" /></td>
                                    <td><a href="checkout.php" class="btn btn-success btn-sm">Checkout</a></td>
                                </tr>
                            <div style="float: right;margin-right:120px; ">
                                    <td colspan="4" ><b>Sub Total:</b></td>
                                    <td><?php echo "$" . $total;?></td>
                                </div>
                                <hr>
                                

                            
                        </form>
                        <?php
                        function updatecart(){
                            global $con;
                            $ip = getIp();
                            if(isset($_POST['update_cart'])){
                                foreach($_POST['remove'] as $remove_id){
                                    $delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
                                    $run_delete = mysqli_query($con, $delete_product);
                                    if($run_delete){
                                        echo "<script>window.open('cart.php','_self')</script>";
                                    }
                                }
                            }
                            if(isset($_POST['continue'])){
                                echo "<script>window.open('index.php','_self')</script>";
                            }
                        }
                        echo @$up_cart = updatecart();
                       ?>	

                    </div>

                </div>
                <br>
                <br>
                <br>
            </div>
            <!-- Content ends here-->
            
            <!-- Footer starts here-->
            <div id="footer" style="position:relative;bottom: 0;left:0;text-align: center;width:100%;">
                <hr>
                <p>&copy;
                    2019 SPS
                </p>
            </div>
            <!-- Footer ends here-->
        </div>
        <!-- Main Container ends here-->
    </body>

</html>