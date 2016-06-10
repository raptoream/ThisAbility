<?php
//This is a test of the commit function!
$index = <<<_END
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
        <!--div id="logo">
        <img id="thisAbilityLogo" src="logo_thisability.jpg">
        </div-->
        
        <h1>Log In</h1>
        <form action="welome.php" method="post">
         <label for="userName">Username:</label>
          <input type="text" id="username" name="username">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
       
        
        
        
          <button type="submit" onclick="alert(123);">Log in</button>
        <a href="registration.php">Not Registered? Click Here To Register</a>

      </form>
      
    </body>
</html>

_END;
echo $index;
?>