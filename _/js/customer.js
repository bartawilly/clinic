// ready function
$(document).ready(function ()
{
   $("#DependantDetails").hide();
});
// DependantPassportValidation
$(document).on( "change",".DependantPassportValidation",function (){
    var data = {
        passport_no : $(this).val()
    }
    $.post("CustomerController/DependantValidation", data, function (data)
    {
        result = JSON.parse(data);
        if(result.state === 0)
        {
            $("#DependantDetails").hide();
            $("#DependantValidation").html(result.error_message);
        }
        else 
        {
            $("#DependantValidation").empty();
            $("#DependantDetails").show();
            $("#joined_with").val(result.customer_name);
            $("#joined_with_name").val(result.customer_id);
        }
    });   
});
// edit dependant passport validation
$(document).on( "change","#edit_depandent_passport",function (){
    var data = {
        passport_no : $(this).val()
    }
    $.post("CustomerController/DependantValidation", data, function (data)
    {
        result = JSON.parse(data);
        if(result.state === 0)
        {
            
            $("#edit_validate_depandent_passport").html(result.error_message);
        }
        else 
        {
            $("#edit_validate_depandent_passport").empty();
            $("#edit_joined_with").val(result.customer_id);
            $("#edit_joined_with_name").val(result.customer_name);
        }
    });   
});
// prepare customer edit
$(document).on( "click",".CustomerEditBtn",function (){
 var customer_id = $(this).data('customerid');
 var customer_name_arabic = $(this).data('customernamearabic');
 var customer_name_english = $(this).data('customernameenglish');
 var cust_mobile = $(this).data('custmobile');
 var home_phone = $(this).data('homephone');
 var cust_email = $(this).data('custemail');
 var cust_address = $(this).data('custaddress');
 var customer_birth_date = $(this).data('customerbirthdate');
 var cust_country = $(this).data('custcountry');
 var cust_city = $(this).data('custcity');
 var customer_gender = $(this).data('customergender');
 var National_id = $(this).data('nationalid');
 var passport_no = $(this).data('passportno');
 var Passport_issue_State = $(this).data('passportissuestate');
 var Passport_Issuer = $(this).data('passportissuer');
 var Passport_issue_date = $(this).data('passportissuedate');
 var Passport_End_data = $(this).data('passportenddata');
 var Marital_status = $(this).data('maritalstatus');
 var nationality = $(this).data('nationality');
 var job = $(this).data('job');
 var passport_paper = $(this).data('passport_paper');
 var health_paper = $(this).data('health_paper');
 var national_id_paper = $(this).data('national_id_paper');
 var approvals_paper = $(this).data('approvals_paper');
 var photos_paper = $(this).data('photos_paper');
 var is_approved = $(this).data('is_approved');
 var paid = $(this).data('paid');
 var factory_no = $(this).data('factory_no');
 var program_id = $(this).data('program_id');
 var joined_with = $(this).data('joined_with');
 $(".modal-body #edit_customer_id").val( customer_id );
 $(".modal-body #edit_customer_name_arabic").val( customer_name_arabic );
 $(".modal-body #edit_customer_name_english").val( customer_name_english );
 $(".modal-body #edit_cust_mobile").val( cust_mobile );
 $(".modal-body #edit_home_phone").val( home_phone );
 $(".modal-body #edit_cust_email").val( cust_email );
 $(".modal-body #edit_cust_address").val( cust_address );
 $(".modal-body #edit_customer_birth_date").val( customer_birth_date );
 $(".modal-body #edit_cust_country").val( cust_country );
 $(".modal-body #edit_cust_city").val( cust_city );
 if ( customer_gender == 'male' ) $("#edit_customer_gender_male").prop('checked',true);
 else $("#edit_customer_gender_female").prop('checked',true);
 $(".modal-body #edit_National_id").val( National_id );
 $(".modal-body #edit_passport_no").val( passport_no );
 $(".modal-body #edit_Passport_issue_State").val( Passport_issue_State );
 $(".modal-body #edit_Passport_Issuer").val( Passport_Issuer );
 $(".modal-body #edit_Passport_issue_date").val( Passport_issue_date );
 $(".modal-body #edit_Passport_End_data").val( Passport_End_data );
 $(".modal-body #edit_Marital_status").val( Marital_status );
 $(".modal-body #edit_nationality").val( nationality );
 $(".modal-body #edit_job").val( job );
 $(".modal-body #edit_paid").val( paid );
 $(".modal-body #edit_factory_no").val(factory_no);
 $(".modal-body #edit_program_id").val( program_id );
 $(".modal-body #edit_joined_with").val( joined_with );
 if(passport_paper == 1) $("#edit_required_paper1").prop('checked',true);
 else $("#edit_required_paper1").prop('checked',false);
 if(health_paper == 1) $("#edit_required_paper2").prop('checked',true);
 else $("#edit_required_paper2").prop('checked',false);
 if(national_id_paper == 1) $("#edit_required_paper3").prop('checked',true);
 else $("#edit_required_paper3").prop('checked',false);
 if(approvals_paper == 1) $("#edit_required_paper4").prop('checked',true);
 else $("#edit_required_paper4").prop('checked',false);
 if(photos_paper == 1) $("#edit_required_paper5").prop('checked',true);
 else $("#edit_required_paper5").prop('checked',false);
 if(is_approved == 1) $("#edit_confirmation").prop('checked',true);
 else $("#edit_confirmation").prop('checked',false);
});
// prepare customer delete
$(document).on( "click",".CustomerDeleteBtn",function (){
    var customer_id = $(this).data('customer_id');
    $(".modal-body #customer_id_delete").val( customer_id );
});
// add customer using ajax
$(document).on("click", "#AddCustomerButton", function ()
{
    var x = $("#AddCustomerForm").valid();

    if(x)
    {
    var url = $("#AddCustomerForm").attr("action");
    var data = $("#AddCustomerForm").serializeArray();
    $.post(url, data, function (data)
    {
        $("#ReservationTable").empty();
        $("#ReservationTable").append(data);
        customers_per_program();
        total_customer();
    });
    $(this).closest('form').find("input, textarea").val("");
    }
    
});
// update customer using ajax
$(document).on("click", "#UpdateCustomerButton", function ()
{
    var x = $("#UpdateCustomerForm").valid();
    if(x)
    {
        var url = $("#UpdateCustomerForm").attr("action");
    var data = $("#UpdateCustomerForm").serializeArray();
    $.post(url, data, function (data)
    {
        $("#ReservationTable").empty();
        $("#ReservationTable").append(data);
    });
    $('#EditReservationModal').modal('hide');
    }   
});
// delete customer using ajax
$(document).on( "click","#DelCustomerButton",function (){
    var url = $("#DelCustomerForm").attr("action");
    var data = $("#DelCustomerForm").serializeArray();
    $.post(url,data,function(data){
        $("#ReservationTable").empty();
        $("#ReservationTable").append(data);
        customers_per_program();
        total_customer();
	});
});
// reservation search
$(document).on( "keyup","#reservation_search",function (){
    var data = {    
        search_for : $('#reservation_search').val()
	};
        $.post("CustomerController/print_customers_as_search_table",data,function(data){   
        $("#ReservationTable").empty();
        $("#ReservationTable").append(data);
	});      
});