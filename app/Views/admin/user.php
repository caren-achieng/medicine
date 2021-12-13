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
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/css/dashboard.css?v=1.5.0" rel="stylesheet" />
  <style>
    button:hover{
      background: #f96332;
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
            <a class="navbar-brand" href="#pablo">User Profile</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation"></div>
        </div>
        <div class="welcome">
          <a href="/user" class="navbar-brand">
            Welcome, <?= session()->get('userName')?>
          </a>
        </div>
      </nav>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form method = "post" action = "/Update" name="edit-form">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Department (disabled)</label>
                        <input type="text" class="form-control" disabled placeholder="Company" value="<?php echo $user[0]['departmentname']?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $user[0]['email'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="postaddress" placeholder="Home Address" value="<?php echo $user[0]['postaddress'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="town" placeholder="City" value="<?php echo $user[0]['town']?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>County</label>
                        <input type="text" class="form-control" name="county" placeholder="County" value="<?php echo $user[0]['county']?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="text" class="form-control" name="postcode" placeholder="ZIP Code" value="<?php echo $user[0]['postcode']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for="status" class="font text-dark mt-2 form-label">Marital Status</label>
                          <select name="status" class="font form-select form-control">
                              <option selected readonly value="<?php echo $user[0]['maritalstatus']?>"><?php echo $user[0]['maritalstatus']?></option>
                              <option>Married</option>
                              <option>Widowed</option>
                              <option>Separated</option>
                              <option>Divorced</option>
                              <option>Single</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-4 mt-2">
                      <div class="form-group">
                      <label for="submit" class="font text-dark mt-2 form-label"></label>
                        <button type="submit" name="id" class="form-control" id="submit" value="<?php echo $user[0]['staff_number']?>">Update</button>
                      </div>
                    </div>
                    <div class="col-4 mt-4">
                    <?php if(session()->has('message')){?>
                    <div class="alert alert-success rounded-pill" role="alert">
                          <?= session()->get('message');?>   
                          <?php session()->remove('message');?>
                    </div>
                  <?php } ?>
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


  <script src="/js/plugins/bootstrap-notify.js"></script>

  <script src="/js/demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

  <script>
$(function() {
  $("form[name = 'edit-form']").validate({

    rules: {

      email: {
        email: true,
        required: true,
        minlength: 11,
        maxlength: 50,
      },
      postaddress: {
        required: true,
        minlength: 5,
        maxlength: 9
      },
      postcode: {
        required:true,
      },
      town: {
        required: true,
        minlength: 3,
        maxlength: 20
      },
      county:{
        required: true,
      },
      status:{
        required: true,
      }
    },
    messages: {
      email: {
        email: "Invalid email",
        required: "Field is required",
        minlength: "Minimum length 11 characters",
        maxlength: "Maximum length 50 characters",
      },
      postaddress: {
        minlength: "Minimum length 5 characters",
        maxlength: "Maximum length 9 characters"
      },
      postcode: {
        required: "Field is required",
      },
      town: {
        minlength: "Minimum length 3 characters",
        maxlength: "Maximum length 20 characters"
      },
      county: {
        required: "Field is required",
      },
      status:{
          required: "Field is required",
      }
    },
    submitHandler: function (form) {
          form.submit();
        }
    });     
});
  </script>
</body>

</html>