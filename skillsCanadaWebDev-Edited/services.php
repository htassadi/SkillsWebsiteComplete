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
    <link rel="stylesheet" href="servicesStyleSheet.css">



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
            background: green;
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
    </style>

</head>
   
<body>

<section class="showcase">
    <!-- Looped backgournd Vidio -->
    <video autoplay muted loop id="backgroundSplashPageVid">
        <source src="videos/mowing.mp4" type="video/mp4">
    </video>

    <header>
        <h2 class="logo">GREEN THUMB LANDSCAPING</h2>
        <div class="toggle"></div>
    </header>
    
    <div class="overlay"></div> 
    
    <div class="text">
        <h2 style='padding-top:80px;'>We pride ourselves on doing the job right!</h2> 
        <p >The state of your landscape speaks volumes about your property. And we get that. We provide professional lawn and tree c
            are services that are convenient for you and we are committed to keeping things healthy and well-maintained.</p>        
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



<!--  SERVICES -->
<div class="resServices">
    <div class="row">
        <div class="col-1">
            <h2>General Services</h2>
        </div>
    </div>
    <div class="row">
        <div class="productsTable">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Service</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Landscape Maintenance (pruning / weed removal)</td>
                <td>.003 $ / Square Foot (typically 3x / year) /Hr</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Lawn Thatching / clean up</td>
                <td>.004 $ / Square Foot (typically done weekly)</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Grass cutting</td>
                    <td>.004 $ / Square Foot (typically 1x / year)</td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Artificial grass / Astroturf</td>
                    <td>40 $ / Hr + Materials</td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Outdoor lighting / heating & firepits</td>
                    <td>40 $ / Hr + Materials</td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Lawn / sod installation	</td>
                    <td>20 $ / Hr + Materials</td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Snow clearing / snow removal / plowing</td>
                    <td>.005 $ / Square Foot</td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>General grounds keeping / maintenance</td>
                    <td>10 $ / Hr / Worker</td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Landscape Construction	</td>
                    <td>40 $ / Hr / Worker + Materials</td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Showhome installations & maintenance</td>
                    <td>50 $ / Hr</td>
                </tr>

                <tr>
                    <th scope="row">11</th>
                    <td>Custom landscape design	</td>
                    <td>50 $ / Hr</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Tree planting</td>
                    <td>40 $ / Hr + Materials</td>
                </tr>
            </tbody>
            </table>
        </div>

        <div style="padding-right:10%;text-align:right;">
        <h3 >And Many More!</h3>
        <p>Contact us for a consultation today!</p>
        </div>

    </div>


</div>
    

<!-- TESTIMONIAL SECTION #1-->
<div class='container' style="align-content: center !important">
<div class="testimonial">
        <div class="small-container">
            <div class="row" style="margin:auto;">
                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                       <p>We are truly very pleased with the work your team has done on our project.   Not only were the guys and gals all very pleasant and accommodating, they always cleaned up after themselves.  Anyone who has hired contractors to do work knows how uncommon this trait is.</p>                     
                    <div class="rating">
                        <!-- Add stars -->
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <h3>Jacquie</h3>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Our experience with Green Thumb Landscaping was awesome! They repaired our landscaping in St. Albert. Christopher Watson, in particular, was professional, polite and hardworking. He wanted to make sure we were happy with the job every step of the way! Thank you Green Thumb Landscaping for a job well done! Great job Christopher! </p>
                    
                    <div class="rating">
                        <!-- Add stars -->
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>

                    <h3>Crystal</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Someone Toilet Papered my trees, they came and fixed it and made my tree look nice.  It was probably those darn teenagers down the street.</p>
                    
                    <div class="rating">
                        <!-- Add stars -->
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <h3>Sally</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>I have used landscapers before and they are a very professional group. They showed up on time, did fast work and cleaned up after every day. They took the time to ask me questions while ensuring what I wanted was completed. Great job and I would recommend this company.</p>
                    
                    <div class="rating">
                        <!-- Add stars -->
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>

                    <h3>Numa</h3>
                </div>
                
            </div>
        </div>
    </div>
</div>


<?php
include("templates/footer.php")
?>
</html>