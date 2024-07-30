<?php
include('../include/connection.php');

// Create the MySQL query to delete all rows from the announcements table
$query = "DELETE  FROM announcements where id = '$_GET[id]'  ";

// Execute the query
$query_run = mysqli_query($connection, $query);

// Check if the query was successful
if ($query_run) {
    // Display a success message and redirect to the admin dashboard
    echo "<script type='text/javascript'>
        alert('Announcements deleted successfully.......');
        window.location.href='admin_dashboard.php';
    </script>";
} else {
    // Display an error message and redirect to the admin dashboard
    echo "<script type='text/javascript'>
        alert('Error! please try again.......');
        window.location.href='admin_dashboard.php';
    </script>";
}
?>