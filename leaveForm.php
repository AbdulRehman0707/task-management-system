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
<h3 style="text-decoration:underline;margin-top:2rem;">Apply Leave</h3><br>

<div class=" m-auto" style=" height:65vh;width:65%; b">
            <form action="" method="post" style="width:70%; " class="m-auto">
               <div class="form-group" style="margin-top:2rem;">
               <b><label for="">Subject:</label></b>
               <input type="text" class="form-control" name="subject" placeholder="Enter Subject" style="border:2px solid grey;">
               </div><br>
               <div class="form-group">
                <b><label for="">Textarea:</label></b>
                 <textarea  id="" cols="50" rows="5" class="form-control" name="message" placeholder="Type Message">
                 </textarea>
               </div><br>
               <input type="submit"  id="" class="btn btn-warning " name="submit_leave">
            </form>
      
    </div>
       

</div>

   

    
</body>
</html>