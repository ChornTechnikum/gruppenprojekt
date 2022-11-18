<?php
    session_start();
    if(isset($_GET["logout"])){
        session_unset();
    }
    if(isset($_POST["username"]) && isset($_POST["passwort"])){
        if($_POST["username"] == "Philipp"){
            $_SESSION["user"] = $_POST["username"];
        }
    }
?>
<nav class="navbar navbar-expand-lg bg-warning navbar-light sticky-top">
        <a class="navbar-brand">
            <image class="img-fluid" src="pictures/logo.png"></image>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="impressum.php" class="nav-link">Impressum</a>
                </li>
                <li class="nav-item">
                    <a href="hilfe.php" class="nav-link">Hilfe</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php
                if(!isset($_SESSION["user"])){
                    echo 
                    '<li class="nav-item">
                        <a href="loginform.php" class="btn btn-danger rounded"> Login </a>
                        <a href="regform.php" class="btn btn-danger rounded"> Register </a>
                    </li> ';
                }else{
                    echo 
                    '<li class="nav-item">
                        <a class="btn btn-danger rounded d-inline-block" href="?logout=true">Logout</a>
                    </li> ';
                }
                ?>
            </ul>
        </div>
    </nav>