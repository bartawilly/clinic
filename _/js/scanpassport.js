 function formatDate(expiredate_part) {
      var d = new Date(expiredate_part),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
    }
//--------------------nour new part--------------------------------------------------//
   $("#scanpassport").change(function(){
	var ScanPassportNum = document.getElementById("scanpassport");
	var passportnumvar = (ScanPassportNum.value).split('<');

    var c = passportnumvar[0];
    var p = passportnumvar[1];
    var n = passportnumvar[2];
    var m = passportnumvar[3];
    var h = passportnumvar[4];
    var y = passportnumvar[5];
    var r = passportnumvar[6];
    var g = passportnumvar[7];
    //--------------------------------------
     var t = (r).slice(0,4);// اسم الرباع //be sure again for this
     var k = (p).slice(2,'<');
     var res = (r).slice(-28);
     var passportnum = (res).slice(0,9);
     var countryissu = (p).slice(0,3);//دولة الاصدار
	 //var Familyname = (p).slice(4,10);
     var COUNTRY = null;
     if (countryissu == "EGY") {
             COUNTRY = "مصر";
     };
     var custname = m +' ' + h +' '+ y + ' '+ t + ' '+ k;
     ///////////////////////////////////////////////////////جهة الاصدار
     var foundvalue= (ScanPassportNum.value).split('|');
     var PassportIssueTT = foundvalue[2];
     var PassportIssue = (PassportIssueTT).slice(-2);
     //////////////////////////////////////////////////////تاريخ الميلاد
      var partNational_id = (res).slice(13,19);
     /////////////////////////////////////////////////
     //////////////////////////////////////////////////////تاريخ الميلاد
      var expiredate_part = (res).slice(21,27);
      //200827
      var year = (expiredate_part).slice(0,2);
      var month = (expiredate_part).slice(2,4);
      var day = (expiredate_part).slice(4,6);
      var finaldateconvert = '20'+ year +'-' + month +'-'+ day;
      //var date = formatDate(finaldateconvert);
     
     /////////////////////////////////////////////////
    //-------------------------------------
    //alert(PassportIssueTT);
    //alert(partNational_id);

    /*alert(expiredate_part);
    alert(finaldateconvert);
    alert(year);
    alert(month);
    alert(day);*/
    //alert(date);

    //alert(res);
    //alert(passportnum);
	//console.log(date);
	//alert(custname);
	//alert(custname);
	/*alert(p);
	alert(n);
	alert(m);
	alert(h);
	alert(y);
	alert(passportnum);
	alert(g);*/
	//alert(countryissu);

	//$("#customer_name").val(custname);
	document.getElementById("customer_name").innerHTML = custname;
    $("#passport_no").val(passportnum);//رقم جواز السفر
    $("#cust_country").val(COUNTRY);//دولة الملاد == دولة الاصدار
    $("#Passport_issue_State").val(COUNTRY);//دولة الاصدار
    $("#Passport_Issuer").val(PassportIssue);
    $("#National_id").val(partNational_id);
    $("#Passport_End_data").val(finaldateconvert);//تايخ انتهاء الباسبور
    // National_id الرقم القومى
    //cust_country دولة الميلاد
    //Passport_issue_State دولة الاصدار
    //Passport_Issuer جهة الاصدار


	});