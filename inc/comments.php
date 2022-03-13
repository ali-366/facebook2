<?php

session_start();

include('conn.php');
      
       $Totall_name = $_SESSION['first_name'].' '.$_SESSION['last_name'];
       $user_img = $_SESSION['pic_name'];
       $postdate = date('F,d,Y g:m a');
       $comment = $_POST['user_comm'];
       $post_id = $_POST['postid'];


     if($comment){

        mysqli_query($conn,"INSERT INTO comm_info(user_name,user_img,comm_date,comments,post_id) VALUES('$Totall_name','$user_img','$postdate','$comment','$post_id')");

        header('location: ../home/admin.php?result = u_have_create_a_comments');

     }else{
        header('location: ../home/admin.php');
     }



?>