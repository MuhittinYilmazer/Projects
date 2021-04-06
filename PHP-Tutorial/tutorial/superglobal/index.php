<html lang="tr">
<head>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-sm-12 kartım">

            <?php
            define ("BR","<br>",true);
            //superglobals

              //$GLOBALS
              /*
               $GLOBALS is a PHP super global variable which is used to access global variables
               from anywhere in the PHP script (also from within functions or methods).
               */

              $x = 23;
              $y = 21;
              $z = 0;
              function add(){
                  $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
                  return $GLOBALS["z"];
              }
              add();
              echo "x + y = ".$z.br."<hr>";

             //$_SERVER
            /*
             $_SERVER is a PHP super global variable which holds
            information about headers, paths, and script locations.

            The example below shows how to use some of the elements in $_SERVER:
             */

            /*
             $_SERVER['PHP_SELF'] 	Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE'] 	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR'] 	Returns the IP address of the host server
$_SERVER['SERVER_NAME'] 	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE'] 	Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL'] 	Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD'] 	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME'] 	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING'] 	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT'] 	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET'] 	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST'] 	Returns the Host header from the current request
$_SERVER['HTTP_REFERER'] 	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS'] 	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR'] 	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST'] 	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT'] 	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME'] 	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN'] 	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT'] 	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE'] 	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED'] 	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME'] 	Returns the path of the current script
$_SERVER['SCRIPT_URI'] 	Returns the URI of the current page
             */


            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['HTTP_REFERER'];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            echo $_SERVER['SCRIPT_NAME'].br."<hr>";

             ?>

            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                Name:<input type="text" name="fname">
                <input type="submit" value="Gönder">
            </form>

            <?php
            //$_REQUEST
            /*
             PHP $_REQUEST is a PHP super global variable which is used to
            collect data after submitting an HTML form.
             */

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = htmlspecialchars($_REQUEST["fname"]);
                if (empty($name)){
                    echo "Textbox is empty".br;
                }
                else{
                    echo $name.br;
                }
            }

            //$_POST
            /*
             PHP $_POST is a PHP super global variable which is used to collect form data after
            submitting an HTML form with method="post". $_POST is also widely used to pass variables.
             */

            // example is at above

            //$_GET
            /*
             PHP $_GET is a PHP super global variable which is used to collect
             form data after submitting an HTML form with method="get".

            $_GET can also collect data sent in the URL.
             */

            //<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
            echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
            ?>


        </div>

    </div>
</div>

</body>
</html>