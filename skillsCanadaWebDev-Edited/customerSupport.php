<?php


?>


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
    <link rel="stylesheet" href="servicesStyleSheet.css">
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

        /* getincontact section */
        .getInContact .contactRow{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 80px 0;
        }

        .col-1{
            flex-basis: 70%;
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

        .getInContact .col-1 p{
            font-size: 16px;
            color: #b7b7b7;
            font-weight: 100;
        }

        .getInContact .col-1 h4{
            margin: 30px 0;
            font-size: 20px;
        }
        
    </style>

</head>
   
<body>
<section class="showcase">
<!-- Looped backgournd Vidio -->
        <video autoplay muted loop id="backgroundSplashPageVid">
            <source src="videos/desk.mp4" type="video/mp4">
        </video>

        <header>
            <h2 class="logo">GREEN THUMB LANDSCAPING</h2>
            <div class="toggle"></div>
        </header>
        
        <div class="overlay"></div> 
        
        <div class="text">
            <h2 style='padding-top:70px;'>Have a landscaping idea but not sure where to start? </h2> 
            <p >We can get a decent idea of cost from our calculator, 
                just let in your needs and we will generate a base price / estimate.  Be sure to explain your project below in the given location
                and someone will get back to you soon!</p>        
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

    <div class="getInContact">
        <div class="contactRow">
            <div class="col-1">
                <h2>Contact Us</h2>
                <br>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="validationCustom01" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="Fname" id="validationCustom01"  required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="validationCustom02" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="Lname" id="validationCustom02"  required>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" id="validationCustom03" placeholder="-----------" pattern="([0-9]{3})[0-9]{3}[0-9]{4}" required>
                            <div class="invalid-feedback">
                               Please remove spaces and dashes
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value= "" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>    
                        </div>
                        <div class=" col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass"  required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputAddress" class="form-label" >Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="address1" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please provide a valid address.
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputAddress2" class="form-label" >Address 2 </label>
                            <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor (If nothing, please type 'N/A'" required>
                            <div class="invalid-feedback">
                                Please provide a valid address. (If nothing, please type 'N/A')
                            </div>
                        </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" name="city"  required>
                            <div class="invalid-feedback">
                                Please provide a city name.
                            </div>
                        </div>

                        <br>

                        <div class="form-group col-md-3">
                            <label for="inputZip" class="form-label" >Postal Code</label>
                            <input type="text" class="form-control" id="inputZip" name="postal"  required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-text">Comment</span>
                        <textarea class="form-control" aria-label="With textarea"  required></textarea>
                    </div>
                    <br>
                    <button type="submit" name="submitbtn" value="submit" class="btn btn-outline-warning">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>

</div>

<!-- // PRETTY FORM VALIDATION -->
<script> 
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
})()
</script>

<?php
include("templates/footer.php")
?>
</html>