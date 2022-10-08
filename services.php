<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/services.css">
    <?php include('./components/header_links.php'); ?>
    <title>Services</title>
  </head>

  <body>
    <!-- Navbar -->
    <?php include('./components/navbar.php'); ?>

    <div class="container-fluid p-0 services_banner">
        <span class="text-center services_heading">Services</span>
    </div>

    <!-- <div class="blue_line">
        <span class="service_heading">Services</span>
    </div> -->


      <div class="container-fluid">
        <!-- <p class="text-center services_heading2 my-4">Services</p> -->
        <p class="text-center services_desc">We position our clients at the forefront of their field by advancing an agenda.</p>
        <div class="row mb-5">

          <div class="col-12 mb-5 px-sm-4 col-sm-6 col-md-4 service_col">
            <div class="card border-0" style="max-width: 100%; margin: auto; cursor: pointer;  height: 100%;" onclick="window.location.href='hh'">
              <img src="./images/services/service1.png" class="card-img-top" alt="img">
              <div class="card-body" style="background-color: #252B42;">
                
                <h5 class="card-title">Transaction Processing</h5>
                <p class="card-text">Transaction processing includes Payment processing, accounts payable, accounts receivable and the related activities.</p>
                
              </div>
            </div>
          </div>

          <div class="col-12 mb-5 px-sm-4 col-sm-6 col-md-4 service_col">
            <div class="card border-0" style="max-width: 100%; margin: auto; cursor: pointer; height: 100%;" onclick="window.location.href='hh'">
              <img src="./images/services/service2.png" class="card-img-top" alt="img">
              <div class="card-body" style="background-color: #252B42;">
                
                <h5 class="card-title">Taxation and Filing</h5>
                <p class="card-text">Taxation is the process of arriving at applicability of taxes for an organization; amount of taxes owed to the authorities</p>
                
              </div>
            </div>
          </div>

          <div class="col-12 mb-5 px-sm-4 col-sm-6 col-md-4 service_col">
            <div class="card border-0" style="max-width: 100%; margin: auto; cursor: pointer; height: 100%;" onclick="window.location.href='hh'">
              <img src="./images/services/service3.png" class="card-img-top" alt="img">
              <div class="card-body" style="background-color: #252B42;">
                
                <h5 class="card-title">Payroll Management and Processing</h5>
                <p class="card-text">Payroll management is one of the most essential functions of a human resource department.</p>
                
              </div>
            </div>
          </div>

          <div class="col-12 mb-5 px-sm-4 col-sm-6 col-md-4 service_col">
            <div class="card border-0" style="max-width: 100%; margin: auto; cursor: pointer; height: 100%;" onclick="window.location.href='hh'">
              <img src="./images/services/service4.png" class="card-img-top" alt="img">
              <div class="card-body" style="background-color: #252B42;">
                
                <h5 class="card-title">Custom Reporting</h5>
                <p class="card-text">Accounting involves recording and classifying all expenses and incomes in their respective categories</p>
                
              </div>
            </div>
          </div>
          <div class="col-12 mb-5 px-sm-4 col-sm-6 col-md-4 service_col">
            <div class="card border-0" style="max-width: 100%; margin: auto; cursor: pointer; height: 100%;" onclick="window.location.href='hh'">
              <img src="./images/services/service5.png" class="card-img-top" alt="img">
              <div class="card-body" style="background-color: #252B42;">
                
                <h5 class="card-title">Compliance</h5>
                <p class="card-text">Compliance enables an entity or a person to meet the regulatory objectives.</p>
                
              </div>
            </div>
          </div>
          <div class="col-12 mb-5 px-sm-4 col-sm-6 col-md-4 service_col">
            <div class="card border-0" style="max-width: 100%; margin: auto; cursor: pointer; height: 100%;" onclick="window.location.href='hh'">
              <img src="./images/services/service6.png" class="card-img-top" alt="img">
              <div class="card-body" style="background-color: #252B42;">
                
                <h5 class="card-title">Bookkeeping</h5>
                <p class="card-text">Bookkeeping is recording of financial transactions on a day-to-day basis and organizing it to maintain steady financial records.</p>
                
              </div>
            </div>
          </div>

          <div class="col-12 mb-5 px-sm-4 col-sm-6 col-md-4 service_col">
            <div class="card border-0" style="max-width: 100%; margin: auto; cursor: pointer; height: 100%;" onclick="window.location.href='hh'">
              <img src="./images/services/service7.png" class="card-img-top" alt="img">
              <div class="card-body" style="background-color: #252B42;">
                
                <h5 class="card-title">Advisory</h5>
                <p class="card-text">At Oremus, We aim to provide independent and objective advisory services to our valuable clients with an aim to add value and improve the organization’s operations.</p>
                
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
      $('#services').addClass('active');
    </script>
   
  </body>
</html>