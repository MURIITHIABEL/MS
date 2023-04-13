<?php
$page_title = 'All approved';
require_once('includes/load.php');

$all_claims = find_all('cfo_claims');

?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
    <div class="col-md-6">
        <?php echo display_msg($msg); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>Approved Claims</span>
                </strong>

            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th> Claims</th>
                        <th style="width: 100px">Employee ID</th>
                        <th>Employee Name</th>
                        <th class="text-center" style="width: 15%;"> Status</th>
                        <th class="text-center" style="width: 100px;"> Approval Date </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_claims as $cat) :?>
                        <tr>
                            <td class="text-center"><?php echo count_id();?></td>
                            <td class="text-center">
                                <span class="label label-success"><?php echo "Claim"; ?></span>
                            </td>
                            <td><?php echo remove_junk($cat['emp_id']); ?></td>
                            <td><?php echo $cat['emp_name']; ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <span class="glyphicon glyphicon-ok" ></span>
                                </div>
                            </td>
                            <td class="text-center"><?php echo $cat['dates']; ?></td>
                        </tr>
                    <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php'); ?>
