<!-- login.php -->

<?php

session_start();
include_once "connection.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)){
    //lets check users eneterd emial and password to database any table row email anmd password
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if(mysqli_num_rows($sql) > 0){  //if users credentials matched
      $row = mysqli_fetch_assoc($sql);
      $status = "Active now";
      //update user status to active
      $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
      if($sql2){
        $_SESSION['unique_id'] = $row['unique_id'];  //using this session we used user unique_id in other php file
        echo "success";
      }

    }else{
        echo "Email or password is incorrect";
    }
}else{
    echo "All inputs are required!";
}

?>


<!-- signup.php -->


<?php
// session_start();
include "connection.php";

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($name) && !empty($email) && !empty($password)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
       //lets check email is present in database or not
       $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
       if(mysqli_num_rows($sql) > 0){  //if email exists
           echo "This Email Already Exists!";
       }else{
           $time = time();
           $status = "Active Now";
          $random_id = rand(time(), 100000000);
          $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, username, email, password, status) VALUES
                            ({$random_id}, '{$name}', '{$email}', '{$password}', '{$status}')");
            if($sql2){  //if data is inserted 
               $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
               if(mysqli_num_rows($sql3) > 0){
                   $row = mysqli_fetch_assoc($sql3);
                   $_SESSION['unique_id'] = $row['unique_id']; 
                   echo "success";
               }
            }else{
                echo "something went wrong";
            }

       }
    }else{
        echo "$email - This is not a valid email";
    }
}else{
    echo "All inputs are required!";
}


?>


