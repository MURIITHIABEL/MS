<?php
$page_title = 'All sale';
require_once('includes/load.php');
// Checkin What level user has permission to view this page

?>
<?php

$all_claims = find_all('claims');
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
                    <span>Search</span>
                </strong>
            </div>
            <form method="post" style="margin-top: 15px;">
                <label>Search</label>
                <input type="text" name="search" placeholder="Enter Employee Id" style=" border-radius: 10px; width: 300px;height: 30px;">
                <input type="submit" name="submit" style="background: rgba(220,131,24,0.94); width: 150px; border-radius: 10px;color: white">
            </form>

            <?php

            $con = new PDO("mysql:host=localhost;dbname=inventory_system",'root','');

            if (isset($_POST["submit"])) {
                $str = $_POST["search"];
                $sth = $con->prepare("SELECT * FROM `claims` WHERE emp_id = '$str'");

                $sth->setFetchMode(PDO:: FETCH_OBJ);
                $sth -> execute();

                if($row = $sth->fetch())
                {
                    ?>

                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Claims</th>
                            <th>Employee_id</th>
                            <th>Employee Name</th>
                            <th class="text-center" style="width: 100px;">Date Received</th>
                            <th>Actions</th>
                        </tr>



                        <tr>
                            <td class="text-center"><?php echo count_id();?></td>
                            <td>
                                <span class="label label-success"><?php echo "Claim"; ?></span>
                            </td>
                            <td><?php echo $row->emp_id; ?></td>
                            <td><?php echo $row->emp_name;?></td>
                            <td><?php echo $row->dates;?></td>
                            <td>
                                <a href="view_claim.php?id= <?php echo (int) $claim['id'];?>">
                                    <span class="btn btn-primary"><?php echo "View"; ?></span>
                                </a>
                            </td>
                        </tr>

                    </table>
                    <?php
                }


                else{
                    echo "Employee ID Does not exist";
                }


            }

            ?>

        </div>
    </div>
</div>

<?php include_once('layouts/footer.php'); ?>
