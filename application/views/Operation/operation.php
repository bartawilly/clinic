<!DOCTYPE html>

<html lang="ar">
    <head>
        <meta charset="utf-8" />
        <title>operation</title>
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
	 <div class="pageContainer">	
 <header  class="navbar navbar-default navbar-fixed-top headerNavBar" role="navigation">
                <!------------------- Div Will Visible In Mobile View ----------------->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
			    </div>
                <!------------------- Div Will Collapse In Mobile View ----------------->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                    <div class="container">
                    <div class=" col-md-6 " >
				  		
				    	<div id="word"><img src="<?php echo $this->config->base_url(); ?>_/images/logo2.png" alt="TaxTopic 1" class="logo" ></div>
                    </div>
                    <div class="col-md-6 ">
                        <ul class="nav navbar-nav headerLeft">
                            <li><a href="logout"><span class="fa fa-power-off" aria-hidden="true"></span>تسجيل خروج</a></li>
           
                        </ul>
                    </div>  
                    </div>
                </div>
                <!---------------------------------------------------------------------->
        </header>
		                <div class="body-nav body-nav-horizontal body-nav-fixed SubHeader">
            <div class="container SubNav">
                <div class="col-md-4 col-md-offset-6">
                   <ul>
                 
							  <li><a href="addemp" class="new"><i class="fa fa-user-plus" aria-hidden="true"></i>تسجيل عمليات</a></li>
							  
                    </ul>
                </div>
                <div class="col-md-2"> <h2> الكشوفات</h2></div>
            </div>
        </div>
		

		
		<style>
a.new {
    position: absolute;
    top: 38px;
    right: 280px;
}
a.new .fa {
    color: #fff;
    position: absolute;
    top: -20px;
    right: 31px;
}
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
textarea.ee {
    position: absolute;
    top: 29px;
}
th {
    text-align: center;
}
		</style>
<!------------------------------------------------------->
<!--------------Edit&Delete Programs Modals-------------->    
<!------------------------------------------------------->
	   
<!-------------- Edit Modal -------------------->
 <div class="modal fade" id="Edit">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
					<h3><strong>تعديل بيانات </strong></h3>
				</div>
				<form id="program_updat" action="#" method="post">
				<div class="modal-body">
						<div class="row">
						<div class="form-group formLayout col-md-6">
							 <label for="Prog_Year" class="control-label ">الإسم:</label>
							 <input type="text" name="name" id="empNameID" class="form-control" placeholder="الإسم" />
						</div>
						<div class="form-group formLayout col-md-6">
							 <label for="Prog_Year" class="control-label ">العنوان:</label>
							 <input type="text" name="address"  id="empAddressID" class="form-control" placeholder="العنوان" />
						</div>
						</div>
						<div class="row">
						<div class="form-group formLayout col-md-6">
							 <label for="Prog_Year" class="control-label ">التليفون:</label>
							 <input type="text" name="phone" id="empPhoneID"  class="form-control" placeholder="التليفون" />
						</div>
						<div class="form-group formLayout col-md-6">
							 <label for="Prog_Year" class="control-label ">التاريخ:</label>
							 <input type="text" name="data"  id="empDateID" onkeyup="myFunction()" class="form-control" placeholder="التاريخ" />
						</div>
						
						</div>
							<div class="row">
						<div class="form-group formLayout col-md-6" id="formlayout">
							<label for="Prog_Name" class="control-label ">رقم الملف:</label>
							<input type="text" name="id"  class="form-control" id = "empID" placeholder="رقم الملف" readonly="true" />
							
						</div>
							<div class="form-group formLayout  col-md-6">
							 <label for="Prog_Year" class="control-label ">العمر:</label>
							 <input type="text" name="age" id = "empAgeID"  class="form-control" placeholder="العمر" />

						</div>
						</div>
							<div class="row">
						<div class="form-group formLayout col-md-6">
							 <label for="Prog_Year" class="control-label ">الكشف:</label>
							 <input type="text" name="data" id = "empDataID"  class="form-control" placeholder="البيان" />
						</div>
						<div class="form-group formLayout col-md-6">
							 <label for="Prog_Year" class="control-label ">الطبيب:</label>
							<textarea name="report"  id = "empReportID" class="ee"></textarea>
						</div>
						</div>
					
				  </div>
				<div class="modal-footer mf">
	<button class="sub" type="submit" onclick ="SubmitForm('program_updat', 'OperationsController', 'update_operation','operationstable','none');"> تعديل</button> 						
			</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div>
<!-------------- /Edit Modal ------------------->

<!-------------- Delete Modal ------------------->
<div class="modal fade" id="Delete">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					 <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
					<h3><strong>حذف البيانات</strong></h3>
				</div>
				<form action="#" method="post" id = "deleteempform">
				<div class="modal-body">
					
					  <div class="form-group formLayout" id="formlayout">
						هل أنت واثق من حذف البيانات؟     
                           <div class="form-group formLayout col-md-6" id="formlayout">
						   <input type="text" name="opID"  class="form-control" id = "opDeleteID" placeholder="رقم الملف" readonly="true" />
						</div>						
					  </div>	
					 
					
				  </div>
				<div class="modal-footer mf">
					<button class="sub" type="submit" onclick = "SubmitForm('deleteempform', 'OperationsController', 'delete_operation','operationstable','');"> حذف</button>
				</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div>
<!-------------- /Delete Modal ------------------->


        <!-------------- Header ------------------->
        <header  class="navbar " role="navigation">
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
			
			</div> <!-- /container-fluid -->
		</header>

    <!-------------- /SideBar ------------------->

        <!-------------- ContentBody -------------------->
<section class="container" id="DataSection">
	
		
		<div id="row">
				<div class="col-md-8 col-sm-12 col-xs-12 col-lg-8 other">
						<div id="Selectfilter" class="col-md-3 col-sm-12 col-xs-12">
							<label for="selectfilter"></label>
							<select name="selectfilter" class="form-control" id="selected">
							    <option >...</option>
								<option >98</option>
								<option >99</option>
								<option >00</option>
								<option >01</option>
								<option >02</option>
								<option >03</option>
								<option >04</option>
								<option >05</option>
								<option >06</option>
								<option >07</option>
								<option >08</option>
								<option >09</option>
								<option >10</option>
								<option >11</option>
								<option >2012</option>
								<option >2013</option>
								<option >2014</option>
								<option >2015</option>
								<option >2016</option>
								<option >2017</option>
								
							</select>
						</div>
						<form id="SearchForm" class="col-md-8 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="SearhDiv form-group formLayout col-md-9 col-md-offset-3 col-sm-12 col-xs-12 ">
                                         <span class="Inputspan fa fa-search"></span>
		        					     <input type="text" id="searchbar" name="search"  class="form-control" placeholder="الإسم" />
	       				            </div>
                                </div>
						</form>
					<table class="table-stripped table-hover tabel-bordered output" id="operationstable">
						<thead>
							<tr>
								<th>رقم الملف</th>
								<th>الاسم</th>
								<th>العمر</th>
								<th>العنوان</th>
								<th>التليفون</th>
								<th>التاريخ</th>
								
								<th>الكشف</th>
								<th>تعديل</th>
								<th>حذف</th>
									
							</tr>
						</thead>
					
					    <tbody>
						<?php
						/*
				
		foreach ($operations as $Instance)
        {
			$date = $Instance->date;
			//$date = date('Y-m-d',$Instance->date."");
			echo "<tr>";
          echo '<td>' . $Instance->id . '</td>';
    echo '<td>' . $Instance->name . '</td>';
	echo '<td>' .$Instance->age . '</td>';
    echo '<td>' .$Instance->address. '</td>';
    echo '<td>' . $Instance->phone . '</td>';
    echo '<td>' . $date . '</td>';
    echo '<td>' . $Instance->doctor . '</td>';

    echo '<td>' . $Instance->price . '</td>';
    
	echo '<td> <a type="button" class=" edit-emp" data-toggle="modal" data-target="#Edit" data-date='.$Instance->date.' data-mydata='.$Instance->price.'  data-myid='.$Instance->id.' data-name='.$Instance->name.'  data-myage='.$Instance->age.' data-report='.$Instance->doctor.' data-phone='.$Instance->phone.' data-myaddress='.$Instance->address.'><i class="fa fa-pencil-square-o"> </i></a> </td>';
	echo '<td> <a type="button" class="delete-emp" data-toggle="modal" data-target="#Delete"   data-id='.$Instance->id.'  ><i class="fa fa-trash" aria-hidden="true"></i></a> </td>';
    echo "</tr>";
		}
		*/
		?>

						</tbody>
					</table>

			
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 " >
			
				<form  action="#" name="addoperationform" id = "addoperationform"  method ="post"class="operation">
				     
						<h3> الكشوفات</h3><hr>
                         
						 
						
						<div class="form-group formLayout" id="formlayout">
							<label for="Prog_Year" class="control-label ">رقم الملف:</label>
							<input type="text" name="id"  class="form-control" placeholder="رقم الملف" />
						</div>	

						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">الإسم:</label>
							 <input type="text" name="name"  class="form-control" placeholder="الإسم" />
						</div>
						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">العنوان:</label>
							 <input type="text" name="address"  class="form-control" placeholder="العنوان" />
						</div>
						
						<div class="form-group formLayout">
							 <label for="Prog_Year" class="control-label ">العمر:</label>
							 <input type="text" name="age"  class="form-control" placeholder="العمر" />
						</div>
						
							<div class="form-group formLayout">
							 <label for="name" class="control-label ">الكشف:</label>
							 <input type="text" name = "data" class="form-control" placeholder="البيان" />
						</div>
						<div class="row">
						<div class="form-group formLayout col-md-6">
							 <label for="Prog_Year" class="control-label ">التليفون:</label>
							 <input type="text" name="phone"  class="form-control" placeholder="التليفون" />
						</div>
						<div class="form-group formLayout col-md-6">
							 <label for="Prog_Year" class="control-label ">التاريخ:</label>
							 <input type="text" name="date"  id="fdate" class="form-control" placeholder="التاريخ" datepicker/>
						</div>
						</div>
						
					
					
					
					
						<button class="sub" type="submit" onclick = "SubmitForm('addoperationform', 'OperationsController', 'add_operation','operationstable','');"> إضافة</button> 
				
				</form>

			</div> 

	
		</div>

</section>
<!-------------- /ContentBody ------------------>
<?php $this->load->view('footer');?>
</div>
        <!-------------- Scripts -------------------->       
<?php $this->load->view('Scripts');?>
        <!-------------- /Scripts ------------------>
	<script>
	$("#fdate").datepicker();
	</script>
<script>

</script>	
    <script>
	
function SubmitForm(FormID, Controller, FunctionName, ResultDivId, Message) {
               $("#"+FormID).unbind('submit').submit(function (event) {

                   var formData = $( this ).serialize();
                   $.ajax({
                            type: 'POST',

                            url: "<?php echo $this->config->base_url(); ?>" + Controller + "/"+ FunctionName,
                            data: formData
                        }).done(function (data) {
                            $("#"+ ResultDivId).html(data);

                        });

                        event.preventDefault();
                        $("#"+FormID)[0].reset();
                    });
            }
	
	

	
	 $(document).on("change", "#selected", function ()
        {
           
            var data={
               year : $(this).val()
            };
            $.post("<?php echo $this->config->base_url(); ?>OperationsController/getyear",data,function(data){
    
            $("#operationstable").html(data);
            });
        });
	
	
		
$(document).ready(function(){
    $("#searchbar").keyup(function(){
	
		 var data={
          data : $(this).val()
        };
		
		$.post("<?php echo $this->config->base_url(); ?>OperationsController/search_operation",data,function(data){
    
  $("#operationstable").html(data);
  });
 });
});

$(document).on("click",".edit-emp",function(){
	
	var empID = $(this).data('myid');
	var empNameID = $(this).data('name');
	var  empAgeID = $(this).data('myage');
	var  empPhoneID = $(this).data('phone');
	var empAddressID = $(this).data('myaddress');
	var  empReportID = $(this).data('report');
	var empDataID = $(this).data('mydata');
	var  empDateID = $(this).data('date');
	$(".modal-body #empID").val(empID);
	$(".modal-body #empNameID").val(empNameID);
	$(".modal-body #empAgeID").val(empAgeID);
	$(".modal-body #empPhoneID").val(empPhoneID);
	$(".modal-body #empAddressID").val(empAddressID);
	$(".modal-body #empReportID").val(empReportID);
	$(".modal-body #empDateID").val(empDateID);
	$(".modal-body #empDataID").val(empDataID);
});
	
$(document).on("click",".delete-emp",function()
{
	var opDeleteID = $(this).data('id');
	
	$(".modal-body #opDeleteID").val(opDeleteID);
});	
	
	
	</script>	
     
    

    </body>
</html>
