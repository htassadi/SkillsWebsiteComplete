<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- STYLE SHEETS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Scrolling -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    
    <!-- STYLE SHEETS -->    
    <link rel="stylesheet" href="style.css">


    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .showcase{
            position:relative;
            min-height: 50vh;
            width:100%;
        }
        .overlay {
            background: none;
            width:100%;
        }
        .menu
            {
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height:80%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .productsTable{
            width: 80%;
            margin:auto;
        }

        /* Carousel */
        .projectsDisplay{
            width: 70%;
            left: 30%;
            padding-top: 50px;
            display: flex;
            margin:auto;
            margin-bottom: none;

        }
        .projectsDisplay h1{
            padding-right: 50px;
            padding-left: 50px;
            writing-mode: vertical-rl; 
            text-orientation: upright; 
            font-weight:100; 
            color:darkgreen;
            padding-bottom: 0;
            margin-bottom: 0;

        }
        .projectsDisplay h3{
            writing-mode: vertical-rl; 
            text-orientation: upright; 
            font-weight:300; 
            color:darkgreen;
            padding-bottom: 0;
            margin-bottom: 0;
            text-align: center;

        }       

        @media (max-width: 990px){
            .projectsDisplay h1, h3{
                writing-mode: horizontal-tb; 
                padding-bottom: 20px;
                padding-top: 20px;
                text-align: center;
            }
            .projectsDisplay h3{
                display: none;
            }

            .projectsDisplay{
                width: 100%;
                margin:auto;
                display: inline-block;
                margin-bottom: none;
            }
        }

    </style>

</head>
   
<body>
<section class="showcase">
<!-- Looped backgournd Vidio -->
        <video autoplay muted loop id="backgroundSplashPageVid">
            <source src="videos/workSite.mp4" type="video/mp4">
        </video>

        <header>
            <h2 class="logo">GREEN THUMB LANDSCAPING</h2>
            <div class="toggle"></div>
        </header>
        
        <div class="overlay"></div> 
        
        <div class="text">
            <h2 style='padding-top:80px;'> Projects</h2> 
            <p >The state of your landscape speaks volumes about your property. And we get that. We provide professional lawn and tree c
                are services that are convenient for you and we are committed to keeping things healthy and well-maintained. <br><br>
                Whether it’s a seasonal upgrade, turf conversion or a complete landscape design, our landscaping experts can help you identify opportunities that will optimize the value 
                and appearance of your property. And when you’re ready, we are here to implement those improvements!
            </p>        
        </div>
        
    </section>
    
    <div class="menu">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="customerSupport.php">Customer Support</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="projects.php">Projects</a></li>

        </ul>
    </div>
</div>

<!-- Recenet -->
<div class="projectsDisplay">
    <!-- title -->
    <h1>RECENT</h1>
    <!-- Carousel -->
    <div id="projectsCarousel" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/landscapingProject2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Front Lawn Project</h5>
                <p></p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="images/landscapingProject3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Zen Backyard</h5>
                <p></p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="images/LandscapingProject4.jfif" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Castle Down Neighborhood Project</h5>
                <p></p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Projects -->
<div class="projectsDisplay">
    <!-- Carousel -->
    <div id="projectsCarousel2" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#projectsCarousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#projectsCarousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#projectsCarousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/inovative1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Summer Backyard</h5>
                <p></p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="images/inovative2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Modern Gray Scale</h5>
                <p></p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="images/inovative3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Pool + Backyard Garden</h5>
                <p></p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- title -->
    <h1>INOVATIVE</h1>
    <h3>MODERN</h3>
</div>








<?php
include("templates/footer.php")
?>


</html>