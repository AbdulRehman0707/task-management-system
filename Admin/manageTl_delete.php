<?php
   include('../include/connection.php');
   $query = "delete from teams where  id = '$_GET[id]'";
   $query_run = mysqli_query($connection,$query);
   if($query_run){
    echo"<script type  = 'text/javascript'>
    alert('Task deleted Successfully.......');
    window.location.href='admin_dashboard.php';
    </script>
    ";

   }
   else{
    echo"<script type  = 'text/javascript'>
    alert('Error! please try again.......');
    window.location.href='admin_dashboard.php';
    </script>
    ";

   }

?>