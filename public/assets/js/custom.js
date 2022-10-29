function get_students() {
	var class_id = $('#class_id').find(":selected").val();
	request = $.ajax({
        url: "/get_students",
        type: "get",
        data: "class_id="+class_id
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
		
		$("#std_div").html(response);
        console.log(response);
    });
}
function see_attendence() {
	var today_date = $('.hassaan').val();
	var class_id = $('#class_id').find(":selected").val();
	request = $.ajax({
        url: "/see_attendence",
        type: "get",
        data: "class_id="+class_id+'&today_date='+today_date
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
		
		$("#std_div").html(response);
        console.log(response);
    });
	
}