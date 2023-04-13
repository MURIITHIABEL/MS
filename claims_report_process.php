<?php
$page_title = 'claims history';
require_once('includes/load.php');
?>
<?php

$all_claims = find_all('cfo_approved')
?>
<?php include_once('layouts/header.php'); ?>

<?php

?>
<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <div class="panel panel-default" style="width: 1000px">
            <div class="panel-heading">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Report</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Claims</th>
                        <th style="width: 100px">Employee ID</th>
                        <th>Employee Name</th>
                        <th class="text-center" style="width: 100px;">Date</th>
                        <th class="text-center" style="width: 100px;">Claim Amount in Kshs</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_claims as $claims):?>
                        <tr>
                            <td class="text-center"><?php echo count_id();?></td>
                            <td>
                                <span class="label label-success"><?php echo "Claim"; ?></span>
                            </td>
                            <td><?php echo remove_junk(ucfirst($claims['emp_id'])); ?></td>
                            <td><?php echo $claims['emp_name']; ?></td>
                            <td class="text-center"><?php echo $claims['dates']; ?></td>
                            <td class="text-center"><?php echo $claims['payout']; ?></td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php'); ?>

