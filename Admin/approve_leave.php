<?php
      include('../include/connection.php');
      $query = "update leaves set status = 'Approved' where lid =$_GET[id]";
      $query_run =mysqli_query($connection, $query);
      if($query_run){
        echo"<script type  = 'text/javascript'>
        alert('Leave status update Successfully.......');
        window.location.href='admin_dashboard.php';
        </script>
        ";

      }
      else{
        echo"<script type  = 'text/javascript'>
        alert('Error!..Pleaze Try Again');
        window.location.href='admin_dashboard.php';
        </script>
        ";
      }

?>