<?php
session_start();

include('conn.php');

if(isset($_GET['edit'])){

    $editpost = $_GET['edit'];
    $postcont = $_POST['post_cont'];
    $postimg = $_FILES['postimage']['name'];
    $postimgtmpname = $_FILES['postimage']['tmp_name'];
 
     
    }
             

    if($postcont == ''|| $postimg == ''){
        
        echo '<script type="text/javascript">alert("You have do nothing on Your Post Or Your fild is banks")</script>';
        echo '<script type="text/javascript">window.open("../home/admin.php","_self")</script>';



     }else{
         move_uploaded_file($postimgtmpname,'../postImg/'.$postimg);

         mysqli_query($conn,"UPDATE post_info SET post_cont = '$postcont',post_img ='$postimg' WHERE post_id = '$editpost'");

         echo '<script type="text/javascript">alert("Your post have been Updated")</script>';
         
         echo '<script type="text/javascript">window.open("../home/admin.php","_self")</script>';
     };
 


    

?>