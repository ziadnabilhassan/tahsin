<!DOCTYPE html>
<html>

<head>
    <title>TAHSIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif
        }
        
        body,
        html {
            height: 100%;
            line-height: 1.8;
        }
        /* Full height image header */
        
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("https://images.pexels.com/photos/8850986/pexels-photo-8850986.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            min-height: 100%;
        }
        
        .w3-bar .w3-button {
            padding: 16px;
        }
    </style>
</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="http://localhost/tahsin/tahsin/tahsin.php" class="w3-bar-item w3-button w3-wide">TAHSIN</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="http://localhost/tahsin/tahsin/sign.php" class="w3-bar-item w3-button">المجموعات</a>
                <a href="http://localhost/tahsin/tahsin/page2.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> اسماء السناتر</a>
                <a href="http://localhost/tahsin/tahsin/page3.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> تسجيل الدخوال</a>
                <a href="http://localhost/tahsin/tahsin/exam.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> الامتحان</a>

            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars" style="margin-right:10%;"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="http://localhost/tahsin/tahsin/sign.php" onclick="w3_close()" class="w3-bar-item w3-button">المجموعات</a>
        <a href="http://localhost/tahsin/tahsin/page2.php" onclick="w3_close()" class="w3-bar-item w3-button">اسماء السناتر</a>
        <a href="http://localhost/tahsin/tahsin/page3.php" onclick="w3_close()" class="w3-bar-item w3-button">تسجيل الدخول</a>
        <a href="http://localhost/tahsin/tahsin/exam.php" onclick="w3_close()" class="w3-bar-item w3-button">الامتحان</a>

    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Start learning chemistry now
    </span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start learning chemistry now
    </span><br>
            <span class="w3-large">You have to pay attention to your future and start working for it
    </span>
            <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </header>



 

    <!-- Contact Section -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
        <h3 class="w3-center">CONTACT</h3>
        <p class="w3-center w3-large">ابدا بتسجيل الدخول مرة واحدة</p>
        <div style="margin-top:48px">
            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Helwan</p>
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone:01011405226</p>
            <br>
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-border" type="password" placeholder="password" required name="password"></p>
                <p>
                    <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> تسجيل الدخول
          </button>
                </p>
            </form>
            <!-- Image of location/map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6918.0750949552!2d31.2904371!3d29.8920187!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458364b65680191%3A0xd22df965bd3a045f!2z2YXYs9is2K8g2KfZhNix2K3Zhdip2Iwg2K3Yr9in2KbZgiDYrdmE2YjYp9mG2Iwg2KfYqNix2KfYrCDZhdmG2KrYtdix!5e0!3m2!1sen!2seg!4v1647970469414!5m2!1sen!2seg"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>




    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64" style="background-color:rgb(4, 54, 54)!important;">
  <a href=" #home " class="w3-button w3-light-grey "><i class="fa fa-arrow-up w3-margin-right "></i>To the top</a>
  <div class="w3-xlarge w3-section ">
    <i class="fa fa-facebook-official w3-hover-opacity "></i>
    <i class="fa fa-instagram w3-hover-opacity "></i>
    <i class="fa fa-snapchat w3-hover-opacity "></i>
    <i class="fa fa-pinterest-p w3-hover-opacity "></i>
    <i class="fa fa-twitter w3-hover-opacity "></i>
    <i class="fa fa-linkedin w3-hover-opacity "></i>
  </div>
  <p>Powered by <a href="https://www.facebook.com/ziad.nabil.7545 " title="W3.CSS " target="_blank " class="w3-hover-text-green ">MOHAMED ALAA & ZIAD NABIL </a></p>
</footer>
 

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>

</body>
</html>