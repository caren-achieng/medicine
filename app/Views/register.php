<?php include('sidemenu.php')?>
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
    <script src="/JS/FormValidation.js"></script>
</head>
<body>
<div class="container position-absolute form">
<div class="row justify-content-evenly">
        <h1 class="fonts text-dark">Self Registration</h1>
            <form class="container row g-2" style="max-height: 600px" method="post" action="/register">
                <div class="row">
                    <div class="col-3">
                        <label for="id" class=" font text-dark mt-2 form-label">ID/Passport number</label>
                        <input type="text" class=" font form-control" id="id">
                    </div>
                    <div class="col-3">
                        <label for="title" class="font text-dark mt-2 form-label">Courtesy Title</label>
                        <select id="title" class="font form-select">
                            <option selected></option>
                            <option>Mr.</option>
                            <option>Mrs.</option>
                            <option>Ms.</option>
                            <option>Dr.</option>
                            <option>Miss</option>
                            <option>Sir</option>
                            <option>Madam</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="fname" class=" font text-dark mt-2 form-label">First Name</label>
                        <input type="text" class=" font form-control" id="fname">
                    </div>
                    <div class="col-3">
                        <label for="mname" class=" font text-dark mt-2 form-label">Middle Name</label>
                        <input type="text" class=" font form-control" id="mname">
                    </div>
                    <div class="col-3">
                        <label for="lname" class="font text-dark mt-2 form-label">Last Name</label>
                        <input type="text" class="font form-control" id="lname">
                    </div>
                    <div class="col-3">
                        <label for="postaddress" class="font text-dark mt-2 form-label">Postal Address</label>
                        <input type="text" class="font form-control" id="postaddress">
                    </div>
                    <div class="col-3">
                        <label for="pcode" class="font text-dark mt-2 form-label">Post Code</label>
                        <input type="text" class="font form-control" id="pcode">
                    </div>
                    <div class="col-3">
                        <label for="town" class="font text-dark mt-2 form-label">Town</label>
                        <input type="text" class="font form-control" id="town">
                    </div>
                    <div class="col-3">
                        <label for="county" class="font text-dark mt-2 form-label">Home County</label>
                            <select id="department" name="homecounty" class="font form-select">
                                <option value=""></option>
                                <option value="1">Baringo</option>
                                <option value="2">Bomet</option>
                                <option value="3">Bungoma</option>
                                <option value="4">Busia</option>
                                <option value="5">Elgeyo Marakwet</option>
                                <option value="6">Embu</option>
                                <option value="48">Foreigner</option>
                                <option value="7">Garissa</option>
                                <option value="8">Homa Bay</option>
                                <option value="9">Isiolo</option>
                                <option value="10">Kajiado</option>
                                <option value="11">Kakamega</option>
                                <option value="12">Kericho</option>
                                <option value="13">Kiambu</option>
                                <option value="14">Kilifi</option>
                                <option value="15">Kirinyaga</option>
                                <option value="16">Kisii</option>
                                <option value="17">Kisumu</option>
                                <option value="18">Kitui</option>
                                <option value="19">Kwale</option>
                                <option value="20">Laikipia</option>
                                <option value="21">Lamu</option>
                                <option value="22">Machakos</option>
                                <option value="23">Makueni</option>
                                <option value="24">Mandera</option>
                                <option value="25">Marsabit</option>
                                <option value="26">Meru</option>
                                <option value="27">Migori</option>
                                <option value="28">Mombasa</option>
                                <option value="29">Murang'a</option>
                                <option value="30">Nairobi</option>
                                <option value="31">Nakuru</option>
                                <option value="32">Nandi</option>
                                <option value="33">Narok</option>
                                <option value="34">Nyamira</option>
                                <option value="35">Nyandarua</option>
                                <option value="36">Nyeri</option>
                                <option value="37">Samburu</option>
                                <option value="38">Siaya</option>
                                <option value="39">Taita Taveta</option>
                                <option value="40">Tana River</option>
                                <option value="41">Tharaka Nithi</option>
                                <option value="42">Trans Nzoia</option>
                                <option value="43">Turkana</option>
                                <option value="44">Uasin Gishu</option>
                                <option value="45">Vihiga</option>
                                <option value="46">Wajir</option>
                                <option value="47">West Pokot</option>
                            </select>
                    </div>
                    <div class="col-3">
                        <label for="status" class="font text-dark mt-2 form-label">Marital Status</label>
                        <selector id="status" name="status" class="font form-select required">
                            <option value="1" selected> </option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="3">Separated</option>
                            <option value="3">Divorced</option>
                            <option value="3">Single</option>
                        </selector>
                    </div>
                    <div class="col-3">
                        <label for="religion" class="font text-dark mt-2 form-label">Religion</label>
                        <selector id="religion" name="religion" class="font form-select">
                            <option value="1" selected></option>
                            <option value="2">Christian</option>
                            <option value="3">Muslim</option>
                            <option value="4">Hindu</option>
                            <option value="5">Budhist</option>
                            <option value="6">Sikh</option>
                            <option value="7">Other</option>
                        </selector>
                    </div>
                    <div class="col-3">
                        <label for="town" class="font text-dark mt-2 form-label">Town</label>
                        <input type="text" class="font form-control" id="town">
                    </div>
                    <div class="col-3 pd-telephone-input">
                        <label for="tel" class="font text-dark mt-2 form-label">Home Tel</label>
                        <input type="tel" class="font form-control" id="tel">
                    </div>
                    <div class="col-3 ">
                        <label for="mobile" class="font text-dark mt-2 form-label">Mobile Number</label>
                        <input type="tel" class="font form-control" id="mobile">
                    </div>
                    <div class="col-3 ">
                        <label for="email" class="font text-dark mt-2 form-label">Personal Email</label>
                        <input type="email" class="font form-control" id="email">
                    </div>
                    <div class="col-3 ">
                        <label for="kra" class="font text-dark mt-2 form-label">KRA PIN</label>
                        <input type="text" class="font form-control" id="kra">
                    </div>
                    <div class="col-3 ">
                        <label for="nhif" class="font text-dark mt-2 form-label">NHIF Card Number</label>
                        <input type="text" class="font form-control" id="nhif">
                    </div>
                    <div class="col-3 ">
                        <label for="nssf" class="font text-dark mt-2 form-label">NSSF Card Number</label>
                        <input type="text" class="font form-control" id="nssf">
                    </div>
                    <div class="col-3">
                        <label for="department" class="font text-dark mt-2 form-label">Department</label>
                        <select id="department" class="font form-select">
                            <option selected></option>
                            <option>Outpatient department (OPD)</option>
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
                </div>

                <div class="row">
                    <h1>Spouse Details</h1>
                    <div class="col-6 ">
                        <label for="spousename" class="font text-dark mt-2 form-label">Name</label>
                        <input type="text" class="font form-control" id="spousename">
                    </div>
                    <div class="col-6 ">
                        <label for="spousenum" class="font text-dark mt-2 form-label">Mobile Number</label>
                        <input type="tel" class="font form-control" id="spousenum">
                    </div>
                    <div class="col-6 ">
                        <label for="spouseemail" class="font text-dark mt-2 form-label">Email</label>
                        <input type="email" class="font form-control" id="spouseemail">
                    </div>
                    <div class="col-6 ">
                        <label for="occupation" class="font text-dark mt-2 form-label">Occupation</label>
                        <input type="text" class="font form-control" id="occupation">
                    </div>
                </div>

                <div class="row">
                    <h1>Next of Kin Details</h1>
                    <div class="col-6 ">
                        <label for="nokname" class="font text-dark mt-2 form-label">Person 1: Name</label>
                        <input type="text" class="font form-control" id="nokname">
                    </div>
                    <div class="col-6 ">
                        <label for="noknum" class="font text-dark mt-2 form-label">Person 1: Mobile Number</label>
                        <input type="tel" class="font form-control" id="noknum">
                    </div>
                    <div class="col-6 ">
                        <label for="nokemail" class="font text-dark mt-2 form-label">Person 1: Email</label>
                        <input type="email" class="font form-control" id="nokemail">
                    </div>
                    <div class="col-6 ">
                        <label for="nok2name" class="font text-dark mt-2 form-label">Person 2: Name</label>
                        <input type="text" class="font form-control" id="nok2name">
                    </div>
                    <div class="col-6 ">
                        <label for="nok2num" class="font text-dark mt-2 form-label">Person 2: Mobile Number</label>
                        <input type="tel" class="font form-control" id="nok2num">
                    </div>
                    <div class="col-6 ">
                        <label for="nok2email" class="font text-dark mt-2 form-label">Person 2: Email</label>
                        <input type="email" class="font form-control" id="nok2email">
                    </div>
                </div>
                <div class="row">
                    <h1>Emergency Contact Details</h1>
                    <div class="col-6 ">
                        <label for="emergencyname" class="font text-dark mt-2 form-label">Person 1: Name</label>
                        <input type="text" class="font form-control" id="emergencyname">
                    </div>
                    <div class="col-6 ">
                        <label for="emergencytel" class="font text-dark mt-2 form-label">Person 1: Mobile Number</label>
                        <input type="tel" class="font form-control" id="emergencytel">
                    </div>
                    <div class="col-6 ">
                        <label for="emergencyemail" class="font text-dark mt-2 form-label">Person 1: Email</label>
                        <input type="email" class="font form-control" id="emergencyemail">
                    </div>
                    <div class="col-6 ">
                        <label for="emergency2" class="font text-dark mt-2 form-label">Person 2: Name</label>
                        <input type="text" class="font form-control" id="emergency2">
                    </div>
                    <div class="col-6 ">
                        <label for="emergencytel2" class="font text-dark mt-2 form-label">Person 2: Mobile Number</label>
                        <input type="tel" class="font form-control" id="emergencytel2">
                    </div>
                    <div class="col-6 ">
                        <label for="emergencyemail2" class="font text-dark mt-2 form-label">Person 2: Email</label>
                        <input type="email" class="font form-control" id="emergencyemail2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 ml-5 col-sm8- offset-sm-2 offset-md-5 pt-4 from-wrapper">
                        <button type="submit" class="btn mb-4 button">Save</button>
                    </div>
                </div>
            </form>
</div>
    </div>
</body>
</html>