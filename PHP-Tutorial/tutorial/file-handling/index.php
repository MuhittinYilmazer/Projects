<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
define("BR","<br>",true);
//read and echo the file and number of chars
echo "readfile(): ";
echo readfile("mytext.txt").br;

//defining "mytext.txt" file to $file with read mode
$file = fopen("mytext.txt","r");
$file2 = fopen("mytext.txt","r");
$file3 = fopen("mytext.txt","r");
//I defined 3 times with different variable because you get an error at some function

/*
 SOME MODES
 r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
 */



//fread() reads from open file. First parameter is file to be read and second parameter is max number of bytes
echo "fread(): ";
echo fread($file,filesize("mytext.txt")).br;


//this function reads a single line from file
echo "fgets(): ";
echo fgets($file2).br;

//this function reads a single char from file
echo "fgetc(): ";
echo fgetc($file3).br;

//closing the open file
fclose($file);


?>
</body>
</html>