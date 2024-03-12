<!DOCTYPE html>
<html>

<head>
    <title>الامتحانات</title>
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
        .w3-container{
            background-color:white!important;
            background-repeat: no-repeat;
            background-size: cover;
            height:650px;
            color: rgb(6, 77, 65) !important;
            font-size: 45px;
        }
        .aa{
            font-weight:bold;
            font-style:italic;
            font-size:30px;
            color:rgb(9, 122, 126);
        }
        .w3-container{
            background-position: center;
            background-size: cover;
            background-image: url("https://images.pexels.com/photos/8850986/pexels-photo-8850986.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
            min-height: 100%;
        }
        @media(max-width:768px){
            .aa{margin-left:-53%;}
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
    <!-- Pricing Section -->
    <div class="w3-container w3-center w3-dark-grey" style="padding:135px 12px;"id="pricing">
        <h1 style="font-weigth:bold;font-size:50px">الامتحان</h1>
        <p class="w3-large">اضغط على اللينك وابداء الامتحان</p>
        <div class="w3-third w3-section" style="margin-left:34%">
            <a class="aa" href="file:///D:/tahsin/img.html"target="_blank"> اضغط هنا</a> 
        </div>
    </div>
        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-64" style="background-color:rgb(4, 53, 53)!important;">
            <a href="http://localhost/tahsin/tahsin/exam.php" class="w3-button w3-light-grey "><i class="fa fa-arrow-up w3-margin-right "></i>To the top</a>
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
            document.getElementById("img01 ").src = element.src;
            document.getElementById("modal01 ").style.display = "block ";
            var captionText = document.getElementById("caption ");
            captionText.innerHTML = element.alt;
          }
          
          
          // Toggle between showing and hiding the sidebar when clicking the menu icon
          var mySidebar = document.getElementById("mySidebar ");
          
          function w3_open() {
            if (mySidebar.style.display === 'block') {
              mySidebar.style.display = 'none';
            } else {
              mySidebar.style.display = 'block';
            }
          }
          
          // Close the sidebar with the close button
          function w3_close() {
              mySidebar.style.display = "none ";
          }
          
          </script>
          
          </body>
          </html>