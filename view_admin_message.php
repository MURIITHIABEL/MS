<?php
$page_title = 'view_messages';
require_once('includes/load.php');

$mess = find_by_id('messages',(int)$_GET['id']);
?>
<?php include_once('layouts/header.php'); ?>

<?php echo display_msg($msg); ?>
<div  class="box" style=
"box-sizing: border-box;width: 900px;height: 420px;background: #ffffff;
   color: #dc8318;
   top: 5%;
   left: 12%;

   border-radius: 5%;
   padding:  70px 50px;
   position: center">

    <h1 style="padding: -20px 0 20px; text-align: left; font-size: 30px; margin-top: -20px;" >Message</h1>

    <div style=" width: 100%; background-color: #000000; height: 3px;margin-top: 20px;"></div>

    <form method="post" action="view_admin_message.php?id=<?php echo (int)$mess['id']; ?>">
        <p for="name" class="control-label" style="  padding: 0; font-weight: bold; margin-top: 5px;">From:</p>

        <input type="text" class="form-control" name="sender_name" value="<?php echo remove_junk($mess['emp_name']); ?>" style="
                width: 50%;
                margin-bottom: 10px;
                margin-top: 30px;
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 20px;
                ">

        <p for="name" class="control-label" style="  padding: 0; font-weight: bold; margin-top: 5px;">Message</p>

        <input type="text" class="form-control" name="sender_message" value="<?php echo remove_junk($mess['emp_message']); ?>" style="
                width: 100%;
                margin-bottom: 20px;
                margin-top: 1px;
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 80px;
                ">

    </form>


</div>
<?php include_once('layouts/footer.php'); ?>
