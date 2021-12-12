<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Medicing-Leave-Review
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/dashboard.css?v=1.5.0" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('/css/leaveReview.css'); ?>">
</head>

<body class="user-profile">
  <div class="wrapper ">
    <?php include('sidebar.php')?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg   navbar-absolute" >
        <div class="container-fluid" >
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
            </div>
            <a class="navbar-brand">Easy Leaves</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation"></div>
        </div>
        <div class="welcome">
          <a href="/user" class="navbar-brand">
            Welcome, <?= session()->get('userName')?>
          </a>
        </div>
      </nav>
      <!-- End Navbar -->
         <div class=" " id="top-bar"></div>

       <!-- review table-body starts here-->
     <div class="container">
      <div class="title">Leave Review</div>
     <div class="content">
      <table class="table table-striped">
        <thead>
                <tr>
                    <th scope="col">Leave ID</th>
                    <th scope="col">Staff Name</th>
                    <th scope="col">Leave type</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End date</th>
                    <th scope="col">Review</th>
    
                   
                </tr>
           </thead>
              <tbody>
              
                <?php foreach($leavesPendingData as $row):?>
                 
                  <tr>
                        <td><?=$row['leave_id']?></td>
                        <td><?=$row['fname'];$row['mname'];?></td>
                        <td><?=$row['leave_type']?></td>
                       <td><?=$row['start_date']?></td>
                        <td><?=$row['end_date']?></td>
                        <td>
                        <a href="/Leave_approval/leavedets/2" ><button type="button" class="btn btn-success">Review</button></a>
                        
                       </td>
                        
                        
                    </tr>

                  <?php endforeach;?>
                
              </tbody>
         </table>
      </div>
     </div>
  
     </div>
     </div>
       <!-- review table-body starts here -->

  <!--   Core JS Files   -->
  <script src="/js/core/jquery.min.js"></script>
  <script src="/js/core/popper.min.js"></script>
  <script src="/js/core/bootstrap.min.js"></script>
  <script src="/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="/js/demo.js"></script>
</body>

</html>