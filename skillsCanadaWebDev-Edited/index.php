<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>GREEN THUMB LANDSCAPING</title>
</head>
<body>
    <section class="showcase">
<!-- Looped backgournd Vidio -->
        <video autoplay muted loop id="backgroundSplashPageVid">
            <source src="videos/video.mp4" type="video/mp4">
        </video>

        <header>
            <h2 class="logo"><img src="images/lawnmower.png" style="width:30px; margin-right: 5px;filter: brightness(0) invert(1);">GREEN THUMB LANDSCAPING </h2>
            <div class="toggle"></div>
        </header>
        
        <div class="overlay"></div> 
        
        <div class="text">
            <h2>Doing the Job Right.</h2> 
            <h3>We take pride in even the smallest projects.</h3>
            <p>Green Thumb Landscaping specializes in unique landscape projects from start to finish. Our goal is to provide our customers 
                with landscapes that stand the test of time. Gardens and yards that are maintainable, aesthetically pleasing and healthy. </p>
                
            <a href="services.php">Explore</a>
        </div>
        
        <ul class="social">
            <li><a href="https://www.instagram.com/"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
            <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
            <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
        </ul>
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

    <script>
        const menuToggle = document.querySelector('.toggle');
        const showcase = document.querySelector('.showcase');
        
        menuToggle.addEventListener('click', () => {
          menuToggle.classList.toggle('active');
          showcase.classList.toggle('active');
        })
    </script>
</body>
</html>