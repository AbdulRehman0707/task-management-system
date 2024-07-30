<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-UJx+d7uhtv2WgfD4Jec7p4WI7s57zRvz/Xt0fCwpxuQ2ZGR/yf3MlAXt5qB5LuLE" crossorigin="anonymous">
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#Login").click(function(){
            $("#Section").load("index.php");
        });
    });

   
  
 
</script>
</head>
<body >

<!-- <div class="container-fluid">
    <div class="row">
        <div class="employee col-md-12 " style="background-color:#B3C8CF;">
            <center>
                <h5 class="employee" style="text-decoration:underline;">....TMS|Employee-Login..</h5>
            </center>
        </div>
    </div>
</div> -->

<nav class="navbar navbar-expand-lg" style="background-color:#B3C8CF;">
    <div class="container ">
        <div class="logo col-md-4 " style="width:150px;height:45px;">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" width="190px" height="205px" class="align-text-top" style="margin-top:-5rem;">
            </a>
        </div>
        <div class="collapse navbar-collapse d-inline-block col-md-4 " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto">
                <li class="nav-item fs-4">
                    <a class="nav-link active ms-3" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item fs-4">
                    <a class="nav-link ms-3" href="About.php">About us</a>
                </li>
                <li class="nav-item fs-4">
                    <a class="nav-link ms-3" href="Contact.php">Contact  us</a>
                </li>
            </ul>
        </div>
        <div class="button d-inline-block ">
            <a class="btn btn-secondary" id="Login" role="button">LOG IN</a>
        </div>
    </div>
</nav>
<center><h5 style="text-decoration:underline;">TMS|Employee Portal. </h5></center>

<div class="container-fluid " id="Section">
    <div class="row">
        <div class="box col-md-6" style="height:79.2vh;">
          <div class="text">
           <center> <h3 style=" margin-top:4rem; color:#517e8f; font-size:2.5rem;">Manage All Of Your </h3></center>
           <center> <h3 style="font-size:2.2rem;">Work In <span style="color:#FDAF7B;  " >One Place</span></h3></center>
           <center> <h3 style=" font-size:2rem; " >Efficiently.</h3> <img src="quote.png" alt="quote" style="height:50px;width:50px;"></center><hr style="border: 4px solid black;">
           <div class="note " style="margin-left:8rem;">
           <h5>Note:</h5>
            <img src="check-mark.png" alt="" style="height:20px;width:20px;margin-right:2px;margin-top:-1.5px;">Manage Your work timeless and team mate all at. <br>
          <img src="check-mark.png" alt="" style="height:20px;width:20px;margin-right:2px;margin-top:-1.5px;">Set and follow timelines, assign tasks.  <br>
          <img src="check-mark.png" alt="" style="height:20px;width:20px;margin-right:2px;margin-top:-1.5px;">keep your projects in check. <br>
            </div>
          </div>   
     </div>
     <div class="col-md-6 d-inline-block ">
            <img src="section-img-transformed.png" alt="" style="width:90%;height:90%; margin-top:2rem; margin-left:2rem;">
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