
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
    echo "unable".mysqli_connect_error();
}
$db=mysql_select_db("inventory_system");
if(!$db)
    echo "unable".mysql_error();
?>



<?php
if(isset($_POST['submit'])){
    $role = $_POST['user_level'];
    $employee_id = $_POST['employee_id'];
    $password = $_POST['password'];

    $query= " select * from users where employee_id = '$employee_id' and password ='$password' and user_level= '$role'";
    $result= mysqli_query($query);

    while ($row=mysqli_fetch_array($result)) {
        if ($row['employee_id'] == $employee_id && $row['password'] == $password && $row['user_level'] == '1') {
            header("Location:admin.php",  false);
        }
        if ($row['employee_id'] == $employee_id && $row['password'] == $password && $row['user_level'] == '2') {
            header("Location:cfo.php", false);
        }
        if ($row['employee_id'] == $employee_id && $row['password'] == $password && $row['user_level'] == '3') {
            header("Location:employee.php", false);
        }

        elseif ($row['employee_id'] == $employee_id && $row['password'] == $password && $row['user_level'] == '4') {
            header("Location:manager.php", false);


        }
    }
}
?>

