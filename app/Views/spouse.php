<?php include('sidemenu.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/register.css">
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
        <form id="self_registration" class="row g-2" method="post" action="/registerspouse">
            <div class="row">
                <h1 class="fonts mt-4 text-dark">Spouse Details</h1>
                <div class="col-6 ">
                    <label for="spousename" class="font text-dark mt-2 form-label">Name</label>
                    <input type="text" class="font form-control" name="spousename">
                </div>
                <div class="col-6 ">
                    <label for="spousenum" class="font text-dark mt-2 form-label">Mobile Number</label>
                    <input type="tel" class="font form-control" name="spousenum">
                </div>
                <div class="col-6 ">
                    <label for="spouseemail" class="font text-dark mt-2 form-label">Email</label>
                    <input type="email" class="font form-control" name="spouseemail">
                </div>
                <div class="col-6 ">
                    <label for="occupation" class="font text-dark mt-2 form-label">Occupation</label>
                    <input type="text" class="font form-control" name="occupation">
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
</body>
</html>