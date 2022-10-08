<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/case_study.css">
    <?php include('./components/header_links.php'); ?>
    <title>Case Study</title>
  </head>

  <body>
    <!-- Navbar -->
    <?php include('./components/navbar.php'); ?>

    <div class="container-fluid p-0 services_banner">
        <span class="text-center services_heading">Case Study</span>
    </div>
  


      <div class="container-fluid mt-5">
       
        <!-- <p class="text-center services_desc">We position our clients at the forefront of their field by advancing an agenda.</p> -->
        <div class="row mb-5">
                    <?php              
                      $stmt="SELECT id,title,description,file,file_type,php_file_location FROM `case_study` 
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
                                        <div class="col-12 mb-5 px-sm-4 col-sm-6 col-md-4 service_col">
                                            <div class="card border-0" style="max-width: 100%; margin: auto; cursor: pointer;  height: 100%;" onclick='window.location.href="./<?php echo $loc; ?>"'>
                                            
                                                <?php
                                                    if ($row["file_type"]=="mp4") {
                                                        ?>
                                                            <video style="height:200px; width:100%; object-fit:cover;" class="card-img-top" controls>
                                                                <source src="./crm/documents/case_study/<?php echo $row["file"];?>" type="video/mp4">
                                                            </video>
                                                        
                                                        <?php
                                                    } 
                                                    else if($row["file_type"]=="0"){
                                                        ?>
                                                        <img src="./crm/default.png" 
                                                        style="max-width:100%; height:200px; margin:auto; object-fit:cover;" class="card-img-top" alt="img">
                                                    <?php
                                                    }
                                                    else {
                                                        ?>
                                                            <img src="./crm/documents/case_study/<?php echo $row["file"];?>" 
                                                            style="max-width:100%; height:200px; margin:auto; object-fit:cover;" class="card-img-top" alt="img">
                                                        <?php
                                                    }
                                                                    
                                                ?>
                                                <div class="card-body" style="background-color: #252B42;">
                                                    
                                                    <h5 class="card-title"><?php echo $row["title"]==null?"Not Available":$row["title"];?></h5>
                                                    <p class="card-text" style="width: 100%;white-space: nowrap;overflow: hidden; text-overflow: ellipsis;"><?php echo $row["description"]==null?"Not Available":$row["description"];?> <br>
                                                    <button class="btn mt-2 btn-primary" onclick='window.location.href="./<?php echo $loc; ?>"'>Read More</button>
                                                </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <?php         
                                        }
                                        mysqli_stmt_close($sql);
                             } else {
                                ?><h2>No Case Study Available</h2><?php
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
      $('#case_study').addClass('active');
    </script>
   
  </body>
</html>