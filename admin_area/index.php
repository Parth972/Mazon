<?php
session_start();
if(!isset($_SESSION['user_email'])){
    echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}else{

?>

<!DOCTYPE>
<html>
    <head>
        <title>This is Admin Panel</title>
        <!-- <link rel="stylesheet" href="styles/style.css" media="all" /> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="main_wrapper">
            <!-- <div id="header"> -->
       <!--         <nav class="navbar bg-dark">

  <!-- Links -->
  <!-- <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>

</nav> -->

            <!-- </div> -->
            <nav class="navbar navbar-expand-sm bg-dark">
                

                <!-- <h2 style="text-align:center;">Manage Content</h2> -->
                <ul class="navbar-nav">
                    <li  class="nav-item"><a class="nav-link" href="index.php?insert_product">NewProduct</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?view_products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?insert_cat">NewCategory</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?view_cats">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?insert_brand">NewBrand</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?view_brands">Brands</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?view_customers">Customers</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?view_orders">Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Admin Logout</a></li>
                </ul>
            </nav>
            <div id="left">
                
                <h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in'];?></h2>
                <?php
                    if(isset($_GET['insert_product'])){
                        include("insert_product.php");
                    }
                    if(isset($_GET['view_products'])){
                        include("view_products.php");
                    }
                    if(isset($_GET['edit_pro'])){
                        include("edit_pro.php");
                    }
                    if(isset($_GET['insert_cat'])){
                        include("insert_cat.php");
                    }
                    if(isset($_GET['view_cats'])){
                        include("view_cats.php");
                    }
                    if(isset($_GET['edit_cat'])){
                        include("edit_cat.php");
                    }
                    if(isset($_GET['insert_brand'])){
                        include("insert_brand.php");
                    }
                    if(isset($_GET['view_brands'])){
                        include("view_brands.php");
                    }
                    if(isset($_GET['edit_brand'])){
                        include("edit_brand.php");
                    }
                    if(isset($_GET['view_customers'])){
                        include("view_customers.php");
                    }
                    if(isset($_GET['view_orders'])){
                        include("view_orders.php");
                    }
                    if(isset($_GET['view_payments'])){
                        include("view_payments.php");
                    }
                ?>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
<?php
}
?>