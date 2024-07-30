<?php 
  include('../include/connection.php');
  if(isset($_POST['edit_task'])){
    $query = "UPDATE tasks SET uid = '$_POST[id]', description = '$_POST[description]', start_date = '$_POST[start_date]', end_date = '$_POST[end_date]' WHERE tid = '$_GET[id]'";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Task Update Successfully.......');
        window.location.href='admin_dashboard.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
        alert('Error! .... Please try again');
        window.location.href='admin_dashboard.php';
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
    <!-- <link rel="stylesheet" href="../styleuserlogin.css"> -->
    <link rel="stylesheet" href="../stylee.css">
    <title>Document</title>
</head>
<body>
   <!-- Header code start -->
   <div class="container-fluid" style="height:105vh;">
   <div class="row " style="height:100%;">
    <div class="col-md-4" style="color:black; background-color:whitesmoke;border:1px solid grey;margin-top:2rem; margin-left:28rem;border-radius:8px; height:90%;"><br>
        <h3 style="color:#517e8f;text-decoration:underline;">Edit The Task</h3><br>
         <?php
          $query = "SELECT * FROM tasks WHERE tid = '$_GET[id]'";
          $query_run = mysqli_query($connection, $query);
          while($row = mysqli_fetch_assoc($query_run)){
            ?>
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="<?php echo $row['uid']; ?>" required>
            </div>
            <div class="form-group">
                    <label for="">Select user</label>
                    <select id="" class="form-control" name="user_id" required>
                        <option value="">-Select-</option>
                        <?php
                         
                          $query1 = "SELECT uid, name FROM users";
                          $query_run1 = mysqli_query($connection, $query1);
                          if(mysqli_num_rows($query_run1)){
                            while($row1 = mysqli_fetch_assoc($query_run1)){
                                ?>
                                <option value="<?php echo $row1['uid']; ?>"><?php echo $row1['name'];?></option>
                                <?php
                            }
                          
                          }
                        ?>
                    </select>

                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="" cols="50" rows="3" placeholder="Mention The task" required><?php echo $row['description'] ?></textarea>
                    <div class="form-group">
                    <label for="">Start date:</label>
                    <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="">End date:</label>
                    <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date']; ?>" required>
                </div><br>
                <input type="submit" class="btn btn-warning" name="edit_task" value="Update" required>
                </div>
        </form>
        <?php
          }
        ?>
    </div>
   </div>

   </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
