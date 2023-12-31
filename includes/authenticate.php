<?php $user = current_user(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
            echo remove_junk($page_title);
        elseif(!empty($user))
            echo ucfirst($user['name']);
        ;?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
</head>
<body>


    <div class="sidebar" style="background: #362b2b">
        <?php if($user['user_level'] === '1'): ?>
            <!-- admin menu -->
            <?php include_once('admin_menu.php');?>

        <?php elseif($user['user_level'] === '2'): ?>
            <!-- Special user -->
            <?php include_once('special_menu.php');?>

        <?php elseif($user['user_level'] === '3'): ?>
            <!-- User menu -->
            <?php include_once('user_menu.php');?>

        <?php elseif($user['user_level'] === '4'): ?>
            <!-- User menu -->
            <?php include_once('manager_menu.php');?>

        <?php endif;?>



        <?php if($user['user_level'] === '1'): ?>
            <!-- admin menu -->
            <?php redirect('admin.php');?>

        <?php elseif($user['user_level'] === '2'): ?>
            <!-- Special user -->
            <?php redirect('cfo.php');?>

        <?php elseif($user['user_level'] === '3'): ?>
            <!-- User menu -->
            <?php redirect('employee.php');?>

        <?php elseif($user['user_level'] === '4'): ?>
            <!-- User menu -->
            <?php redirect('manager.php');?>

        <?php endif;?>

    </div>



