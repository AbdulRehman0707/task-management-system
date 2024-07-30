<?php
 session_start();
 include('include/connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="styleuserlogin.css"> -->
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
   
</head>

<body>
   <div class="container-fluid">
     <div class="row" style="margin-top:3rem;">
     <center><h3 style="text-decoration:underline;">Your tasks</h3></center><br>
    <table class="table" style="background-color:whitesmoke; width:75vw;border-bottom:2px solid #517e8f;border-top:2px solid #517e8f; margin-top:1rem;">
        <tr style="color:#black;">
            <th>S.no</th>
            <th>Task ID</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        $sno=1;
        $query = "Select * from tasks where uid = '$_SESSION[uid]'" ;
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <tr>
                <td><?php echo $sno; ?></td>
                <td><?php echo  $row['tid']; ?></td>
                <td><?php echo  $row['description']; ?></td>
                <td><?php echo  $row['start_date']; ?></td>
                <td><?php echo  $row['end_date']; ?></td>
                <td><?php echo  $row['status']; ?></td>
                <td><b><a href="update_status.php?id=<?php echo $row['tid'];?>" style="color:#517e8f;">Update</a></b></td>
            </tr>
            <?php
            $sno=$sno+1;
        }
        ?>

    </table>
     </div>
   </div>
   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>