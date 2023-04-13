<body background="rocks.jpg">
<?php
  $page_title = 'Add User';
  require_once('includes/load.php');


  $groups = find_all('user_groups');
?>
<?php
  if(isset($_POST['add_user'])){

   $req_fields = array('full-name','employee_id','password','level' );
   validate_fields($req_fields);

   if(empty($errors)){
           $name   = remove_junk($db->escape($_POST['full-name']));
       $employee_id   = remove_junk($db->escape($_POST['employee_id']));
       $password   = remove_junk($db->escape($_POST['password']));
       $user_level = (int)$db->escape($_POST['level']);
       $password = sha1($password);
        $query = "INSERT INTO users (";
        $query .="name,employee_id,password,user_level,status";
        $query .=") VALUES (";
        $query .=" '{$name}', '{$employee_id}', '{$password}', '{$user_level}','1'";
        $query .=")";

        if($db->query($query)){
          //success
          $session->msg('s',"User account has  successfully been created! ");
        } else {
          //failed
          $session->msg('d',' Sorry failed to create account!');
        }
   } else {
     $session->msg("d", $errors);
   }
      redirect('add_user.php', false);
  }
?>


  <div class="row" style=
  "box-sizing: border-box;width: 380px;height: 550px;background: #ffffff;
   color: #dc8318;
   top: 30%;
   left: 50%;
   position: absolute;
   transform: translate(-50%,-50px);
   border-radius: 10%;
   padding:  70px 30px;">

      <img src="vatar.png" class="avatar" style=
      "width: 110px;
   height: 110px;
   border-radius: 50%;
   position: absolute;
   top:-50px;
right: 130px;">

      <?php echo display_msg($msg); ?>
          <h1 style="padding: 0 0 25px; margin: 0; text-align: center; font-size: 30px">Registration!</h1>

          <form method="post" action="add_user.php">

                <label for="name" style="margin: 0; padding: 0; font-weight: bold;">Name</label>
                <input type="text" class="form-control" name="full-name" placeholder="Full Name" style="
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">


                <label for="username" style="margin: 0; padding: 0; font-weight: bold;">Employee_id</label>
              <label>
                  <input type="text" class="form-control" name="employee_id" placeholder="Employee_id" style="
              width: 100%;
              margin-bottom: 20px;
              border: none;
              border-bottom: 1px solid #fff;
              background: transparent;
              outline: none;
              height: 40px;">
              </label>


              <label for="password" style="margin: 0; padding: 0; font-weight: bold;">Password</label>
                <input type="password" class="form-control" name ="password"  placeholder="Password" style="
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">


              <label for="level" style="margin: 0; padding: 0; font-weight: bold;">User Role</label>
                <select class="form-control" name="level" style="
            width: 100%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;">
                  <?php foreach ($groups as $group ):?>
                   <option value="<?php echo $group['group_level'];?>"><?php echo ucwords($group['group_name']);?></option>
                <?php endforeach;?>
                </select>


              <button type="submit" name="add_user" class="btn btn-primary" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 100%;">Register</button>

        </form>
      <a href="index_2.php">
      <button type="button" name="back" class="btn btn-primary" style="border-radius:20px;
            border: none;
            outline: none;
            height: 40px;
            background: #dc8318;
            width: 100%;">Back to login!</button>
      </a>
  </div>




</body>
