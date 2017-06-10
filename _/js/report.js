// fire IncomingReservation report for specifi company
$(document).on("click",".IncomingReservation",function(){
    company_id = $(this).data('company_id');
    var data = {
    company_id : company_id    
    }
    $.post("ReportController/print_incoming_reservation_report",data,function(data){   
        result = JSON.parse(data);
        $("#ReservationReportTable").html(result.report);
	});
});
// fire OutgoingReservation report
$(document).on("click",".OutgoingReservation",function(){
    company_id = $(this).data('company_id');
    var data = {
    company_id : company_id    
    }
    $.post("ReportController/print_outgoing_reservation_report",data,function(data){   
        result = JSON.parse(data);
        $("#ReservationReportTable").html(result.report);
	});
});
// fire ActualReservation report
$(document).on("click",".ActualReservation",function(){
    company_id = $(this).data('company_id');
    var data = {
    company_id : company_id    
    }
    $.post("ReportController/print_actual_reservation_report",data,function(data){   
        result = JSON.parse(data);
        $("#ReservationReportTable").html(result.report);
	});
});

