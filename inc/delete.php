<?php


    include('conn.php');


    if(isset($_GET['del'])){

        $delpost_id = $_GET['del'];

        mysqli_query($conn,"DELETE FROM post_info WHERE post_id = '$delpost_id'");

        echo '<script type="text/javascript">alert("Your post has been deletes")</script>';

        echo '<script type="text/javascript">window.open("../home/admin.php","_self")</script>';

    }



?>