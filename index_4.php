<body background="summer.jpg">
<div class="login-box" style=
"box-sizing: border-box;width: 380px;height: 450px;background: #ffffff;
   color: #dc8318;
   top: 30%;
   left: 50%;
   position: absolute;
   transform: translate(-50%,-50px);
   border-radius: 10%;
   padding:  70px 30px;">


    <img src="vatar.png" class="avatar" style=
    "width: 110px;
   height: 110px;
   border-radius: 50%;
   position: absolute;
   top:-50px;
right: 130px;">

    <h1 style="padding: 0 0 20px; margin: 0; text-align: center; font-size: 30px">General Manager Panel</h1>
    <h4 style="padding: 0 0 30px; margin: 0; text-align: center; font-size: 20px">Claim Management System</h4>

    <form method="post" action="cfo_login.php" class="clearfix_2">
        <p for="username" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Employee_id</p>
        <input type="name" class="form-control" name="employee_id" placeholder="Enter Employee_id" style="
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">

        <p for="Password" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Password</p>
        <input type="password" name= "password" class="form-control" placeholder="Password"style="
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">

        <div class="form-group_2">
            <button type="submit" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 100%;">Login</button>
        </div>
    </form>
    <a href="index.php">
        <button type="button" name="back" class="btn btn-primary" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 100%;">Back</button>
    </a>
</div>
</body>

<?php include_once('layouts/footer.php'); ?>


