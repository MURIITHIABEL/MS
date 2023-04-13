<?php
require_once('includes/load.php');
$page_title = 'denied';

?>
<?php include_once('layouts/header.php'); ?>

<div  class="box" style=
"box-sizing: border-box;width: 900px;height: 300px;background: #ffffff;
   color: #dc8318;
   top: 5%;
   left: 12%;

   border-radius: 5%;
   padding:  70px 50px;
   position: center">

    <h1 style="padding: -20px 0 20px; text-align: left; font-size: 40px; margin-top: -20px; color: red" >Claim Denied!</h1>

    <div style=" width: 100%; background-color: #000000; height: 3px;margin-top: 20px;"></div>


    <a href="cfo_contact.php">
        <button type="button"  name="add_message" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 200px;
            margin-top: 100px;
            margin-left:100px">Message Employee</button> </a>

    <a href="cfo.php">
        <button type="button"  name="add_message" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 200px;
            margin-top: 100px;
            margin-left:150px">Back</button></a>



</div>
<?php include_once('layouts/footer.php'); ?>

