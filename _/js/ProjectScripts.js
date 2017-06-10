$(document).ready(function ()
{
    //---------------------------------------------------------------------------------------------
    //-------------------------------------------------------------------------------DatePicker -
    //----------------------------------------------------------------------------------------------
  //  $(".DateInputEgyptian").datepicker({ dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true });
    //----------------------------------------------------------------------------------------------

    //-----------------------------------passport-------------------------*/
     /*$("#Passport_issue_date").change(function ()

        {
	  var cpassportdate = document.getElementById("Passport_issue_date");
	  
	  var Passport_day = (cpassportdate.value).slice(8,10);
	  
	  var Passport_Month = (cpassportdate.value).slice(5,7);
	  
	  var Passport_Year = (cpassportdate.value).slice(0,4);
	  
	  var Password_newdate = parseInt(Passport_Year )+ 7 ;
      
	  $("#Passport_End_data").val(Password_newdate + "-" + Passport_Month + "-" + Passport_day) ; 
	  
		});*/
     //--------------------nour upgrade part-----------------------------passport--------------------------------------------
/*$("#Passport_End_data").change(function ()// start Passport_issue_date // end Passport_End_data
   {
      var PassportStartcustomer = document.getElementById("Passport_End_data");
      
      var Passport_daycustomer = (PassportStartcustomer.value).slice(8,10);
      
      var Passport_newdaycustomer = parseInt(Passport_daycustomer)+  1; 
      
      var Passport_Enddaycustomer = 31;
      
      var Passport_Endday1customer = 30;
      
      var Passport_Endday2customer = 28;
          
      var Passport_Monthcustomer = (PassportStartcustomer.value).slice(5,7);
      
      var Passport_newMonthcustomer =  parseInt(Passport_Monthcustomer)+ 1;
            
      var Passport_Yearcustomer = (PassportStartcustomer.value).slice(0,4);
      
      var Passport_lastMonthcustomer = 12;

      var Password_newdatecustomer = parseInt(Passport_Yearcustomer )- 7 ;
      
       if( Passport_Monthcustomer == 01 || Passport_Monthcustomer == 02 || Passport_Monthcustomer == 04 || Passport_Monthcustomer == 06 || Passport_Monthcustomer == 08 || Passport_Monthcustomer == 09 || Passport_Monthcustomer == 11)
       {
               if(Passport_daycustomer == 01)
                {
                   
                   $("#Passport_issue_date").val(Password_newdatecustomer + "-" + Passport_newMonthcustomer + "-" + Passport_Enddaycustomer) ; 
                    
                    if(Passport_daycustomer == 01 && Passport_Monthcustomer == 01 ){
                    
                     $("#Passport_issue_date").val(Password_newdatecustomer + "-" + Passport_lastMonthcustomer + "-" + Passport_Enddaycustomer) ;
                    
                }
                
                }else{
                    
                    $("#Passport_issue_date").val(Password_newdatecustomer + "-" + Passport_Monthcustomer + "-" + Passport_newdaycustomer) ; 
                        
                }
        }else if( Passport_Monthcustomer == 03)
        {
                if(Passport_daycustomer == 01)
                {
                   
                   $("#Passport_issue_date").val(Password_newdatecustomer + "-" + Passport_newMonthcustomer + "-" + Passport_Endday2customer) ; 
                   
                }
       
        }else 
        {
                if(Passport_daycustomer == 01)
                {
               
                    $("#Passport_issue_date").val(Password_newdatecustomer + "-" + Passport_newMonthcustomer + "-" + Passport_Endday1customer) ; 
               
                }else
                {
               
                    $("#Passport_issue_date").val(Password_newdatecustomer + "-" + Passport_Monthcustomer + "-" + Passport_newdaycustomer) ; 

                }
                
           }
      
        });      */  
//-----------------------------------passport modal-------------------------*/
     $("#edit_Passport_issue_date").change(function ()

        {
	  var cpassportdate = document.getElementById("edit_Passport_issue_date");
	  
	  var Passport_day = (cpassportdate.value).slice(8,10);
	  
	  var Passport_Month = (cpassportdate.value).slice(5,7);
	  
	  var Passport_Year = (cpassportdate.value).slice(0,4);
	  
	  var Password_newdate = parseInt(Passport_Year )+ 7 ;
      
	  $("#edit_Passport_End_data").val(Password_newdate + "-" + Passport_Month + "-" + Passport_day) ; 
	  
		});




    $(document).on("click", "#CompaniesTable #checkall", function ()
    {
        if ($("#checkall").is(':checked'))
        {
            $("#CompaniesTable input[type=checkbox]").each(function ()
            {
                $(this).prop("checked", true);
            });

        } else
        {
            $("#CompaniesTable input[type=checkbox]").each(function ()
            {
                $(this).prop("checked", false);
            });
        }
    });

    //---------------------------------------------------------------------------------------------- 
    //---- CollapseToggleGNumbers -------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------
    $(document).on("click", "#CollapseToggleGNumbers", function ()
    {
        var Tag = $(".GeneralSpecs").hasClass("in");

        $(".GeneralSpecs").collapse("toggle");

        if (Tag) { $("#ReportToggelBtn").removeClass("fa-chevron-up"); $("#ReportToggelBtn").addClass("fa-chevron-down"); }
        else { $("#ReportToggelBtn").removeClass("fa-chevron-down"); $("#ReportToggelBtn").addClass("fa-chevron-up"); }
    });


    //---------------------------------------------------------------------------------------------- 
    //---- ManageCompanies -------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------
    $(document).on("click", "#SetProgramBtn", function ()
    {
        $("#SetProgramForm").collapse("show");
        $("#setProgramsDiv").collapse("show");
        $("#SetProgramsSearch").collapse("show");
        $("#SwitchFormDiv").collapse("hide");
    });
    $(document).on("click", "#ArrangeCustomersBtn", function ()
    {
        $("#SetProgramForm").collapse("hide");
        $("#setProgramsDiv").collapse("hide");
        $("#SetProgramsSearch").collapse("hide");
        $("#SwitchFormDiv").collapse("show");
    });
    //---------------------------------------------------------------------------------------------- 
    //---- ProgramData : ProfilePage ---------------------------------------------------------------
    //---------------------------------------------------------------------------------------------
    $(document).on("click", ".ProgDetails", function ()
    {
        var x = $(this).closest(".ProgDataHaeder").closest(".ProgramSpecs").find(".ProgData").collapse("toggle");
    });

    //---------------------------------------------------------------------------------------------- 
    //---- GetDataFromIdNumber : ReservationPage ---------------------------------------------------
    //----------------------------------------------------------------------------------------------
    $(document).on("change", "#National_id", function ()
    {
        var idCard = $(this).val();

        var idYeargenerate = idCard.slice(0, 1);

        var country_i = idCard.slice(7, 9);

        var idYear = idCard.slice(1, 3);

        var idMonth = idCard.slice(3, 5);

        var idDay = idCard.slice(5, 7);

        var idGender = idCard.slice(12, 13);


        //------ Birth Date -----------------
        if (idYeargenerate == 2)
        {
            $("#customer_birth_date").val("19" + idYear + "-" + idMonth + "-" + idDay);
        }
        else
        {
            $("#customer_birth_date").val("20" + idYear + "-" + idMonth + "-" + idDay);
        }
        //------ Birth Country-----------------
        $('#cust_city').empty();

        var p = { BirthCountry: country_i };

        $.post("CustomerController/get_country", p, function (data)
        {
            $('#cust_city').val(data);
        });
        //-----------Set Gender--------------
        if (idGender % 2 == 0)
        {
            $('#customer_gender_female').attr('checked', true);
        }
        else { 
            $('#customer_gender_male').attr('checked', true);
        }
        //------ Birth Country-----------------
  
        var GenderModal = $("input[name='customer_gender']:checked").val();

        var CurrentDateModal = new Date();
        var CurrentYearModal = CurrentDateModal.getFullYear();
        var InputYearModal = $("#customer_birth_date").val().slice(0, 4);


        var ResultModal = CurrentYearModal - InputYearModal;

        if (GenderModal == "female" && ResultModal < 45)
        {
            $('#collapseDependant0').collapse('show');
        }
        else if (GenderModal == "female" && ResultModal > 45)
        {
            $('#collapseDependant0').collapse('hide');
        }
        else if (GenderModal == "male" && ResultModal > 17)
        {
            $('#collapseDependant0').collapse('hide');
        }
        else if (GenderModal == "male" && ResultModal < 17)
        {
            $('#collapseDependant0').collapse('show');
        }

    });

    //---------------------------------------------------------------------------------------------- 
    //---- SideBar : activation --------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------
    $(document).on("click", "#SBProfile", function ()
    {
				$("#TabProfile").css("display","block");
		$('#myTab a[href = "#profile"]').tab('show');
        $(".SBItem").removeClass("active");
        $(this).addClass("active");

        $(".TabLi").removeClass("active");
        $("#TabProfile").addClass("active");

        $(".tab-pane").removeClass("active");
        $("#profile").addClass("active");
    });
    $(document).on("click", "#SBCompanies", function ()
    {
        $(".SBItem").removeClass("active");
        $(this).addClass("active");

        $(".TabLi").removeClass("active");
        $("#Tabcompanies").addClass("active");

        $(".tab-pane").removeClass("active");
        $("#companies").addClass("active");
    });
    $(document).on("click", "#SBPrograms", function ()
    {
        $(".SBItem").removeClass("active");
        $(this).addClass("active");

        $(".TabLi").removeClass("active");
        $("#Tabprograms").addClass("active");

        $(".tab-pane").removeClass("active");
        $("#programs").addClass("active");
    });
    $(document).on("click", "#SBReservations", function ()
    {
        $(".SBItem").removeClass("active");
        $(this).addClass("active");

        $(".TabLi").removeClass("active");
        $("#Tabreservations").addClass("active");

        $(".tab-pane").removeClass("active");
        $("#reservations").addClass("active");
    });
    $(document).on("click", "#SBManageCompanies", function ()
    {
        $(".SBItem").removeClass("active");
        $(this).addClass("active");

        $(".TabLi").removeClass("active");
        $("#TabManageCompanies").addClass("active");

        $(".tab-pane").removeClass("active");
        $("#ManageCompanies").addClass("active");
    });
    $(document).on("click", "#SBReports", function ()
    {
        $(".SBItem").removeClass("active");
        $(this).addClass("active");

        $(".TabLi").removeClass("active");
        $("#TabReports").addClass("active");

        $(".tab-pane").removeClass("active");
        $("#Reports").addClass("active");
    });
    //-------------------  
    $(document).on("click", "#TabProfile", function ()
    {
        $(".SBItem").removeClass("active");
        $("#SBProfile").addClass("active");
    });
    $(document).on("click", "#Tabcompanies", function ()
    {
        $(".SBItem").removeClass("active");
        $("#SBCompanies").addClass("active");
    });
    $(document).on("click", "#Tabprograms", function ()
    {
        $(".SBItem").removeClass("active");
        $("#SBPrograms").addClass("active");
    });
    $(document).on("click", "#Tabreservations", function ()
    {
        $(".SBItem").removeClass("active");
        $("#SBReservations").addClass("active");
    });
    $(document).on("click", "#TabManageCompanies", function ()
    {
        $(".SBItem").removeClass("active");
        $("#SBManageCompanies").addClass("active");
    });
    $(document).on("click", "#TabReports", function ()
    {
        $(".SBItem").removeClass("active");
        $("#SBReports").addClass("active");
    });

    //-----------------------------------passport-------------------------*/
    $("#edit_Passport_issue_date").change(function ()
    {
        var cpassportdate = document.getElementById("cpassportdate");

        var Passport_day = (cpassportdate.value).slice(8, 10);

        var Passport_Month = (cpassportdate.value).slice(5, 7);

        var Passport_Year = (cpassportdate.value).slice(0, 4);

        var Password_newdate = parseInt(Passport_Year) + 7;

        $("#edit_Passport_End_data").val(Password_newdate + "-" + Passport_Month + "-" + Passport_day);

    });

    //----------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------- Initiate -----
    //----------------------------------------------------------------------------------------------
   // $("[data-toggle=tooltip]").tooltip();
   // $(".GeneralSpecs").collapse("show");
    //----------------------------------------------------------------------------------------------
});

//----------------------yassmin-----------------------
