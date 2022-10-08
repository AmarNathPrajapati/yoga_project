<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/about.css">
  <?php include('./components/header_links.php'); ?>
  <title>About</title>
  <style>
    @media (min-width:400px) and (max-width:767px) {
      .img_logo {
        width: 25%;
      }

      .img_logo2 {
        width: 25% !important;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <?php include('./components/navbar.php'); ?>
  <!-- 
  <div class="container-fluid banner" style="background-color: #252B42">
    <p class="headline">~ WHO WE ARE</p>
    <div class="row">
      <div class="col-12 col-md-8 mt-3">
        <div class="container-fluid p-0" style="color: white;">
          <span class="banner_title">We Help To Get Solutions</span>
          <p class="banner_desc">Our vision is to become the most preferred comprehensive Back Office Solutions Partner in the areas of Finance & Accounting, Compliance and Payroll.</p> -->
  <!-- <div class="row">
              <div class="col-12 col-sm-6">
                <div class="card" style="width: 100%; border: none; background: transparent;">
                    <h3 class="card-title card_heading">Our Vision 
                      <img src="./images/icons/about_banner_icon1.png" style="width: 40px;" alt="img">
                    </h3>
                    <p classs="card-text">Partner in the areas of Finance & Accounting, Compliance and Payroll.</p>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="card" style="width: 100%; border: none; background: transparent;">
                    <h3 class="card-title card_heading">Work Culture 
                      <img src="./images/icons/about_banner_icon2.png" style="width: 40px;" alt="img">
                    </h3>
                    <p classs="card-text">As a global company, we operate 24/7 and ensure a 3-way balance – work, Life & client deliverables.</p>
                </div>
              </div>
            </div> -->

  <!-- <button class="btn btn-warning btn-lg mt-2 read_more">Read More</button>
        </div>
      </div>
      <div class="col-12 col-md-4 mt-3 mt-md-0">
        <img src="./images/about_banner1.png" style="width: 100%;" alt="img">
      </div>
    </div>
  </div> -->

  <div class="container-fluid p-0 services_banner">
    <span class="text-center services_heading">About Us</span>
  </div>
  <div class="container speciality my-5">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3 mt-3 mt-md-0">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId11">
          <div class="container-fluid">
            <div class="row heading4">
              <p class="text-center">
                Our <br> Vision
              </p>
              <img height="50px" class="d-block mx-auto" src="./images/icons/eyes.png" style="width: 80px;" alt="icon1">
            </div>
           <!-- <div class="row content about_card">
              <p class="about_para1 about_text text-center"> Our vision is to become the most preferred comprehensive Back Office</p>
            </div>--><br>
            <span class="btn-sm btn-primary">Read More...</span>
          </div>
        </button>
      </div>
      <div class="col-12 col-sm-6 col-md-3 mt-3 mt-md-0">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId12">
          <div class="container-fluid">
            <div class="row heading2">
              <p class="text-centers">
                Our <br> Mission
              </p>
              <img height="50px" class="d-block mx-auto" src="./images/icons/about_icon2.png" style="width: 80px;" alt="icon1">
            </div>

            <!--<div class="row content about_card">
              <p class="about_para1 about_text text-center">We are committed to continuous innovation to make Business Processes Simple, Efficient & Smart.</p>
            </div>--><br>
            <span class="btn-sm btn-primary">Read More...</span>
            <!-- <span class="btn-sm btn-primary">Read More...</span> -->
          </div>
        </button>
      </div>
      <div class="col-12 col-sm-6 col-md-3 mt-3 mt-md-0">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId1">
          <div class="container-fluid">
            <div class="row heading">
              <p class="text-center ">
                Our <br> Journey
              </p>
              <img height="50px" class="d-block mx-auto" src="./images/icons/about_icon1.png" style="width: 80px;" alt="icon1">
            </div>
            <!--<div class="row content about_card">
              <p class="about_para1 about_text text-center">  Founded in 2002, by three aspiring young minds Raj, Bala and Suresh who quit their jobs...</p>
            </div>--><br>
            <span class="btn-sm btn-primary ">Read More...</span>
          </div>
        </button>
      </div>
      <!-- <div class="col-12 col-md-4 mt-3 mt-md-0">
        <div class="container-fluid">
          <div class="row heading2">
            Our Mission

            <img src="./images/icons/about_icon2.png" style="width: 80px;" alt="icon1">
          </div>

          <div class="row content">
            <p>We are committed to continuous innovation to make Business Processes Simple, Efficient & Smart.</p>
          </div>
        </div>

      </div> -->
      <div class="col-12 col-sm-6 col-md-3 mt-3 mt-md-0">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modelId2">
          <div class="container-fluid">
            <div class="row heading3 ">
              <p class="text-center ">
                Work <br> Culture
              </p>
              <img height="50px" class="d-block mx-auto" src="./images/icons/about_icon3.png" style="width: 80px;" alt="icon1">
            </div>
            <br>
           <!-- <div class="row content about_card">
              <p class="about_para1 abput_text text-center">As a global company, we operate 24/7 and</p>
            </div>-->
            <span class="btn-sm btn-primary">Read More...</span>
          </div>
        </button>
      </div>
    </div>
  </div>
  <!-- modal our vision -->
  <div class="modal fade" id="modelId11" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="container">
          <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="row">
            <div class="col-md-12 col-lg-12">
            </div>
            <div class="col-md-12 my-5 col-lg-12 text-center">
              <h2 class="mt-5 mb-0 d-inline heading">Our Vision</h2>
              <img src="./images/icons/eyes.png" style="width: 80px;" alt="icon1">
              <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
              <p class="mt-3 content1" align="justify">Our vision is to become the most preferred comprehensive Back Office Solutions Partner in the areas of Finance & Accounting, Compliance and Payroll.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal our mission -->
  <div class="modal fade" id="modelId12" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="container">
          <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="row">
            <div class="col-md-12 col-lg-12">
            </div>
            <div class="col-md-12 my-5 col-lg-12 text-center">
              <h2 class="mt-5 mb-0 d-inline heading">Our Mission</h2>
              <img src="./images/icons/about_icon2.png" style="width: 80px;" alt="icon1">
              <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
              <p class="mt-3 content1" align="justify">We are committed to continuous innovation to make Business Processes Simple, Efficient & Smart.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal our journey-->
  <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="container">
          <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="row">
            <div class="col-md-12 col-lg-12">
            </div>
            <div class="col-md-12 my-5 col-lg-12 text-center">
              <h2 class="mt-5 mb-0 d-inline heading">Our Journey</h2>
              <img src="./images/icons/about_icon1.png" style="width: 80px;" alt="icon1">
              <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
              <p class="mt-3 content1" align="justify">Founded in 2002, three aspiring young minds Raj, Bala and Suresh quit their jobs and laid all their efforts to build a company from scratch using their intellect and real-life experiences. Oremus started its operations with Outsourced Book-keeping, later adding payroll, compliances, transaction processing and advisory services. The initial expansions were purely customer driven. With over 20 years of focused & sustainable experience combined with excellent in-house and skilled professionals, Oremus is the ideal accounting, payroll, compliance, and financial solutions partner.<br></br>
                Oremus group has seen a progressive growth over time and is an ISAE 3402 (SAS 70 Type II) & ISO 27001 certified company adhering to international quality and security standards. Currently it staffs about 225 motivated resources. The company serves diverse industries across 4 continents. Since its founding, Oremus has crafted sustainable business partnerships by providing an extensive suite of solutions to clients across the USA, Europe, Middle East, Africa, South East Asia and India.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal work culture-->
  <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="container">
          <button type="button" class="btn-close float-end mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="col-md-12 my-5 col-lg-12 text-center">
                <h2 class="mt-5 d-inline mb-0">Our Work Culture</h2>
                <img src="./images/icons/about_icon3.png" style="width: 80px;" alt="icon1">
              </div>
              <!-- <h5 class="m-0 p-0">Categories: The Top Management</h5> -->
              <p class="mt-3 content1" align="justify">As a global company, we operate 24/7 and ensure a 3-way balance – work, life & client deliverables. The young team of Oremus makes the organization agile and our millennials’ thirst for knowledge keeps the energy and enthusiasm high every day. At Oremus, we believe in doing things with a hands-on approach and are headed by young and dynamic management.<br></br>
                Oremus strives for excellence and values human expertise. The intense competition and market fluctuation evolved the company to be more robust. The workforce is a fusion of varied cultures and the diversity helped to grow and serve the global business. Our culture of accountability and transparency percolates from the top. Our employees look for and embrace change to deliver greater value to the customers and which helps them attain a competitive edge.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid company_container">
    <h3 class="company_heading mb-5">Our Group of Companies</h3>
    <div class="row">
      <div class="col-12 col-md-3 col-sm-6 mt-md-0">
        <div class="card" style="max-width: 100%; border: none;">
          <div style="background:none;">
            <div>
              <img class="d-block mx-auto img_logo" width="50%" src="./images/oremus-logo.png" alt="">
              <!-- <p class="company_name">OREMUS CORPORATION NA</p> -->
            </div>
          </div>
          <div class="card-body">
            <p class="card-text text-start mt-4 long_desc">Oremus Corporation NA is a comprehensive accounting and finance service provider specialising in outsourced Accounting and Tax solutions. They offer a broad range of services for business owners, executives, and independent professionals.

            <div class="text-end "><a href="https://www.oremususa.com/" class="visit_site text-dark">VISIT SITE</a></div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 col-sm-6 mt-md-0">
        <div class="card" style="max-width: 100%; border: none;">
          <div style="background:none;">
            <div>
              <img class="d-block mx-auto img_logo" width="40%" src="./images/company/logo2.webp" alt="">
              <!-- <p class="company_name">ELTA PARTNERSHIP LIMITED</p> -->
            </div>
          </div>
          <div class="card-body">
            <p class="card-text text-start mt-4 long_desc">Elta Partnership Limited is a leading provider of accounting services, specialising in license trade accounting, helping Pubs, Restaurants, and Clubs to run a more profitable business.
            <div class="text-end "><a href="https://www.e-lta.co.uk/" class="visit_site text-dark">VISIT SITE</a></div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 col-sm-6 mt-md-0">
        <div class="card" style="max-width: 100%; border: none; padding:0px !important">
          <div style="background:none;">
            <div>
              <img style="object-fit:cover; width:60%;" class="d-block mx-auto img_logo2" src="./images/company/logo1.png" alt="">
              <!-- <p class="company_name">ESCRIBE EUROPE LTD</p> -->
            </div>
          </div>
          <div class="card-body">
            <p class="card-text text-start mt-4 long_desc">Escribe Europe Ltd has been for a decade providing quality Digital Transcription, Data and CAD solutions to a broad range of professional clients across the UK and Europe
            <div class="text-end "><a href="http://www.escribe-europe.com/" class="visit_site text-dark">VISIT SITE</a></div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 col-sm-6 mt-md-0">
        <div class="card" style="max-width: 100%; border: none;">
          <div style="background:none;">
            <div>
              <img class="d-block mx-auto img_logo" width="50%" src="./images/oremus-logo.png" alt="">
              <!-- <p class="company_name">OREMUS CORPORATION NA</p> -->
            </div>
          </div>
          <div class="card-body">
            <p class="card-text text-start mt-4 long_desc">
Oremus UK Limited is a full-service accounting and finance service provider, offering cost-effective, complete support in Accounting, Payroll and Compliance Requirements. Experienced and well-established, they have become the partner of choice for businesses across the globe.

            <div class="text-end "><a href="https://www.oremusuk.com/" class="visit_site text-dark">VISIT SITE</a></div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- footer -->
  <?php include('./components/footer.php'); ?>


  <!-- scripts -->
  <?php include('./components/scripts.php'); ?>

  <script>
    $('#home').removeClass("active");
    $('#company').addClass('active');
  </script>

</body>

</html>