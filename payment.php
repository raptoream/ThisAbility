<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>ThisAbility Payment</title>
    <link rel = "stylesheet" href = "//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src = "//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="registration.css">


    <script>
        $(function () {
            $("#creditCard").hide();
            $("#insurance").hide();
        });
        function choosePayPal() {
            $("#creditCard").hide();
            $("#insurance").show();
        }
        function chooseCard() {
            $("#creditCard").show();
            $("#insurance").hide();
        }


    </script>

</head>
<body>

    <form action="welome.php" method="post">

        <h1>Billing Information</h1>

        <fieldset>

            <div id="paymentMethod">
                <label for="choseCard">Credit</label>
                <input type="radio" id="choseCard" name="payType" value="Credit" onchange="chooseCard()">
                <label for="choseInsurance">Insurance</label>
                <input type="radio" id="choseInsurance" name="payType" value="PayInsurance" onchange="choosePayPal()">

            </div>    

            <div id="creditCard">
                <select>
                    <option id="Visa" value="Visa">Visa</option>
                    <option id="Mastercard" value="Mastercard">Mastercard</option>
                    <option id="Discover" value="Discover">Discover</option>
                    <option id="AmericanExpress" value="American Express">American Express</option>
                </select>
                <label for="firstName">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber">

                <label for="pickupDate">Expiration Date</label>
                <input type="text" id="expMonth" name="expMonth" style="width: 20%">/
                <input type="text" id="expYear" name="expYear" style="width: 20%">

                <label for="pickupTime">Security Code</label>
                <input type="text" id="secCode" name="secCode" style="width: 20%">
            </div>
            <div id="insurance">
                <label for="firstName">Primary</label>
                <input type="text" id="Primary" name="primary">

                <label for="firstName">Policy Number</label>
                <input type="text" id="policyNumber" name="policyNumber">
            </div>
        </fieldset>





        <button type="submit">Submit</button>
    </form>

</body>
</html>