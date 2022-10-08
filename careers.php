<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/career.css">
    <?php include('./components/header_links.php'); ?>
    <title>Career</title>
  </head>

  <body>
    <!-- Navbar -->
    <?php include('./components/navbar.php'); ?>

    <div class="container-fluid p-0 services_banner">
        <span class="text-center services_heading">Career</span>
    </div>



      <div class="container-fluid mt-5">
       <h2 class="text-center">Wish to create more impact?</h2>
        <p class="text-center mb-5" style="font-size:18px !important;">Join us, realize and translate your dreams into action. Work hard, play hard, be challenged. Choose a job you love and you will never have to work a day in your life.</p>
        <div class="row mb-5">
                    <?php              
                      $stmt="SELECT id,title,description,job_type,job_location,job_category,php_file_location FROM `career` 
                      WHERE deleted_at IS NULL AND active=(?) ORDER BY created_at DESC";
                      $sql=mysqli_prepare($conn, $stmt);

                      mysqli_stmt_bind_param($sql,'i',$active);
                      $active=1;
          
                      $result=mysqli_stmt_execute($sql);
                      if ($result){
                              $data= mysqli_stmt_get_result($sql);
                              $sno=1;
                             if ($data->num_rows>0) {
                                while ($row = mysqli_fetch_array($data)){
                                    ?>
                                        <?php $loc= $row['php_file_location']?>
                                        <div class="col-12 mb-5 px-sm-4 col-sm-6 col-md-3 service_col">
                                            <div class="card">
                                            
                                                <div class="card-body" >
                                                    
                                                    <h5 class="card-title"><?php echo $row["title"]==null?"Not Available":$row["title"];?></h5>
                                                    <?php 
                                                        if($row["job_category"]!=0){
                                                            ?><p class="mb-0">Job Category: <b><?php echo $row["job_category"]==null?"Not Available":$row["job_category"];?></b></p><?php
                                                        }
                                                    ?>
                                                    <p class="mb-0">Job Type: <b><?php echo $row["job_type"]==null?"Not Available":$row["job_type"];?></b></p>
                                                    <p class="mb-3">Job Location: <b><?php echo $row["job_location"]==null?"Not Available":$row["job_location"];?></b></p>
                                                    
                                                    <a class="mt-3 text-decoration-none" href="./<?php echo $loc; ?>">
                                                        <span>Read More</span>
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <?php         
                                        }
                                        mysqli_stmt_close($sql);
                             } else {
                                ?><h2>No Career Available</h2><?php
                             }
                             
                      
                    }
                    else{
                        echo mysqli_error($conn);

                    }
                    
                  ?>

         

        </div>
    </div>
    <!-- footer -->
    <?php include('./components/footer.php'); ?>

   
    <!-- scripts -->
    <?php include('./components/scripts.php'); ?>
   
    <script>
      $('#home').removeClass("active");
      $('#career').addClass('active');
    </script>
   
  </body>
</html>