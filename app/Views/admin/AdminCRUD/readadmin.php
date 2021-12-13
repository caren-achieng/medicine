<!---read admin page-->
<?php include(APPPATH.'Views\admin\sidebar.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Admins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

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
                    <a class="navbar-brand">View Admins</a>
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
                            <h4 class="card-title">Admins</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>Staff ID</th>
                                    <th>ID/Passport</th>
                                    <th>Title</th>
                                    <th>F Name</th>
                                    <th>M Name</th>
                                    <th>L Name</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Religion</th>
                                    <th>Mobile</th>
                                    <th>Home Tel</th>
                                    <th>KRA PIN</th>
                                    <th>NHIF PIN</th>
                                    <th>NSSF PIN</th>
                                    <th>Post Address</th>
                                    <th>Post Code</th>
                                    <th>Residence</th>
                                    <th>Town</th>
                                    <th>County</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($admins as $row) : ?>
                                        <tr>
                                            <td><?= $row['staff_number'] ?></td>
                                            <td><?= $row['id/passport'] ?></td>
                                            <td><?= $row['title'] ?></td>
                                            <td><?= $row['fname'] ?></td>
                                            <td><?= $row['mname'] ?></td>
                                            <td><?= $row['lname'] ?></td>
                                            <td><?= $row['dob'] ?></td>
                                            <td><?= $row['gender'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['maritalstatus'] ?></td>
                                            <td><?= $row['religion'] ?></td>
                                            <td><?= $row['mobilenum'] ?></td>
                                            <td><?= $row['hometel'] ?></td>
                                            <td><?= $row['krapin'] ?></td>
                                            <td><?= $row['nhifpin'] ?></td>
                                            <td><?= $row['nssfpin'] ?></td>
                                            <td><?= $row['postaddress'] ?></td>
                                            <td><?= $row['postcode'] ?></td>
                                            <td><?= $row['residence'] ?></td>
                                            <td><?= $row['town'] ?></td>
                                            <td><?= $row['county'] ?></td>
                                            <td><?= $row['departmentname'] ?></td>
                                            <td>
                                                <a href="/admin/delete/<?=$row['staff_number']?>">
                                                    <button type="button" class="btn btn-danger">Delete<i class="fas fa-trash-alt"></i></button>
                                                </a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?php echo $pager->links(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>