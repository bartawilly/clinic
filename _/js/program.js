// prepare update
$(document).on( "click",".ProgramEditBtn",function (){

    var id  =  $(this).data('id');
    var name =  $(this).data('name');
    var discription =  $(this).data('discription');
    var total_cost =  $(this).data('total_cost');
    var minimum_payment =  $(this).data('minimum_payment');
    $(".modal-body #program_id_edit").val( id );
    $(".modal-body #program_name_edit").val( name );
     $(".modal-body #program_discription_edit").val( discription );
    $(".modal-body #program_total_cost_edit").val( total_cost );
    $(".modal-body #program_minimum_payment_edit").val( minimum_payment );
    });
// prepare delete 
$(document).on( "click",".ProgramDeleteBtn",function (){
    var id =  $(this).data('id');
    $(".modal-body #program_id_delete").val( id );
    });
// search part 
$(document).on( "keyup","#program_search",function (){
    var data = {    
        search_for : $('#program_search').val()
	};
        $.post("ProgramController/print_programs_as_search_table",data,function(data){   
        $("#ProgramsTable").empty();
        $("#ProgramsTable").append(data);
	});      
});
// add program using ajax
$(document).on("click", "#AddProgramButton", function ()
{
    var x = $("#AddProgramForm").valid();

    if (x) { 
        var url = $("#AddProgramForm").attr("action");
    var data = $("#AddProgramForm").serializeArray();
    $.post(url, data, function (data)
    {
        $("#ProgramsTable").empty();
        $("#ProgramsTable").append(data);
    });
    $(this).closest('form').find("input, textarea").val("");
    }
    
});
// update program using ajax
$(document).on("click", "#UpdateProgramButton", function ()
{
    x = $("#UpdateProgramForm").valid();
    if(x)
    {
        var url = $("#UpdateProgramForm").attr("action");
    var data = $("#UpdateProgramForm").serializeArray();
    $.post(url, data, function (data)
    {
        $("#ProgramsTable").empty();
        $("#ProgramsTable").append(data);
    });
    $('#EditProgramModal').modal('hide');
    }
});
// delete program using ajax
$(document).on( "click","#DelProgramButton",function (){
    var url = $("#DelProgramForm").attr("action");
    var data = $("#DelProgramForm").serializeArray();
    $.post(url,data,function(data){   
        $("#ProgramsTable").empty();
        $("#ProgramsTable").append(data);
	});
});