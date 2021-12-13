<?php include(APPPATH.'Views\admin\sidebar.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leave Review</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/dashboard.css?v=1.5.0" rel="stylesheet" />
    <style>
        .error {
            width: 100%;
            margin-top: .25rem;
            font-size: .875em;
            color: #dc3545;
        }
    </style>
</head>
<body>
<div class="wrapper ">
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                    </div>
                    <a class="navbar-brand">Leave Review</a>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                </div>
            </div>
            <div class="welcome">
                <a href="/user" class="navbar-brand">
                    Welcome, <?= session()->get('userName')?>
                </a>
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
                            <h4 class="card-title">Employees</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
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
                                                <a href="/Leave_approval/leavedets/<?= $row['leave_id']?>">Review</a>
                                            </td>


                                        </tr>

                                    <?php endforeach;?>

                                    </tbody>
                                </table>
<!--                                --><?php //echo $pager->links(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/core/jquery.min.js"></script>
<script src="/js/core/popper.min.js"></script>
<script src="/js/core/bootstrap.min.js"></script>
<script src="/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<script src="/js/demo.js"></script>
</body>
</html>