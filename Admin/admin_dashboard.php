<?php
session_start();
include('../include/connection.php');

if(isset($_POST['Select_Tl'])){
    $query = "insert into tasks values('$_POST[tid]','$_POST[id]','$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
     $query_run = mysqli_query($connection,$query);
     if($query_run){
        echo"<script type  = 'text/javascript'>
        alert('Tl Selected Successfully.......');
        window.location.href='admin_dashboard.php';
        </script>
        ";
    }
    else{
        echo"<script type  = 'text/javascript'>
        alert('Error.....please Try again......');
        window.location.href='admin_dashboard.php';
        </script>
        ";
    }
}

if(isset($_POST['manage'])){
   
    $password = ($_POST['password']);

    // Insert the data into the database
    $query1 = "insert into teams values(null,'{$_POST['email']}', '{$password}')";
    $query_run1 = mysqli_query($connection,$query1);

    // Check if the query was successful
    if($query_run1){
        echo"<script type  = 'text/javascript'>
        alert('Generated  successfully....');
        window.location.href='admin_dashboard.php';
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

    
    if(isset($_POST['Announcement'])){
        $query2 = "insert into announcements (announcements) values ('$_POST[description]')";
        $query_run2 = mysqli_query($connection,$query2);
        if($query_run2){
            echo"<script type  = 'text/javascript'>
            alert('Announcement created successfully.......');
            window.location.href='admin_dashboard.php';
            </script>
            ";
        }
        else{
            echo"<script type  = 'text/javascript'>
            alert('Error.....please Try again......');
            window.location.href='Announcements.php';
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
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../styleuserlogin.css"> -->
    <link rel="stylesheet" href="../stylee.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- j-query code -->
    <script type="text/javascript">
    $(document).ready(function(){
        $("#create_Tl").click(function(){
            $("#right-sidebar").load("create_Tl.php");
        });
    }); 

    $(document).ready(function(){
        $("#manage_task").click(function(){
            $("#right-sidebar").load("manage_task.php");
        });
    });

    $(document).ready(function(){
        $("#view_leave").click(function(){
            $("#right-sidebar").load("view_leave.php");
        });
    });
    
    $(document).ready(function(){
        $("#Manage_Tl").click(function(){
            $("#right-sidebar").load("Manage_Tl.php");
        });
    });
    $(document).ready(function(){
        $("#provide_email").click(function(){
            $("#right-sidebar").load("provide_email.php");
        });
    });

    $(document).ready(function(){
        $("#Announcements").click(function(){
            $("#right-sidebar").load("Announcements.php");
        });
    });
</script>
</head>
<body>
<div class="container-fluid">
    <!-- Header code start here -->
<!-- <div class="row" id="header">
    <div class="col-md-12">
       <div class="col-md-4" style="display: inline-block;">
      <h3>  Task Management System</h3>
       </div>
       <div class="col-md-6" style="display: inline-block; text-align:right;">
        <b>Email:</b> <?php echo $_SESSION['email']; ?>
        <span style="margin-left:25px;"><b>Name: </b><?php  echo $_SESSION['name'];  ?></span>

       </div>
    </div>
</div> -->
<!-- Header code ends here -->
<div class="row">
    <div class="col-md-2" id="left-sidebar">
        <table class="table">
          <tr>
                <td style="text-align:center;">
                    <a href="admin_dashboard.php" class=" "type="button" id="logout_link">Admin</a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    <a href="admin_dashboard.php" type="button" id="logout_link">Dashboard</a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    <a  type="button" class="link" id="create_Tl">Select TL</a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    <a  type="button"class="link" id="manage_task" >Manage Task</a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    <a  type="button" class="link" id="view_leave">Leave Applications</a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center; ">
                    <a href="../user_register.php" type="button" id="logout_link">New Users</a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center; ">
                    <a  type="button" id="Manage_Tl">Manage Tl</a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center; ">
                    <a  type="button" id="provide_email">Provide Email </a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center; ">
                    <a  type="button" id="Announcements">Announcements</a>
                </td>
            </tr>
            <tr>
                <td style="text-align:center; ">
                    <a href="../logout.php" type="button" id="logout_link">Log out</a>
                </td>
            </tr>
        </table>

    </div>
    <div class="col-md-10 " id="right-sidebar"  >
    <div class="" id="header">
       <div class="" style="text-align:right;margin-top:1.5rem;margin-right:3rem;">
        <b>Email:</b> <?php echo $_SESSION['email']; ?>
        <span style="margin-left:25px;"><b>Name: </b><?php  echo $_SESSION['name'];  ?></span>
    </div>
</div><hr>
        <h4 style="margin-top:1rem;">Instruction for Admin</h4>
        <ul style="line-height:2.5em; font-size:1.2em; list-style-type:none;line-height:2.5em; font-size:1.2em; list-style-type:none; color:black; ">
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
            
            <td> <b><a href="Announcements_delete.php?id=<?php echo htmlspecialchars($row2['id']); ?>" style="color: #517e8f;">Delete</a></b></td>

        </tr>
        <?php
         $sno=$sno+1;
     }
 
    ?>
</table>

    </div>
    
</div>
</div><hr>



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