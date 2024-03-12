<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>show sign</title>
</head>
<body>
<?php
        $host='localhost';
        $user='root';
        $pass='';
        $db='tahsin';
        $con=mysqli_connect($host,$user,$pass,$db);
        $res=mysqli_query($con ,"select * from newsign");
        $name="";
        $groups="";
        $id="";
    ?>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="http://localhost/tahsin/showsign.php">تسجيل الدخول الجديد</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/tahsin/tahsinshow.php">الحضور والغياب</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="http://localhost/tahsin/tahsin.php">تسجيل الحضور والغياب</a>
      </li>
    </ul>
  </div>
</nav>
<br>
        <FORM method="post">
        <center>
          <h1 style="text-align:center" > تسجيل الدخول الجديد</h1>
            <table  style="width:90%;height:100%; color:black; text-align: center;border:2px solid black">
                <tr>
                    <th style="border:2px solid black">Name</th>
                    <th style="border:2px solid black"> Email</th>
                    <th style="border:2px solid black"> Password</th>
                </tr>
                    <?php
                    while($row = mysqli_fetch_array($res)){
                        echo '<tr>';
                        echo '<td style="text-align: center;color:red;border:2px solid black">'.$row['Name'].'</td>';
                        echo '<td style="text-align: center;color:green;border:2px solid black">'.$row['Email'].'</td>';
                        echo '<td style="text-align: center;color:blue;border:2px solid black">'.$row['Password'].'</td>';
                        echo '</tr>';
                    }
                    ?>
            </table>
        </center>
    </FORM>
</body>
</html>