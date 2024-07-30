<?php
   session_start();
   if(isset($_SESSION['email'])){
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
    <center><h3 style="text-decoration:underline; margin-top:2rem; margin-bottom:1rem;">Your Leave Applications</h3></center>
    <table class="table " style="background-color:whitesmoke;width:95%; border-top:2px solid #517e8f;border-bottom:2px solid #517e8f;">
    <tr style="color:#517e8f;">
        <th>S.no</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Status</th>
    </tr>
    <?php
    $sno=1;
      $query = "select * from leaves where uid = '{$_SESSION['uid']}'";
      $query_run= mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <tr>
            <td><?php echo $sno; ?></td>
            <td><?php echo $row['subject'] ?></td>
            <td><?php echo $row['message'] ?></td>
            <td><?php echo $row['status'] ?></td>
        </tr>
        <?php
        
        $sno =$sno+1;

      }
    ?>

    </table>
</body>
</html>
<?php
}
else{
    header('Location:user_login.php');
}