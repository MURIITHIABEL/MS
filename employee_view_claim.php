<body background="summer.jpg">
<?php
require_once('includes/load.php');
$page_title = 'Add claim';
$all_claims= find_all("claims");
$claim = find_by_id('claims',(int)$_GET['id']);
?>
<?php include_once('layouts/header.php'); ?>

<div style=
     "box-sizing: border-box;width: 900px;height: 1600px;background: #ffffff;
   color: #dc8318;
   top: 5%;
   left: 12%;

   border-radius: 5%;
   padding:  70px 50px;
   position: center">

    <?php echo display_msg($msg); ?>

    <div style=" width: 30%; background-color: #000000; height: 3px;"></div>
    <h1 style="padding: -20px 0 20px; text-align: center; font-size: 30px; margin-top: -20px;" > Claim Form</h1>

    <div style=" width: 30%; background-color: #000000; height: 3px; margin-left: 70%; margin-top: -20px;"></div>

    <div>
        <form method="post" action="employee_view_claim.php?id=<?php echo (int)$claim['id']; ?>">
            <p for="name" class="control-label" style="  padding: 0; font-weight: bold; margin-top: 10px">Employee Name</p>

            <input type="text" class="form-control" name="employee_name" value="<?php echo remove_junk($claim['emp_name']); ?>" style="
                width: 40%;
                margin-bottom: 20px;
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;">


            <p for="emp_id" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Employee ID</p>

            <input type="text" name= "employee_id" class="form-control" value="<?php echo remove_junk($claim['emp_id']); ?>" style="
            width: 40%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">

            <p for="email" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Personal Email</p>

            <input type="email" class="form-control" name="employee_email" value="<?php echo remove_junk($claim['email']); ?>" style="
            width: 40%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">

            <p for="dept" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Department</p>

            <input id="category" style="
            width: 40%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;"  name="employee_department" value="<?php echo remove_junk($claim['dept']); ?>">



            <p for="tel" class="control-label" style="padding: 0; font-weight: bold;margin-left: 70%; margin-top: -41%; ">Phone Number</p>

            <input type="number" class="form-control" name="employee_telephone" value="<?php echo remove_junk($claim['tel']); ?>" style="
            width: 20%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 70%;">

            <p for="date" class="control-label" style="padding: 0; font-weight: bold;margin-left: 70%;">Date of Application</p>

            <input type="date" class="form-control" name="filing_date" value="<?php echo remove_junk($claim['dates']); ?>" style="
            width: 20%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 70%;">

            <p for="time" class="control-label" style="padding: 0; font-weight: bold;margin-left: 70%;">Time of Application</p>

            <input type="time" class="form-control" name="filing_time" value="<?php echo remove_junk($claim['time']); ?>" style="
            width: 20%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 70%;">

            <div style=" width: 100%; background-color: #000000; height: 3px; margin-top: 75px"></div>

            <p for="claim_date" class="control-label" style="padding: 0; font-weight: bold;margin-top: 10px">Date of Claim</p>

            <input type="date" class="form-control" name="claiming_date" value="<?php echo remove_junk($claim['claim_date']); ?>" style="
            width: 20%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">

            <p for="desc"  style=" margin-top: 15px; padding: 0; font-weight: bold;">Description</p>

            <input type="text" class="form-control" name="describe" value="<?php echo remove_junk($claim['descriptions']); ?>" style="
            width: 40%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">

            <p for="category"  style=" margin-top: 15px; padding: 0; font-weight: bold;">Category</p>

            <input id="category" style="
            width: 40%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;"  name="claim_category" value="<?php echo remove_junk($claim['category']); ?>" >



            <p for="payout"  style=" ; padding: 0; font-weight: bold; margin-left: 70%; margin-top: -25%;">Expected Payout</p>

            <input type="number" class="form-control" name="exp_payout" value="<?php echo remove_junk($claim['payout']); ?>" style="
            width: 40%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 70%;">

            <div style=" width: 100%; background-color: #000000; height: 3px; margin-top:15%;"></div>
            <img src="1650%20food%20claimCharles%20Corp%20Ltd.jpg"  class="" alt="" style="
            width: 65%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 400px;
            ">

            <div style=" width: 100%; background-color: #000000; height: 3px; margin-top:3%;"></div>
            <div style="margin-top: 5px">
                <p style="font-weight: bold;">Approved by:</p>
                <p style="margin-top: 20px; font-weight: bold;">Head of department</p>
                <span class="label label-primary" ><?php echo "Posted"; ?></span>
                <div style=" width: 30%; background-color: #000000; height: 3px;margin-top: 20px; color: #000000"></div>

                <p style="margin-top: 20px; font-weight: bold;"> Chief Financial Officer</p>
                <span class="label label-primary" ><?php echo "Posted"; ?></span>
                <div style=" width: 30%; background-color: #000000; height: 3px;margin-top: 20px;"></div>

                <p style="margin-top: 20px; font-weight: bold;"> General Manager</p>
                <span class="label label-primary" ><?php echo "Posted"; ?></span>
            </div>

            <div style=" width: 30%; background-color: #000000; height: 3px;margin-top: 20px;"></div>
        </form>
        <button onclick="window.print()" type="none" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            color: rgb(255,255,255);
            width: 150px;
            margin-top: 130px;
            margin-left:320px;
            background:rgba(220,131,24,0.94) ;
           ">Print Claim</button>
    </div>

</div>
</body>
<?php include_once('layouts/footer.php'); ?>
