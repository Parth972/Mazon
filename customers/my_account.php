<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
        <link rel="stylesheet" href="../styles/ss.css" >   

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    
    <body>
        <!-- Main Container starts here-->
        <div>
            <!-- Header starts here-->
            
            <!-- Header ends here-->
            <div class="bg-skew bg-skew-light">
            <!-- Navegation Bar starts here-->
             <div class="shadow-lg rounded">
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 0px;">
            <a class="navbar-brand" href="#" style='margin:0px 23px;'>Amazon</a>
            
             <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul id="menu" class="navbar-nav" >
                
                <li class="nav-item"><a class="nav-link active" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../all_products.php">all products</a></li>
                <li class="nav-item"><a class="nav-link" href="../customers/my_account.php">my account</a></li>
                <li class="nav-item"><a class="nav-link" href="../cart.php">shopping</a></li>
                <li class="nav-item"><a class="nav-link" href="../contact_us.php">contact us</a></li>
                
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
            <br>
            <!-- Navegation Bar ends here-->

            <!-- Content starts here-->
            
                <div class="row">
                    <?php
                            if(isset($_SESSION['customer_email'])){
                            echo "<div id='sidebar' class='col col-2' style='padding:10px 20px;'>
                    <h5 id='sidebar_title' style='color: grey; text-align: center;'>My Account</h5>
                    <ul id='cats' style='text-align: center;margin: 0px;padding: 0px;'>";
                            $user = $_SESSION['customer_email'];
                            $get_img = "select * from customers where customer_email='$user'";
                            $run_img = mysqli_query($con, $get_img); 
                            $row_img = mysqli_fetch_array($run_img); 
                            $c_image = $row_img['customer_image'];
                            $c_name = $row_img['customer_name'];
                            echo "<p style='text-align:center;'><img src='customer_images/$c_image' class='avatar avatar-lg' width='150' height='150'/></p>";
                            echo "<li><a href='my_account.php?my_orders'>My Orders</a></li>
                        <li><a href='my_account.php?edit_account'>Edit Account</a></li>
                        <li><a href='my_account.php?change_pass'>Change Password</a></li>
                        <li><a href='my_account.php?delete_account'>Delete Account</a></li>
                        <li><a href='logout.php'>Logout</a></li>";
                            echo "</ul>
                </div>";

                        }
                            else{
                                $c_name= "guest";
                            }
                        ?>
                        <div id="content_area" class="col-lg">
                            <div id="products_box">
                        <?php 
                        if(isset($_SESSION['customer_email'])){
                            if(!isset($_GET['my_orders'])){
                                if(!isset($_GET['edit_account'])){
                                    if(!isset($_GET['change_pass'])){
                                        if(!isset($_GET['delete_account'])){
                            echo "
                            <h2 style='padding:20px;'>Welcome:  $c_name </h2>
                            <b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
                                        }
                                    }
                                }
                            }
                        }
                        else{
                            echo "please login<br>";
                            echo "<a href='../checkout.php' style='color:blue;'>Login</a>";
                        }
                        ?>
                        <?php 
                            if(isset($_GET['edit_account'])){
                                include("edit_account.php");
                            }
                            if(isset($_GET['change_pass'])){
                                include("change_pass.php");
                            }
                            if(isset($_GET['delete_account'])){
                                include("delete_account.php");
                            }
                            if(isset($_GET['my_orders'])){
                                include("my_orders.php");
                            }
                        ?>
                    </div>

                        </div>
                </div>
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