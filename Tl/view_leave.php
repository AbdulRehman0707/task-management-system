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
    <center><h3 style="margin-top:2rem;text-decoration:underline;">All leave applications</h3></center><br>
    <table class="table m-auto" style="background-color:whitesmoke; width:95%;border-bottom:2px solid #517e8f;border-top:2px solid #517e8f;">
    <tr>
        <th>S.no</th>
        <th>User</th>
        <th>Subject</th>
        <th style="width:40%;">Message</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php
    $sno=1;
    $query ="select * from leaves ";
    $query_run=mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <tr>
            <td><?php echo $sno; ?></td>
            <?php
            $query1 = "SELECT name FROM users WHERE uid = {$row['uid']}";
            $query_run1 = mysqli_query($connection,$query1);
            while($row1 = mysqli_fetch_assoc($query_run1)){
                ?>
                <td><?php echo $row1['name'] ;?></td>
                <?php

            }
            ?>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><b><a href="approve_leave.php?id=<?php echo $row['lid'] ?>" style="color: #517e8f;">Approve</a></b> | <b><a href="reject_leave.php?id=<?php echo $row['lid'] ?>" style="color: #517e8f;">Reject</a></b></td>
        </tr>
        <?php
        $sno=$sno+1;


    }
    ?>

    </table>
    
</body>
</html>