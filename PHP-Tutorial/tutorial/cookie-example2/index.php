<!DOCTYPE html>
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

            //defining computer value and computer increase decrease buttons

            $computervalue = isset($_POST['computerquantity']) ? $_POST['computerquantity'] : 0;
            if(isset($_POST['computerincrease'])){
                $computervalue += 1;
                if($computervalue < 0){
                    $computervalue = 0;
                }
            }
            if(isset($_POST['computerdecrease'])){
                $computervalue -= 1;
                if($computervalue < 0){
                    $computervalue = 0;
                }
            }

            //add to basket button. if checkbox checked it makes a cookie if its not checked echo did not added
                if (!empty($_POST['computercookieadd']) == 13) {
                    if(!isset($_POST['computercheckbox'])){
                        echo "Computer did not added";
                    }
                    else {
                        setcookie("computer", "$computervalue", time() + 60 * 60 * 24, "/");
                        echo "Computer added";
                    }
                }
                ?>

<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <input type="checkbox" name="computercheckbox">
    Computer
    <button name="computerincrease">+</button>
    <input type="text" size="1" name="computerquantity" value="<?php echo $computervalue;?>"/>
    <button name="computerdecrease">-</button>
    <input type="submit" name="computercookieadd" value="Add to basket">
    <br>
</form>

      </div>
    </div>
</div>

</body>
</html>