<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
        <!-- <script type="text/javascript" src="styles/s.js"></script> -->
       
    <link rel="stylesheet" href="styles/ss.css" >   

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!--  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script> -->
   <!-- <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-w+8Gqjk9Cuo6XH9HKHG5t5I1VR4YBNdPt/29vwgfZR485eoEJZ8rJRbm3TR32P6k" crossorigin="anonymous"> -->
   <!-- <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-mtS696VnV9qeIoC8w/PrPoRzJ5gwydRVn0oQ9b+RJOPxE1Z1jXuuJcyeNxvNZhdx" crossorigin="anonymous"> -->
   <!-- <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/simplex/bootstrap.min.css" rel="stylesheet" integrity="sha384-1OYccka9EByiS23wvPFiYHBPRAgU91xYVFb8g8sen6vRiBI5Uko6+B87q8zPGUnA" crossorigin="anonymous"> -->
</head>
    
    <body>
        <!-- Main Container starts here-->
        <div class="">
            <!-- Header starts here-->
            
            <!-- Header ends here-->
            <div class="bg-skew bg-skew-light"> 
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
<br>

    <!-- Sidebar -->
    


      
    

            
            <!-- Content starts here-->
            <div class="bg-skew">
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
            <div class="Container" >
            <span>
                    <?php
                        if(isset($_SESSION['customer_email'])){
                            echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'> Your </b>";
                        }
                        else 
                            echo "<b>Welcome Guest!</b>";
                    ?>
                    <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "<a href='checkout.php' class='' style='float:right;'>Login</a>";
                    }
                    else{
                        echo "<a href=logout.php style='color:white;'>Logout</a>";
                    }
                ?>
                </span>
            </div>
            <br>

            

            <div class="row" >
                <?php getPro(); ?>
                <?php getCatPro(); ?>
                <?php getBrandPro(); ?>
            </div>
        </div> 
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