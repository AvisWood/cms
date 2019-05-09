<?php
if(isset($_GET['edit_user'])){
    $the_user_id = $_GET['edit_users'];
}

if(isset($_POST['edit_user'])) {



  $user_firstname = $_POST['user_firstname'];
  $user_lastname = $_POST['user_lastname'];
  $user_role = $_POST['user_role'];

//  $post_image = $_FILES['image']['name'];
//  $post_image_temp = $_FILES['image']['tmp_name'];


  $username = $_POST['username'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];
//  $post_date = date('m-d-y');

//  move_uploaded_file($post_image_temp, "../images/$post_image");
//

  $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) VALUES ('{$user_firstname}', '{$user_lastname}', '{$user_role}', '{$username}', '{$user_email}', '{$user_password}')";

  $create_user_query = mysqli_query($connection, $query);



}
?>
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="user_firstname">First Name</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="user_lastname">Last Name</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>

    <div class="form-group">
        <select name="user_role" id="">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div>



    <!--  <div class="form-group">-->
    <!--    <label for="post_image">Post Image</label>-->
    <!--    <input type="file" name="post_image">-->
    <!--  </div>-->

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="form-group">
        <label for="user_email">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>

    <div class="form-group">
        <label for="user_password">Password</label>
        <input type="text" class="form-control" name="user_password">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Edit User">
    </div>
</form>

<!--<div class="form-group">-->
<!--    <select name="user_role" id="">-->
<!--      --><?php
//
//      $query = "SELECT * FROM users";
//      $select_users = mysqli_query($connection, $query);
//
//
//      while($row = mysqli_fetch_assoc($select_users)) {
//        $user_id = $row['user_id'];
//        $user_role = $row['user_role'];
//
//        echo "<option value='{$user_id}'>{$user_role}</option>";
//
//      }
//
//
//      ?>
<!--    </select>-->
<!--</div>-->