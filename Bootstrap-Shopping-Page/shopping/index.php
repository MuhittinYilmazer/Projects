<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cloth Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php
?>
<!-- NAVBAR -->
<div class="container-fluid pt-2 pb-2" style="background-color:hotpink;">
    <div class="row">

       <a href="#"> <div class="navbar-brand col-sm-2 text-white pl-5">Cloth Shop</div></a>

        <div class="col-sm-7"></div>

        <div class="col-sm-3 pl-5">
            <a href="#" type="button" class="btn btn-warning">Login</a>
            <a href="#" type="button" class="btn btn-warning">Contact</a>
            <a href="#" type="button" class="btn btn-warning">Basket</a>
        </div>

    </div>
</div>

<!-- PRODUCTS -->
<div class="container mt-4">

    <!-- FIRT ROW -->
    <div class="row">

        <!-- PRODUCT -->
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Sport</h4>
                </div>
                <div class="card-body">
                    <img class="w-100" src="products/shoes/shoe1.png" alt="Shoe">
                </div>
                <p style="color:gray">Nike Air max 2000</p>
                <div class="card-footer">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <button type="submit" name="shoe1" class="btn btn-info">Buy 30$</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- PRODUCT -->
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Sport</h4>
                </div>
                <div class="card-body">
                    <img class="w-100" src="products/shoes/shoe2.png" alt="Shoe">
                </div>
                <p style="color:gray">Nike Air max 2100</p>
                <div class="card-footer">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <button type="submit" name="shoe2"  class="btn btn-info">Buy 30$</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- PRODUCT -->
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Sport</h4>
                </div>
                <div class="card-body">
                    <img class="w-100" src="products/shoes/shoe3.png" alt="Shoe">
                </div>
                <p style="color:gray">Nike Air max 2200</p>
                <div class="card-footer">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <button type="submit" name="shoe3"  class="btn btn-info">Buy 30$</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- PRODUCT -->
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Sport</h4>
                </div>
                <div class="card-body">
                    <img class="w-100" src="products/shoes/shoe4.png" alt="Shoe">
                </div>
                <p style="color:gray">Nike Air max 2300</p>
                <div class="card-footer">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <button type="submit" name="shoe4"  class="btn btn-info">Buy 30$</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!-- SECOND ROW -->
    <div class="row">

        <!-- PRODUCT -->
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Hoodie</h4>
                </div>
                <div class="card-body">
                    <img class="w-100" src="products/clothes/cloth1.png" alt="Cloth">
                </div>
                <p style="color:gray">Supreme</p>
                <div class="card-footer">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <button type="submit" name="cloth1" class="btn btn-info">Buy 30$</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- PRODUCT -->
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Shirt</h4>
                </div>
                <div class="card-body">
                    <img class="w-100" src="products/clothes/cloth2.png" alt="Cloth">
                </div>
                <p style="color:gray">Lacoste</p>
                <div class="card-footer">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <button type="submit" name="cloth2" class="btn btn-info">Buy 20$</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- PRODUCT -->
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Shirt</h4>
                </div>
                <div class="card-body">
                    <img class="w-100" src="products/clothes/cloth3.png" alt="Cloth">
                </div>
                <p style="color:gray">LC Waikiki</p>
                <div class="card-footer">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <button type="submit" name="cloth3" class="btn btn-info">Buy 20$</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- PRODUCT -->
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Dress</h4>
                </div>
                <div class="card-body">
                    <img class="w-100" src="products/clothes/cloth4.png" alt="Cloth">
                </div>
                <p style="color:gray">Zara</p>
                <div class="card-footer">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="submit" name="cloth4" class="btn btn-info" value="Buy 50$">
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>