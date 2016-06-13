<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>




<!--structure taken from http://codepen.io/matthu185/pen/myyvgr-->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ThisAbility Registration</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="registration.css">
        
        <script>
            $(function () {
                $("#birthdate").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "1900:2100"
                });
            });

        </script>
        
    </head>
    <body>

        <form method="post">
      
        <h1>Administration</h1>
        
        <fieldset>
            
                    
        </fieldset>
        
        
        
        
       
        <button type="submit" onclick="alert('View Evaluation')">View Evaluations</button>
        <button type="submit" onclick="alert('View Schedule')">View Schedule</button>
        <button type="submit" onclick="alert('View Users')">View Users</button>
        <!--button type="submit" onclick="alert('View Schedule')">View Schedule</button-->
       
      </form>
      
    </body>
</html>
