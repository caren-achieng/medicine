<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Leave Application</title>
    <style>
        .des-1 {
            background-image: linear-gradient(112.5deg, rgb(214, 214, 214) 0%, rgb(214, 214, 214) 10%, rgb(195, 195, 195) 10%, rgb(195, 195, 195) 53%, rgb(176, 176, 176) 53%, rgb(176, 176, 176) 55%, rgb(157, 157, 157) 55%, rgb(157, 157, 157) 60%, rgb(137, 137, 137) 60%, rgb(137, 137, 137) 88%, rgb(118, 118, 118) 88%, rgb(118, 118, 118) 91%, rgb(99, 99, 99) 91%, rgb(99, 99, 99) 100%), linear-gradient(157.5deg, rgb(214, 214, 214) 0%, rgb(214, 214, 214) 10%, rgb(195, 195, 195) 10%, rgb(195, 195, 195) 53%, rgb(176, 176, 176) 53%, rgb(176, 176, 176) 55%, rgb(157, 157, 157) 55%, rgb(157, 157, 157) 60%, rgb(137, 137, 137) 60%, rgb(137, 137, 137) 88%, rgb(118, 118, 118) 88%, rgb(118, 118, 118) 91%, rgb(99, 99, 99) 91%, rgb(99, 99, 99) 100%), linear-gradient(135deg, rgb(214, 214, 214) 0%, rgb(214, 214, 214) 10%, rgb(195, 195, 195) 10%, rgb(195, 195, 195) 53%, rgb(176, 176, 176) 53%, rgb(176, 176, 176) 55%, rgb(157, 157, 157) 55%, rgb(157, 157, 157) 60%, rgb(137, 137, 137) 60%, rgb(137, 137, 137) 88%, rgb(118, 118, 118) 88%, rgb(118, 118, 118) 91%, rgb(99, 99, 99) 91%, rgb(99, 99, 99) 100%), linear-gradient(90deg, rgb(195, 195, 195), rgb(228, 228, 228));
            background-blend-mode: overlay, overlay, overlay, normal;
        }

        .bg-grad {
            background-image: linear-gradient(to right, rgb(137, 184, 247), rgb(128, 79, 218));
        }
    </style>
    <script>
        $(function() {
            changeLeave()
            $.ajax({
                url: 'http://localhost:8080/LeaveController/gender',
                success: function(result) {
                    if (result.gender == 'male')
                        $("option[value='maternity']").remove()
                    else
                        $("option[value='paternity']").remove()

                    checkLeaveBalance()
                }
            })
        })
    </script>
</head>

<body>

    <div class="flex justify-center items-center bg-grad w-full h-screen py-6 select-none">

        <div class="w-11/12 mx-auto rounded h-full bg-gray-100 p-8">

            <!-- ERROR MESSAGES-->

            <?php
            if (isset($_SESSION['diff'])) { ?>
                <?php unset($_SESSION['diff'])?>
                <div class="w-11/12 rounded text-red-800 bg-red-200 relative p-4">
                    <span onclick="this.parentElement.style.display='none'" class="absolute right-0 top-0 text-4xl cursor-pointer">&times;
                    </span>
                    <h3>Leave Application</h3>
                    <small>Error: Difference between the two dates is less than 1</small>
                </div>
            <?php  }

            if (isset($_SESSION['negative'])) { ?>
                <?php unset($_SESSION['negative'])?>
                <div class="w-11/12 rounded text-red-800 bg-red-200 relative p-4">
                    <span onclick="this.parentElement.style.display='none'" class="absolute right-0 top-0 text-4xl cursor-pointer">&times;
                    </span>
                    <h3>Leave Application Failed</h3>
                    <small>Error: You have applied for excess leave days!</small>
                </div>
            <?php }

            if (isset($_SESSION['validation'])) { ?>
                <?php unset($_SESSION['validation'])?>
                <div class="w-11/12 rounded text-red-800 bg-red-200 relative p-4">
                    <span onclick="this.parentElement.style.display='none'" class="absolute right-0 top-0 text-4xl cursor-pointer">&times;
                    </span>
                    <h3>Input Error(s)</h3>
                    <small>
                        <?= $_SESSION['validation']->listErrors() ?>
                    </small>
                </div>
            <?php } ?>

            <!-- SUCCESS MESSAGE-->

            <?php if (isset($_SESSION['created'])) { ?>
                <?php unset($_SESSION['created'])?>
                <div class="w-11/12 rounded text-red-800 bg-red-200 relative p-4">
                    <span onclick="this.parentElement.style.display='none'" class="absolute right-0 top-0 text-4xl cursor-pointer">&times;</span>
                    <h2>Success</h2>
                    <p>Leave Application Successful: Pending Review</p>
                </div>

            <?php } ?>

            <div class="header flex flex-row justify-center relative">
                <div class="left-0 absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" onclick="back()" class="w-10 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h1 class="text-4xl text-center">
                    Apply For Leave
                </h1>
            </div>
            <form action="<?= base_url('/LeaveController/newLeave') ?>" method="post" class="flex flex-col my-6" enctype="multipart/form-data">
                <div class="leave-type flex flex-row w-full justify-evenly my-4">
                    <div class="flex flex-col w-1/4 my-2">
                        <div>
                            <label for="userName" class="text-xl">
                                Employee Name
                            </label>
                        </div>
                        <div class="my-1">
                            <input type="text" name="userName" id="userName" class="w-full p-2 rounded border-2 border-gray-400 cursor-not-allowed select-none" value="<?= $_SESSION['userName'] ?>" disabled>
                        </div>
                    </div>
                    <div class="flex flex-col w-1/4 my-2">
                        <div>
                            <label for="leaveType" class="text-xl">
                                Leave Type
                            </label>
                        </div>
                        <div class="my-1">
                            <select name="leaveType" id="leaveType" class="w-full p-2 rounded border-2 border-gray-400" onchange="changeLeave(); checkLeaveBalance()">
                                <option value="maternity">Maternity</option>
                                <option value="paternity">Paternity</option>
                                <option value="special" selected>Special Leave</option>
                                <option value="compassionate">Compassionate</option>
                                <option value="sick">Sick</option>
                                <option value="sabbatical">Sabbatical</option>
                                <option value="absence">Leave of Absence</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col w-1/4 my-2">
                        <div>
                            <label for="leaveBalance" class="text-xl">
                                Current Leave Balance
                            </label>
                        </div>
                        <div class="my-1">
                            <input type="text" name="leaveBalance" id="leaveBalance" class="w-full p-2 rounded border-2 border-gray-400 cursor-not-allowed select-none" value="200" disabled>
                        </div>
                    </div>
                </div>
                <div class="leave-type flex flex-row w-full justify-evenly my-4">
                    <div class="flex flex-col w-1/4 my-2">
                        <div>
                            <label for="startDate" class="text-xl">
                                Start Date
                            </label>
                        </div>
                        <div class="my-1">
                            <input type="date" name="startDate" id="startDate" class="w-full p-2 rounded border-2 border-gray-400" onchange="autoDate($('#leaveType').val())">
                        </div>
                    </div>
                    <div class="flex flex-col w-1/4 my-2">
                        <div>
                            <label for="endDate" class="text-xl" id="endDateLabel">
                                End Date
                            </label>
                        </div>
                        <div class="my-1">
                            <input type="date" name="endDate" id="endDate" class="w-full p-2 rounded border-2 border-gray-400">
                        </div>
                    </div>
                    <div class="flex flex-col w-1/4 my-2">
                        <div>
                            <label for="mobile" class="text-xl">
                                Mobile
                            </label>
                        </div>
                        <div class="my-1 flex inline-flex border-2 border-gray-400 rounded">
                            <select name="countryCode" id="countryCode" class="p-2 flex-0">
                                <option value="+254">+254</option>
                            </select>
                            <input type="text" name="mobile" id="mobile" class="flex-auto p-2 w-auto focus:border-transparent" placeholder="727143069">
                        </div>
                    </div>
                </div>
                <div class="leave-type flex flex-row w-full justify-evenly my-4">
                    <div class="flex flex-col w-1/3 my-2">
                        <div>
                            <label for="reason" class="text-xl">
                                Reason
                            </label>
                        </div>
                        <div class="my-1">
                            <textarea name="reason" id="" class="w-full p-2 rounded border-2 border-gray-400" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col w-1/4 my-2">
                        <div>
                            <label for="supportingDocument" class="text-xl">
                                Supporting Document <small class="text-sm">(optional)</small>
                            </label>
                        </div>
                        <div class="my-1">
                            <input type="file" name="supportingDocument" id="supportingDocument" class="p-2">
                        </div>
                    </div>
                </div>
                <div class="leave-type flex flex-row w-full justify-evenly my-4">
                    <button type="submit" class="w-96 bg-red-600 p-2 rounded text-2xl text-white text-center">
                        Apply
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    function changeLeave() {
        var choice = $('#leaveType').val()

        if (choice == 'maternity' || choice == 'paternity' || choice == 'sabbatical') {
            $('#endDateLabel').hide()
            $('#endDate').hide()
            autoDate(choice)
        } else {
            $('#endDateLabel').show()
            $('#endDate').show().val('')
        }
    }

    function checkLeaveBalance() {
        var leave = $('#leaveType').val()

        $.ajax({
            url: "http://localhost:8080/LeaveController/leaveBalance/" + leave,
            success: function(result) {
                $('#leaveBalance').val(result[leave])
            }
        })
    }

    function newDate(date, days) {
        var result = new Date(date);
        result.setDate(result.getDate() + days);
        return result.toISOString().slice(0, 10);
    }

    function autoDate(leave) {

        var startdate = $('#startDate').val()

        if (startdate == '' || startdate == null) return;

        if (leave == 'sabbatical')
            $('#endDate').val(newDate(startdate, 180))

        if (leave == 'maternity' || leave == 'paternity')
            $('#endDate').val(newDate(startdate, 90))

    }

    function back() {
        window.location.href = 'http://localhost:8080/index.php/ClientDashboard';
    }
</script>

</html