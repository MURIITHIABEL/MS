<?php
$page_title = 'employee_messages';
require_once('includes/load.php');


?>
<?php include_once('layouts/header.php'); ?>

<?php
if(isset($_POST['add_message'])) {
    $req_fields = array('sender_id', 'sender_name', 'sender_message',);
    validate_fields($req_fields);
    if (empty($errors)) {
        $m_id = remove_junk($db->escape($_POST['sender_id']));
        $m_name = remove_junk($db->escape($_POST['sender_name']));
        $m_mess = remove_junk($db->escape($_POST['sender_message']));
        $date = make_date();

        $query = "INSERT INTO messages (";
        $query .= " emp_id,emp_name,emp_message,date";
        $query .= ") VALUES (";
        $query .= " '{$m_id}','{$m_name}','{$m_mess}','{$date}'";
        $query .= ")";

        if ($db->query($query)) {
            $session->msg('s', "message sent");
            redirect('employee_contact.php', false);
        } else {
            $session->msg('d', ' Sorry failed to added!');
            redirect('employee.php', false);
        }

    }
}



?>
<?php echo display_msg($msg); ?>
<div  class="box" style=
     "box-sizing: border-box;width: 900px;height: 420px;background: #ffffff;
   color: #dc8318;
   top: 5%;
   left: 12%;

   border-radius: 5%;
   padding:  70px 50px;
   position: center">

    <h1 style="padding: -20px 0 20px; text-align: left; font-size: 30px; margin-top: -20px;" >Write Message</h1>

    <div style=" width: 100%; background-color: #000000; height: 3px;margin-top: 20px;"></div>

    <form method="post" action="employee_contact.php">


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



        <input type="text" class="form-control" name="sender_message" placeholder="Write a message..." style="
                width: 100%;
                margin-bottom: 20px;
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 80px;
                ">
        <button type="submit"  name="add_message" class="btn btn-danger" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 50%;
            margin-top: 100px;
            margin-left:150px">Send</button>
    </form>


</div>
<?php include_once('layouts/footer.php'); ?>