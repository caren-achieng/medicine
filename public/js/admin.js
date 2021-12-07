function loadTable(role) {
    $(function() {
        $.ajax({
            url: "http://localhost:8080/Review/viewUsers",
            success: function(result) {
                console.log(result)
                $.each(result, function(x, i) {
                    $('#users').fadeIn()
                    $('#users-table').fadeIn().append('<tr><td>' + i.leave_id + '</td><td>' + i.staff_number + '</td><td>' + i.leave_type + '</td><td>' + i.start_date + '</td><td>' + i.end_date + '</td><td>' + i.leave_status + '</td></tr>');
                })
            }
        });
    });
}