<?php

$schedule = <<<_END
<!--structure taken from http://codepen.io/matthu185/pen/myyvgr-->
<head>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
<title>ThisAbility Registration</title>
<link rel = "stylesheet" href = "//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src = "//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="registration.css">
<link rel="stylesheet" href="style.css">

<script>
    $(function () {
        $("#pickupDate").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1900:2100"
        });

        $("#returnDate").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1900:2100"
        });
        $("#repeatUntil").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1900:2100"
        });

        // $("#pickupTime").html(timeDrop());
        $("#pickupHour").html(initializeHours());
        $("#pickupMinute").html(initializeMinute());
        $("#pickupAMPM").html(initializeAMPM());

        $("#returnHour").html(initializeHours());
        $("#returnMinute").html(initializeMinute());
        $("#returnAMPM").html(initializeAMPM());
    });

    function initializeHours() {
        var hours = "";
        for (var i = 1; i < 13; i++) {
            hours += "<option>" + i + "</option>";
        }
        console.log(hours);
        return hours;
    }
    function initializeMinute() {
        var minute = "";
        for (var i = 0; i < 60; i++) {
            if (i < 10) {
                minute += "<option>0" + i + "</option>";
            } else {
                minute += "<option>" + i + "</option>";
            }
        }
        console.log(minute);
        return minute;
    }
    function initializeAMPM() {
        var morningAfternoon = "";
        morningAfternoon += "<option>AM</option>";
        morningAfternoon += "<option>PM</option>";
        return morningAfternoon;

    }
</script>

</head>
<body>

    <form action="welome.php" method="post">

        <h1>Schedule</h1>

        <fieldset>

            <label for="firstName">Pick Up Address</label>
            <input type="text" id="pickupAddress" name="pickupAdd">

            <label for="pickupDate">Pick Up Date</label>
            <input type="text" id="pickupDate" name="pickupDate">

            <label for="pickupTime">Pick Up Time</label>
            <select id="pickupHour"></select>:<select id="pickupMinute"></select><select id="pickupAMPM"></select>
            <!--input type="text" id="pickupTime" name="pickupTime"-->

            <label for="returnAddress">Return Address</label>
            <input type="text" id="returnAddress" name="returnAddress">

            <label for="firstName">Return Date</label>
            <input type="text" id="returnDate" name="returnDate">
            <label for="returnTime">Return Time</label>
            <select id="returnHour"></select>:<select id="returnMinute"></select><select id="returnAMPM"></select>


            <label for="repeat">Repeat Every:</label>
            <input type="checkbox" name="repeat" value="Monday">Monday<br>
            <input type="checkbox" name="repeat" value="Tuesday">Tuesday<br>
            <input type="checkbox" name="repeat" value="Wednesday">Wednesday<br>
            <input type="checkbox" name="repeat" value="Thursday">Thursday<br>
            <input type="checkbox" name="repeat" value="Friday">Friday<br>
            <input type="checkbox" name="repeat" value="Saturday">Saturday<br>
            <input type="checkbox" name="repeat" value="Sunday">Sunday<br>

            <label for="repeatUntil">Until</label>
            <input type="text" id="repeatUntil" name="repeatUntil">
        </fieldset>





        <button type="submit">Submit</button>
    </form>

</body>
</html>
_END;
echo $schedule;
?>