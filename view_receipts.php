<?php
require_once('includes/load.php');
$page_title = 'view_claim';

$claim = find_by_id('claims',(int)$_GET['id']);
$user = find_all('users')
?>

<?php include_once('layouts/header.php'); ?>


<form method="post" action="view_receipts.php?id=<?php echo (int)$claim['id']; ?>">


<img  id="file_upload" src="uploads/users/<?php echo $user['image'];?>" class="img-thumbnail"  style="
            width: 1000px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;

            outline: none;
            height: 1000px;" />
</form>

<?php include_once('layouts/footer.php'); ?>
