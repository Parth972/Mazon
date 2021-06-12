<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
        <!-- <link rel="stylesheet" href="styles/ss.css" media="all" /> -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
    <body>
        <!-- Main Container starts here-->
        <div class="main_wrapper">
            <!-- Header starts here-->
            
            <!-- Header ends here-->
            
            <!-- Navegation Bar starts here-->
            <nav class="navbar navbar-expand-lg" >
             
            <ul id="menu" class="nav nav-tabs" >
                <a class="navbar-brand" href="#" style='margin:0px 23px;'>Amazon</a>
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="all_products.php">all products</a></li>
                <li class="nav-item"><a class="nav-link" href="customers/my_account.php">my account</a></li>
                <li class="nav-item"><a class="nav-link" href="cart.php">shopping</a></li>
                <li class="nav-item"><a class="nav-link" href="contact_us.php">contact us</a></li>
                
                <div id="form" style="margin-left: 400px">
                <form class="form-inline my-2 my-lg-0" method="GET" action="results.php" enctype="multipart/form-data">
                <input type="text" class="form-control mr-sm-2" name="user_query" placeholder="Search a product...">
                <input type="submit" class="btn btn-outline-primary" name="search" value="Search" > 
                </form> 
                </div>
        </ul>
        </nav>
            <!-- Navegation Bar ends here-->
            
            <!-- Content starts here-->
            <div class="content_wrapper">
            <div class="bg-skew bg-skew-light">
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

        <div id="content_area" class="col-lg">
                <?php cart(); ?>
            <div id="content_area">
                    
                        <?php
                        if(isset($_GET['pro_id'])){
                            $product_id = $_GET['pro_id'];
                            $get_pro = "select * from products where product_id='$product_id'";
                            $run_pro = mysqli_query($con, $get_pro); 
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_title'];
                                $pro_price = $row_pro['product_price'];
                                $pro_image = $row_pro['product_image'];
                                $pro_desc = $row_pro['product_desc'];
                                echo"
                                    <div id='single_product'>
                                        <h3>$pro_title</h3>
                                        <img src='admin_area/product_images/$pro_image' width='400' height='300'/>
                                        <p><b>$ $pro_price </b></p>
                                        <p> $pro_desc </p>
                                        <a href='index.php' style='float:left'>Go Back</a>
                                        <a href='index.php?pro_id=$pro_id' class='btn btn-primary' style='float:right;margin-right:700px;'>Add to Cart</a>
                                    </div>

                                ";

                            }
                        }
                        ?>
                   
                </div>
            <br>

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
        </div>
        <!-- Main Container ends here-->
    </body>

</html>