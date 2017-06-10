<!DOCTYPE html>
<?php //session_start(); if(isset($_GET['user_position'])){ session_destroy(); } ?>
<html lang="ar">
    <head>
        <meta charset="utf-8" />
        <title>Hosplify</title>
         <link rel="shortcut icon" href="<?php echo $this->config->base_url(); ?>_/images/Ficon.png"/>
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/BoxComponant.css" rel="stylesheet">
        <link type="text/css"href="<?php echo $this->config->base_url(); ?>_/fonts/font-awesome.min.css" rel="stylesheet">
        <link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-rtl.min.css" rel="stylesheet">  
        <link type="text/css" href="<?php echo $this->config->base_url(); ?>_/css/MainStyle.css" rel="stylesheet"> 
        <link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/invoice.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    </head>
    <body class="indexBody">
        <section class="DataSec">
            <div class="col-md-offset-5 col-md-3 loginBLock">
        <form action="<?php echo $this->config->base_url(); ?>EmployeeController/login" method="post" id="loginform">
            <img src="<?php echo $this->config->base_url(); ?>_/images/logo2.png" alt="TaxTopic 1">
            <div class="form-group formLayout" id="formlayout">
	        	<label for="user_name" class="control-label ">أسم المستخدم :</label>
		        <input type="text" name="employee_username" class="form-control" placeholder="أسم المستخدم" />
	        </div>
            <div class="form-group formLayout" id="formlayout">
	        	<label for="password" class="control-label ">كلمة المرور :</label>
		        <input type="password" name="employee_password" class="form-control" placeholder="كلمة المرور" />
	        </div>

            <button class="btn btn-info" type="submit" name="Enter" >تسجيل دخول</button>
        </form>
            </div>
        </section>
        <!------------------------ Scripts ---------------------------->
        <script src="<?php echo $this->config->base_url(); ?>_/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.min.js"></script>
        <script src="<?php echo $this->config->base_url(); ?>_/js/jquery-ui.min.js"></script>
        <script src="<?php echo $this->config->base_url(); ?>_/js/zabuto_calendar.min.js"></script>
        <script src="<?php echo $this->config->base_url(); ?>_/js/jquery.validate.min.js"></script>
        <script src="<?php echo $this->config->base_url(); ?>_/js/ProjectScripts.js"></script>
        <script>            
            $(document).ready(function (){                
                var validator = $("#loginform").validate({                    
                    errorPlacement: function (error, element)                    
                    { // Append error within linked label                        
                        $( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},                    
                        errorElement: "span",                    
                        rules :{
                             user_name: "required",                       
                             password: "required"                   
                        },                    
                        messages: {                        
                            user_name: " من فضلك أدخل كلمة المستخدم",                        
                            password: " من فضلك أدخل كلمة المرور"                    
                        }                
                });            
          });       
          </script>
        <!------------------------ /Scripts --------------------------->
    </body>
</html>