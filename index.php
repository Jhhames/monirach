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
            <button class="navbar-toggler" onclick="openNav()">
                <span class="fa fa-bars"></span>
            </button>
            <a href="" class="navbar-brand mr-auto">
                <img src="img/mlogo.png" width="50" height="50" alt="">
            </a>
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
                            <h1 id="head-caption"> IMPORT </h1>
                        </div>
                    </div>
                </div>

                <div class="carousel-item " id="background-3">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 id="head-caption"> IMPORT </h1>
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


    <section class="py-2 bg-light" id="new-goods">
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

    <section class="py-2 bg-white" id="new-goods">
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

    <section id="services" class>
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>

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