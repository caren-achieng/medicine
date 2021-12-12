<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Medicing - Administators
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/dashboard.css?v=1.5.0" rel="stylesheet" />
  <style>
.pagination li{
padding: 0 10px;
border: solid 1px white;
border-radius: 2px;
margin: 5px 5px 0 5px;
}
.pagination li a{
    text-decoration: none;
    color: white;
}
.pagination .active{
    background: #f96332;
}
ul.pagination{
    float: right;
}
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <?php include('sidebar.php') ?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
            </div>
            <a class="navbar-brand">Dashboard</a>
          </div>
        </div>
        <div class="welcome">
          <a href="/user" class="navbar-brand">
            Welcome, <?= session()->get('userName')?>
          </a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Users</h5>
                <h4 class="card-title">Administrators</h4>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Telephone
                      </th>
                      <th class="text-right">
                         Department
                      </th>
                      <th>
                        Actions
                      </th>
                    </thead>
                    <tbody>
                      <?php foreach($admins as $admin){?>
                      <tr>
                        <td>
                          <?php echo $admin['fname']." ".$admin['lname']; ?>
                        </td>
                        <td>
                          <?php echo $admin['email']; ?> 
                        </td>
                        <td>
                          <?php echo $admin['mobilenum'] ?>
                        </td>
                        <td class="text-right">
                          <?php echo $admin['departmentname'] ?>
                        </td>
                        <td>
                          <!---I've added buttons to go to update and to delete so once the icon is clicked--->
                        <div class="button">
                            <!--not finished-->
                            <a href="#">
                                <button type="button" class="btn btn-success">Update<i class="fas fa-user-edit"></i></button>
                            </a>
                            <!--finished-->
                            <a href="/admin/delete/<?=$admin['staff_number']?>">
                                <button type="button" class="btn btn-danger">Delete<i class="fas fa-trash-alt"></i></button>
                            </a>
                        </div>
                      </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <?php echo $pager->links(); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Employee List</h5>
                <h4 class="card-title"> Employees Status</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Status
                      </th>
                      <th class="text-right">
                        Days
                      </th>
                    </thead>
                    <tbody>
                      <?php 
                      date_default_timezone_set('Africa/Nairobi');
                      $date = strtotime(date('Y-m-d'));
                      $time_remaining;
                      $status;
                      foreach($leaves as $leave){
                        if(strtotime($leave['end_date']) > $date ){
                          $time_remaining = (int) (strtotime($leave['end_date']) - $date)/86400;
                          $status = "On leave";
                        }else{
                          $time_remaining = 0;
                          $status = "Working";
                        }?>
                      <tr>
                        <td>
                          <?php echo $leave['fname']." ".$leave['lname']; ?>
                        </td>
                        <td>
                          <?php echo $leave['email']; ?>
                        </td>
                        <td>
                          <?php echo $status; ?>
                        </td>
                        <td class="text-right">
                          <?php echo $time_remaining ?>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <?php echo $pager2->links(); ?>
              </div>
            </div>
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
  <!-- Chart JS -->
  <script src="/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/js/plugins/bootstrap-notify.js"></script>
  <script src="/js/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>