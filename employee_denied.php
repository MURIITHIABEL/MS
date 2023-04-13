<?php
$page_title = 'All claims';
require_once('includes/load.php');


$all_claims = find_all('manager_denied');
$all_claims_2 = find_all('denied_claims');
$all_claims_3 = find_all('cfo_denied');

?>

<?php include_once('layouts/header.php'); ?>

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
                    <span>Declined Claims</span>
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
                        <th class="text-center" style="width: 100px;">Date denied</th>
                        <th class="text-center">Status</th>
                        <th>Actions</th>




                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_claims as $claims):?>
                        <tr>
                            <td class="text-center"><?php echo $claims['id'];?></td>
                            <td>
                                <span class="label label-success"><?php echo "Claim"; ?></span>
                            </td>
                            <td><?php echo remove_junk(ucfirst($claims['emp_id'])); ?></td>
                            <td><?php echo $claims['emp_name']; ?></td>
                            <td class="text-center"><?php echo $claims['dates']; ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <span class="glyphicon glyphicon-remove" ></span>
                                </div>
                            </td>
                            <td>
                                <a href="manager_view_3.php?id= <?php echo $claims['id'];?>">
                                    <span class="btn btn-primary"><?php echo "View"; ?></span>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                    <?php foreach ($all_claims_2 as $claims):?>
                        <tr>
                            <td class="text-center"><?php echo $claims['id'];?></td>
                            <td>
                                <span class="label label-success"><?php echo "Claim"; ?></span>
                            </td>
                            <td><?php echo remove_junk(ucfirst($claims['emp_id'])); ?></td>
                            <td><?php echo $claims['emp_name']; ?></td>
                            <td class="text-center"><?php echo $claims['dates']; ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <span class="glyphicon glyphicon-remove" ></span>
                                </div>
                            </td>
                            <td>
                                <a href="manager_view_3.php?id= <?php echo $claims['id'];?>">
                                    <span class="btn btn-primary"><?php echo "View"; ?></span>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    <?php foreach ($all_claims_3 as $claims):?>
                        <tr>
                            <td class="text-center"><?php echo $claims['id'];?></td>
                            <td>
                                <span class="label label-success"><?php echo "Claim"; ?></span>
                            </td>
                            <td><?php echo remove_junk(ucfirst($claims['emp_id'])); ?></td>
                            <td><?php echo $claims['emp_name']; ?></td>
                            <td class="text-center"><?php echo $claims['dates']; ?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <span class="glyphicon glyphicon-remove" ></span>
                                </div>
                            </td>
                            <td>
                                <a href="manager_view_3.php?id= <?php echo $claims['id'];?>">
                                    <span class="btn btn-primary"><?php echo "View"; ?></span>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php'); ?>

