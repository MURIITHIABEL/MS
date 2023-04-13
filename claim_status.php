<?php
$page_title = 'All categories';
require_once('includes/load.php');


$all_claims = find_all('claims');
$user= current_user();
$claim = find_by_id('claims',(int)$_GET['id']);
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
                    <span>Claims Status</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Claim</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" style="width: 100px;">Date Filed</th>
                        <th class="text-center" style="width: 100px;">Time Filed</th>
                        <th class="text-center" style="width: 100px;">Actions</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($all_claims as $clm) : ?>
                        <tr>
                            <td class="text-center"><?php echo count_id();?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td class="text-center">
                                <p class="label label-success"><?php echo "Confirmed"; ?></p>
                            </td>


                            <td class="text-center"><?php echo $clm['dates']; ?></td>
                            <td class="text-center"><?php echo $clm['time']; ?></td>
                            <td>
                                <a href="employee_view_claim.php?id= <?php echo (int) $clm['id'];?>">
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

