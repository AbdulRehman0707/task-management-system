<?php
 session_start();
 include('../include/connection.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid" style="height:70vh;margin-top:4rem;" >
    <div class="row"  style="width:65%;margin:auto;height:80%;">
        <form action="" method="post" style="background:whitesmoke;border-radius:4px;border:1px solidgrey;">
           <div class="form-group">
             <label for="">Description</label>
             <textarea class="form-control" name="description" id="" cols="50" rows="3" placeholder="Give Instruction"></textarea>
           </div><br>
           <input type="submit" class="btn btn-warning" name="Announcement" value="Submit">
        </form>
    </div>
</div>
</body>
</html>