<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>


Date:
<?php
define("BR","<br>",true);
                                                      //date() function
// d = day, m = month, Y = year                       <---- date parameters
echo date("d/m/Y").br;
?>
Day:
<?php
// l is string form of day of the week                <---- another one
echo date("l");

//Days of week in Turkish
if (date("l") == "Monday"){
    echo " = Pazartesi".br;
}
elseif (date("l") == "Tuesday"){
    echo " = Salı".br;
}
elseif (date("l") == "Wednesday"){
    echo " = Çarşamba".br;
}
elseif (date("l") == "Thursday"){
    echo " = Perşembe".br;
}
elseif (date("l") == "Friday"){
    echo " = Cuma".br;
}
elseif (date("l") == "Saturday"){
    echo " = Cumartesi".br;
}
elseif (date("l") == "Sunday"){
    echo " = Pazar".br;
}

/*                                                    <---- time parameters
 H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
 */

echo "Digital time: ".date("H:i").br;
echo "AM/PM time: ".date("ha").br;
echo "Full time: ".date("H:i:s").br;
                                                      //date_default_timezone_set() function
//this function sets your timezone as you can see :)
date_default_timezone_set("America/New_York");
echo "Newyork: ".date("H:i");

?>






</body>
</html>