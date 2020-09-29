<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script> 

    <title>Result</title>
  </head>
  
  <body>
  
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-4">
      
  </div>
    
  <div class="col-md-6">

    <?php
    session_start();
    if(isset($_SESSION['error'])) {?>
    <div class="alert alert-warning">
    <strong>warning !</strong> Wrong email and password.
    </div>
  <?php } ?>  
  <?php if(isset($_SESSION['reg_msg'])) {?>
    <div class="alert alert-success">
    <strong>Success !</strong> <?php echo $_SESSION['reg_msg'];?>
    </div>
  <?php } ?> 
  <div style="background: #ff00ff;margin-top: 100px; width: 350px;height: 450px;"> 
  <h1 align="center">Login</h1>
   <br><br>
   <form action="confirmlogin.php" method = "post">
   <table class="table table-bordered">
   <tr>
   <th>Email</th>
   <td><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required></td>
    </tr>
   <tr>
   <th>Password</th>
    <td><input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required></td>
 
    </tr>
    <tr>
    <td><button style="border-radius: 15px;margin-top: 25px;" type="submit" class="btn btn-primary">Login</button></td>

    <td><a style="border-radius: 15px; margin-left: 25px;margin-top: 25px;" class="btn btn-primary" href="registration.php">Create New Account</a></td>
   </tr>
   </table>
  </form>

  </div>
   </div>

  <div class="col-md-3">

    </div>
    </div>
  </div> 
</div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/Popper.min.js"></script> 
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
    
 
    
  </body>
</html>
 
 <?php unset($_SESSION['error']);?>
 <?php unset($_SESSION['reg_msg']);?>
 