<body background="image.jpeg">
<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('employee.php', false);}
$groups = find_all('user_groups');
?>

<div class="login-page" style=
"box-sizing: border-box;width: 600px;height: 500px;background: #ffffff;
   color: #dc8318;
   top: 30%;
   left: 50%;
   position: absolute;
   transform: translate(-50%,-50px);
   border-radius: 10%;
   ;">

  <div style="position: relative; width: 50% ; height: 100%; background: transparent; border-top-left-radius:10%; border-bottom-left-radius: 10%;">

      <img src="claims.png
 " style="margin-top: 45%;background: transparent; width: 100%;">
  </div>

    <img src="vatar.png" class="avatar" style=
    "width: 110px;
   height: 110px;
   border-radius: 50%;
   position: absolute;
   top:-50px;
   background: transparent;
right: 240px;">

       <h1  class="text-center" style=" text-align: center; font-size: 30px;margin-top: -440px; margin-left: 5%">Login !</h1>
       <h4 style="padding: 0 0 20px; margin-left: 5%; text-align: center; font-size: 20px; margin-top: 3px;">Claim Management System</h4>

     <?php echo display_msg($msg); ?>



      <form method="post" action="login.php" class="clearfix" style="margin-top: 1px; width: 50%; margin-left: 50%;">
          <p for="username" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Employee ID</p>

          <input type="name" class="form-control" name="employee_id" placeholder="Employee ID" style="
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">

          <p for="Password" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Password</p>
          <input type="password" name= "password" class="form-control" placeholder="Password" style="
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">



          <button type="submit" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 80%;" name="submit">Login</button>


    </form>

    <a href="add_user.php"><button type="submit" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 40%;
            margin-left: 50%;
            " >Sign Up
        </button></a>



  </div>
<?php include_once('layouts/footer.php'); ?>

<script>
    function try(one){
window.location=one;

    }



</script>
</body>