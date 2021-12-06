<?php include(APPPATH.'Views\admin\sidebar.php'); ?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Employees</title>
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
<div class="wrapper">
    <div class="main-panel" id="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-end" id="navigation"></div>
            </div>
        </nav>
        <!--    <div class="container form position-relative ">-->

        <div class="panel-header panel-header-sm"></div>
        <div class="content">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Staff Number</th>
                                    <th scope="col">ID/Passport</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Marital Status</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Mobile Number</th>
                                    <th scope="col">Home Tel</th>
                                    <th scope="col">KRA PIN Num</th>
                                    <th scope="col">NHIF PIN Num</th>
                                    <th scope="col">NSSF PIN Num</th>
                                    <th scope="col">Postal Address</th>
                                    <th scope="col">Post Code</th>
                                    <th scope="col">Residence</th>
                                    <th scope="col">Town</th>
                                    <th scope="col">Home County</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($employees as $row) : ?>
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
                                        <td><?= $row['department'] ?></td>
                                        <td>
                                            <a href="<?= base_url('ReadEmployees/UpdateEmployees/'.$row['staff_number'])?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="<?= base_url('ReadEmployees/DeleteEmployees/'.$row['staff_number'])?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
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

</body>
</html>