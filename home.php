<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
?>

<?php
$c_categorie    = count_by_id('categories');
$c_product       = count_by_id('products');
$c_sale          = count_by_id('sales');
$c_user          = count_by_id('users');

?>

<?php include_once('layouts/header.php');
?>

    <div class="row_5">

        <a href="users.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">
                    <div class="panel-icon pull-left bg-secondary1">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_user['total']; ?> </h2>
                        <p class="text-muted">Claim Status</p>
                    </div>
                </div>
            </div>
        </a>


        <a href="received_claims.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">
                    <div class="panel-icon pull-left bg-red">
                        <i class="glyphicon glyphicon-th-large"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_categorie['total']; ?> </h2>
                        <p class="text-muted">File claim</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="users.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">
                    <div class="panel-icon pull-left bg-blue2">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_product['total']; ?> </h2>
                        <p class="text-muted">Claims History</p>
                    </div>
                </div>
            </div>
        </a>


        <a href="users.php" style="color:black;">
            <div class="col-md-3">
                <div class="panel panel-box clearfix">
                    <div class="panel-icon pull-left bg-green">
                        <i class="glyphicon glyphicon-usd"></i>
                    </div>
                    <div class="panel-value pull-right">
                        <h2 class="margin-top"> <?php  echo $c_sale['total']; ?></h2>
                        <p class="text-muted">overtime</p>
                    </div>
                </div>
            </div>
        </a>

    </div>

    <?php include_once('layouts/footer.php'); ?>
