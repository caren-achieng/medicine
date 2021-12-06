<?php include('admin/sidebar.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
<div class="container form position-relative ">
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
        <form id="self_registration" class="row g-2" method="post" action="/registerpassword">
            <div class="row">
                <h1 class="fonts mt-4 text-dark">Set Password</h1>
                <div class="col-6 ">
                    <label for="password" class="font text-dark mt-2 form-label">Password</label>
                    <input type="password" class="font form-control" name="password">
                </div>
            </div>
            <div class="row">
                <div class="col-12 ml-5 col-sm8- offset-sm-2 offset-md-5 pt-4 from-wrapper">
                    <button type="submit" class="btn mb-4 button">Next</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

<script>
    if ($("#self_registration").length > 0) {
        $("#self_registration").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 255
                }
            },

            messages: {
                password: {
                    required: "Field is required",
                    minlength: "Minimum length 8 characters",
                    maxlength: "Maximum length 255 characters"
                }
            },
            })
        }
</script>
</body>
</html>