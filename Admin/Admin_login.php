<?php
session_start();
  include('../include/connection.php') ;
  if(isset($_POST['adminLogin'])){
    $query = "select email,password,name,id from admins where email = '$_POST[email]'And password = '$_POST[password]'";
    $query_run= mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
        while($row = mysqli_fetch_assoc($query_run)){
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];

        }
        echo"<script type  = 'text/javascript'>
        window.location.href='admin_dashboard.php';
        </script>
        ";
    }
    else{
        echo"<script type  = 'text/javascript'>
        alert('please enter correct details');
        window.location.href='Admin_login.php';
        </script>
        ";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styleuserlogin.css">
    <link rel="stylesheet" href="../stylee.css">
    <title>Document</title>
</head>
<body>

<div class="container-fluid"style="height:79.2vh; ">
<div class="row">
    <div  class="col-md-12  m-auto" id="home_page" style="height:79.2vh;width:50%;">
    <div class="col-md-3 form-parent" id="login_home_page"style="width:70%;height:70%;background-color:whitesmoke; margin-top:5rem;margin-left:6rem;    border: 1px solid grey;
    border-radius: 8px;">
        <h3 style="text-decoration:underline;">Admin Login</h3>
        <form action="" method="post" >
            <label for="">Email</label>
            <div class="form-group input ">
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <label for="">Password</label>
            <div class="form-group input">
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div><br>
            <div class="form-group ">
               <input type="submit" name="adminLogin" id="adminLogin" value="Login" class="btn btn-secondary">
               <a href="../home.php" class="btn btn-danger d-inline-block" >Go to Home</a> 
            </div>
            
        </form>
    </div>
</div>
    
</div>
</div>



<!-- <div class="row">
    <div class="col-md-3 m-auto" id="Admin_home_page">
        <h3>Admin Login</h3>
        <form action="" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
               <center><input type="submit" name="adminLogin" id="" value="Login" class="btn btn-warning"></center> 
            </div>
        </form><br>
        <center><a href="../index.php" class="btn btn-danger">Go to Home</a></center> 
    </div>
</div> -->



  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>