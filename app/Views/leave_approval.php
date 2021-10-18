<?php include ('sidemenu.php')?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leave Approval</title>
    <link rel="stylesheet" href="/css/leave_approval.css">
    
</head>
<body>

    <form method="post" action="adminmethods.php">
    <div class="details employee">
        <div class="leaveDetails">
            <div class="cardHeader">
                <h2>Leave Approval</h2>
            </div>
            <label for="staff_number">Staff number:</label> 
            <input type="text" placeholder="" name="staff_number" class="admin_input" id="staff_number" value="Demo" readonly></br>
           <label for="name">Name: </label>
           <input type="text" placeholder="" name="name" class="admin_input" id="name" value="Demo"readonly></br>
           <label for="department">Department:</label>
           <input type="text" placeholder="" name="department" class="admin_input" id="department"  value="Demo"readonly></br>
           <label for="leave_type">Leave type:</label>
           <input type="text" placeholder="" name="leave_type" class='admin_input' id="leave_type" value="Demo" readonly></br>
           <label for="start_date">Start date:</label>
           <input type="text" placeholder="" name="start_date" class='admin_input' id="start_date" value="Demo" readonly>
           <label for="end_date">End date:</label>
           <input type="text" placeholder="" name="end_date" class='admin_input' id="end_date" value="Demo" readonly></br>
           <label for="duration">Duration:</label>
           <input type="text" placeholder="" name="duration" class='admin_input' id="duration" value="Demo" readonly></br>



            <div class="button">
           <input class="btn approve" type="submit" name="approve" value="Approve"> 
           <input class="btn deny" type="submit" name="deny" value="Deny">
           </div>

        </div>
    </div>
</form>
    </div>
</body>
</html>
