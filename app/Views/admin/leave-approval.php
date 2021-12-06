<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Medicing - Leave Approval
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/dashboard.css?v=1.5.0" rel="stylesheet" />
  <style>
    .approve:hover{
      background: green;
    }
    .deny:hover{
      background: red;
    }
    .btn{
      transform: translateX(100%)
    }
  </style>
</head>

<body class="user-profile">
  <div class="wrapper ">
    <?php include('sidebar.php') ?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
            </div>
            <a class="navbar-brand">Leaves</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation"></div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Leave Approval</h5>
              </div>
              <div class="card-body">
                <form method="post" action="/register">
                  <div class="row">
                    <div class="col-md-2 pr-1">
                      <div class="form-group">
                        <label>Staff ID (disabled)</label>
                        <input type="text" class="form-control" name="staff_number" disabled placeholder="ID" value="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input id = "name" type="email" class="form-control" name="name" placeholder="Name" value="" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                        <label>Department</label>
                        <input type="text" class="form-control" name="department" placeholder="Home Address" value="" readonly>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Leave Type</label>
                        <input type="text" class="form-control"placeholder="City" name="leave_type" value="" readonly>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Duration</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration" value="" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                        <label>Start Date</label>
                        <input type="text" class="form-control" name="start_date" placeholder="Start date" value="" readonly>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>End date</label>
                        <input type="text" class="form-control" name="End date" placeholder="End date" value="" readonly>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="button">
                          <div class="col-4">
                              <input class="btn approve form-control" type="submit" name="approve" value="Approve"> 
                          </div>
                          <div class="col-4">
                            <input class="btn deny form-control" type="submit" name="deny" value="Deny">                     
                        </div>
                      </div>
                    </div>
                </form>
              </div>
              <div class="row position-absolute justify-content-evenly">
                        <?php if(session()->has('errors')):?>
                            <div class="alert alert-warning">
                                <?php
                                foreach (session('errors') as $error):
                                    ?>
                                    <li><?php echo $error ?></li>
                                <?php
                                endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
            </div>
          </div>
    </div>
  </div>
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