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
    <title>Document</title>
</head>
<style>
</style>
<body>
    <?php
    $host='localhost';
    $user='root';
    $pass='';
    $db='tahsin';
    $con=mysqli_connect($host,$user,$pass,$db);
    $res=mysqli_query($con ,"select * from student");
    $name="";
    $groups="";
    $id="";
    if(isset($_POST['name'])){
        $name=$_POST['name'];
    }
    if(isset($_POST['groups'])){
        $groups=$_POST['groups'];
    }
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }
    $sql='';
    if(isset($_POST['add'])){
        $sql="insert into student value('$name','$groups',$id)";
        mysqli_query($con,$sql);
    }
    if(isset($_POST['del'])){
        $sql="delete from student where name='$name'";
        mysqli_query($con,$sql);
    }
    ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/tahsin/showsign.php">تسجيل الدخول الجديد</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="http://localhost/tahsin/tahsinshow.php">الحضور والغياب</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" href="http://localhost/tahsin/tahsin.php">تسجيل الحضور والغياب</a>
      </li>
    </ul>
  </div>
</nav>

    <FORM method="post">
    <div class="w3-container">
    <h2 style="text-align:center">الحضور والغياب</h2>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required  id="name" name="name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="groups"  id="groups" name="groups"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="id" id="id" name="id"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit" value='connect' name='add'>Add Student</button></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit"  value='connect' name='del'>Remove Student</button></p>
  </div>
    
    </FORM>
</body>
</html>