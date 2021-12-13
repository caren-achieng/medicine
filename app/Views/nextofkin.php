<?php include('admin/sidebar.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/dashboard.css?v=1.5.0" rel="stylesheet" />
<!--    <link rel="stylesheet" href="/css/register.css">-->
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
                    <form id="self_registration" class="row g-2" method="post" action="/registernok">
                        <div class="row">
                            <h1 class="mt-4 text-dark fs-3 text-center">Next of Kin Details</h1>
                            <div class="col-8 ">
                                <label for="nokname" class="font text-dark mt-2 form-label">Person 1: Name</label>
                                <input type="text" class="font form-control" name="nokname">
                            </div>

                            <div class="col-8">
                                <label for="nokemail" class="font text-dark mt-2 form-label">Person 1: Email</label>
                                <input type="email" class="font form-control" name="nokemail">
                            </div>

                            <div class="col-8">
                                <label for="noktel" class="font text-dark mt-2 form-label">Person 1: Mobile Number</label>
                                <input type="tel" class="font form-control" name="noktel">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 ml-5 col-sm8- offset-sm-2 offset-md-5 pt-4 from-wrapper">
                                <button type="submit" class="btn mb-4 top-100 start-50 translate-middle position-absolute">Next</button>
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
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

<script>
    if ($("#self_registration").length > 0) {
        $("#self_registration").validate({

            rules: {
                spousename: {
                    required: true,
                    minlength: 1,
                    maxlength: 20
                },
                spousenum: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                spouseemail: {
                    required: true,
                    minlength: 6,
                    maxlength: 50
                },
                occupation: {
                    required: true,
                    minlength: 1,
                    maxlength: 50
                }
            },

            messages: {
                spousename: {
                    required:"Field is required" ,
                    minlength: "Minimum length 1 characters",
                    maxlength: "Maximum length 20 characters"
                },
                spousenum: {
                    required: "Field is required",
                    minlength: "Minimum length 10 characters",
                    maxlength: "Maximum length 10 characters"
                },
                spouseemail: {
                    required: "Field is required",
                    minlength: "Minimum length 6 characters",
                    maxlength: "Maximum length 50 characters"
                },
                occupation: {
                    required: "Field is required",
                    minlength: "Minimum length 1 characters",
                    maxlength: "Maximum length 50 characters"
                }
            },
        });
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script>
    if ($("#self_registration").length > 0) {
        $("#self_registration").validate({
            rules: {
                nokname: {
                    required: true,
                    minlength: 1,
                    maxlength: 20
                },
                noktel: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                nokemail: {
                    required: true,
                    minlength: 6,
                    maxlength: 50
                }
            },

            messages: {
                nokname: {
                    required:"Field is required" ,
                    minlength: "Minimum length 1 characters",
                    maxlength: "Maximum length 20 characters"
                },
                noktel: {
                    required: "Field is required",
                    minlength:"Minimum length 10 characters",
                    maxlength:"Maximum length 10 characters"
                },
                nokemail: {
                    required: "Field is required",
                    minlength: "Minimum length 6 characters",
                    maxlength: "Maximum length 50 characters"
                }
            },
        })
    }
</script>
</body>
</html>