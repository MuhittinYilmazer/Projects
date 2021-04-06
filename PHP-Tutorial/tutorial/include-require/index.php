<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

</head>
<body>
<h3>Include</h3>
<?php
//Use include when the file is not required and application should continue when file is not found.
//including code.php file to index.php
include "code.php";
echo $name.$surname.br;
//br is not defined in here but I can use it
echo "You can use defined things in here if you include php file";
?>
<hr>
<h3>Require</h3>
<p>As you can see "include" echos the sentence without $color variable
but "require" does not echos anything </p>
<?php
//Use require when the file is required by the application.
include "code2.php";
echo "<h4>Using 'include' but needed file does not exist</h4>";
echo "Color of my car is ".$color;

echo "<h4>Using 'require' but needed file does not exist</h4>";
 require "code2.php";
 echo "Color of my car is ".$color;
?>



</body>
</html>