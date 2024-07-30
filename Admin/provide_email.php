<?php
   include('../include/connection.php');
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
    <center><h3 style="margin-top:2rem;text-decoration:underline;">All Assigned Task</h3></center><br>
    <table class="table" style="background-color:whitesmoke;width:75vw;border-bottom:2px solid #517e8f;border-top:2px solid #517e8f;">
        <tr >
            <th >S.No</th>
            <th> ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Delete</th>

            
        </tr>
        <?php
          $sno=1;
          $query = "Select * from teams";
          $query_run = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($query_run)){
              ?>
              <tr>
              <td><?php echo $sno; ?></td>
              <td><?php echo $row['id'];  ?></td>
              <td><?php echo $row['temail'];  ?></td>
              <td><?php echo $row['tpassword'];  ?></td>
              <td> <b><a href="manageTl_delete.php?id=<?php  echo $row['id'];  ?>"style="color: #517e8f;">Delete</a></b></td>
              </tr>
             
              <?php
              $sno=$sno+1;
             
          }
        ?>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>