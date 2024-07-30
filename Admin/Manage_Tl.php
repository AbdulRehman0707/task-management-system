<!-- <?php
  session_start();
//   include('../include/connection.php') ;
  $connection = mysqli_connect("localhost","root","");
  $db= mysqli_select_db($connection,"tms_db");
  if(isset($_POST['manage'])){
    $query = "insert into teams values('$_POST[email]','$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo"<script type  = 'text/javascript'>
        alert('User registered successfully....');
        window.location.href='Admin/admin_dashboard.php';
        </script>
        ";
    }
    else{
        echo"<script type  = 'text/javascript'>
        alert('Error....Plz try again')
        window.location.href='Manage_Tl.php';
        </script>
        ";

    }
  }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="styleuserlogin.css"> -->
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid" style="height:55vh;">
    <div class="row m-auto" style="height:100%;width:70%;">
        <div class="col-md-3 m-auto" id="register_home_page" style="width:60%;height:90%;background-color:whitesmoke; margin-top:5rem;margin-left:6rem;    border: 1px solid grey; border-radius:8px;">
            <h3 style="text-decoration:underline;color:#517e8f;">Email Generate</h3>
            <form action="" method="post" class="" style="margin-left:1rem;">
                
                <b><label for="">Email</label></b>
                <div class="form-group input"style="width:90%;margin-bottom:0.5rem;">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>
                <b><label for="">Password</label></b>
                <div class="form-group input "style="width:90%;margin-bottom:0.5rem;">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
             
                <div class="form-group">
                    <input type="submit" name="manage" id="" value="Generate" class="btn btn-secondary">
                    <a href="admin_dashboard.php" class="btn btn-danger d-inline-block" >Back</a> 
                </div>
            </form><br>
        </div>
    </div>
</div>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>