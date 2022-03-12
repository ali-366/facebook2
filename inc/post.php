<?php
session_start();

include('conn.php');
      
      $Totall_name = $_SESSION['first_name'].' '.$_SESSION['last_name'];
      $user_img = $_SESSION['pic_name'];
      $postdate = date('F,d,Y g:m a');

     $postcont = $_POST['post_cont'];
     $postimg = $_FILES['postimage']['name'];
             $postimgtmpname = $_FILES['postimage']['tmp_name'];

             move_uploaded_file($postimgtmpname,'../postImg/'.$postimg);


             

           if($postcont || $postimg){

            mysqli_query($conn,"INSERT INTO post_info(name,user_image,date,post_cont,post_img)VALUES('$Totall_name','$user_img','$postdate','$postcont','$postimg')");

            header('location: ../home/admin.php');

           }else{
            header('location: ../home/admin.php?result = khali3');

               echo 'Create a post';
           };
 


    

?>