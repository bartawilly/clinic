$(document).ready(function ()
{
    //--------------------------------------AddCompanyForm-------
    var validator = $("#AddCompanyForm").validate({
        errorPlacement: function (error, element)
        {
            // Append error within linked label
            $(element).closest("div").find("label[for='" + element.attr("name") + "']").append(error);
        },
        errorElement: "span",
        rules: {
            name: "required",
            address: "required",
            telephone: { required: true, number: true },
            mobile: { required: true, number: true },
            quota: { required: true, number: true },
            size: { required: true },
            user_name: { required: true },
            password: { required: true }
        },
        messages:
          {
              name: "<span class='fa fa-close'></span>",
              address: "<span class='fa fa-close'></span>",
              telephone: "<span class='fa fa-close'></span>",
              mobile: "<span class='fa fa-close'></span>",
              quota: "<span class='fa fa-close'></span>",
              size: "<span class='fa fa-close'></span>",
              user_name: "<span class='fa fa-close'></span>",
              password: "<span class='fa fa-close'></span>"
          }
    });
    //--------------------------------------------------------   

    //--------------------------------------AddProgramForm-------
    var validator = $("#AddProgramForm").validate({
        errorPlacement: function (error, element)
        {
            // Append error within linked label
            $(element).closest("div").find("label[for='" + element.attr("name") + "']").append(error);
        },
        errorElement: "span",
        rules: {
            name: "required",
            total_cost: { required: true, number: true },
            minimum_payment: { required: true, number: true },
            discription: { required: true }
        },
        messages:
          {
              name: "<span class='fa fa-close'></span>",
              total_cost: "<span class='fa fa-close'></span>",
              minimum_payment: "<span class='fa fa-close'></span>",
              discription: "<span class='fa fa-close'></span>"
          }
    });
    //-------------------------------------------------------        

    //--------------------------------------AddCustomerForm-------
    var validator = $("#AddCustomerForm").validate({
        errorPlacement: function (error, element)
        {
            // Append error within linked label
            $(element).closest("div").find("label[for='" + element.attr("name") + "']").append(error);
        },
        errorElement: "span",
        rules: {
            National_id: "required",
            customer_name: { required: true},
            home_phone: { required: true, number: true },
            cust_mobile: { required: true, number: true },
            cust_address: { required: true },
            customer_birth_date: { required: true },
            cust_city: { required: true },
            cust_country: { required: true },
            nationality: { required: true },
            maritalStatus: { required: true },
            customer_gender: { required: true },
            passport_no: { required: true },
            Passport_Issuer: { required: true },
            Passport_issue_State: { required: true },
            Passport_End_data: { required: true },
            Passport_issue_date: { required: true },
            job: { required: true },
            program_id: { required: true }
        },
        messages:
          {
              National_id: "<span class='fa fa-close'></span>",
              customer_name: "<span class='fa fa-close'></span>",
              home_phone: "<span class='fa fa-close'></span>",
              cust_mobile: "<span class='fa fa-close'></span>",
              cust_address: "<span class='fa fa-close'></span>",
              customer_birth_date: "<span class='fa fa-close'></span>",
              cust_city: "<span class='fa fa-close'></span>",
              cust_country: "<span class='fa fa-close'></span>",
              nationality: "<span class='fa fa-close'></span>",
              maritalStatus: "<span class='fa fa-close'></span>",
              customer_gender: "<span class='fa fa-close'></span>",
              passport_no: "<span class='fa fa-close'></span>",
              Passport_Issuer: "<span class='fa fa-close'></span>",
              Passport_issue_State: "<span class='fa fa-close'></span>",
              Passport_End_data: "<span class='fa fa-close'></span>",
              Passport_issue_date: "<span class='fa fa-close'></span>",
              job: "<span class='fa fa-close'></span>",
              program_id: "<span class='fa fa-close'></span>"
          }
    });
    //-------------------------------------------------------  

    //--------------------------------------assign_program_to_companyForm-------
    var validator = $("#assign_program_to_companyForm").validate({
        errorPlacement: function (error, element)
        {
            // Append error within linked label
            $(element).closest("div").find("label[for='" + element.attr("name") + "']").append(error);
        },
        errorElement: "span",
        rules: {
            company_id: "required",
            program_id: { required: true }

        },
        messages:
          {
             company_id: "<span class='fa fa-close'></span>",
             program_id: "<span class='fa fa-close'></span>"
          }
    });
    //-------------------------------------------------------


    //--------------------------------------UpdateCompanyForm-------
    var validator = $("#UpdateCompanyForm").validate({
        errorPlacement: function (error, element)
        {
            // Append error within linked label
            $(element).closest("div").find("label[for='" + element.attr("name") + "']").append(error);
        },
        errorElement: "span",
        rules: {
            name: "required",
            address: "required",
            telephone: { required: true, number: true },
            mobile: { required: true, number: true },
            quota: { required: true, number: true },
            size: { required: true },
            user_name: { required: true },
            password: { required: true }
        },
        messages:
          {
              name: "<span class='fa fa-close'></span>",
              address: "<span class='fa fa-close'></span>",
              telephone: "<span class='fa fa-close'></span>",
              mobile: "<span class='fa fa-close'></span>",
              quota: "<span class='fa fa-close'></span>",
              size: "<span class='fa fa-close'></span>",
              user_name: "<span class='fa fa-close'></span>",
              password: "<span class='fa fa-close'></span>"
          }
    });
    //---------------------------------------------------------------
       
    //--------------------------------------UpdateProgramForm-------
    var validator = $("#UpdateProgramForm").validate({
        errorPlacement: function (error, element)
        {
            // Append error within linked label
            $(element).closest("div").find("label[for='" + element.attr("name") + "']").append(error);
        },
        errorElement: "span",
        rules: {
            name: "required",
            total_cost: { required: true, number: true },
            minimum_payment: { required: true, number: true },
            discription: { required: true }
        },
        messages:
          {
              name: "<span class='fa fa-close'></span>",
              total_cost: "<span class='fa fa-close'></span>",
              minimum_payment: "<span class='fa fa-close'></span>",
              discription: "<span class='fa fa-close'></span>"
          }
    });
    //-------------------------------------------------------

    //--------------------------------------UpdateCustomerForm-------
    var validator = $("#UpdateCustomerForm").validate({
        errorPlacement: function (error, element)
        {
            // Append error within linked label
            $(element).closest("div").find("label[for='" + element.attr("name") + "']").append(error);
        },
        errorElement: "span",
        rules: {
            customer_name: "required",
            home_phone: { required: true, number: true },
            cust_mobile: { required: true, number: true },
            cust_address: { required: true },
            customer_birth_date: { required: true },
            cust_city: { required: true },
            cust_country: { required: true },
            nationality: { required: true },
            maritalStatus: { required: true },
            customer_gender: { required: true },
            passport_no: { required: true },
            Passport_Issuer: { required: true },
            Passport_issue_State: { required: true },
            Passport_End_data: { required: true },
            Passport_issue_date: { required: true },
            job: { required: true },
            program_id: { required: true }
        },
        messages:
          {
              customer_name: "<span class='fa fa-close'></span>",
              home_phone: "<span class='fa fa-close'></span>",
              cust_mobile: "<span class='fa fa-close'></span>",
              cust_address: "<span class='fa fa-close'></span>",
              customer_birth_date: "<span class='fa fa-close'></span>",
              cust_city: "<span class='fa fa-close'></span>",
              cust_country: "<span class='fa fa-close'></span>",
              nationality: "<span class='fa fa-close'></span>",
              maritalStatus: "<span class='fa fa-close'></span>",
              customer_gender: "<span class='fa fa-close'></span>",
              passport_no: "<span class='fa fa-close'></span>",
              Passport_Issuer: "<span class='fa fa-close'></span>",
              Passport_issue_State: "<span class='fa fa-close'></span>",
              Passport_End_data: "<span class='fa fa-close'></span>",
              Passport_issue_date: "<span class='fa fa-close'></span>",
              job: "<span class='fa fa-close'></span>",
              program_id: "<span class='fa fa-close'></span>"
          }
    });
    //------------------------------------------------------- 
    
});
  