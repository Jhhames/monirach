<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monirach Resources  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="icon" href="img/mlogo.png" >

</head>
<body> 
<div id="mySidenav" class="sidenav" style="padding-top:100px;">
    <a href="javascript:void(0)" class="closebtn" style="top:10%"  onclick="closeNav()">&times;</a>
    <ul class="navbar-nav ml-2" >
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link text-info">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-info">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-info">Services</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-info">Contact</a>
                    </li>
                    
                    <li class="nav-item dropdown ">
                        <a href="index.php" class="nav-link text-info dropdown-toggle" data-toggle="dropdown">Products</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Consumables</a>
                            <a href="#" class="dropdown-item">Commodities</a>
                        </div>
                    </li>
                </ul>
</div>

<!-- Use any element to open the sidenav -->
<!-- <span onclick="openNav()">open</span> -->
<div id="main">   
    <nav class="navbar navbar-expand-sm bg-white nav-primary fixed-top p-2">
       <div class="container">
            <a href="" class="navbar-brand mr-auto " >
                <img src="img/logo1.jpeg"  height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" onclick="openNav()">
                <span class="fa fa-bars"></span>
            </button>
           
            <!-- <div id="nav-slant"> -->

            
            <div class="collapse navbar-collapse" id="nav-slant">
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link text-info">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-info">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-info">Services</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-info">Contact</a>
                    </li>
                    
                    <li class="nav-item dropdown ">
                        <a href="index.php" class="nav-link text-info dropdown-toggle" data-toggle="dropdown">Products</a>
                        <div class="dropdown-menu text-left">
                            <a href="#" class="dropdown-item px-1 mx-1">Consumables</a>
                            <a href="#" class="dropdown-item px-1 mx-1">Commodities</a>
                        </div>
                    </li>
                </ul>
            </div>
        <!-- </div> -->
        </div>
    
    </nav>
    <header class="header">
        <div class="carousel slide" data-ride="carousel"  id="headSlide"> 
            <ol class="carousel-indicators">    
                <li data-target="#headSlide" data-slide-to="0" class="active"></li>
                <li data-target="#headSlide" data-slide-to="1"></li>
                <li data-target="#headSlide" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active" id="background-1">
                    <div class="container">
                        <div class="carousel-caption" id="">
                            <h1 id="head-caption">Monirach Resources</h1>            
                            <span id="under-caption"> Your favourite importer of goods </span> 
                        </div>
                    </div>
                </div>

                <div class="carousel-item " id="background-2">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 id="head-caption"> we import Goods  </h1>
                            <span id="under-caption">We supply them to you</span>
                        </div>
                    </div>
                </div>

                <div class="carousel-item " id="background-3">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 id="head-caption"> We are the best </h1>
                        </div>
                    </div>
                </div>
       
            </div>
            
                <a href="#headSlide" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>

                <a href="#headSlide" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon"></span>
                </a>

        </div>
    </header>

    <section class="py-5" id="search">
        <div class="container">
                <h6 class="text-center font-weight-normal m-0 p-0 text-light d-block">
                   Looking For a particular Product??
                </h6> <br>
                <center>
                <form action="#" class="justify-content-center my-auto" >
                        <div class="input-group w-75">
                                <input type="text" id="search-box" class="form-control" placeholder="Search Product">
                                <div class="btn btn-secondary input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                        </div>
                </form> 
                </center>               
        </div>

    </section>

     <section id="services" class="py-4 bg-white">
        <div class="container"> 
            
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-center text-info font-weight-bold m-2 comic" > About Us
                    </h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi in pariatur facere tempore delectus reprehenderit quidem unde voluptas nam ullam?</p>
                </div>
                <div class="col-sm-6 styled-border-left">
                    <h5 class="text-center text-info font-weight-bold m-2 comic"> What We do 
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quod alias est eligendi ut. Quam repellat odit impedit qui explicabo.
                    </p>
                    
                </div>
            </div>
            
            
        </div>
    </section>

    <section id="products">
        <div class="container">
            <div class="row">  
                <div class="col-md-12"> 
                    <h4 class="text-info text-center font-weight-bold m-2 comic"> <span class="fa fa-shopping-cart"></span> Our Products </h4> 
                    <p class="m-0 p-0 text-center text-info">You can trust us to sipply you with any of the following</p> 
                </div>    
            </div>

            <div class="row">
                <div class="col-sm-6 py-3">
                    <h3 class="monospace text-left text-light mb-0">Commodities</h3>
                 
                    <ul class="text-light list-group" style="list-style-type:none">
                        <li><span class="fa fa-check-square-o"></span> Food & crop items; Snail Rearing and supply </li>
                        <li><span class="fa fa-check-square-o"></span> Timbers and logs </li>
                        <li><span class="fa fa-check-square-o"></span> Cocoa Supply </li>
                        <li><span class="fa fa-check-square-o"></span> Agro Items including
                        <br> <font class="small ml-3"> 1. Cassava chips </font>
                        <br> <font class="small ml-3"> 2. Plantain </font> 
                        <br> <font class="small ml-3"> 3. Palm Kernel  </font>
                        <br> <font class="small ml-3"> 4. Palm oil  </font>
                        <br> <font class="small ml-3"> 5. Cashew nuts etc... </font>
                        </li>
                    </ul>                       
                </div>
                <div class="col-sm-6 py-3" style="overflow:hidden">
                    <h3 class="monospace text-left text-light mb-0">Consumables </h3>
                    <!-- <h2 class="ml-5 fa fa-minus m-0 p-0 text-info" style="transform:scale(6.5,1)"></h2> -->
                    <!-- <hr class="w-25 mt-0 bg-info c" >      -->
                    <ul class="text-light list-group"  style="list-style-type:none">
                        <li> <span class="fa fa-check-square-o"> </span> Imports of Laptops </li>
                        <li> <span class="fa fa-check-square-o"> </span> Imports of Automobile Engine</li>
                        <li> <span class="fa fa-check-square-o"> </span> Imports of Cars </li>
                        <li> <span class="fa fa-check-square-o"> </span> Imports of vehicle tyres etc </li>
                    </ul>                       
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="whyus" class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <h4 class="comic text-center text-info">Why </h4>
            </div>    
        </div>
    </section> -->



    <section class="py-4 bg-light" id="new-goods">
        <div class="container w-md-75 m-auto">
            <h5 class="text-center text-info font-weight-bold m-2 mb-0">New Consumables</h5>
            <div class="row product-slide justify-content-center">
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-computer-connection-205421.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/automobile-automotive-car-119435.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/automotive-car-city-131811.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-devices-cellphone-close-up-341523.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-devices-gadgets-163096.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-computer-connection-205421.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-smsm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-computer-connection-205421.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-smsm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-computer-connection-205421.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-smsm btn-info">Check Product</a>
                        </div>
                    </div>
                
            </div>
            
        </div>   
    </section>

    <section class="py-4 bg-white" id="new-goods">
        <div class="container w-md-75 m-auto">
            <h5 class="text-center text-info font-weight-bold m-2">New Commodites </h5>
            <div class="row product-slide justify-content-center">
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-computer-connection-205421.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/automobile-automotive-car-119435.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/automotive-car-city-131811.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-devices-cellphone-close-up-341523.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-devices-gadgets-163096.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-sm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-computer-connection-205421.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-smsm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-computer-connection-205421.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-smsm btn-info">Check Product</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 px-0 m-1">
                        <img src="img/apple-computer-connection-205421.jpg"  alt="" class="card-img-top image-fluid">
                        <div class="card-body">
                            <div class="card-title">
                                Lorem, ipsum.
                            </div>
                            <a href="#" class="btn btn-smsm btn-info">Check Product</a>
                        </div>
                    </div>
                
            </div>
        </div>   
    </section>

    <!--Footer-->
<footer class="page-footer font-small stylish-color-dark bg-dark text-light pt-4 mt-4" >

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row" style="height:100px">
            <div class="col-md-4 mx-auto h-100 footer-contact">
                <div class="container bg-info py-2 text-center h-100">
                
                        <p class="comic"><span class="fa fa-phone"></span> +234 9021 0291</p> 
                        <p class="comic"><span class="fa fa-phone"></span> +234 9021 0291</p> 
                        <p class="comic"><span class="fa fa-phone"></span> +234 9021 0291</p>
                </div>
            </div>
            <div class="col-md-4 mx-auto h-100  footer-contact">
                <div class="container text-center h-100 py-4 bg-info">
                    <center>   <span class="fa fa-lg fa-map-marker"></span> </center>
                    <p class="lead">Head Office address</p> 
                </div>
            </div>
            <div class="col-md-4 mx-auto h-100 footer-contact">
                <div class="container text-center bg-info py-4 h-100">
                  <center>   <span class="fa fa-lg fa-envelope"></span> </center>
                    <p class="lead">info@monirach.com</p> 
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:-30px;">

            <!--First column-->
            <div class="col-sm-6 px-4">
                <h5 class="text-uppercase mb-1 mt-3 font-weight-bold"> Contact Us </h5>
                <p class="small">Send Us a Contact Message and We'll Get back to you ASAP</p>
                <form action="#!" id="contact">
                    <div class="form-group w-100  input-group">
                        <div class="btn btn-secondary input-group-addon">
                            <span class="fa fa-user"> </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>

                    <div class="form-group w-100 input-group">
                        <div class="btn btn-secondary input-group-addon">
                            <span class="fa fa-envelope"> </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Your Email Address" required>
                    </div>
                    
                    <div class="form-group form-input w-100">
                        <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Contact Message" required></textarea>               
                    </div>

                    <div class="form-group form-input w-100">
                        <input type="submit" class="btn btn-secondary btn-block comic" value="Send" name="contactus">
                    </div>
                    
                    
                </form>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-sm-3 mx-auto">
                <h5 class="text-uppercase mb-0 mt-3 font-weight-bold">Navigation</h5>
                <hr class="w-25 content-justify-left text-left pt-0 mb-3 bg-white" style="height:2px;">
                <ul class="list-unstyled">
                    <li class="list-item">
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-sm-3 mx-auto">
                <h5 class="text-uppercase mb-0 mt-3 font-weight-bold">Other services</h5>
                <hr class="w-25 content-justify-left text-left pt-0 mt-3 mb-3 bg-white" style="height:2px;">
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

        </div>
    </div>
    <!--/.Footer Links-->


    <!--/.Call to action-->

    <hr>

    <!--Social buttons-->
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1">
                    <i class="fa fa-dribbble"> </i>
                </a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->
<hr>
    <!--Copyright-->
    <div class="footer-copyright pt-3 text-center">
        © 2018 Copyright MonirachResources 2018

    </div> 
        <p class="text-center my-0 text-small" style="opacity:.5">
            Designed by @FJhhames &copy;
        </p>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

</div>




    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="slick/slick.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">


        $('.product-slide').slick({
        autoplay:true,
        arrows: true,
        autoplaySpeed: 2000,
        dots: true,
        pauseOnHover: true,
        focusOnHover: true,
        centerMode: false,
        infinite: true,
        adpativeHeight: false,
        slidesToShow: 3,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 1
            }
            }
        ]
        });

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}        
</script>

</body>
</html>