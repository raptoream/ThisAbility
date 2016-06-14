<?php

$registration = <<<_END
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

        <form action="welcome.php" method="post">
      
        <h1>Registration</h1>
        
        <fieldset>
          <!--<legend><span class="number">1</span>Your basic info</legend>-->
          <label for="firstName">Name/Nombre:</label>
          <input type="text" id="firstName" name="firstName">
          
          <label for="lastName">Last Name/Apellido:</label>
          <input type="text" id="lastName" name="lastName">
          
          <label for="birthdate">Date of Birth/Fecha de Nacimento: </label>
          <input type="text" id="birthdate" name="birthdate">
          
          <label>Sex / Sexo:</label>
          <input type="radio" id="male" value="male" name="gender"><label for="male" class="light">Male / Hombre</label><br>
          <input type="radio" id="female" value="female" name="gender"><label for="female" class="light">Female / Mujer</label><br><br>
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
          
          <label for="address">Address / Domicilio:</label>
          <input type="text" id="address" name="address">
          
          <label for="cityState">City, State / Ciudad, Estado:</label>
          <input type="text" id="cityState" name="cityState">
          
          <label for="zip">Zip:</label>
          <input type="text" id="zip" name="zip">
          
          <label for="country">Country / Pais:</label>
          <input type="text" id="country" name="country">
        
          <label for="emernumber">Emergency Number / Número de Emergencia:</label>
          <input type="text" id="emernumber" name="emernumber">
          
          <label for="additionalInfo">Please describe any additional services you may need (Optional):</label>
          <textarea id="additionalInfo" name="additionalInfo"></textarea>          
           
          <label for="userName">Username:</label>
          <input type="text" id="username" name="username">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
        
          <label for="repassword">Repeat Password:</label>
          <input type="password" id="repassword" name="repassword">
                    
        </fieldset>
        
        
        
        
       
        <button type="submit">Register</button>
      </form>
      
    </body>
</html>
_END;
echo $registration;
?>