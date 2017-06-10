<!DOCTYPE html>

<html lang="ar">
    <head>
        <meta charset="utf-8" />
        <title>Employees</title>
	<?php $this->load->view('Header')?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        
    <script>
        function showHint(str)
        {
            document.getElementById("txtHint").innerHTML = "";
            if (window.XMLHttpRequest)
            {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else
            {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function ()
            {
                if (true)
                {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
            if (str == "")
            {
                xmlhttp.open("GET", "employee.php?Word=none", true);
                xmlhttp.send();
            }
            else { 
                xmlhttp.open("GET", "employee.php?Word=" + str , true);
                xmlhttp.send();
            }

        }
</script>
    </head>
    <body>
 <div class="pageContainer">	<!------------------------------------------------------->
<!--------------Edit&Delete Programs Modals-------------->    
<!------------------------------------------------------->
	   
<!-------------- Edit Modal -------------------->
  
<!-------------- /Edit Modal ------------------->

<!-------------- Delete Modal ------------------->
<div class="modal fade" id="Delete">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					 <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
					<h3><strong>حذف البيانات</strong></h3>
				</div>
				<form action="#" method="post" id="delete_emp_form">
				<div class="modal-body">
					
					  <div class="form-group formLayout" id="formlayout">
						هل أنت واثق من حذف البيانات؟     
                            <div class="form-group formLayout">
							<input type="text" name="empName" id="empDeleteName" class="form-control" placeholder="" />
						</div>
						
					  </div>	
					
				  </div>
				<div class="modal-footer mf">
					<button class="btn btn-info btn-sm " type="submit" id="DoneDelete" onclick = "SubmitForm('delete_emp_form', 'EmployeeController', 'delete_employee','employeesTable','');" > حذف</button>
				</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div>
<!-------------- /Delete Modal ------------------->
		<style>
button.sub {
    background: #CB323D;
    width: 62px;
    border: none;
    color: #fff;
    border-radius: 10px;
    padding: 8px;
    font-weight: bold;
    margin-top: 30px;
}
		textarea.report {
    position: absolute;
}
		.SubNav li>a {
    color: #fff;
    font-family: Conv_stc_1;
    white-space: nowrap !important;
}
.body-nav.body-nav-horizontal ul li {
    border-left: 1px solid #101f29;
    border-right: 1px solid #2d3e50;
    float: left;
    width: 90px;
    height: 65px;
}
		</style>

        <!-------------- Header ------------------->
       <header  class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid" id="Header">
                <div class="navbar-header">
                    <div id="logo">
                        <div id="photo">
				   <!-- 	<a class="navbar-brand "href="#" id="showLeftPush"><span class="fa fa-cloud"></span></a>-->
                       <img src="<?php echo $this->config->base_url(); ?>_/images/logo2.png" alt="TaxTopic 1">
				    	</div>
				    <!--	<div class="visible-xl visible-lg visible-md visible-sm " id="word"><img src="componants/images/logo2.png " alt="Logo"></div>       -->         
			    	</div>  
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
			    </div>
				<!-- Part Will Show in Mobile Dispaly 
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                    <div class="headerRightBlock">
                        <ul class="nav navbar-nav headerRight">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">إختيار اللغة <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">الإنجليزية</a></li>
                                    <li><a href="#">العربية</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>-->
			</div> <!-- /container-fluid -->
		</header>
                 <div class="body-nav body-nav-horizontal body-nav-fixed SubHeader">
            <div class="container SubNav">
                <div class="col-md-4 col-md-offset-6">
                   <ul>
						<li><a href="operation_view" class="op"><span class="fa-cogs icon-large"></span>الكشوفات</a></li>
                   </ul>
                </div>
                <div class="col-md-2"> <h2>أضف عمليه</h2></div>
            </div>

        </div>
		<!-------------- /SideBar ------------------->

        <!-------------- ContentBody -------------------->
<section class="container" id="DataSection">
	
		
		<div id="row">
				<div class="col-md-8 col-sm-12 col-xs-12 col-lg-8 other">
			<form id="SearchForm" class="col-md-9 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
                                         <span class="Inputspan fa fa-search"></span>
		        					     <input type="text" id="searchempbar" name="search"  class="form-control" placeholder="" />
	       				            </div>
                                </div>
						</form>
					
					<table class="table-stripped table-hover tabel-bordered output" id="employeesTable">
						<thead>
							<tr>
							    <th>رقم الملف </th>
								<th>الاسم</th>
								<th>رقم التليفون</th>
								<th>التاريخ</th>
								<th>نوع العمليه</th>
								<th>اليمنى</th>
								<th>اليسرى</th>
								<th>أسم الشركه</th>
							    <th>حذف</th>
							</tr>
						</thead>
						<tbody>
						<?php	
                                  //print table body
		?>
						</tbody>
					</table>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 " >
				<div class="rightsidebar"></div>
				<form  action ="#" method ="post"class="operation" id="addEmployeeForm">
				
						<h3> التسجيل</h3><hr>

						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">رقم الملف:</label>
							 <input type="text" name="Id"  class="form-control" placeholder="" />
						</div>
						
						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">الإسم:</label>
							 <input type="text" name="name"  class="form-control" placeholder="" />
						</div>
						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">رقم التليفون:</label>
							 <input type="text" name="phone"  class="form-control" placeholder="" />
						</div>
						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">التاريخ:</label>
							 <input type="text" name="date"  class="form-control" placeholder="" />
						</div>
						
						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">نوع العمليه:</label>
							 <input type="text" name="type"  class="form-control" placeholder="" />
						</div>
						
						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">اليمنى:</label>
							 <input type="text" name="right"  class="form-control" placeholder="" />
						</div>
						
						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">اليسرى:</label>
							 <input type="text" name="left"  class="form-control" placeholder="" />
						</div>
						
						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">أسم الشركه:</label>
							 <input type="text" name="companyName"  class="form-control" placeholder="" />
						</div>
						<button class="btn btn-info btn-sm " type="submit" onclick = "SubmitForm('addEmployeeForm', 'EmployeeController', 'add_employee','employeesTable','');"> إضافة</button> 
				
				</form>

			</div> 

	
		</div>

</section>
<!-------------- /ContentBody ------------------>
<!-------------- /ContentBody ------------------>
<?php $this->load->view('footer');?>
</div>
        <!-------------- Scripts -------------------->       
<?php $this->load->view('Scripts');?>
        <!-------------- /Scripts ------------------>
    <script>
      
	  function SubmitForm(FormID, Controller, FunctionName, ResultDivId, Message) {
               $("#"+FormID).unbind('submit').submit(function (event) {

                   var formData = $( this ).serialize();
                   $.ajax({
                            type: 'POST',

                            url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
                            data: formData
                        })
                        .done(function (data) {
                            $("#"+ ResultDivId).html(data);

                        });

                        event.preventDefault();
                        $("#"+FormID)[0].reset();
                    });
            }
	
	  $(document).ready(function(){
    $("#searchempbar").keyup(function(){
		 
		 var data={
          name : $(this).val()
        };
		$.post("<?php echo $this->config->base_url(); ?>EmployeeController/get_employee_by_name",data,function(data){
       // $.post("<?php echo $this->config->base_url(); ?>OperationsController/connect_ex",data,function(data){
      
  $("#employeesTable").html(data);
  });
        
 });
});




$(document).on("click",".edit-emp",function(){

	var empNameID = $(this).data('name');
	var  empUsernameID = $(this).data('username');
	var empPasswordID = $(this).data('password');
	$(".modal-body #empUsernameID").val(empUsernameID);
	$(".modal-body #empNameID").val(empNameID);
	$(".modal-body #empPasswordID").val(empPasswordID);
});
	
$(document).on("click",".delete-emp",function()
{

	var empDeleteName = $(this).data('name');
	$(".modal-body #empDeleteName").val(empDeleteName);
});	



	  
	  //-----------------------------------------------------------------//
		//-----Load Tabels-------------------------------------------------//
        //-----------------------------------------------------------------//
       //---------------------------Cities Tabel--------//
        $(document).on("change", "#Prog_Name_City", function ()
        {
             $('#AddCityToProgramResult2').empty();
            var select = $('#Prog_Name_City').val();
            var p = { CityTabelFromProgID : select };
            $.post("ChangeValue.php", p, function (data)
            {
                $('#AddCityToProgramResult').html(data);
            });
        });
        //--------------------------Flights Tabel--------//
        $(document).on("change","#Prog_Name_Flight", function ()
        {
             $('#AddFlightToProgramResult').empty();
            var select = $('#Prog_Name_Flight').val();
            var p = { FlightsTabelFromProgID : select };
            $.post("ChangeValue.php", p, function (data)
            {
                $('#AddFlightToProgramResult').append(data);
            });
        });
        //----------------------------Rooms Tabel--------//
        $(document).on("change", "#Prog_Name_Rooms", function ()
        {
             $('#AddRoomToProgramResult').empty();
            var select = $('#Prog_Name_Rooms').val();
            var p = { RoomsTabelFromProgID : select };
            $.post("ChangeValue.php", p, function (data)
            {
                $('#AddRoomToProgramResult').append(data);
            });
        });
        //----------------------------Costs Tabel--------//
        $(document).on("change", "#Prog_Name_Cost1", function ()
        {
             $('#AddCostToProgramResult').empty();
            var select = $('#Prog_Name_Cost1').val();
            var p = { CostsTabelFromProgID : select };
            $.post("ChangeValue.php", p, function (data)
            {
                $('#AddCostToProgramResult').append(data);
            });
        });

        //-------------------------Services Tabel--------//
        $(document).on("change", "#Prog_Name_Services", function ()
        {
             $('#AddSevicesToProgramResult').empty();
            var select = $('#Prog_Name_Services').val();
            var p = { ServiceTabelFromProgID : select };
            $.post("ChangeValue.php", p, function (data)
            {
                $('#AddSevicesToProgramResult').append(data);
            });
        });
        //-----------------------------------------------------------------//
    </script>
    <script>
	$().ready(function ()
	{
		// validate the form when it is submitted
		var validator = $("#AddNewUser").validate({
			errorPlacement: function (error, element)
			{
				// Append error within linked label
				$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
			errorElement: "span",
			rules :
			{
				Employee_Name: "required",
				Pos: "required",
				//UserName: "required",
				Password: "required",
				Branch_Name:"required"
			},
			messages: {
				Employee_Name: " EmployeeName is Required",
				Pos: " Position is Required", 
				//UserName: " UserName is Required",
				Password: "Password is Required",
				Branch_Name:"Branch Name is required"
			}
		});
		//------------------yassmin validation---------------------
		var validator = $("#AddNewProg").validate({
			errorPlacement: function (error, element)
			{
				// Append error within linked label
				$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
			errorElement: "span",
			rules :
			{
				Prog_Name: "required",
				Prog_Year: "required",
				ProgramTypeRadioOptions: "required",
			},
			messages: {
				Prog_Name: " Please Choose program_Name",
				Prog_Year: " Please insert date", 
				ProgramTypeRadioOptions: "please choose one",
	
			}
		});
		// program_update_form
		var validator = $("#program_update_form").validate({
			errorPlacement: function (error, element)
			{
				// Append error within linked label
				$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
			errorElement: "span",
			rules :
			{
				ProgramYear_Edit : { required : true , number:true,  minlength: 4, maxlength : 4},
				ProgramName_Edit : { required : true }
			},
			messages: {
				ProgramYear_Edit: "ادخل رقم السنة فقط" , 
                                ProgramName_Edit : "ادخل اسم البرنامج"
			}
		});
                // AddFlightToProgramForm
                var validator = $("#AddFlightToProgramForm").validate({
			errorPlacement: function (error, element)
			{
				// Append error within linked label
				$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
			errorElement: "span",
			rules :
			{
				AvailableNumber : { required : true , number:true }
			},
			messages: {
				AvailableNumber : "ادخل عدد"
			}
		});
                // AddCostToProgramForm
                var validator = $("#AddCostToProgramForm").validate({
			errorPlacement: function (error, element)
			{
				// Append error within linked label
				$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
			errorElement: "span",
			rules :
			{
				Res_Cost : { required : true , number:true }
			},
			messages: {
				Res_Cost : "ادخل عدد"
			}
		});
                // editCostDialogForm
                var validator = $("#editCostDialogForm").validate({
			errorPlacement: function (error, element)
			{
				// Append error within linked label
				$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
			errorElement: "span",
			rules :
			{
				Res_Cost_Edit : { required : true , number:true }
			},
			messages: {
				Res_Cost_Edit : "ادخل عدد"
			}
		}); 
                //
                // editFlightsDialogForm
                var validator = $("#editFlightsDialogForm").validate({
			errorPlacement: function (error, element)
			{
				// Append error within linked label
				$( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},
			errorElement: "span",
			rules :
			{
				 AvailableNo_Edit : { required : true , number:true }
			},
			messages: {
				 AvailableNo_Edit : "ادخل عدد"
			}
		});
		$(".cancel").click(function ()
		{
			validator.resetForm();
		});
	});
</script>

        <!-------------- validation ------------------->

<script>
//-----------------------------------------------------------------
//-------------------Modal OutPut---------------------------------
//----------------------------------------------------------------
/*---------------Edit & Delete City Dialog Forms----------------*/
/*-------------Edit---------------------*/



$("#editCityDialogFormBtn").click( function() {
 $.post( $("#editCityDialogForm").attr("action"), $("#editCityDialogForm :input").serializeArray(),function(info){ $("#AddCityToProgramResult").html(info);});
// clearInputCity();
    $('#editCityDialog').modal('toggle');
});
$("#editCityDialogForm").submit( function() {
  return false;	
});
/*-------------Delete--------------------*/
$("#DeleteCityDialogFormBtn").click( function() {
 $.post( $("#DeleteCityDialogForm").attr("action"), $("#DeleteCityDialogForm :input").serializeArray(),function(info){ $("#AddCityToProgramResult").html(info);});
// clearInputCity();
     $('#DeleteCityDialog').modal('toggle');
});
$("#DeleteCityDialogForm").submit( function() {
  return false;	
});
//----------------------------------------------------------------
/*---------------Edit & Delete Flights Dialog Forms----------------*/
$("#editFlightsDialogFormBtn").click( function() {
 $.post( $("#editFlightsDialogForm").attr("action"), $("#editFlightsDialogForm :input").serializeArray(),function(info){ $("#AddFlightToProgramResult").html(info);});
// clearInputCity();
    $('#editFlightsDialog').modal('toggle');
});
$("#editFlightsDialogForm").submit( function() {
  return false;	
});
/*-------------Delete-------------------*/
$("#DeleteFlightsDialogFormBtn").click( function() {
 $.post( $("#DeleteFlightsDialogForm").attr("action"), $("#DeleteFlightsDialogForm :input").serializeArray(),function(info){ $("#AddFlightToProgramResult").html(info);});
// clearInputCity();
    $('#DeleteFlightsDialog').modal('toggle');
});
$("#DeleteFlightsDialogForm").submit( function() {
  return false;	
});
//----------------------------------------------------------------
/*---------------Edit & Delete Room Dialog Forms----------------*/
$("#editRoomDialogFormBtn").click( function() {
 $.post( $("#editRoomDialogForm").attr("action"), $("#editRoomDialogForm :input").serializeArray(),function(info){ $("#AddRoomToProgramResult").html(info);});
// clearInputCity();
    $('#editRoomDialog').modal('toggle');
});
$("#editRoomDialogForm").submit( function() {
  return false;	
});
/*-------------Delete-------------------*/
$("#DeleteRoomDialogFormBtn").click( function() {
 $.post( $("#DeleteRoomDialogForm").attr("action"), $("#DeleteRoomDialogForm :input").serializeArray(),function(info){ $("#AddRoomToProgramResult").html(info);});
// clearInputCity();
    $('#DeleteRoomDialog').modal('toggle');
});
$("#DeleteRoomDialogForm").submit( function() {
  return false;	
});
//----------------------------------------------------------------
/*---------------Edit & Delete Cost Dialog Forms----------------*/
$("#editCostDialogFormBtn").click( function() {
 $.post( $("#editCostDialogForm").attr("action"), $("#editCostDialogForm :input").serializeArray(),function(info){ $("#AddCostToProgramResult").html(info);});
// clearInputCity();
    $('#editCostDialog').modal('toggle');
});
$("#editCostDialogForm").submit( function() {
  return false;	
});
/*-------------Delete-------------------*/
$("#DeleteCostDialogFormBtn").click( function() {
 $.post( $("#DeleteCostDialogForm").attr("action"), $("#DeleteCostDialogForm :input").serializeArray(),function(info){ $("#AddCostToProgramResult").html(info);});
// clearInputCity();
    $('#DeleteCostDialog').modal('toggle');
});
$("#DeleteCostDialogForm").submit( function() {
  return false;	
});
//----------------------------------------------------------------
/*---------------Edit & Delete Services Dialog Forms----------------*/
$("#editServiceDialogFormBtn").click( function() {
 $.post( $("#editServiceDialogForm").attr("action"), $("#editServiceDialogForm :input").serializeArray(),function(info){ $("#AddSevicesToProgramResult").html(info);});
// clearInputCity();
    $('#editServiceDialog').modal('toggle');
});
$("#editServiceDialogForm").submit( function() {
  return false;	
});
/*-------------Delete-------------------*/
$("#DeleteServiceDialogFormBtn").click( function() {
 $.post( $("#DeleteServiceDialogForm").attr("action"), $("#DeleteServiceDialogForm :input").serializeArray(),function(info){ $("#AddSevicesToProgramResult").html(info);});
// clearInputCity();
    $('#DeleteServiceDialog').modal('toggle');
});
$("#DeleteServiceDialogForm").submit( function() {
  return false;	
});
</script>



<script>
$(document).on("click", ".editeBtn", function () {	
var myBookId = $(this).data('branch');
var myBookname = $(this).data('pos');
var mypw = $(this).data('id');
var mytype= $(this).data('name');
var mypos = $(this).data('pw');

$(".modal-body #ProgramID_Edit").val( myBookId );
$(".modal-body #ProgramName_Edit").val( myBookname );
$(".modal-body #ProgramYear_Edit").val( mypw );
$(".modal-body #ProgramType_Edit").val( mytype );
$(".modal-body #ProgNotes_Edit").val( mypos );
});
</script>
<script>
$(document).on("click", ".editeBtn", function () {
var myBookId = $(this).data('branch');
var myBookname = $(this).data('pos');
var mypw = $(this).data('id');
var mytype= $(this).data('name');
var mypos = $(this).data('pw');
$(".modal-body #CityID_Edit").val( myBookId );
$(".modal-body #CityName_Edit").val( myBookname );
$(".modal-body #CityHotel_Edit").val( mypw );
$(".modal-body #CityNights_Edit").val( mytype );
$(".modal-body #CityOrder_Edit").val( mypos );
});
</script>
<script>
$(document).on("click", ".editeBtn", function () {
	
var myBookId = $(this).data('branch');
var myBookname = $(this).data('pos');
var mypw = $(this).data('id');
var mytype= $(this).data('name');
var mypos= $(this).data('pw');

$(".modal-body #FlightID_Edit").val( myBookId );
$(".modal-body #FlightDate_Edit").val( myBookname );
$(".modal-body #TravelLine_Edit").val( mypw );
$(".modal-body #AvailableNo_Edit").val( mytype );
$(".modal-body #FlightNotes_Edit").val( mypos );

});
</script>
<script>
$(document).on("click", ".editeBtn", function () {
	
var myBookId = $(this).data('branch');
var myBookname = $(this).data('pos');
var mypw = $(this).data('id');
var mytype= $(this).data('name');


$(".modal-body #RoomID_Edit").val( myBookId );
$(".modal-body #RoomType_Edit").val( myBookname );
$(".modal-body #Res_Type_Edit").val( mypw );
$(".modal-body #RoomCount_Edit").val( mytype );

});
</script>
<script>
$(document).on("click", ".editeBtn", function () {	
var myBookId = $(this).data('branch');
var myBookname = $(this).data('id');
var mypw = $(this).data('pos');
var mytype= $(this).data('name');
var mypos = $(this).data('pw');

$(".modal-body #CostID_Edit").val( myBookId );
$(".modal-body #Res_Type_Edit").val( myBookname );
$(".modal-body #Room_Type_Edit").val( mypw );
$(".modal-body #Res_Status_Edit").val( mytype );
$(".modal-body #Res_Cost_Edit").val( mypos );
});
</script>
<script>
$(document).on("click", ".editeBtn", function () {	
var myBookId = $(this).data('branch');
var myBookname = $(this).data('pos');
var mypw = $(this).data('id');


$(".modal-body #ServiceID_Edit").val( myBookId );
$(".modal-body #extraService_Edit").val( myBookname );
$(".modal-body #ServiceType_Edit").val( mypw );
});
</script>
<script>
$(document).on("click", ".DeleteBtn", function () {
var myBookId = $(this).data('id');
$(".modal-body #ProgramID_Delete").val( myBookId );
});
</script>
<script>
$(document).on("click", ".DeleteBtn", function () {
var myBookId = $(this).data('id');
$(".modal-body #CityID_Delete").val( myBookId );
});
</script>
<script>
$(document).on("click", ".DeleteBtn", function () {
var myBookId = $(this).data('id');
$(".modal-body #FlightID_Delete").val( myBookId );
});
</script>
<script>
$(document).on("click", ".DeleteBtn", function () {
var myBookId = $(this).data('id');
var myBookId2 =$(this).data('type')
$(".modal-body #RoomID_Delete").val( myBookId );
$(".modal-body #Type_Of_Room").val( myBookId2 );
});
</script>
<script>
$(document).on("click", ".DeleteBtn", function () {
var myBookId = $(this).data('id');
$(".modal-body #priceID_Delete").val( myBookId );
});
</script>
<script>
$(document).on("click", ".DeleteBtn", function () {
var myBookId = $(this).data('id');
$(".modal-body #serviceID_Delete").val( myBookId );
});
</script>
<script>
$(document).on("click", ".DeleteBtn", function () {
var myBookId = $(this).data('id');
$(".modal-body #priceID_Delete").val( myBookId );
});
</script>
<script>
    //---------------------------------------CityBtn------//
    $(document).on("click", ".CityBtn", function ()
    {
        var myProgId = $(this).data('city');
        $("#Prog_Name_City").val(myProgId);
        $('#CitiesBlock').removeClass('fadeOut');
        $('#CitiesBlock').addClass('fadeIn');
        $('#CitiesBlock').css('display', 'block');
        $("#Prog_Name_City").trigger("change");
    });

    //-------------------------------------FlightBtn-----//
    $(document).on("click", ".FlightBtn", function ()
    {
        var myProgId1 = $(this).data('flight');
        $("#Prog_Name_Flight").val(myProgId1);
        $('#FlightsBlock').css('display', 'block');
       $("#Prog_Name_Flight").trigger("change");
    });
    //-------------------------------------CostBtn-----//
    $(document).on("click", ".CostBtn", function ()
    {
        var myProgId2 = $(this).data('cost');
       // $("#Prog_Name_Cost1").val(myProgId2).trigger('change');
        $("#Prog_Name_Cost1").val(myProgId2);
        $('#CostsBlock').css('display', 'block');
        $("#Prog_Name_Cost1").trigger("change");
    });
    //-------------------------------------ServicesBtn-----//
    $(document).on("click", ".ServicesBtn", function ()
    {
        var myProgId2 = $(this).data('services');
        //$("#Prog_Name_Services").val(myProgId2).trigger('change');
        $("#Prog_Name_Services").val(myProgId2);
        $('#ServicesBlock').css('display', 'block');
        $("#Prog_Name_Services").trigger("change");
    });
    //-------------------------------------RoomsBtn-----//
    $(document).on("click", ".RoomsBtn", function ()
    {
        $('#Flight_Name_Room').empty();
        var select1 = $(this).data('travelline');
        var h = { FlightNameToRoomsForm : select1 };
        $.post("ChangeValue.php", h, function (data)
        {
            $('#Flight_Name_Room').val(data);
        });
        //----- Send ProgName ToRoomsForm-----//  

        $('#Prog_Name_Rooms').empty();
        var select = $('#Prog_Name_Flight').val();
        var v = { ProgNameToRoomsForm: select };
        $.post("ChangeValue.php", v, function (data)
        {
            $('#Prog_Name_Rooms').val(data);
        });
        $('#RoomsBlock').removeClass('fadeOut');
        $('#RoomsBlock').addClass('fadeIn');
        $('#RoomsBlock').css('display', 'block');
        $("#Prog_Name_Rooms").trigger("change");
    });
</script>


<script>
//-----------------------Send Prog ID into Cost Edit Modal--------------------------
$(document).on("click",".EditBtnCost",function(){
	$('#Room_Type_Edit').empty();
        var select = $('#Prog_Name_Cost1').val();
        var v = { RoomsTypeFromProgID: select };
        $.post("ChangeValue.php", v, function (data)
        {
            $('#Room_Type_Edit').append(data);
        });
});
//-----------------------Send Prog ID into Rooms Edit Modal--------------------------
$(document).on("click",".EditBtnRoom",function(){
	$('#Room_Type_Edit_ID').empty();
    var select = $('#Prog_Name_Rooms').val();
     $('#Room_Type_Edit_ID').val(select);
});

//-----------------------Send Prog ID into Rooms Delete Modal--------------------------
$(document).on("click",".DelBtnRoom",function(){
	$('#Room_Type_Del_ID').empty();
    var select = $('#Prog_Name_Rooms').val();
     $('#Room_Type_Del_ID').val(select);
});
//-----------------------Send Prog ID into flight delete Modal--------------------------
$(document).on("click",".DelBtnFlight",function(){
	$('#flight_ID_prog').empty();
    var select = $('#Prog_Name_Flight').val();
     $('#flight_ID_prog').val(select);
});
//-----------------------Send Prog ID into flight delete Modal--------------------------
$(document).on("click",".EditBtnFlight",function(){
	$('#Editflight_ID_prog').empty();
    var select = $('#Prog_Name_Flight').val();
     $('#Editflight_ID_prog').val(select);
});

</script>

<script>
    // hossam part room updated
   $(document).on("click", "#OpenRoomsFormBtn", function () {
        var data = {
       P_F_ID : $(this).data('id')
        };
        $.post("room_table_reload.php", data, function (data)
        {
            $("#AddRoomToProgramResult").html(data);
        });    
});
</script>
<script src="Componants/js/homeless_program_handle.js"></script>
    </body>
</html>
