<?php

session_start();

if (!isset($_SESSION["username"])) {
    $_SESSION["msg"] = "You need to sign in";
    header("location: login.php");
}





?>



<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Home page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href=""> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="./cssLogin/style.css">

    <link rel="stylesheet" href="./cssLogin/menu.css">
</head>

<body>

    <header>
        <div class="logmenu1">
            <div class="logmenu">
                <!-- <button class="btn-pr"></button> -->
                <div class="menubtn">
                    <a href="" class="btn btn-dark btn-lg">My Account</a>
                </div>
                <div class="menubtn">
                    <a href="index.php?logout='1'" role="button" class="btn btn-dark btn-lg">Logout</a>
                </div>

            </div>
        </div>

        <nav class="mb-1 navbar navbar-expand-lg navbar-dark indigo fixed-top scrolling-navbar">
            <a class="navbar-brand" href="#"> <?php if (isset($_SESSION["username"])) :

                                                ?>
                Welcome <?php echo $_SESSION["username"] ?>

                <?php endif ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown menutrigger">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> Profile </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info"
                            aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="#">My account</a>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- <nav>
            <?php if (isset($_SESSION["username"])) :

            ?>
                <h3 id="logo">Welcome <?php echo $_SESSION["username"] ?> </h3>

            <?php endif ?>
            <ul class="nav-links">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Projects</a></li>
            </ul>
             <img src="./img/hamburger.png" alt="ffgg" class="hamburger"> 


        </nav> -->

        <section>
            <div class="hero">
                <img src="./img/carwall.jpg" alt="">
                <h1 class="headline">Dream big</h1>
            </div>

        </section>
    </header>

    <div class="slider"></div>
    <div class="p">
        <!-- <a class="btn btn-primary btn-lg" href="index.php?logout='1'" role="button">Logout</a> -->
        <!-- <div class="hamburger">
            <input type="checkbox" id="hi">
            <label class="menu" for="hi">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </label>
        </div> -->

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi sit quibusdam totam vero consectetur
            ipsum eligendi rerum veniam ut, eaque ratione. Earum alias necessitatibus nulla voluptatum, molestiae ex
            error.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur cumque sit animi magnam officia,
            laudantium magni voluptatibus, consectetur aperiam nostrum, sunt praesentium iste vel commodi nemo laborum
            quas voluptatum.
        </p>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eveniet nulla quidem ad pariatur
            incidunt, porro odio repudiandae iste aspernatur! Quos quasi, quibusdam molestiae nisi est soluta id facere
            quo?</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi sit quibusdam totam vero consectetur
            ipsum eligendi rerum veniam ut, eaque ratione. Earum alias necessitatibus nulla voluptatum, molestiae ex
            error.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur cumque sit animi magnam officia,
            laudantium magni voluptatibus, consectetur aperiam nostrum, sunt praesentium iste vel commodi nemo laborum
            quas voluptatum.
        </p>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eveniet nulla quidem ad pariatur
            incidunt, porro odio repudiandae iste aspernatur! Quos quasi, quibusdam molestiae nisi est soluta id facere
            quo?</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi sit quibusdam totam vero consectetur
            ipsum eligendi rerum veniam ut, eaque ratione. Earum alias necessitatibus nulla voluptatum, molestiae ex
            error.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur cumque sit animi magnam officia,
            laudantium magni voluptatibus, consectetur aperiam nostrum, sunt praesentium iste vel commodi nemo laborum
            quas voluptatum.
        </p>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eveniet nulla quidem ad pariatur
            incidunt, porro odio repudiandae iste aspernatur! Quos quasi, quibusdam molestiae nisi est soluta id facere
            quo?</h1>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
        integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"
        integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>

    <script src="app.js"></script>



    
</body>
<?php

if ($_GET["logout"]) {
    session_destroy();
    unset($_SESSION["username"]);
    header("location: login.php");
}
?>

</html>