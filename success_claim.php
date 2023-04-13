<?php

$page_title = 'Success';

?>






<h1> CLAIM FILED SUCCESSFULLY</h1>


<div class="card" style=
     "box-sizing: border-box;width: 900px;height: 1200px;background: #ffffff;
   color: #dc8318;
   top: 5%;
   left: 12%;

   border-radius: 5%;
   padding:  70px 50px;
   position: center">



    <div style=" width: 30%; background-color: #000000; height: 3px;"></div>
    <h1 style="padding: -20px 0 20px; text-align: center; font-size: 30px; margin-top: -20px;" > Claim Form</h1>

    <div style=" width: 30%; background-color: #000000; height: 3px; margin-left: 70%; margin-top: -40px; margin-bottom: 20px;"></div>


    <p for="name" class="control-label" style="  padding: 0; font-weight: bold; margin-top: 10px">Employee Name</p>

           <p  style="
                   width: 40%;
                   margin-bottom: 5px;
                   border: none;
                   border-bottom: 1px solid #fff;
                   background: transparent;
                   outline: none;
                   height: 40px;" > <?php echo $_POST ['employee_name']; ?></p>

    <p for="emp_id" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Employee ID</p>

            <P  style="
            width: 40%;
            margin-bottom: 5px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;"> <?php echo $_POST ['employee_id']; ?></p>

    <p for="email" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Personal Email</p>

            <p style= "
    width: 40%;
    margin-bottom: 5px;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;"> <?php echo $_POST ['employee_email']; ?></p>

    <p for="dept" class="control-label" style="margin: 0; padding: 0; font-weight: bold;">Department </p>

             <p style="
    width: 40%;
    margin-bottom: 5px;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    margin-right: 11px;
    outline: none;
    height: 40px;" ><?php echo $_POST ['employee_department']; ?></p>

    <p for="tel" class="control-label" style="padding: 0; font-weight: bold;margin-left: 70%; margin-top: -41%; ">Phone Number</p>

                <p style="
            width: 20%;
            margin-bottom: 5px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 70%;"> <?php echo $_POST ['employee_telephone']; ?></p>

    <p for="date" class="control-label" style="padding: 0; font-weight: bold;margin-left: 70%;">Date of Application</p>

    <p style="
            width: 20%;
            margin-bottom: 5px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 70%;" ><?php echo $_POST ['filing_date']; ?></p>

    <p for="time" class="control-label" style="padding: 0; font-weight: bold;margin-left: 70%;">Time of Application</p>

    <p style="
            width: 20%;
            margin-bottom: 5px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 70%;"> <?php echo $_POST ['filing_time']; ?></p>

            <div style=" width: 100%; background-color: #000000; height: 3px; margin-top: 75px"></div>

    <p for="claim_date" class="control-label" style="padding: 0; font-weight: bold;margin-top: 10px">Date of Claim</p>

   <p style="
            width: 20%;
            margin-bottom: 5px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
           "> <?php echo $_POST ['claiming_date']; ?></p>

    <p for="desc"  style=" margin-top: 15px; padding: 0; font-weight: bold;">Description</p>

    <p style="
            width: 20%;
            margin-bottom: 5px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            "> <?php echo $_POST ['describe']; ?> </p>

    <p for="category"  style=" margin-top: 15px; padding: 0; font-weight: bold;">Category</p>

   <p style="
            width: 20%;
            margin-bottom: 5px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            "> <?php echo $_POST ['claim_category']; ?></p>

            <p for="payout"  style=" ; padding: 0; font-weight: bold; margin-left: 70%; margin-top: -25%;">Expected Payout</p>

   <p style="
            width: 40%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            margin-left: 70%;" > <?php echo $_POST ['exp_payout']; ?></p>


            <div style=" width: 100%; background-color: #000000; height: 3px; margin-top:15%;"></div>



    <p for="username"  style=" ; padding: 0; font-weight: bold;">Attach Receipt</p>



    <div style=" width: 100%; background-color: #000000; height: 3px; margin-top:3%;"></div>

    <p>Submit to:</p>
    <p style="margin-top: 20px;">Head of department</p>
    <div style=" width: 30%; background-color: #000000; height: 3px;margin-top: 20px;"></div>

    <p style="margin-top: 20px;"> Chief Financial Officer</p>
    <div style=" width: 30%; background-color: #000000; height: 3px;margin-top: 20px;"></div>

    <p style="margin-top: 20px;"> General Manager</p>


    <div style=" width: 30%; background-color: #000000; height: 3px;margin-top: 20px;"></div>


</div>





