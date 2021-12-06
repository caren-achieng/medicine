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
            $.ajax({
                url: '../backend/gender.php',
                success: function(result) {
                    var check = JSON.parse(result)
                    if (check.gender == 'male')
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
    <!-- <nav>
        <div class="w-full bg-blue-400 text-white flex flex-row justify-between p-4">
            <div>
                <h1 class="text-2xl font-semibold bg-white p-4 uppercase text-blue-400">
                    Medicing
                </h1>
            </div>
        </div>
    </nav> -->



    <div class="flex justify-center items-center bg-grad w-full py-6 select-none">

        <div class="w-11/12 mx-auto rounded h-full bg-gray-100 p-8">

            <!-- ERROR MESSAGES-->

            <?php
            if (isset($_REQUEST)) {
                if (isset($_REQUEST['message'])) { ?>
                    <div class="w3-display-container w3-container w3-green w3-section w-full">
                        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
                        <h3>Leave Application</h3>
                        <p>Message: <?php echo $_REQUEST["message"] ?></p>
                    </div>
                <?php }

                if (isset($_REQUEST['excessDays'])) { ?>
                    <div class="w3-display-container w3-container w3-red w3-section w-full">
                        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
                        <h3>Leave Application Failed</h3>
                        <p>Error: Applied for Too Many Days!</p>
                    </div>
                <?php }

                if (isset($_REQUEST['noDays'])) { ?>
                    <div class="w3-display-container w3-container w3-red w3-section w-full">
                        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
                        <h3>Leave Application Failed</h3>
                        <p>Error: No more Leave Days left!</p>
                    </div>
            <?php }
            } ?>

            <div class="header">
                <h1 class="text-4xl text-center">
                    Apply For Leave
                </h1>
            </div>
            <form action="../backend/process_leave.php" method="post" class="flex flex-col my-6" enctype="multipart/form-data">
                <div class="leave-type flex flex-row w-full justify-evenly my-4">
                    <div class="flex flex-col w-1/4 my-2">
                        <div>
                            <label for="userName" class="text-xl">
                                Employee Name
                            </label>
                        </div>
                        <div class="my-1">
                            <input type="text" name="userName" id="userName" class="w-full p-2 rounded border-2 border-gray-400 cursor-not-allowed select-none" disabled>
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
                            <input type="date" name="startDate" id="startDate" class="w-full p-2 rounded border-2 border-gray-400">
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
        } else {
            $('#endDateLabel').show()
            $('#endDate').show()
        }
    }

    function checkLeaveBalance() {
        var leave = $('#leaveType').val()

        $.ajax({
            url: "../backend/leave_balance.php?leaveType=" + leave,
            success: function(result) {
                var balance = JSON.parse(result)
                $('#leaveBalance').val(balance[leave])
            }
        })
    }
</script>

</html>