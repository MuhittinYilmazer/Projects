<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="favicon.png" type="image/png" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help Center // Edabit</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 65px;font-size: 15px; padding-left: 3px">
    <a class="navbar-brand" href="#" >edabit</a>

    <!-- BU NEEE -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Tutorials</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Challenges</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Practice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Shuffle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
        </ul>


        <form class="form-inline my-2 my-lg-0">
            <!-- search bar -->
            <a style="color: white;text-decoration: none;padding-right: 5px;font-size: 17px;" href="#">40 XP</a>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

            <!-- icons and profile dropdowns -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <!-- bell icon dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link-icon"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i style="color: whitesmoke; padding-top: 12px; padding-right: 10px;" class="fa fa-bell"></i>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a style="color: black;font-size: 14px;" class="dropdown-item" href="#">Notifications</a>
                            <div class="dropdown-divider"></div>
                            <a style="color: gray;font-size: 14px;" class="dropdown-item" href="#">You don't have any notifications</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>

                    <!-- plus icon dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link-icon"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i style="color: whitesmoke; padding-top: 12px; padding-right:3px " class="fa fa-plus"></i>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a style="font-size: 14px;" class="dropdown-item" href="#">New Challenge</a>
                            <a style="font-size: 14px;" class="dropdown-item" href="#">New Translation</a>
                            <a style="font-size: 14px;" class="dropdown-item" href="#">New Collection</a>
                        </div>
                    </li>


                    <!-- profile icon dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link-icon dropdown-toggle"   href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="black.jpeg" alt="image" class="myimg">

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a style="font-size: 14px;color: gray;" class="dropdown-item" href="#">Signed as <b>Muhitt...</b></a>
                            <div class="dropdown-divider"></div>
                            <a style="font-size: 14px;" class="dropdown-item" href="#">Your Profile</a>
                            <a style="font-size: 14px;" class="dropdown-item" href="#">Refer Users <b style="color: green;padding-left: 30px;">$</b></a>
                            <a style="font-size: 14px;" class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a style="font-size: 14px;" class="dropdown-item" href="#">Sign Out</a>
                        </div>
                    </li>
                </ul>

            </div>
        </form>

        <!-- dropdowns -->



    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="text-center">

            <!-- Heading -->
            <h1 class="display-4" style="margin-top:50px;color: black;font-weight:900;font-size: 45px;">
                Help Center
            </h1>

            <!-- Text -->
            <p class="lead text-muted" style="color: rgb(102, 102, 102);font-size: 2rem; font-style: italic; font-weight: bold; margin-top: -15px">
                Learn how everything works.
            </p>


        </div>
    </div>

</div>

<div class="container">

<!-- grid images -->
<div class="album py-5" style="margin-top: -15px;">

    <!-- first row -->
    <div class="row">

        <!-- image -->
        <div class="col-md-4">
            <!-- image-card classı çalışmıyor -->
            <div class="card mb-4 image-card">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 50%; display: block;padding-top:20px; padding-right:20px;margin-right: auto;margin-left: auto" src="edabit/lamp.png" data-holder-rendered="true">
                <div class="text-center">
                    <!-- font weight çalışmıyor -->
                    <p style="font-weight: 552;font-size: 2rem;color: black;">Getting Started</p>
                    <p style="font-style: italic;color: gray;margin-top:-20px; ">Learn the basics + tips and tricks</p>
                </div>
            </div>
        </div>

        <!-- image -->
        <div class="col-md-4">
            <!-- image-card classı çalışmıyor -->
            <div class="card mb-4 image-card">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 50%; display: block;padding-top:20px; padding-right:20px;margin-right: auto;margin-left: auto" src="edabit/chemistry.png" data-holder-rendered="true">
                <div class="text-center">
                    <!-- font weight çalışmıyor -->
                    <p style="font-weight: 552;font-size: 2rem;color: black;">Creating Challenges</p>
                    <p style="font-style: italic;color: gray;margin-top:-20px; ">It's waaaaaay easier than you think.</p>
                </div>
            </div>
        </div>

        <!-- image -->
        <div class="col-md-4">
            <!-- image-card classı çalışmıyor -->
            <div class="card mb-4 image-card">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 50%; display: block;padding-top:20px; padding-right:20px;margin-right: auto;margin-left: auto" src="edabit/message.png" data-holder-rendered="true">
                <div class="text-center">
                    <!-- font weight çalışmıyor -->
                    <p style="font-weight: 552;font-size: 2rem;color: black;">Using Collections</p>
                    <p style="font-style: italic;color: gray;margin-top:-20px; ">Create a collection and add challenges.</p>
                </div>
            </div>
        </div>
        <!-- end of row -->
    </div>

    <!-- second row -->
    <div class="row">

        <!-- image -->
        <div class="col-md-4">
            <!-- image-card classı çalışmıyor -->
            <div class="card mb-4 image-card">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 50%; display: block;padding-top:20px; padding-right:20px;margin-right: auto;margin-left: auto" src="edabit/keyboard.png" data-holder-rendered="true">
                <div class="text-center">
                    <!-- font weight çalışmıyor -->
                    <p style="font-weight: 551;font-size: 2rem;color: black;">Keyboard Shortcuts</p>
                    <p style="font-style: italic;color: gray;margin-top:-20px; ">An easier way to navigate.</p>
                </div>
            </div>
        </div>

        <!-- image -->
        <div class="col-md-4">
            <!-- image-card classı çalışmıyor -->
            <div class="card mb-4 image-card">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 50%; display: block;padding-top:20px; padding-right:20px;margin-right: auto;margin-left: auto" src="edabit/roadmap.png" data-holder-rendered="true">
                <div class="text-center">
                    <!-- font weight çalışmıyor -->
                    <p style="font-weight: 552;font-size: 2rem;color: black;">Product Roadmap</p>
                    <p style="font-style: italic;color: gray;margin-top:-20px; ">What we've done and where we're going</p>
                </div>
            </div>
        </div>

        <!-- image -->
        <div class="col-md-4">
            <!-- image-card classı çalışmıyor -->
            <div class="card mb-4 image-card">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 50%; display: block;padding-top:20px; padding-right:20px;margin-right: auto;margin-left: auto" src="edabit/peoples.png" data-holder-rendered="true">
                <div class="text-center">
                    <!-- font weight çalışmıyor -->
                    <p style="font-weight: 552;font-size: 2rem;color: black;">Affiliate Program</p>
                    <p style="font-style: italic;color: gray;margin-top:-20px; ">Get 60% commissions on recurring sales.</p>
                </div>
            </div>
        </div>

      <!-- end of row -->
     </div>
    <!-- end of album -->
 </div>


    <p class="text-center" style="margin-top:-30px;margin-bottom:50px;color: gray;font-size: 20px;font-weight: 700;">Questions? <a style="text-decoration: none;" href="#">Contact us</a>.</p>


    <footer><hr style="color: black">
        <ul class="list-inline ">
            <li class="list-inline-item" style="font-size: 14px;color: darkgray;">© 2020 Edabit, Inc</li>
            <li class="list-inline-item"><a href="#" style="text-decoration: none;font-size: 14px;">Terms</a></li>
            <li class="list-inline-item"><a href="#" style="text-decoration: none;font-size: 14px;">Privacy</a></li>
            <li class="list-inline-item"><a href="#" style="text-decoration: none;font-size: 14px;">Roadmap</a></li>
            <li class="list-inline-item"><a href="#" style="text-decoration: none;font-size: 14px;">Affiliates</a></li>
            <li class="list-inline-item"><a href="#" style="margin-left:595px;text-decoration: none;font-size: 14px;">Contact</a></li>
            <li class="list-inline-item"><a href="#" style="text-decoration: none;font-size: 14px;">Blog</a></li>
            <li class="list-inline-item"><a href="#" style="text-decoration: none;font-size: 14px;">About</a></li>
        </ul>

    </footer>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>