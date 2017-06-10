// ready function
$(document).ready(function ()
{
   // upload_company_logo();
    print_company_statistics();
    print_general_statistics();
    customers_per_program();
    total_customer();
});
// reload report
$(document).on( "click","#ReloadReport",function ()
{
    print_company_statistics();
    print_general_statistics();
});
// CompanyStatistics
function print_company_statistics()
{
    $.post("ReportController/print_company_statistics",null,function(data){   
        $("#CompanyStatistics").html(data);
	});
}
// print_general_statistics
function print_general_statistics()
{
    $.post("ReportController/print_general_statistics",null,function(data){   
        $("#GeneralStatistics").html(data);
	});
}
// CompanyListSelection
$(document).on( "click",".CompanyListSelection",function (){
    company_id = $(this).data('company_id');
    var data = {
    company_id : company_id    
    }
    $.post("ReportController/print_reservation_report_for_company",data,function(data){   
        result = JSON.parse(data);
        $("#ReservationReportTable").html(result.report);
        $("#ReservationReportStatistics").html(result.statistics);
	});
});
// prepare edit
$(document).on( "click",".CompanyEditBtn",function (){
    var id = $(this).data('id');
    var name = $(this).data('name');
    var address = $(this).data('address');
    var telephone = $(this).data('telephone');
    var mobile = $(this).data('mobile');
    var quota = $(this).data('quota');
    var user_name = $(this).data('user_name');
    var password = $(this).data('password');
    var size =  $(this).data('size');
    $(".modal-body #company_id_edit").val( id );
    $(".modal-body #company_name_edit").val( name );
    $(".modal-body #company_address_edit").val( address );
    $(".modal-body #company_telephone_edit").val( telephone );
    $(".modal-body #company_moblie_edit").val( mobile );
    $(".modal-body #company_quota_edit").val( quota );
    $(".modal-body #company_size_edit").val( size );
    $(".modal-body #company_user_name_edit").val( user_name );
    $(".modal-body #company_password_edit").val( password );
});
// prepare delete
$(document).on( "click",".CompanyDeleteBtn",function (){
    var id = $(this).data('id');
    $(".modal-body #company_id_delete").val( id );
});
// company search part 
$(document).on( "keyup","#company_search",function (){
    var data = {    
        search_for : $('#company_search').val()
	};
        $.post("CompanyController/print_companies_as_search_table",data,function(data){   
        $("#CompaniesTable").empty();
        $("#CompaniesTable").append(data);
	});
});
// company program search part
$(document).on( "keyup","#CompanyProgramSearch",function (){
    var data = {    
        search_for : $('#CompanyProgramSearch').val()
	};
        $.post("CompanyController/print_companies_program_as_search_table",data,function(data){   
        $("#CompaniesProgramTable").empty();
        $("#CompaniesProgramTable").append(data);
	});
}); 
// add company using ajax
$(document).on( "click","#AddCompanyButton",function (){
    
    var x = $("#AddCompanyForm").valid();

    if(x)
    {
        var url = $("#AddCompanyForm").attr("action");
    var data = $("#AddCompanyForm").serializeArray();
    $.post(url,data,function(data){   
        $("#CompaniesTable").empty();
        $("#CompaniesTable").append(data);
	});
     $(this).closest('form').find("input, textarea").val("");
    }
    
});
// update company using ajax
$(document).on("click", "#UpdateCompanyButton", function ()
{
    var x = $("#UpdateCompanyForm").valid();
    if(x)
    {
        var url = $("#UpdateCompanyForm").attr("action");
    var data = $("#UpdateCompanyForm").serializeArray();
    $.post(url, data, function (data)
    {
        $("#CompaniesTable").empty();
        $("#CompaniesTable").append(data);
    });
    $('#EditCompanyModal').modal('hide');
    }
    
});
// delete company using ajax
$(document).on( "click","#DelCompanyButton",function (){
    var url = $("#DelCompanyForm").attr("action");
    var data = $("#DelCompanyForm").serializeArray();
    $.post(url,data,function(data){   
        $("#CompaniesTable").empty();
        $("#CompaniesTable").append(data);
	});
});
// assign_program_to_company
$(document).on("click", "#assign_program_to_companyAddButton", function ()
{
    var x = $("#assign_program_to_companyForm").valid();

    if(x)
    {
        var url = $("#assign_program_to_companyForm").attr("action");
    var data = $("#assign_program_to_companyForm").serializeArray();
    $.post(url, data, function (data)
    {
        $("#CompaniesProgramTable").empty();
        $("#CompaniesProgramTable").append(data);
    });
    $(this).closest('form').find("input, textarea , select").val("");
    }
    
});
// prepare CompanyProgramDeleteBtn
$(document).on( "click",".CompanyProgramDeleteBtn",function (){
    var id = $(this).data('company_id');
    $(".modal-body #assign_program_to_company_delete_input").val( id );
});
// assign_program_to_company_delete_input  -- set to null as delete
$(document).on( "click","#assign_program_to_companyDeleteButton",function (){
    var url = $("#assign_program_to_company_delete_form").attr("action");
    var data = $("#assign_program_to_company_delete_form").serializeArray();
    $.post(url,data,function(data){   
        $("#CompaniesProgramTable").empty();
        $("#CompaniesProgramTable").append(data);
	});
});
// customers_per_program function
function customers_per_program()
{
    $.post("CompanyController/print_customers_per_program",null,function(data){
        $("#CustomersPerProgram").html(data);
	});
}
// total_customer
function  total_customer()
{
    $.post("CompanyController/get_total_customer",null,function(data){
        $("#TotalCustomer").html(data);
	});
}

// upload company logo using ajax
/*function upload_company_logo()
{
$("#UploadLogoForm").on('submit',function(e){
    alert($("#UploadLogoForm").attr("action"));
    e.preventDefault();
    $(this).ajaxSubmit(
    {
        success:function (data)
        {
            alert(data);
        }
    });   
});
}*/
    
// get_company logo
function get_company_logo()
{
    $.post("CompanyController",null,function(data){
        $("#").html(data);
	});
}
// Second_To_First
function Second_To_First()
{ 
    company_id = $("#FirstCompanySelect").val();
    $('.SelectedSecondItem').each(function() {
    var data = {
        company_id : company_id,
        customer_id : $(this).val()
    }
    $.ajax({
      url:"CompanyController/Transefer_Customer",
      type: 'POST',
      data: data,
      async: false
      });     
    });
}
// First_To_Second
function First_To_Second()
{ 
    company_id = $("#SecondCompanySelect").val();    
    $('.SelectedFirstItem').each(function() {
    var data = {
        company_id : company_id,
        customer_id : $(this).val()
    }
    $.ajax({
      url:"CompanyController/Transefer_Customer",
      type: 'POST',
      data: data,
      async: false
      });     
    });
}
// second to first 
 $(document).on( "click","#SecondToFirst",function (){
    Second_To_First();
    Print_First_Company_Table();
    Print_Second_Company_Table();
});
// first to second 



 $(document).on( "click","#FirstToSecond",function (){

    First_To_Second();

    Print_First_Company_Table();

    Print_Second_Company_Table();

});



//select second item 

 $(document).on( "click",".NonSelectedSecondItem",function (){

    if($(this).is(":checked"))
    {

        $(this).prop('checked',true);

        $(this).attr('class', 'SelectedSecondItem');

    }
});

//select first item
 
 $(document).on( "click",".NonSelectedFirstItem",function (){

    if($(this).is(":checked"))
    {

        $(this).prop('checked',true);

        $(this).attr('class', 'SelectedFirstItem');
 
   }
});

// deselect first item

$(document).on( "click",".SelectedFirstItem",function (){

    if($(this).is(":checked") == false)
    {

        $(this).prop('checked',false);

        $(this).attr('class', 'NonSelectedFirstItem');

    }
});

// deselect second item
$(document).on( "click",".SelectedSecondItem",function (){
    if($(this).is(":checked") == false)
    {
        $(this).prop('checked',false);
        $(this).attr('class', 'NonSelectedSecondItem');
    }
});
// select all second items
 $(document).on( "click",".SelectAllSecondItems",function (){
    if($(this).is(":checked"))
    {
        $('.NonSelectedSecondItem').prop('checked',true);
        $('.NonSelectedSecondItem').attr('class', 'SelectedSecondItem');
    }
    else
    {
        $('.SelectedSecondItem').prop('checked',false);
        $('.SelectedSecondItem').attr('class', 'NonSelectedSecondItem');
    }
});
// select all first items
 $(document).on( "click",".SelectAllFirstItems",function (){
    if($(this).is(":checked"))
    {
        $('.NonSelectedFirstItem').prop('checked',true);
        $('.NonSelectedFirstItem').attr('class', 'SelectedFirstItem');
    }
    else
    {
        $('.SelectedFirstItem').prop('checked',false);
        $('.SelectedFirstItem').attr('class', 'NonSelectedFirstItem');
    }
});

// First_Company_Select
 $(document).on( "change","#FirstCompanySelect",function (){
    Print_First_Company_Table();
    $.post('CompanyController/print_company_assigned_program',{ company_id : $("#FirstCompanySelect").val()},function(data){   
        $("#FirstCompanyProgram").html(data);
	});
});
// Second_Company_Select
 $(document).on( "change","#SecondCompanySelect",function (){
    Print_Second_Company_Table();
    $.post('CompanyController/print_company_assigned_program',{ company_id : $("#SecondCompanySelect").val()},function(data){   
        $("#SecondCompanyProgram").html(data);
	}); 
});
// Print_Second_Company Table
function Print_Second_Company_Table()
{
    company_id = $("#SecondCompanySelect").val();
    var data = {
        company_id:company_id
    };
    $.post('CompanyController/Print_Second_Company_Table',data,function(data){   
        $("#SecondCompanyTable").empty();
        $("#SecondCompanyTable").append(data);
	});
}
// Print_First_Company Table
function Print_First_Company_Table()
{
    company_id = $("#FirstCompanySelect").val();
    var data = {
        company_id:company_id
    }
    $.post('CompanyController/Print_First_Company_Table',data,function(data){   
        $("#FirstCompanyTable").empty();
        $("#FirstCompanyTable").append(data);
	});
}

/*// Transefer_Customer_From
function Transefer_Customer_From()
{
    
}
// Transefer_Customer_To
function Transefer_Customer_To()
{
}*/