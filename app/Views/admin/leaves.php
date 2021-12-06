<?php
$db = mysqli_connect('localhost', 'Leo', 'leomugambi23', 'medicing');
$results_per_page = 10;

// find out the number of results stored in database
$sql='SELECT * FROM leaves';
$result = mysqli_query($db, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

$result = mysqli_query($db, $sql);

// retrieve selected results from database and display them on page
 $sql = "SELECT * FROM `leaves` LIMIT ". $this_page_first_result. ",". $results_per_page;

 	$result = mysqli_query($db, $sql);
    // display the links to the pages
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Medicing - Users
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/dashboard.css?v=1.5.0" rel="stylesheet" />
  <style>
    .pagination{
      margin: 5px;
      float: right;
    }
    .pagination a{
      border: solid 1px grey;
      width: 25px;
      height: 25px;
      float: right;
      text-align: center;
      border-radius: 5px;
    }
    .pagination a:hover{
      background: #f96332;
      color: white;
      border: solid 1px #f96332;
    }
    button{
      background: none;
      border: solid 1px grey;
      outline: none;
      border-radius: 5px;
    }
    button:hover{
      color: white;
      background: #f96332;
      border: solid 1px #f96332;
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
            <a class="navbar-brand" href>Leave Review</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">    
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Users</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Leave ID
                      </th>
                      <th>
                        Staff Number
                      </th>
                      <th>
                        Leave Type
                      </th>
                      <th>
                        Start Date
                      </th>
                      <th>
                        End Date
                      </th>
                      <th>
                        Leave Status
                      </th>
                      <th class="text-right">
                        Details
                      </th>
                    </thead>
                    <tbody>
                      <?php  while($row = mysqli_fetch_assoc($result)) {?>
                      <tr>
                        <td>
                          <?php echo $row['leave_id']; ?>
                        </td>
                        <td>
                        <?php echo $row['staff_number'] ?>
                        </td>
                        <td>
                        <?php echo $row['leave_type'] ?>
                        </td>
                        <td>
                        <?php echo $row['start_date'] ?>
                        </td>
                        <td>
                        <?php echo $row['end_date'] ?>
                        </td>
                        <td>
                        <?php echo $row['leave_status'] ?>
                        </td>
                        <td class="text-right">
                          <button value="<?= $row['leave_id']?>"><i class="far fa-eye"></i></button>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="pagination">
              <?php for ($page=1; $page<=$number_of_pages ; $page++) {
              echo "<a href='viewTable.php?page=" . $page ."'>" . $page . " </a> ";
              }
        ?>
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