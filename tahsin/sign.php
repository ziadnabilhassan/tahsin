<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>المجموعات</title>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family:'Droid Arabic Kufi', serif;
        }
        
        body,
        html {
            height: 100%;
            line-height: 1.8;
        }
        /* Full height image header */
        
        .w3-bar .w3-button {
            padding: 16px;
        }
        
        .w3-quarter {
            margin-left: 2%;
            box-shadow: 0px 0px 10px 0px black;
            margin-top: 5%;
            transition: background-color .8s linear, margin-top .8s linear;
            color:rgb(4, 51, 51);
        }
        
        .w3-quarter:hover {
            background-color: black;
            color: white;
            margin-top: 2%;
        }

        
        @media (max-width: 768px) {
            .w3-quarter {
                margin-left: -5%;
            }
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
    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px; color:rgb(4, 51, 51);" id="about">
        <h3 class="w3-center" style="font-size:50px">المجموعات المتاحة </h3>
        <p class="w3-center w3-large" style="font-size:30px">للمرحلة الاعدادية</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px;margin-left:15%">
            <div class="w3-quarter" style="border-radius: 8px;padding: 5px;height:100%">
                <p style="font-size:30px;font-weight:bold">الصف الثالث الاعدادى</p>
                
                <p class="w3-large">المواعيد باسماء السناتر</p>
                <p style="font-size:25px;font-weight:normal">فلاش اتنين وخميس الساعه 1 // امازون الاحد والاربعاء الساعة 1 //نور الاسلام الاحد والاربعاء الساعة 6</p>
            </div>
            <div class="w3-quarter" style="
    border-radius: 8px;
    padding: 5px;height:100%">
                <p style="font-size:30px;font-weight:bold">الصف الثانى الاعدادى</p>
                <p class="w3-large">المواعيد باسماء السناتر</p>
                <p style="font-size:25px;font-weight:normal">فلاش اتنين وخميس الساعة 2 //امازون الاحد والاربعاء الساعة 5 //نور الاسلام الاحد و الاربعاء الساعة 6</p>
            </div>
            <div class="w3-quarter" style="
    border-radius: 8px;
    padding: 5px;height:100%">
                <p style="font-size:30px;font-weight:bold">الصف الاول الاعدادى</p>
                <p class="w3-large">المواعيد باسماء السناتر</p>
                <p style="font-size:25px;font-weight:normal">فلاش اتنين وخميس الساعه 3 // امازون الاحد والاربعاء الساعة 4 //نور الاسلام الاحد والاربعاء الساعة 7</p>
            </div>
        </div>
        <h3 class="w3-center" style="font-size:50px">المجموعات المتاحة </h3>
        <p class="w3-center w3-large">للمرحلة الثانوية</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px;margin-left:15%">
            <div class="w3-quarter" style="
    border-radius: 8px;
    padding: 5px; height:100%;">
                <p style="font-size:30px;font-weight:bold">الصف الثالث الثانوى</p>
                <p class="w3-large">المواعيد باسماء السناتر</p>
                <p style="font-size:25px;font-weight:normal">الاستفسار من خلال الرقم المتاح بالاسفل</p>
            </div>
            <div class="w3-quarter" style="
    border-radius: 8px;
    padding: 5px; height:100%">
                <p style="font-size:30px;font-weight:bold">الصف الثانى الثانوى</p>
                <p class="w3-large">المواعيد باسماء السناتر</p>
                <p style="font-size:25px;font-weight:normal">فلاش الثلاثاء الساعة 4 // نور الاسلام السبت الساعة 6 </p>
            </div>
            <div class="w3-quarter" style="
    border-radius: 8px;
    padding: 5px; height:100%">
                <p style="font-size:30px;font-weight:bold;">الصف الاول الثانوى</p>
                <p class="w3-large">المواعيد باسماء السناتر</p>
                <p style="font-size:18px;font-weight:normal">فلاش اتنين الساعة5 // امازون الخميس الساعة 5 // نور الاسلام الثلاثاء الساعة5 //نور اليقين السبت الساعة12 // فرست الثلاثاء الساعة 2</p>
            </div>
        </div>
    </div>
    <footer class="w3-center w3-black w3-padding-64" style="background-color:rgb(4, 51, 51)!important;">
        <a href="http://localhost/tahsin/tahsin/sign.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p>Powered by <a href="https://www.facebook.com/ziad.nabil.7545" title="W3.CSS" target="_blank" class="w3-hover-text-green">MOHAMED ALAA & ZIAD NABIL </a></p>
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