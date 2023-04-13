<?php
  $page_title = 'All departments';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page


$all_departments = find_all('departments')
?>
<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <strong>
                <span class="glyphicon glyphicon-th"></span>
                <span>All Departments</span>
            </strong>

        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th> Departments </th>


              </tr>
            </thead>
            <tbody>
              <?php foreach ($all_departments as $dep):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                <td >
                  <?php echo $dep['dep_name']; ?></td>

              </tr>
             <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
