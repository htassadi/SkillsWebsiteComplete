<!-- FOOTER -->
<style>
    h1,h2,h3,p,ul{
        margin: 0;
    }

    ul{
        padding: 0;
        list-style: none;
    }

    a{
        text-decoration: none;
    }

    img{
        max-width: 100%;
        height: auto;
    }
    
    footer{
        display: block;
        width: 100%;
        width: calc(100% - 2rem);
        margin-left: 1rem;
        margin-right: 1rem;
        text-align:center;
    }

    .footer-container{
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        row-gap: 2rem;
    }

    .footer-logo{
        font-size: 1.5rem;;
        color:  #069C54;
        font-weight:600;
        margin-bottom: 1rem;
    }

    .bd-grid {
        display: grid;
        gap: 2rem;
    }

    .footer-description{
        display: block;
        font-size: .813rem;
        margin: .25rem 0 1.5rem;
    }

    .footer-social{
        font-size: 1.5rem;
        color: #393939;
        margin-right: 1rem;
        margin-bottom:1rem;
    }

    .footer-title{
        font-size:1.25rem;
        color: #393939;
        margin-bottom: 1rem;
    }

    .footer-adress{
        color: #069C54;
        font-size: 0.8rem
    }

    .footer-link{
        display: inline-block;
        color: #707070;
        margin-bottom: 1rem;
    }

    .footer-link:hover{
        color:#069C54;
    }

    .footer-copy{
        text-align: center;
        font-size: .813rem;
        color: #A6A6A6;
        margin-top: 3.5rem;
    }

    .section{
        padding: 4rem 0 2rem;
        margin-right: 20px;
        margin-left: 20px;
    }

    hr{
        background: gray;
        height: 2px;
        border:0;
        margin-bottom: 25px;
        margin-right:auto;
        margin-left:auto;
        width: 60%;
    }


    /* scrooll to top */
    #myBtn {
        display: none; /* Hidden by default */
        position: fixed; /* Fixed/sticky position */
        bottom: 20px; /* Place the button at the bottom of the page */
        right: 30px; /* Place the button 30px from the right */
        z-index: 99; /* Make sure it does not overlap */
        border: none; /* Remove borders */
        outline: none; /* Remove outline */
        background-color: darkgreen; /* Set a background color */
        color: white; /* Text color */
        cursor: pointer; /* Add a mouse pointer on hover */
        padding: 15px; /* Some padding */
        border-radius: 50%; /* Rounded corners */
        font-size: 18px; /* Increase font size */
        transition: 0.5s;
        }

    #myBtn:hover {
        background-color: #555; /* Add a dark-grey background on hover */
        transform: translateY(-10px);
    }
</style>

<!-- SCROLL TO TOP BTN -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><ion-icon name="chevron-up"></ion-icon></button>


<!--========== FOOTER ==========-->
<footer class="footer section">   
    <hr>
    <div class="footer-container bd-grid">
        <div class="footer-content">
            <h1 class="footer-logo">Green Thumb Landscaping</h1>

            <div>
                <a href="#" class="footer-social"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="footer-social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer-social"><i class='bx bxl-twitter'></i></a>
            </div>

            <div class="footer-content">
                <ul class="footer-adress">
                    <li>22 1139 AVE NW</li>
                    <li>EDMONTON AB T5M 2N0</li>
                    <li>780 - 302 - 0635</li>
                    <li>info@greenthumblanscaping.com</li>
                </ul>
            </div>
        </div>

        <div class="footer-content">
            <h3 class="footer-title">Services</h3>
            <ul>
                <li><a href="services.php" class="footer-link">Commercial</a></li>
                <li><a href="services.php" class="footer-link">Residential</a></li>
                <li><a href="customerSupport.php" class="footer-link">Book A Consultation</a></li>
            </ul>
        </div>

        <div class="footer-content">
            <h3 class="footer-title">Information</h3>
            <ul>
                <li><a href="customerSupport.php" class="footer-link">Contact us</a></li>
                <li><a href="#" class="footer-link">Terms of services</a></li>
            </ul>
        </div>
    </div>


    <p class="footer-copy">&#169; 2021 Green Thumb Landscaping. All right reserved</p>
</footer>

<script>
    // MENU TOGGLE JS
        const menuToggle = document.querySelector('.toggle');
        const showcase = document.querySelector('.showcase');
        
        menuToggle.addEventListener('click', () => {
          menuToggle.classList.toggle('active');
          showcase.classList.toggle('active');
        })


    //SCROLL TO TOP JS
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
</script>




<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<!-- ICONS -->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>


</body>