<?php include_once('includes/load.php'); ?>

<?php
$req_fields = array('employee_id','password' );
validate_fields($req_fields);
$employee_id = remove_junk($_POST['employee_id']);
$password = remove_junk($_POST['password']);



if(empty($errors)){
    $user = authenticate_v2($employee_id, $password);

    if($user):
        //create session with id
        $session->login($user['id']);
        //Update Sign in time
        updateLastLogIn($user['id']);
        // redirect user to group home page by user level
        if($user['user_level'] === '1'):
            $session->msg("s", "Hello ".$user['employee_id'].", .");
            redirect('admin.php',false);
        elseif ($user['user_level'] === '3'):
            $session->msg("s", "Hello ".$user['employee_id'].", .");
            redirect('employee.php',false);
        elseif ($user['user_level'] === '2'):
            $session->msg("s", "Hello ".$user['employee_id'].", .");
            redirect('cfo.php',false);
        elseif ($user['user_level'] === '4'):
            $session->msg("s", "Hello ".$user['employee_id'].", .");
            redirect('manager.php',false);
        else:
            $session->msg("s", "Hello ".$user['employee_id'].".");
            redirect('home.php',false);
        endif;

    else:
        $session->msg("d", "Sorry Username/Password incorrect.");
        redirect('index.php',false);
    endif;

} else {

    $session->msg("d", $errors);
    redirect('index.php',false);
}
?>
