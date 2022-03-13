<?php

session_start();

  if(!isset($_SESSION['first_name'])){

  header('location: ../index.php');
  }

$full_name = $_SESSION['first_name'].' '.$_SESSION['last_name'];
$user_img = $_SESSION['pic_name'];

    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $full_name;?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="css/jquery.scrollable.css">
    <link rel="stylesheet" href="css/slick.css">

  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min2.css"> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- nav start -->
<nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand cta-btn" href="#">         
                <i class="fab fa-facebook-f"></i>
              </a>
               <form class="d-flex">
                <button class="btn btn-outline-success" type="submit">
                    <i class="fal fa-search"></i>
                  </button>
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 d-flex mid-link">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">
                        <i class="fas fa-home"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fal fa-tv"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"><i class="fal fa-users"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"><i class="fal fa-gamepad"></i></a>
                  </li>
                  
                </ul>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 right-link">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="fab fa-facebook-messenger"></i>
                        </a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fal fa-bell"></i>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fal fa-tv"></i>
                    </a>
                  </li>
                  <li class="">
            
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="../inc/logout.php">Log Out</a></li>
                          <li><a class="dropdown-item" href="#">Action2</a></li>
                          <li><a class="dropdown-item" href="#">Action3</a></li>
                          <li><a class="dropdown-item" href="#">Action4</a></li>
                          <li><a class="dropdown-item" href="#">Action5</a></li>
                          <li><a class="dropdown-item" href="#">Action6</a></li>
                          <li><a class="dropdown-item" href="#">Action7</a></li>
                          <li><a class="dropdown-item" href="#">Action8</a></li>
                          <li><a class="dropdown-item" href="#">Action9</a></li>
                          <li><a class="dropdown-item" href="#">Action10</a></li>
                          
                        </ul>
                      </div>
                 
                  
                  </li>

                </ul>
              </div>
            </div>
          </nav>
</nav>
<!-- nav end -->
<!-- main boody start -->
<section id="g-book">
        <div class="row">
            <div class="col-lg-3">
                <div class=" col-lg-12">
                  <div class="left-link box fixed-top">
                    <ul>
                        <li class="">
                            <a href="home.php" class="text-capitalize">
                                <img src="../profile/<?php echo $user_img; ?>" alt=""> 
                                <span><?php echo $full_name; ?></span> </a>
                        </li>

                        <li class="">
                            <a href="#" class="text-capitalize"><i class="fal fa-user-friends"></i><span>frinds</span> </a>
                        </li>
                        <li class="">
                            <a href="#" class="text-capitalize"><i class="fal fa-users"></i><span>group</span> </a>
                        </li>
                        <li class="">
                            <a href="#" class="text-capitalize"><i class="fal fa-tv"></i> <span>watch</span></a>
                        </li>
                        <li class="">
                            <a href="#" class="text-capitalize"><i class="fal fa-history"></i> <span>memorise</span></a>
                        </li>
                        <li class="">
                            <a href="#" class="text-capitalize"><i class="fal fa-bookmark"></i> <span>saves</span></a>
                        </li>
                        <li class="">
                            <a href="#" class="text-capitalize"><i class="fal fa-flag"></i> <span>pages</span></a>
                        </li>
                        <li class="">
                            <a href="#" class="text-capitalize"><i class="fal fa-calendar-alt"></i> <span>events</span></a>
                        </li>
                        <li class="">
                            <a href="#" class="text-capitalize"><i class="fal fa-user-clock"></i> <span>most resent</span></a>
                        </li>
                        <li class="">
                            <a href="#" class="text-capitalize"><i class="fal fa-angle-down"></i> <span>see more</span></a>
                        </li>
                        <li class="">
                          <a href="#" class="text-capitalize"><i class="fal fa-history"></i> <span>memorise</span></a>
                      </li>
                      <li class="">
                          <a href="#" class="text-capitalize"><i class="fal fa-bookmark"></i> <span>saves</span></a>
                      </li>
                      <li class="">
                          <a href="#" class="text-capitalize"><i class="fal fa-flag"></i> <span>pages</span></a>
                      </li>
                      <li class="">
                          <a href="#" class="text-capitalize"><i class="fal fa-calendar-alt"></i> <span>events</span></a>
                      </li>
                      <li class="">
                          <a href="#" class="text-capitalize"><i class="fal fa-user-clock"></i> <span>most resent</span></a>
                      </li>
                      <li class="">
                          <a href="#" class="text-capitalize"><i class="fal fa-angle-down"></i> <span>see more</span></a>
                      </li>
                       </ul>
                  </div>
                </div>     
            </div>
            <div class="col-lg-6">
              <div class="stories">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="own-story">
                      <img src="img/ga_img_1.jpg" class="img-fluid" alt="img">
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="pbl-story">
                      <div class="own-story">
                        <img src="img/ga_img_2.jpg" class="img-fluid" alt="img">
                        <div class="faceb-id">
                          <img src="img/team_m_4.jpg" alt="ga_img_1">
                          <h3 class="mb-0">md. Ali </h3>
                        </div>
                      </div>
                      <div class="own-story">
                        <img src="img/ga_img_2.jpg" class="img-fluid" alt="img">
                        <div class="faceb-id">
                          <img src="img/team_m_4.jpg" alt="ga_img_1">
                          <h3 class="mb-0"> Ali Hossian</h3>
                        </div>
                      </div>
                      <div class="own-story">
                        <img src="img/team_m_2.jpg" class="img-fluid" alt="img">
                        <div class="faceb-id">
                          <img src="img/team_m_1.jpg" alt="ga_img_1">
                          <h3 class="mb-0"> Hossian</h3>
                        </div>
                      </div>
                      <div class="own-story">
                        <img src="img/ga_img_4.jpg" class="img-fluid" alt="img">
                        <div class="faceb-id">
                          <img src="img/team_m_4.jpg" alt="ga_img_1">
                          <h3 class="mb-0">hm Ali </h3>
                        </div>
                      </div>
                      <div class="own-story">
                        <img src="img/ga_img_1.jpg" class="img-fluid" alt="img">
                        <div class="faceb-id">
                          <img src="img/team_m_4.jpg" alt="ga_img_1">
                          <h3 class="mb-0">md. Ali Hossian</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="post ">
                <div class="img">
                  <img src="../profile/<?php echo $user_img; ?>" class="img-fluid"  alt="img">
                </div>
                <button type="button" class="btn btn-text-area" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  What's on your mind'<?php echo $_SESSION['last_name'];?>?
                </button>
                <ul class=" mb-0 up_file d-flex">
                  <li>
                    <a href="#staticBackdrop"data-bs-toggle="modal" class="btn" data-bs-target="#staticBackdrop">
                      <i class="fa-solid fa-video"></i>
                      <span>Live Video</span></a>
                  </li>
                  <li>
                    <a href="#staticBackdrop"data-bs-toggle="modal" class="btn" data-bs-target="#staticBackdrop">
                      <i class="fa-solid fa-image"></i>
                    <span>Photos / Video</span>
                    </a>
                  </li>
                </li>
                <li>
                  <a href="#staticBackdrop"data-bs-toggle="modal" class="btn" data-bs-target="#staticBackdrop">
                    <i class="fa-solid fa-face-smile-beam"></i>
                    <span>Feeling / Activity</span></a>
                </li>
                </ul>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header mt-5">
                        <h4 class="modal-title text-capitalize" id="staticBackdropLabel">Create a post</h4>
                        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="../inc/post.php" method="POST" enctype="multipart/form-data">

                      <div class="modal-body">
                        <div class="col-lg-12">
                        <textarea class="post_con" name="post_cont" id="" cols="30"placeholder="What's on your mind'<?php echo $_SESSION['last_name'];?>?" ></textarea>
                        <ul class=" mb-0 ps-0 up_file d-flex">
                          <li>
                             <button class="btn btn-outline-dark">
                              <i class="fa-solid fa-video"></i> <br> 
                              Live Video
                            </button>
                          
                          </li>
                          <li>
                       
                              <input type="file"class=" btn-outline-dark" name="postimage">
                              <i class="fa-solid fa-image text-capitalize"></i>
                              Photos Video  
                          
                        
                          </li>
                        </li>
                        <li>
                      
                            <button class="btn btn-outline-dark">
                              <i class="fa-solid fa-face-smile-beam"></i><br>
                               Feeling Activity
                            </button>
                            
                        </li>
                       </ul>
                        </div>
                       </div>
                        <div class="modal-footer">
                          <input type="submit" class="btn btn-primary" value="Post">
                        </div>
                    </div>
                      </form>
                  </div>
                </div>
               <!-- <video id="vid" autoplay="true" placeholder='vedio'>video</video> -->
              </div>

                    <?php
                    
                            include('../inc/conn.php');

                            $all_post = mysqli_query($conn," SELECT * FROM post_info WHERE name = '$full_name' ORDER BY post_id DESC ");

                            $post_tokra = mysqli_fetch_array($all_post);

                     
                          
                            while($post_tokra = mysqli_fetch_array($all_post)):

                              $postId = $post_tokra['post_id'];
                    ?>


              <div class="new-post ">
                <a href="../inc/edit.php">Edit</a>
                <a href="../inc/delete.php?del=<?php echo $postId; ?>">Delete</a>
               <div class="new-post-id d-flex">
                <div class="img">
                  <img src="../profile/<?php echo $post_tokra['user_image'];?>" class="img-fluid"  alt="img">
                </div>
                <div class="id-name">
                  <h4 class="mb-0 text-capitalize"><a href="#"><?php echo $post_tokra['name'];?></a></h4>
                  <p class="lead mb-0"><?php echo $post_tokra['date'];?></p>
                </div>
               </div>
                 <div class="post-text">
                <p class="lead mb-0 ps-0 d-inline-block"><?php echo $post_tokra['post_cont'];?></p>
                <a href="#" class="btn d-inline-block p-0">...See More</a>
                </div>
               <div class="post-images">
                 <img src="../postImg/<?php echo $post_tokra['post_img'];?>" alt="img" class="img-fluid w-100">
               </div>
               <div class="li-comm d-flex justify-content-between">
                 <a href="#" class="btn"><i class="fa-regular fa-heart"></i> <span>123</span></a>
                 <a href="#" class="btn"></i> <span>12 </span>Commentes</a>
                 
               </div>
               <div class="li-com c-btn d-flex justify-content-evenly">
                <button href="#" class="btn-control"><i class="fa-regular fa-thumbs-up"></i> <span>Like</span></button>
                <button href="#" class="btn-control"><i class="fa-regular fa-comment"></i>Commentes</button>
                <button href="#" class="btn-control"><i class="fa-solid fa-share"></i> Share</button>
              </div>
              <!-- commentes starts -->
              <div class="col-lg-12">
                        <form action="../inc/comments.php" method="POST">
                            <div class="new-post-id d-flex my-2">
                              <div class="img">
                                <img src="../profile/<?php echo $user_img; ?>" class="img-fluid"  alt="img">
                              </div>
                    
                              <input type="text" name="user_comm" placeholder="Write a comments....">
                              <input type="hidden" name="postid" value="<?php echo $postId;?>">
                    
                             </div>
                        </form>

                              <?php
                              
                                  $all_comm = mysqli_query($conn," SELECT * FROM comm_info WHERE post_id = '$postId' ORDER BY comm_id DESC");
                              
                                      $comm_Tokra = mysqli_fetch_array($all_comm);
                                      
                               while($comm_Tokra = mysqli_fetch_array($all_comm)):       
                              ?>



                 <div class="comments">
                    <div class="new-post comm ">
                        <div class="new-post-id d-flex">
                          <div class="img">
                            <img src="../profile/<?php echo $post_tokra['user_image'];?>" class="img-fluid"  alt="img">
                          </div>
                          <div class="id-name">
                            <h4 class="mb-0 text-capitalize"><a href="#"><?php echo $post_tokra['name'];?></a></h4>
                            <p class="lead mb-0"><?php echo $post_tokra['date'];?></p>
                          </div>
                        </div>
                          <div class="post-text">
                          <p class="lead mb-0 ps-0 d-inline-block"><?php echo $comm_Tokra['comments'];?></p>
                          </div>
                  </div>
                  <?php endwhile; ?>
              </div>
              <!-- commentes ends -->
              <?php endwhile; ?>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="right-side box ">
                <h5>Friend Requests <a href="#" class="py-3"> &nbsp;&nbsp; See All</a></h5>
                <div class="online-id d-flex mb-2">
                  <div class="img">
                    <img src="img/ga_img_4.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Ali Hossian</a></h4>
                  </div>
                 </div>   
                 <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_4.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Ali Hossian</a></h4>
                  </div>
                 </div>   
                 <button class="btn-primary px-3">Confirm</button>
                 <button class="btn-primary px-3">Delete</button>
                <h5>Contacts</h5>
                <div class="online-id d-flex mb-2">
                  <div class="img">
                    <img src="img/ga_img_4.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Ali Hossian</a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_4.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Ali Hossian</a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_4.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Ali </a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_3.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#"> Hossian</a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_4.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Md. Hossian</a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_3.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#"> Hossian</a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_3.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Md.Ali Hossian</a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_3.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Mominul</a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_3.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Md.Ali Hossian</a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_1.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Kamrul</a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_2.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Ali </a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_3.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Md.Ali </a></h4>
                  </div>
                 </div>   <div class="online-id d-flex">
                  <div class="img">
                    <img src="img/ga_img_1.jpg" class="img-fluid"  alt="img">
                  </div>
                  <div class="id-name">
                    <h4 class="mb-0 mt-1 ms-2"><a href="#">Ali Hossian</a></h4>
                  </div>
                 </div>
              </div>
            </div>
        </div>
</section>
<!-- main boody end -->

 



    <script src="js/jquery.scrollable.js"></script> 
    <script script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/slick.min.js"></script> 
   
   
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
     <!-- <script>
    navigator.mediaDevices.getUserMedia({
      video:{
        width:1280,
        height:720,
      }
    })
    .then(MediaStream =>{
      document.getElementById("vid").srcObject = stream;
    });

</script> -->
</body>
</html>
