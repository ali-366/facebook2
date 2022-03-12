<?php
    session_start();

        include('conn.php');

    
    $uemail = $_POST['u_email'];
    $upass = md5($_POST['u_password']);

    $user_login = mysqli_query($conn ,"SELECT * FROM user_info WHERE ur_email  = '$uemail' AND ur_password = '$upass'");

    $user_num = mysqli_num_rows($user_login);

    $user_tokra = mysqli_fetch_array($user_login);

    

    if($user_num == 1){
        $_SESSION['first_name'] = $user_tokra['ur_first_name'];    
        $_SESSION['last_name'] = $user_tokra['ur_last_name'];
        $_SESSION['pic_name'] = $user_tokra['ur_pro_pic_name'];

        header('location:../home/admin.php');
    }else{
        header('location:../index.php?ruselt=Invalid Password or Email.');
    }




?>