<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/contact.css">
  <?php include('./components/header_links.php'); ?>
  <title>Contact Us</title>
  <style>
    .btn-submit{
      font-weight: bold;
      background: #FFA62B;
      border-radius: 5px;
    }
    .btn-submit:hover{
      background:#e28400;
    }
    a{
      text-decoration: none;
      color: white;
    }
    .img_contact{
      max-width: 100%;
      padding: 0px !important;
    }
    @media (min-width:768px) and (max-width:940px) {
      .address_box{
        height:360px;
      }
    }
    @media (min-width:941px) {
      .address_box{
        height:260px;
      }
    }
    @media (min-width:768px) {
      .img_contact{
        height: 100%;
      }
    }
    @media (min-width:430px) and (max-width:767px) {
      .img_contact{
        object-fit: cover;
        width:100%;
        height: 550px;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <?php include('./components/navbar.php'); ?>
  <div class="div1 container-fluid">
    <div class="container p-md-5">
      <div class="row my-5">
        <div class="col-lg-6 text-dark my-5">
          <span>
            <h1>We Have Branches All</h1>
          </span>
          <span>
            <h1>Over The World</h1>
          </span>
          <p>The gradual accumulation of information about atomic and small-scale behaviour during the first of the 20th century, which gave some indications about how small things do behave, produced an increasing confusion which was Heisenberg, and Born.</p>
        </div>
        <div class="col-lg-6 float-end text-dark ">
          <h1 class="mb-5 text-center">Contact Us!</h1>
          <img class="float-end" src="./images/contact/map.png" alt="">
        </div>
      </div>
      <div class="row py-2">
        <div class="col-12 col-md-4 p-0">
          <img class="img_contact" src="./images/contact/cover.png"  alt="cover">
        </div>
        <div class="col-12 col-md-8 p-0">
        <form action="./crm/backend/contact_us.php" method="post">
            <div class="form p-5 bg-white d-flex flex-column">
              <span>
                <h1>Have a Query? Get A</h1>
              </span>
              <span>
                <h1>Free Quoto Here</h1>
              </span>
            
              <input class="contact-input p-2 mb-3 mt-2" required type="text" name="name" id="" placeholder="Full Name *">
            
              <input class="contact-input p-2 mb-3" required type="email" name="email" id="" placeholder="Email *">
            
              <input class="contact-input p-2 mb-3" type="tel" name="phone" id="" placeholder="Phone Number">
              
              <input class="contact-input p-2 mb-3" type="text" name="company_name" id="" placeholder="Company Name">

              <div class="multiselect mb-3">
                <div class="selectBox" onclick="showCheckboxes()" >
                  <select required>
                    <option>Select an option *</option>
                  </select>
                  <div class="overSelect"></div>
                </div>
                <div id="checkboxes">
                  <!-- query for selecting services, it is not related to contact us page. -->
                  <?php              
                      $stmt="SELECT id,service_name FROM `services` WHERE services.deleted_at IS NULL ORDER BY created_at DESC";
                      $sql=mysqli_prepare($conn, $stmt);

                      // mysqli_stmt_bind_param($sql,'i',$is_admin);
                      $is_admin=1;
          
                      $result=mysqli_stmt_execute($sql);
                      if ($result){
                              $data= mysqli_stmt_get_result($sql);
                              $sno=1;
                              while ($row = mysqli_fetch_array($data)){
                  ?>
                      <label for="one<?php echo $row['id']?>">
                        <input type="checkbox" id="one<?php echo $row['id']?>" name="subject[]" value="<?php echo $row['id']?>" /> <?php echo $row['service_name']?>
                      </label>
                  <?php         
                        }
                        mysqli_stmt_close($sql);
                    }
                    else{
                        echo mysqli_error($conn);
                    }
                  ?>
                </div>
              </div>

              <!-- <b class="m-2">Your Query</b> -->
              <textarea class="contact-input p-3" rows="3" type="text" name="message" id="" placeholder="Write your query here..."></textarea>


  
              <!-- <input class="contact-input p-3" type="text" name="" id=""> -->
              <button type="submit" class="btn mt-5 p-3  text-dark btn-submit" >Consult today</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-white text-center mb-3 contact-location-heading" >
    Our Office Locations
  </div>
  <div class="div2 container-fluid text-dark">
    <div class="container-fluid px-4 pt-5 pb-4">
      <div class="row">
        <div class="col-12 mt-5 mt-sm-0 col-md-4 px-sm-4 offset-1 offset-md-0  contact-address">
          <div class="d-flex address_box" >
                <span><img src="./images/contact/Vector_map.png" alt=""></span>
              <div class="d-flex flex-column mx-2">
                <span> <b>India - Hyderabad Corporate Office:</b> </span>
                <span>3rd Floor, 6-3-249/3, Abhinandan Towers,</span>
                <span>Road No.1,</span>
                <span>Banjara Hills,</span>
                <span>Hyderabad,</span>
                <span>Telangana, India - 500034</span>
                   
              </div>
          </div>
          <div class="contact-address d-flex px-sm-4 offset-1 offset-md-0 ">
            <span><img src="./images/contact/Vector_call.png" alt=""></span>
            <div class="d-flex flex-column mx-2">
              <a class="text-dark" href="tel:+91 40 4903 7800">
                <span><b>Contact No :</b></span> <br>
                <span>+91 40 4903 7800</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 mt-5 mt-sm-0 col-md-4 offset-1 offset-md-0 contact-address px-sm-4 ">
            <div class="d-flex address_box">
              <span><img src="./images/contact/Vector_map.png" alt=""></span>
              <div class="d-flex flex-column mx-2">
                <span><b>UK - Cheshire:</b></span>
                <span>Suite 8, Technology Centre,</span>
                <span>Inward Way,</span>
                <span>Ellesmere Port,</span>
                <span>Cheshire</span>
                <span>United Kingdom - CH65 3EN</span>
                <span>URL : <a class="text-dark" href="">Visit Site</a> </span> <br>
              </div>
            </div>

            <div class="contact-address d-flex px-sm-4 offset-1 offset-md-0 ">
              <span><img src="./images/contact/Vector_call.png" alt=""></span>
              <div class="d-flex flex-column mx-2">
                <a class="text-dark" href="tel:+44 01978 358535">
                  <span><b>Contact No :</b></span> <br>
                  <span>+44 01978 358535</span>
                </a>
              </div>
            </div>
        </div>
        <div class="col-12 mt-5 mt-sm-0 col-md-4 offset-1 offset-md-0 contact-address  px-sm-4 ">
          <div class="d-flex address_box" ">
            <span><img src="./images/contact/Vector_map.png" alt=""></span>
            <div class="d-flex flex-column mx-2">
              <span><b>USA - Indiana:</b></span>
              <span>Oremus Corporation NA,</span>
              <span>200 South Washington Street,</span>
              <span>Suite 300 Crawfordsville,</span>
              <span>IN 47933</span>
              <span>URL : <a class="text-dark" href="">Visit Site</a></span> <br> <br>
            </div>
          </div>
          <div class="contact-address d-flex px-sm-4 offset-1 offset-md-0 ">
            <span><img src="./images/contact/Vector_call.png" alt=""></span>
            <div class="d-flex flex-column mx-2">
              <a class="text-dark" href="tel:+1765 362-8492">
                <span><b>Contact No :</b></span> <br>
                <span>+1765 362-8492</span>
              </a>
              <a class="text-dark" href="tel:+1765 364-2838">
                <span>+1765 364-2838</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid my-4">
    <div class="row">
      <div class="col-12 mt-5 mt-md-0 col-md-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7613.8898717992815!2d78.450838!3d17.41443!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb97378a44b1f7%3A0xc7ce772f27e3a1c0!2sAbhinandan%20Tower%2C%20Mada%20Manzil%2C%20Banjara%20Hills%2C%20Hyderabad%2C%20Telangana%20500004!5e0!3m2!1sen!2sin!4v1654942985268!5m2!1sen!2sin" style="border:0; width: 100%; min-height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-12 mt-5 mt-md-0 col-md-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4769.922408552039!2d-2.906086!3d53.29023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ade6aaccfea7d%3A0x2e2cb876e3406a24!2sThe%20Technology%20Centre%20Inward%20Way%2C%20Ellesmere%20Port%20CH65%203EN%2C%20UK!5e0!3m2!1sen!2sin!4v1654943100537!5m2!1sen!2sin"  style="border:0; width: 100%; min-height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-12 mt-5 mt-md-0 col-md-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6109.142683015027!2d-86.901123!3d40.040349!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x881329e03607ca3f%3A0xb7dbdd2649ec214b!2s200%20S%20Washington%20St%2C%20Crawfordsville%2C%20IN%2047933%2C%20USA!5e0!3m2!1sen!2sin!4v1654943209100!5m2!1sen!2sin" style="border:0; width: 100%; min-height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    
  </div>

  <div class="div2 container-fluid text-dark">
    <div class="container-fluid px-4 pt-5 pb-4">
      <div class="row">
        <div class="col-12 mt-5 mt-sm-0 col-md-4 offset-1 offset-md-0 contact-address  px-sm-4  ">
          <div class="d-flex">
            <span><img src="./images/contact/Vector_map.png" alt=""></span>
            <div class="d-flex flex-column mx-2">
              <span><b>India - Chennai</b></span>
              <span>7th Floor,</span>
              <span>P.M Tower, Greams Road,</span>
              <span>Chennai - 600006</span>
            </div>
          </div>
          <div class="contact-address d-flex px-sm-4 offset-1 offset-md-0 mt-3">
            <span><img src="./images/contact/Vector_call.png" alt=""></span>
            <div class="d-flex flex-column mx-2">
              <a class="text-dark" href="tel:+91 44 4202 8208">
                <span><b>Contact No :</b></span> <br>
                <span> +91 44 4202 8208</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 mt-5 mt-sm-0 col-md-4 offset-1 offset-md-0 contact-address  px-sm-4 ">
          <div class="d-flex">
            <span><img src="./images/contact/Vector_map.png" alt=""></span>
            <div class="d-flex flex-column mx-2">
              <span><b>India - New Delhi</b></span>
            <span>412, Essel House 10,</span>
            <span>Asaf Ali Road,</span>
            <span>New Delhi - 110002</span>
            </div>
          </div>
          <div class="contact-address d-flex px-sm-4 offset-1 offset-md-0 mt-3">
            <span><img src="./images/contact/Vector_call.png" alt=""></span>
            <div class="d-flex flex-column mx-2">
              <a class="text-dark" href="tel:+91 11 41420964">
                <span><b>Contact No :</b></span> <br>
                <span>+91 11 41420964</span>
              </a>
              <a class="text-dark" href="tel:+91 99499 10202">
                <span>+91 99499 10202</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 mt-5 mt-sm-0 col-md-4 offset-1 offset-md-0 contact-address  px-sm-4 ">
          <div class="d-flex">
            <span><img src="./images/contact/Vector_map.png" alt=""></span>
            <div class="d-flex flex-column mx-2">
              <div class="d-flex flex-column mx-2">
              <span><b>India - Mizoram</b></span>
              <span>Y - A/05,</span>
              <span>Chaltlang, Aizawl,</span>
              <span>Mizoram - 796012</span>
              </div>
            </div>
          </div>
          <div class="contact-address d-flex px-sm-4 offset-1 offset-md-0 mt-3">
            <span><img src="./images/contact/Vector_call.png" alt=""></span>
            <div class="d-flex flex-column mx-2">
              <a class="text-dark" href="tel:+91 94455 44421">
                <span><b>Contact No :</b></span> <br>
                <span> +91 94455 44421</span>
              </a>
            </div>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>
  <div class="container-fluid my-4">
    <div class="row">
      <div class="col-12 mt-5 mt-md-0 col-md-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7773.336038111813!2d80.254773!3d13.056791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b6a7d4cce4bb1d7!2sP.%20M.%20Tower!5e0!3m2!1sen!2sin!4v1654943721421!5m2!1sen!2sin" style="border:0; width: 100%; min-height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
      <div class="col-12 mt-5 mt-md-0 col-md-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7002.972557919445!2d77.225316!3d28.645155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd3dbb10751b%3A0x3327b730a1d6c62!2s10%2C%20Asaf%20Ali%20Rd%2C%20Kucha%20Pati%20Ram%2C%20Chandni%20Chowk%2C%20New%20Delhi%2C%20Delhi%20110002!5e0!3m2!1sen!2sin!4v1654943765806!5m2!1sen!2sin" style="border:0; width: 100%; min-height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
      <div class="col-12 mt-5 mt-md-0 col-md-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29214.547975366764!2d92.723001!3d23.753851!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374deb248b3cace1%3A0x2bdfe0cfd68d2ae5!2sChaltlang%2C%20Aizawl%2C%20Mizoram!5e0!3m2!1sen!2sin!4v1654943839180!5m2!1sen!2sin" style="border:0; width: 100%; min-height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
    </div>
    
  </div>

  <!-- footer -->
  <?php include('./components/footer.php'); ?>


  <!-- scripts -->
  <?php include('./components/scripts.php'); ?>



  <script>
    $('#home').removeClass("active");
    $('#contact').addClass('active');
  </script>

</body>