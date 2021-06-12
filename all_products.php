<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
         <link rel="stylesheet" href="styles/ss.css" >   

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
            <div class="content_wrapper">
                <div class="row">
                 <div id="sidebar" class="col col-2" style="padding:10px 20px;">
                        <h5 id="sidebar_title" style="color: grey; text-align: center;">Categories</h5>
                        <ul id="cats" style="text-align: center;margin: 0px;padding: 0px;">
                            <?php getCats(); ?>
                        </ul>
                        <br>
                        <h5 id="sidebar_title" style="color: grey;text-align: center">Brands</h5>
                        <ul id="cats" style="text-align: center;margin: 0px;padding: 0px;">
                            <?php getBrands(); ?>
                        </ul>
                </div>
                <!-- <div id="shopping_cart">
                    <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
                        Welcome Guest! <b style="color:yellow">Shopping Cart-</b>Total Items: Total Price: <a href="cart.php" style="color:yellow"> Go to Cart</a>
                    </span>
                </div> -->
                <div id="content_area" class="col-lg">
                    <div id="products_box">
                        <?php
                        $get_pro = "select * from products";
                        $run_pro = mysqli_query($con, $get_pro); 
                        while($row_pro=mysqli_fetch_array($run_pro)){
                            $pro_id = $row_pro['product_id'];
                            $pro_cat = $row_pro['product_cat'];
                            $pro_brand = $row_pro['product_brand'];
                            $pro_title = $row_pro['product_title'];
                            $pro_price = $row_pro['product_price'];
                            $pro_image = $row_pro['product_image'];
                            echo"
                                <div id='single_product' class='card' style='width: 16rem;float:left;margin:5px;'>
                <img src='admin_area/product_images/$pro_image' class='card-img-top' width=180px height=180px>
                <div class='card-body'>
                <h3 class='card-title'>$pro_title</h3>
                <p class='card-text'><b><i>Rs. $pro_price</i></b></p>
                <a href = 'details.php?pro_id=$pro_id'>Details</a>
                <a class='btn btn-primary' href = 'index.php?add_cart=$pro_id' style='float:right;'>Add to Cart</a>
                </div>
            </div>

                            ";

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
        <!-- Main Container ends here-->
    </body>

</html>