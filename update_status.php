<?php 
include('include/connection.php');

if(isset($_POST['update'])){
    $status = $_POST['status'];
    $tid = $_GET['id'];

    $query = "UPDATE tasks SET status = '$status' WHERE tid = '$tid'";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Status Update Successfully.......');
        window.location.href='user_dashboard.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
        alert('Error! .... Please try again');
        window.location.href='user_dashboard.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleuserlogin.css">
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
</head>
<body>
   <!-- Header code start -->
  
   <div class="row" style="height:80vh;">
    <div class="col-md-4 " style="background-color:whitesmoke;border:1px solid grey;border-radius:8px;margin-left:28rem;margin-top:6rem;height:60%;"><br>
        <h3 style="color:#517e8f;text-decoration:underline;">Update The Task</h3><br>
         <?php
          $query = "SELECT * FROM tasks WHERE tid = '{$_GET['id']}'";
          $query_run = mysqli_query($connection, $query);
          while($row = mysqli_fetch_assoc($query_run)){
            ?>
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $row['tid']; ?>" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="status">
                    <option value="">-Select-</option>
                    <option value="In-Progress">In-Progress</option>
                    <option value="Complete">Complete</option>
                </select>
            </div><br>
            <input type="submit" class="btn btn-warning" name="update" value="Update" required>
        </form>
        <?php
          }
        ?>
    </div>
   </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
