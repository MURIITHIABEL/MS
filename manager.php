<?php
$page_title = 'Manager Page';
require_once('includes/load.php');
?>
<?php include_once('layouts/header.php');
?>

<?php

$c_received   = count_by_id('cfo_approved');
$c_messages    = count_by_id('manager_messages');
$c_approved          = count_by_id('manager_approved');
$c_denied          = count_by_id('manager_denied');
?>

<?php include_once('layouts/header.php');
?>

    <div class="row_5">

        <a href="manager_received_claims.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">
                    <div class="panel-icon pull-left bg-secondary1">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_received['total']; ?> </h2>
                        <p class="text-muted">Received Claims</p>
                    </div>
                </div>
            </div>
        </a>


        <a href="manager_approved_claims.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">
                    <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-ok"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_approved['total']; ?> </h2>
                        <p class="text-muted">Approved claims</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="manager_denied_claims.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">
                    <div class="panel-icon pull-left bg-blue2">
                        <i class="glyphicon glyphicon-remove"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_denied['total']; ?> </h2>
                        <p class="text-muted">Denied claims</p>
                    </div>
                </div>
            </div>
        </a>


        <a href="manager_inbox.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">
                    <div class="panel-icon pull-left bg-green">
                        <i class="glyphicon glyphicon-inbox"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_messages['total']; ?></h2>
                        <p class="text-muted">inbox</p>
                    </div>
                </div>
            </div>
        </a>

    </div>

<?php include_once('layouts/footer.php'); ?>



<?php include_once('layouts/footer.php'); ?>