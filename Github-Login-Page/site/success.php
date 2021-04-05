<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in - Github</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="stil.css" type="text/css" rel="stylesheet"/>
    <link rel="icon" href="github-icon.png">
</head>
<body>
<div class="container main_div">
    <div class="container">
        <img alt="Github" src="github.png" class="image_settings">
    </div>

    <div class="container" style="margin-top: 10px">


        <?php
        $validation = false;

        //checking input box is it empty or valid. If its valid set $validation = true
        if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $validation = true;
        }

        //if inputs are valid, echo success
        if ($validation) {
            echo "<h2 style='text-align: center'>Success!</h2>";

            //if checkbox is checked it will echo 'we will remember you' and create a cookie
            if (isset($_POST['remember'])) {
                echo "<h4 style='text-align: center'>We will remember you</h4>";
                setcookie("users[0]", $_POST['email'], time() + 60 * 60 * 24, "/");
            }
            else{
                echo "<h4 style='text-align: center'>We will not remember you</h4>";
            }
        //if inputs are not valid echo 'Error!'    
        } else {
            echo "<h2 style='text-align: center'>Error!</h2>";
            echo "<h4 style='text-align: center'>Check your email and password.</h4>";
        }

        ?>


    </div>
</div>

</body>
</html>
