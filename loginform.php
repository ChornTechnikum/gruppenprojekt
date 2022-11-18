<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!--Navgiation Bar-->
    <?php include 'navbar.php'; ?>
    <!--If logged in. Redirect to index-->
    <?php
        if(isset($_SESSION["user"])){
            if($_SESSION["user"] == 'Philipp'){
                    header("Location: index.php");
            }
        }
    ?>
    <!--Content-->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Log in</h1>
            </div>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Benutzername</label>
                        <input type="text" name="username">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label> Passwort </label>
                        <input type="text" name="passwort">     
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="btn btn-warning" type="submit" name="sub" value="Anmelden">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--SCRIPT FOR BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>