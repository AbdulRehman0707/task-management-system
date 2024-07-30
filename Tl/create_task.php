<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylee.css">
    <title>Document</title>
</head>
<body>
    <h3 style=" margin-top:2rem;margin-bottom:1rem;text-decoration:underline;">Create a new Task</h3>
    <div class="row " style="height:80vh; ">
        <div class="col-md-6 m-auto" style="background-color:whitesmoke;border:1px solid grey; height:100%; border-radius:8px; ">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Select user</label>
                    <select id="" class="form-control" name="id">
                        <option value="">-Select-</option>
                        <?php
                          include('../include/connection.php');
                          $query = "select uid,name from users";
                          $query_run=mysqli_query($connection,$query);
                          if(mysqli_num_rows($query_run)){
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                                <option value="<?php echo $row['uid']; ?>"><?php echo $row['name'];?></option>
                                <?php
                            }
                          
                          }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="" cols="50" rows="3" placeholder="Mention The task"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Start date:</label>
                    <input type="date" class="form-control" name="start_date">
                </div>
                <div class="form-group">
                    <label for="">End date:</label>
                    <input type="date" class="form-control" name="end_date">
                </div><br>
                <input type="submit" class="btn btn-warning" name="create_task" value="Create">

            </form>
        </div>
    </div>
</body>
</html>