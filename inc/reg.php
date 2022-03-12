<?php
        include('conn.php');
  

            $FirstName =  $_POST['f_name'];
            $Last_Name =  $_POST['l_name'];
            $Email =  $_POST['email'];
            $Password =  md5($_POST['password']);

                          $repass = md5($_POST['rePass']);

            $Birth_day = $_POST['day'].'/'.$_POST['month'].'/'.$_POST['year'];

                            
                            $day = $_POST['day'];
                            $month = $_POST['month'];
                            $year = $_POST['year'];


             $pname = $_FILES['pro_pic']['name'];
                            $ptmp_name = $_FILES['pro_pic']['tmp_name'];
             $gender =  $_POST['gender'];
       
            move_uploaded_file($ptmp_name,'../profile/'.$pname);
            
             $user_emaill = mysqli_query($conn,"SELECT * FROM user_info WHERE ur_email = '$Email'");

             $email_num = mysqli_num_rows($user_emaill);
            

            if($FirstName && $Last_Name && $Email && $Password && $Birth_day && $pname && $gender){

                    if($Password == $repass ){

                        if($email_num >= 1){
                            
                                header('location: ../index.php?ruselt=email_is_alreay_used');
                             
                              
                        }else{
                                mysqli_query($conn,"INSERT INTO user_info(ur_first_name,ur_last_name,ur_email,ur_password,  ur_birthday,ur_pro_pic_name,ur_gender) VALUES('$FirstName','$Last_Name','$Email',        '$Password','$Birth_day','$pname','$gender')");
                             header('location: ../index.php');
                        }
                        

                    }else{
                        echo 'Please Cheek password ';
                        header('location: ../index.php?ruselt=Password_not_mach');
                    }

                
            }else{
        
                header('location: ../index.php?ruselt=input_blank');
            }
            
            
   

        



?>