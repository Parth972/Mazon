<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
        <!-- <link rel="stylesheet" href="styles/style.css" media="all" /> -->
        <link rel="stylesheet" href="styles/ss.css" >   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
    <body>
        <!-- Main Container starts here-->
        <div class="main_wrapper">
            <!-- Header starts here-->
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
            <!-- Navegation Bar ends here-->
            
            <!-- Content starts here-->
            <div class="container">
                <h1 class="display-4 my-5 my-lg-6 pb-lg-4 text-center">About</h1>
            </div>
                <div class="bg-skew bg-skew-light">
            <div class="container pt-3">
                <h2 class="lead text-center mb-5">We are a small team with passion for our work</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <p>Lots of designers will use fake copy or lorem impsum in their wireframes or prototypes to help them get a sense of the amount of copy required per page.</p>
                        <blockquote class="blockquote m-5">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Quos excepturi eveniet, accusamus magnam unde mollitia.</p>
                        </blockquote>
                        <div class="row text-center text-md-left">
                            <div class="col-sm-6 col-md-3 mb-3">
                                <span class="h3 d-block mb-2">
                                    100+
                                </span>
                                <p class="small text-secondary text-uppercase">Products</p>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3">
                                <span class="h3 d-block mb-2">
                                    1.000+
                                </span>
                                <p class="small text-secondary text-uppercase">Clients</p>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3">
                                <span class="h3 d-block mb-2">
                                    10.000+
                                </span>
                                <p class="small text-secondary text-uppercase">Downloads</p>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-3">
                                <p class="h3 d-block mb-2">
                                    50.000+
                                </p>
                                <p class="small text-secondary text-uppercase">Followers</p>
                            </div>
                        </div>

                        <hr class="sep border-primary mt-4 mb-5" role="presentation">

                        <h3 class="text-center mb-4">Meet the team</h3>
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <div class="card card-hover my-3">
                                    <img class="card-img-top" src="img/ceo.jpg" alt="">
                                    <div class="card-body text-center">
                                        <h4 class="card-title h5">Parth Shah</h4>
                                        <p class="text-secondary">CEO</p>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a class="icon icon-sm icon-dark" href="#">
                                                    <i class="icon-inner fab fa-instagram" aria-hidden="true"></i><span class="sr-only">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icon icon-sm icon-dark" href="#"><i class="icon-inner fab fa-twitter" aria-hidden="true"></i><span class="sr-only">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icon icon-sm icon-dark" href="#"><i class="icon-inner fab fa-linkedin-in" aria-hidden="true"></i><span class="sr-only">Linkedin</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-xl-4">
                                <div class="card card-hover my-3">
                                    <img class="card-img-top" src="img/ui-designer.jpg" alt="">
                                    <div class="card-body text-center">
                                        <h4 class="card-title h5">Smit Malkan</h4>
                                        <p class="text-secondary">UI/UX Designer</p>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a class="icon icon-sm icon-dark" href="#">
                                                    <i class="icon-inner fab fa-instagram" aria-hidden="true"></i><span class="sr-only">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icon icon-sm icon-dark" href="#"><i class="icon-inner fab fa-twitter" aria-hidden="true"></i><span class="sr-only">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icon icon-sm icon-dark" href="#"><i class="icon-inner fab fa-linkedin-in" aria-hidden="true"></i><span class="sr-only">Linkedin</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card card-hover my-3">
                                    <img class="card-img-top" src="img/developer.jpg" alt="">
                                    <div class="card-body text-center">
                                        <h4 class="card-title h5">Sampras D'souza</h4>
                                        <p class="text-secondary">Web Developer</p>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a class="icon icon-sm icon-dark" href="#">
                                                    <i class="icon-inner fab fa-instagram" aria-hidden="true"></i><span class="sr-only">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icon icon-sm icon-dark" href="#"><i class="icon-inner fab fa-twitter" aria-hidden="true"></i><span class="sr-only">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="icon icon-sm icon-dark" href="#"><i class="icon-inner fab fa-linkedin-in" aria-hidden="true"></i><span class="sr-only">Linkedin</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to action -->
            <hr class="sep border-primary my-5" role="presentation">
            <div class="container pb-4">
                <div class="text-center">
                    <h2 class="mb-4">Are you ready to start?</h2>
                    <div class="mb-4">
                        <a class="btn btn-pill btn-primary" href="#" role="button">Get started now</a>
                    </div>
                    <a class="link-cta" href="#">Learn More</a>
                </div>
            </div>
        </div>
            </div>
            <div class="bg-skew bg-skew-light">
            <div class="container pt-3">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-9">
                        <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                        <p>Fields marked with an <span class="text-primary">*</span> are required.</p>
                        <form class="py-4">
                            <div class="form-group">
                                <label for="name" class="small text-uppercase">Name <span class="text-primary">*</span></label>
                                <input type="text" id="name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="email" class="small text-uppercase">Email <span class="text-primary">*</span></label>
                                <input type="email" id="email" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="message" class="small text-uppercase">Message <span class="text-primary">*</span></label>
                                <textarea id="message" class="form-control rounded" rows="9" required=""></textarea>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" id="terms" class="form-check-input">
                                <label class="form-check-label small" for="terms">I agree with the <a href="#">terms and conditions</a></label>
                            </div>
                            <button type="submit" class="btn btn-pill btn-primary">Submit</button>
                        </form>
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