<?php
$page_title = 'cfo_messages';
require_once('includes/load.php');


?>
<?php include_once('layouts/header.php'); ?>

<?php
if(isset($_POST['send_message'])) {
    $req_fields = array('sender_level', 'sender_data',);
    validate_fields($req_fields);
    if (empty($errors)) {
        $s_level = remove_junk($db->escape($_POST['sender_level']));
        $s_data = remove_junk($db->escape($_POST['sender_data']));
        $date = make_date();

        $query = "INSERT INTO my_text (";
        $query .= " sender,message,date";
        $query .= ") VALUES (";
        $query .= " '{$s_level}','{$s_data}','{$date}'";
        $query .= ")";

        if ($db->query($query)) {
            $session->msg('s', "message sent");
            redirect('cfo_contact.php', false);
        } else {
            $session->msg('d', ' Sorry failed to added!');
            redirect('cfo.php', false);
        }

    }
}



?>
<?php echo display_msg($msg); ?>
<div  class="box" style=
"box-sizing: border-box;width: 900px;height: 480px;background: #ffffff;
   color: #dc8318;
   top: 5%;
   left: 12%;

   border-radius: 5%;
   padding:  70px 50px;
   position: center">

    <h1 style="padding: -20px 0 20px; text-align: left; font-size: 30px; margin-top: -20px;" >Write Message</h1>

    <div style=" width: 100%; background-color: #000000; height: 3px;margin-top: 20px;"></div>

    <form method="post" action="admin_contact.php">

        <p for="category"  style=" margin-top: 15px; padding: 0; font-weight: bold;">Level</p>

        <select id="category" style="
            width: 40%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;"  name="sender_level">
            <option value="Chief Financial Officer"> Chief Financial Officer</option>
        </select>
        <input type="text" class="form-control" name="sender_id" placeholder="Enter Employee Id" style="
                width: 50%;
                margin-top: 20px;
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 20px;
                margin-left: 70%;

                ">

        <input type="text" class="form-control" name="sender_name" placeholder="Enter Employee name" style="
                width: 50%;
                margin-bottom: 20px;
                margin-top: -20px;
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 20px;
                ">

        <input type="text" class="form-control" name="sender_data" placeholder="Write a message..." style="
                width: 100%;
                margin-bottom: 20px;
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 80px;
                ">
        <button type="submit"  name="send_message" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 50%;
            margin-top: 60px;
            margin-left:150px">Send</button>
    </form>


</div>
<?php include_once('layouts/footer.php'); ?>
