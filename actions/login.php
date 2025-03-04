<?php

  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    
    // $pass_md5 = md5($pass);

    // $query = mysqli_query($db_conn,"SELECT * FROM `accounts` WHERE `email` = '$email' AND `password` = '$pass_md5'");

    // if(mysqli_num_rows($query) > 0)
    // {
    //   $user = mysqli_fetch_object($query);
    //   $_SESSION['login'] = true;
    //   $_SESSION['session_id'] = uniqid();
      
    //   $user_type = $user->type;
    //   $_SESSION['user_type'] = $user_type;
    //   $_SESSION['user_id'] = $user->id;
    //   header('Location: ../'.$user_type.'/dashboard.php');
    //   exit();
    // }
    // else 
       if ($email == 'admin@example.com' && $pass == '@123') {//username and password
      
      $_SESSION['login'] = true;
      header('Location: ../admin/dist/pages/dishboard.php');//login location
    }
    else {
      echo 'invalid user'; //invalid loction
    }
  }
  ?>