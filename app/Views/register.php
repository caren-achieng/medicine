<?php include ('sidemenu.php')?>
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
</head>
<body>
<div class="position-absolute form">
    <h1>Register Employee</h1>
<form class="row g-4" style="max-height: 600px" method="post" action="/register">
    <div class="row">
    <div class="col-12">
        <label for="staffid" class="text-white form-label">Staff ID</label>
        <input type="text" class="form-control" id="staffid" placeholder="Staff ID">
    </div>
    <div class="col-md-6">
        <label for="fname" class=" text-white form-label">First Name</label>
        <input type="text" class="form-control" id="fname" placeholder="First Name">
    </div>
    <div class="col-md-6">
        <label for="lname" class="text-white form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" placeholder="Last Name">
    </div>
    <div class="col-md-6 pd-telephone-input">
        <label for="tel" class="text-white form-label">Phone Number</label>
        <input type="tel" class="form-control" id="tel" placeholder="Phone Number">
    </div>
    <div class="col-md-6">
        <label for="email" class="text-white form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="col-md-6">
        <label for="department" class="text-white form-label">Department</label>
        <select id="department" class="form-select">
            <option selected>Outpatient department (OPD)</option>
            <option>Surgical Department</option>
            <option>Inpatient Service (IP)</option>
            <option>Nursing Department</option>
            <option>Physical Medicine</option>
            <option>Paramedical Department</option>
            <option>Rehabilitation Department</option>
            <option>Dietary Department</option>
            <option>Pharmacy Department</option>
            <option>Operation Theatre Complex (OT)</option>
            <option>Radiology Department (X-ray)</option>
            <option>Human Resources Department (HR)</option>
        </select>
    </div>
        <div class="col-md-6">
            <label for="usertype" class="text-white form-label">Employee type</label>
            <select id="department" class="form-select">
                <option selected>Regular Employee</option>
                <option>Admin</option>
            </select>
        </div>
</div>
    <div class="row">
<div class="col-12 ml-5 col-sm8- offset-sm-2 offset-md-3 pt-3 from-wrapper">
        <button type="submit" class="btn mb-4 btn-warning">Register employee</button>
    </div>
    </div>
</form>
</div>
</body>
</html>