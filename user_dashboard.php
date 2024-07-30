<?php
session_start();
if(isset($_SESSION['email'])){
include('include/connection.php');

if(isset($_POST['submit_leave'])){
    $query = "insert into leaves (uid, subject, message, status) values ('{$_SESSION['uid']}', '$_POST[subject]', '$_POST[message]', 'No Action')";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo "<script type='text/javascript'>
        alert('Form submitted Successfully.......');
        window.location.href='user_dashboard.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
        alert('Error!....plzz Try again');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-UJx+d7uhtv2WgfD4Jec7p4WI7s57zRvz/Xt0fCwpxuQ2ZGR/yf3MlAXt5qB5LuLE" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="styleuserlogin.css"> -->
    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#manage_task").click(function(){
            $("#right-sidebar").load("task.php");
        });
    });

    $(document).ready(function(){
        $("#apply_leave").click(function(){
            $("#right-sidebar").load("leaveForm.php");
        });
    });

    $(document).ready(function(){
        $("#leave_status").click(function(){
            $("#right-sidebar").load("leave_status.php");
        });
    });
</script>
</head>
<body>

<!-- Header code ends here -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-2" id="left-sidebar">
        
        <table class="table">
           <tr>
                <td style="">
                    <a href="user_dashboard.php" type="button" >USER</a>
                </td>
            </tr>

            <tr>
                <td style="">
                    <a href="user_dashboard.php" type="button" id="logout_link">Dashboard</a>
                </td>
            </tr>
            <tr>
                <td style=";">
                    <a  type="button" id="manage_task" class="link">Update Task</a>
                </td>
            </tr>
            <tr>
                <td style="">
                    <a  type="button" id="apply_leave" class="link" >Apply leave</a>
                </td>
            </tr>
            <tr>
                <td style="">
                    <a  type="button" class="link" id="leave_status">Leave Status</a>
                </td>
            </tr>
            <tr>
                <td style=" ">
                    <a href="logout.php" type="button" id="logout_link">Log out</a>
                </td>
            </tr>
           
        </table>

    </div>
    <div class="col-md-9 " id="right-sidebar"  >
    <div id="header">
       <div  style=" text-align:right;margin-top:1.5rem;">
       <b>Email:</b> <?php echo $_SESSION['email'] ?>
        <span style="margin-left:25px;"><b>Name: </b><?php echo $_SESSION['name'] ?></span>
       </div>
    </div><hr>
        <h4>Instruction for Employees</h4>
        <ul style="line-height:2.5em; font-size:1.2em; list-style-type:none; color:black;">
            <li>1. All the Employees should mark their attendance daily</li>
            <li>2.Everyone must complete  the task asiigned to them</li>
            <li>3.Kindly maintain decorum of the office.</li>
            <li>4.keep office and your area neat and clean.</li>
        </ul>
        <center><h3 style="margin-top:1rem;text-decoration:underline;">Announcements</h3></center>

<table class="table" style="background-color:whitesmoke; width:75vw;border-bottom:none;border-top:none; margin-top:1rem;border:none;">
<?php
$sno=1;
$query3= "SELECT * FROM announcements;";
$query_run3 = mysqli_query($connection,$query3);
while($row2 = mysqli_fetch_assoc($query_run3)){
?>
<tr style="border-bottom:none;border-top:none;">
<td><?php echo $sno; ?></td>
<!-- <td ><?php echo  $row2['id']; ?></td> -->
    <td ><?php echo  $row2['announcements']; ?></td>
    
    <!-- <td> <b><a href="Announcements_delete.php?id=<?php echo htmlspecialchars($row2['id']); ?>" style="color: #517e8f;">Delete</a></b></td> -->

</tr>
<?php
 $sno=$sno+1;
}

?>
</table>


    </div>
</div>
</div>
<hr>
<div class="container-fluid">
    <div class="row">
        <div class="div" style="height:8.5vh;background-color:white;color:#517e8f;">
        <center><h6>&copy;Copyright | All right reserved by Sage Solutions.</h6></center>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else{
    header('Location:user_login.php');
}