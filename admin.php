<?php
  $page_title = 'Admin Home Page';
  require_once('includes/load.php');

?>
<?php
 $c_categories    = count_by_id('categories');
$c_claims    = count_by_id('claims');
 $c_user          = count_by_id('users');
 $c_departments    = count_by_id('departments');
$c_messages   = count_by_id('messages');
$c_approved = count_by_id('cfo_claims');
$c_denied = count_by_id('denied_claims');


?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-6">
     <?php echo display_msg($msg); ?>
   </div>
</div>

    <div class="row_5">
        <a href="users.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">

                    <div class="panel-icon pull-left bg-secondary1">
                        <i class="glyphicon glyphicon-user" style="height: 100px"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_user['total']; ?> </h2>
                        <p class="text-muted">Employees</p>
                    </div>
                </div>
            </div>
        </a>



        <a href="received_claims.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">

                    <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-envelope" style="height: 100px"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_claims['total']; ?> </h2>
                        <p class="text-muted">Received claims</p>
                    </div>

                </div>

            </div>
        </a>

        <a href="departments.php" style="color:black;">
            <div class="col-md-3">

                <div class="panel panel-box clearfix">

                    <div class="panel-icon pull-left bg-blue2">
                        <i class="glyphicon glyphicon-th-large" style="height: 100px"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_departments['total']; ?> </h2>
                        <p class="text-muted">Departments</p>
                    </div>

                </div>

            </div>
        </a>

        <a href="approved.php" style="color:black;">
            <div class="col-md-3">

                <div class="panel panel-box clearfix">

                    <div class="panel-icon pull-left bg-green">
                        <i class="glyphicon glyphicon-ok" style="height: 100px"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_approved['total']; ?></h2>
                        <p class="text-muted">Approved claims</p>
                    </div>

                </div>

            </div>
        </a>

    </div>

<div class="row_6">
    <a href="claims_history.php" style="color:black;">
        <div class="col-md-3">
            <div class="panel panel-box clearfix">

                <div class="panel-icon pull-left bg-secondary1">
                    <i class="glyphicon glyphicon-time" style="height: 100px"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php  echo $c_claims['total']; ?> </h2>
                    <p class="text-muted">Claims History</p>
                </div>
            </div>
        </div>
    </a>


    <a href="denied_claims.php" style="color:black;">
    <div class="col-md-3">

            <div class="panel panel-box clearfix">

                <div class="panel-icon pull-left bg-red">
                    <i class="glyphicon glyphicon-remove" style="height: 100px"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php  echo $c_denied['total']; ?> </h2>
                    <p class="text-muted">Denied Claims</p>
                </div>

            </div>

        </div>
    </a>

    <a href="search.php" style="color:black;">
        <div class="col-md-3">

            <div class="panel panel-box clearfix">

                <div class="panel-icon pull-left bg-blue2">
                    <i class="glyphicon glyphicon-tasks" style="height: 100px"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="glyphicon glyphicon-search"></h2>
                    <p class="text-muted">Search</p>
                </div>

            </div>

        </div>
    </a>

    <a href="inbox.php" style="color:black;">
        <div class="col-md-3">

            <div class="panel panel-box clearfix">

                <div class="panel-icon pull-left bg-green">
                    <i class="glyphicon glyphicon-inbox" style="height: 100px"></i>
                </div>
                <div class="panel-value pull-right">
                    <h2 class="margin-top"> <?php  echo $c_messages['total']; ?></h2>
                    <p class="text-muted">Inbox</p>
                </div>

            </div>

        </div>
    </a>
</div>



<?php include_once('layouts/footer.php'); ?>
