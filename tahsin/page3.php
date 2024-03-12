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
    <link rel="stylesheet" href=""
    <title>تسجيل الدخول</title>
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
        
        .w3-bar .w3-button {
            padding: 16px;
        }
        
        .w3-quarter {
            margin-left: 2%;
            box-shadow: 0px 0px 10px 0px;
            margin-top: 5%;
            transition: background-color .8s linear, margin-top .8s linear;
        }
        
        .w3-quarter:hover {
            background-color: rgb(13, 94, 94);
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
     
    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="http://localhost/tahsin/tahsin/sign.php" onclick="w3_close()" class="w3-bar-item w3-button">المجموعات</a>
        <a href="http://localhost/tahsin/tahsin/page2.php" onclick="w3_close()" class="w3-bar-item w3-button">اسماء السناتر</a>
        <a href="http://localhost/tahsin/tahsin/page3.php" onclick="w3_close()" class="w3-bar-item w3-button">تسجيل الدخول</a>
        <a href="http://localhost/tahsin/tahsin/exam.php" onclick="w3_close()" class="w3-bar-item w3-button">الامتحان</a>

    </nav>
  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact" style="margin-top:5% !important;">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container" method="post" action="" target="" >
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" id="Name"  required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="gmail" name="Email" id="Email" required>
    </div>
    <div class="w3-section">
      <label>Password</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;"type="password" name="Password" id="Password" required>
    </div>
    <button type="submit" name="send" value="connect" class="w3-button w3-block w3-black" style="margin-bottom:5% !important;">submit</button>
  </form>


</div>
<?php
    $host='localhost';
    $user='root';
    $pass='';
    $db='tahsin';
    $con=mysqli_connect($host,$user,$pass,$db);
    $res=mysqli_query($con ,"select * from newsign");
    $Name="";
    $Email="";
    $Password="";
    if(isset($_POST['Name'])){
        $Name=$_POST['Name'];
    }
    if(isset($_POST['Email'])){
        $Email=$_POST['Email'];
    }
    if(isset($_POST['Password'])){
        $Password=$_POST['Password'];
    }
    $sql='';
    if(isset($_POST['send'])){
        $sql="insert into newsign value('$Name','$Email',$Password)";
        mysqli_query($con,$sql);

        echo "<h1 style='text-align:center;'>"."تم الارسال بنجاح"."</h1>";
    }
    ?>


<footer class="w3-center w3-black w3-padding-64" style="background-color:rgb(4, 54, 54)!important;">
    <a href="http://localhost/tahsin/tahsin/page3.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>7545
    <p>Powered by <a href="https://www.facebook.com/ziad.nabil." title="W3.CSS" target="_blank" class="w3-hover-text-green">MOHAMED ALAA & ZIAD NABIL </a></p>
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