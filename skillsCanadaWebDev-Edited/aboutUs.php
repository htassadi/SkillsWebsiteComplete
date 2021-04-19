
<link rel="stylesheet" href="style.css">

<style>
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

    /* About Us section */

    .aboutUs img{
        border-radius: 50%;
        height: 300px;
        width: 300px;
    }

    .aboutUs .row{
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 80px 0px;
    }

    .col-1{
        flex-basis: 40%;
        position: relative;
        margin-left: 15%;
    }

    .col-1 h2{
        font-size: 54px;
    }
    .col-1 h3{
        font-size: 30px;
        color: #707070;
        font-weight: 100px;
        margin: 20px 0 10px;
    }

    .col-1 p{
        font-size: 16px;
        color: #b7b7b7;
        font-weight: 100;
    }

    .col-1 h4{
        margin: 30px 0;
        font-size: 20px;
    }

    .col-2 {
    position: relative;
    flex-basis: 70%;
    margin-right:60px;
    display: flex;
    align-items: center;
    }

    @media (max-width: 991px){
        .aboutUs img{
        border-radius: 50%;
        height: 250px;
        width: 250px;
    }
    }


</style>

<body>
    <section class="showcase">
        <!-- Looped backgournd Vidio -->
        <video autoplay muted loop id="backgroundSplashPageVid">
            <source src="videos/leaf.mp4" type="video/mp4">
        </video>

        <header>
            <h2 class="logo">About Us!</h2>
            <div class="toggle"></div>
        </header>
        
        <!-- OVERLAY -->
        <div class="overlay"></div> 
        
        <div class="text">
            <h2>We take pride in even the smallest projects.</h2>
            <p>Green Thumb Landscaping got its roots in one of the greenest, most picturesque landscapes in the world - 
            Ireland. The lush countryside of owner and operator John Duane's homeland is known to have '40 Shades of Green.'
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

    <div class="aboutUs">
        <div class="row">
            <div class="col-1">
                <img src="images/christopher.jpg" alt="" >
                <h2>John Duane</h2>
            </div>
            
            <div class="col-2">
                <p><strong>Green Thumb Landscaping</strong> got its roots in one of the greenest, most picturesque landscapes in the world - 
                    Ireland. The lush countryside of owner and operator John Duane's homeland is known to have "40 Shades of Green."

                    <br><br>Today, John employs the most knowledgeable, capable and hardworking team. Each member contributes their own individual talents 
                    and strong suits, but they all have one thing in common - commitment to providing customers with quality products and courteous services. </p>
            </div>
        </div>

    </div>



<?php
include("templates/footer.php")
?>
</html>