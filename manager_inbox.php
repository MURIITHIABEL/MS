<?php
$page_title = 'All manager messages';
require_once('includes/load.php');


$all_messages = find_all('manager_messages')
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
                    <span>Messages</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th class="text-center" style="width: 50px;">ID</th>
                        <th class="text-center">Message</th>
                        <th class="text-center" style="width: 100px;">Date</th>
                        <th class="text-center" style="width: 100px;">Actions</th>




                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_messages as $cat):?>
                        <tr>
                            <td class="text-center"><?php echo count_id();?></td>
                            <td> <?php echo $cat['emp_id']; ?></td>
                            <td>
                                <?php echo $cat['emp_name']; ?>
                                <span class="glyphicon glyphicon-envelope" style="color: #dc8318;"></span>
                            </td>
                            <td class="text-center"><?php echo remove_junk(ucwords($cat['date']))?></td>
                            <td>
                                <a href="view_admin_message.php?id= <?php echo (int) $cat['id'];?>">
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



