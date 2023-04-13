<body background="rocks.jpg">
<?php
ob_start();
require_once('includes/load.php');
if($session->isUserLoggedIn(true)) { redirect('employee.php', false);}
$groups = find_all('user_groups');
?>

<div class="login-page" style=
"box-sizing: border-box;width: 600px;height: 550px;background: #ffffff;
   color: #dc8318;
   top: 30%;
   left: 50%;
   position: absolute;
   transform: translate(-50%,-50px);
   border-radius: 10%;
   ;">

    <div style="position: relative; width: 50% ; height: 100%; background: white; border-top-left-radius:10%; border-bottom-left-radius: 10%;">

        <img src="claims.png
 " style="margin-top: 40%;">
    </div>

    <img src="vatar.png" class="avatar" style=
    "width: 110px;
   height: 110px;
   border-radius: 50%;
   position: absolute;
   top:-50px;
right: 240px;">

    <h1 style=" text-align: center; font-size: 30px;margin-top: -500px; margin-left: 50%">Login !</h1>
    <h4 style="padding: 0 0 20px; margin-left: 50%; text-align: center; font-size: 20px">Claim Management System</h4>

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

        <label for="level" style="margin: 0; padding: 0; font-weight: bold;">User Role</label>
        <select onchange="try(this.value)" style="
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">
            <option value="Head of department">Head of department</option>
            <option value="Employee">Employee</option>
            <option value="General Manager">General Manager</option>
            <option value="Chief Financial Officer">Chief Financial Officer</option>
        </select>

        <button type="submit" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 100%;" name="submit">Login</button>


    </form>
    <a href="index_2.php"><button type="submit" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 50%;
            margin-left: 50%;
            " >Employee Login
        </button></a>

    <a href="index_3.php"><button type="submit" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 50%;
            margin-left: 50%;
             margin-top: 10px;" > General Manager Login
        </button></a>

    <a href="index_4.php"><button type="submit" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 50%;
            margin-top: 10px;
            margin-left: 50%;
            " > CFO Login
        </button></a>

    <a href="add_user.php"> <button type="submit" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 50%;
            margin-top: 40px;">Sign up</button></a>
</div>
<?php include_once('layouts/footer.php'); ?>

<script>
    function try(one){
        window.location=one;

    }



</script>
</body>