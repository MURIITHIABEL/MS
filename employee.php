<?php
$page_title = 'Home Page';
require_once('includes/load.php');

?>
<?php $user = current_user(); ?>

<?php

$c_text   = count_by_id('my_text');
$c_claims    = count_by_id('claims');
$c_sale          = count_by_id('sales');
$c_user          = count_by_id('users');
?>

<?php include_once('layouts/header.php');
?>

<div class="row_5">

    <a href="claim_status.php?id=<?php echo (int)$user['id'];?>" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-secondary1">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php  echo $c_claims['total']; ?> </h2>
                    <p class="text-muted">Claim Status</p>
                </div>
            </div>
        </div>
    </a>


    <a href="file_claim.php" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-red">
                    <i class="glyphicon glyphicon-th-large"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="glyphicon glyphicon-list-alt"></h2>
                    <p class="text-muted">File claim</p>
                </div>
            </div>
        </div>
    </a>


    <a href="employee_history.php" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-blue2">
                    <i class="glyphicon glyphicon-time"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php  echo $c_claims ['total']; ?> </h2>
                    <p class="text-muted">Claims History</p>
                </div>
            </div>
        </div>
    </a>


    <a href="my_inbox.php" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">
                <div class="panel-icon pull-left bg-green">
                    <i class="glyphicon glyphicon-inbox"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php  echo $c_text['total']; ?></h2>
                    <p class="text-muted">Inbox</p>
                </div>
            </div>
        </div>

    </a>


</div>

<?php include_once('layouts/footer.php'); ?>

