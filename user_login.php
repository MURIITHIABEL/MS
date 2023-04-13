<?php include_once('includes/load.php'); ?>
<?php
$req_fields = array('employee_id','password' );
validate_fields($req_fields);
$employee_id = remove_junk($_POST['employee_id']);
$password = remove_junk($_POST['password']);


if(empty($errors)){
    $user_id = authenticate($employee_id, $password);
    if($user_id){
        $session->login($user_id);

        updateLastLogIn($user_id);
        $session->msg("s", "Welcome to Claim Management System");
        redirect('employee.php',false);


    } else {
        $session->msg("d", "Sorry Username/Password incorrect.");
        redirect('index_2.php',false);
    }

} else {
    $session->msg("d", $errors);
    redirect('index.php',false);
}
?>

