
	/* $(document).ready(function(){

		//Hide div w/id extra
	   //$("#OutCustomer").css("display","none");

		// Add onclick handler to checkbox w/id checkme
	   $("#checkbox1").click(function(){

		// If checked
		if ($("#checkbox1").is(":checked"))
		{
			//show the hidden div
			$("#OutCustomer").show(1000);
		}
		else
		{
			//otherwise, hide it
			$("#OutCustomer").hide("1000");
		}
	  });

	});
	 
 */
//--------------------show table depend on select-----------------

//--------------------show table depend on select-----------------
    $(".company").hide();
	$(".oneperson").hide();
	$(".returnspassengers").hide();
	$(".commissioncash").hide();
	$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
	
            if($(this).attr("value")=="Company"){
               // $(".OutCustomer").not(".company").hide();
                $(".company").show();
				$(".oneperson").hide();
				$(".returnspassengers").hide();
				$(".commissioncash").hide();
            } 
			  else if($(this).attr("value")=="OnePerson"){
				$(".oneperson").show();
				$(".company").hide();
				$(".returnspassengers").hide();
				$(".commissioncash").hide();
				
			}   else if($(this).attr("value")=="ReturnsPassengers"){
				$(".oneperson").hide();
				$(".company").hide();
				$(".commissioncash").hide();
				$(".returnspassengers").show();
			} 
			else if($(this).attr("value")=="CommissionCash"){
				$(".oneperson").hide();
				$(".company").hide();
				$(".commissioncash").show();
				$(".returnspassengers").hide();
			} 
			if($(this).attr("value")=="Damas"){
                //$(".data").not(".damas").hide();
                $(".damas").show();
				$(".oneperson").hide();
            }
			else{
                $(".damas").hide();
				/* $(".OutCustomer").hide(); */
            } 
           
        });
    }).change();
});

//---------------------------إذن صرف----------------------
 
    $(document).on("click", "#SupplyBtn", function ()
    {
        $("#SwitchFormDivSupply").collapse("show");
        $("#SwitchFormDivCash").collapse("hide");
        $("#SwitchFormDivCommision").collapse("hide");
    });  
	$(document).on("click", "#CashBtn", function ()
    {
        $("#SwitchFormDivSupply").collapse("hide");
        $("#SwitchFormDivCommision").collapse("hide");
        $("#SwitchFormDivCash").collapse("show");
    });
	$(document).on("click", "#CommissionsBtn", function ()
    {
        $("#SwitchFormDivSupply").collapse("hide");
        $("#SwitchFormDivCommision").collapse("show");
        $("#SwitchFormDivCash").collapse("hide");
    });
	//---------------------------الإعدادات----------------------
 
    $(document).on("click", "#ReservBtn", function ()
    {
        $("#SwitchFormDivReserv").collapse("show");
        $("#SwitchFormDivReturnPass").collapse("hide");
      
    });  
	$(document).on("click", "#ReturnPassBtn", function ()
    {
        $("#SwitchFormDivReserv").collapse("hide");
        $("#SwitchFormDivReturnPass").collapse("show");
      
    });  
//------------------collapse from checkbox-------------------------------------
/* $(function () {
        $("#inlineCheckbox1").click(function () {
            if ($(this).is(":checked")) {
                $(".minimum").show(500);
            } else {
                $(".minimum").hide(500);
            }
        });
    });
$(function () {
        $("#inlineCheckbox2").click(function () {
            if ($(this).is(":checked")) {
                $(".minimum2").show(500);
            } else {
                $(".minimum2").hide(500);
            }
        });
    });
	
	
	function myFunction(){
	$(".editbranch").css("display","block");
	$('#myTab a[href = "#EditBranch"]').tab('show');
	}
	
	*/
	//var sideBarid = document.getElementsByClass("SBItem");
	//var tabpaneid = document.getElementsByClass("tab-pane");  
   // var clickedURL = $('.TabLi>a').attr('href');
  
/* var tabs = ["TabProfile","Tabreservations" ,"Tabcompanies" ,"Tabprograms" ,"TabManageCompanies" ,"Tabprograms" ,"TabReports", "TabAccounting" ,"TabSuccessPassenger" ,"TabRoomType" ,"TabTaskeen" , "TabSetting" ];  */
 /* for(var i = 0 ; i < tabs.length ; i++){
	  if */	
	
/* 	$(document).on("click", ".close", function (){
	var x = $(this).closest(".TabLi");
	x.css("display","none");
    var clickedURL = x.find("a").attr('href');
	$(clickedURL).removeClass("active");

}); */
//}

function LoadPage(TabID, tabpaneID){
	
		$(".SBItem").removeClass("active");
        $(this).addClass("active");
		$("#"+TabID).css("display","block");
        $(".TabLi").removeClass("active");
        $("#"+TabID).addClass("active");
		$("#"+TabID).addClass("opened");
		$("#"+TabID).removeClass("closed");
        $(".tab-pane").removeClass("active");
        $("#"+tabpaneID).addClass("active");
	
		var n = $( ".TabLi.opened" ).length;
		  if(n > 5){
			  var x = $(".opened").first();
			  x.removeClass("opened");
			x.addClass("closed");
		  }
}

    function myFunctionProfile(){
		$("#TabProfile").css("display","block");
		$('#myTab a[href = "#profile"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#TabProfile").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#profile").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}	  

	function myFunctionRes(){
		$("#Tabreservations").css("display","block");
		$('#myTab a[href = "#reservations"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#Tabreservations").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#reservations").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}	
	
	function myFunctionComp(){
		$("#Tabcompanies").css("display","block");
		$('#myTab a[href = "#companies"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#Tabcompanies").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#companies").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}
	
	function myFunctionProg(){
		$("#Tabprograms").css("display","block");
		$('#myTab a[href = "#programs"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#Tabprograms").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#programs").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}	
	
	function myFunctionManagComp(){
		$("#TabManageCompanies").css("display","block");
		$('#myTab a[href = "#ManageCompanies"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#TabManageCompanies").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#ManageCompanies").addClass("active");
		
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}	
	
	function myFunctionReports(){
		$("#TabReports").css("display","block");
		$('#myTab a[href = "#Reports"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#TabReports").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#Reports").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}	
	
	function myFunctionAccount(){
		$("#TabAccounting").css("display","block");
		$('#myTab a[href = "#Accounting"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#TabAccounting").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#Accounting").addClass("active");
	    $(".SBItem").removeClass("active");
        $("#SBAccounting").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}	
	
	function myFunctionSuccessPass(){
		$("#TabSuccessPassenger").css("display","block");
		$('#myTab a[href = "#SuccessPassengers"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#TabSuccessPassenger").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#SuccessPassengers").addClass("active");
		$(".SBItem").removeClass("active");
        $("#SBSuccessPassenger").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}

	function myFunctionRoomType(){
		$("#TabRoomType").css("display","block");
		$('#myTab a[href = "#RoomType"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#TabRoomType").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#RoomType").addClass("active");
		$(".SBItem").removeClass("active");
        $("#SBRoomType").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}	
	
	function myFunctionTaskeen(){
		$("#TabTaskeen").css("display","block");
		$('#myTab a[href = "#Taskeen"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#TabTaskeen").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#Taskeen").addClass("active");
		$(".SBItem").removeClass("active");
        $("#SBTaskeen").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}

	function myFunctionSettings(){
		$("#TabSetting").css("display","block");
		$('#myTab a[href = "#setting"]').tab('show');
		$(".TabLi").removeClass("active");
		$("#TabSetting").addClass("active");
        $(".tab-pane").removeClass("active");
        $("#setting").addClass("active");
		$(".SBItem").removeClass("active");
        $("#SBSetting").addClass("active");
		
		var n = $( ".TabLi" ).length;
		  if(n > 5){
			$(".TabLi:first-child").css("display","none");
		  }
	}
//------------------------------

	$(document).on("click", "#TabAccounting", function ()
    {
        $(".SBItem").removeClass("active");
        $("#SBAccounting").addClass("active");
    });	

	$(document).on("click", "#TabSuccessPassenger", function ()
    {
        $(".SBItem").removeClass("active");
        $("#SBSuccessPassenger").addClass("active");
    });	

	$(document).on("click", "#TabRoomType", function(){	
		$(".SBItem").removeClass("active");
		$("#SBRoomType").addClass("active");
	}); 
		
	$(document).on("click", "#TabTaskeen", function(){
		$(".SBItem").removeClass("active");
		$("#SBTaskeen").addClass("active");
	}); 	
	
	$(document).on("click", "#TabSetting", function(){
		$(".SBItem").removeClass("active");
		$("#SBSetting").addClass("active");
	});  
	
	//---------------------------------
	$(document).on("click", ".close", function (){
	var x = $(this).closest(".TabLi");
	x.removeClass("opened");
	x.addClass("closed");
    var clickedURL = x.find("a").attr('href');
	$(clickedURL).removeClass("active");
}); 

   //----------------------------------
   $("#PrintInvoice").click( function() {

	$.post( $("#Accountprint").attr("action"), 
	$("#Accountprint :input").serializeArray(),
	function(info){
		
		$("#PrintableSection").html(info);
		});
	
}); 

$("#Accountprint").submit( function() {
  return false; 
});

/*     $( document ).ready(function() {
	
    $("#multilingo").multilingo({
        default: "en", 
        langs: "ar", 
        theme: "sidebar", 
        btn: "Select Language", 
        flags: false, 
        smoothScroll: false, 
        exclude: "none", 
        color: "#777777", 
        background: "#F1F1F1", 
        btnColor: "#777777", 
        btnBG: "#FFFFFF"
    });
});  */
