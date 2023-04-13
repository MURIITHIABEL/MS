<?php
$page_title = 'All texts';
require_once('includes/load.php');
$all_messo= find_all("my_text")
?>
<?php


?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>My Inbox</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Sender</th>
                        <th class="text-center" style="width: 15%;">Date</th>
                        <th class="text-center" style="width: 15%;">Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($all_messo as $cat):?>
                        <tr>
                            <td class="text-center"><?php echo count_id();?></td>

                            <td>
                                <?php echo $cat['sender']; ?>
                                <span class="glyphicon glyphicon-envelope" style="color: #dc8318;"></span>
                            </td>
                            <td class="text-center"><?php echo remove_junk(ucwords($cat['date']))?></td>
                            <td>
                                <a href="view_message.php?id= <?php echo (int) $cat['id'];?>">
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

