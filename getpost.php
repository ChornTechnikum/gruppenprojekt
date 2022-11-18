<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <h1>POST</h1>
    <form method="post">
        Name
        <input type="text" name="nameP">
        Passwort 
        <input type="text" name="passwortP">
        <input type="submit" name="sub" value="Anmelden">
    </form>

    <h1>GET</h1>
    <form method="get">
        Name
        <input type="text" name="nameG">
        Passwort 
        <input type="text" name="passwortG">
        <input type="submit" name="sub" value="Anmelden">
    </form>
    <?php
        if(isset($_POST["nameP"])){
            if($_POST["nameP"] == "user" && $_POST["passwortP"] == "pw"){
                echo "Passwort richtig von post";
            }
        }
        if(isset($_GET["nameG"]) && isset ($_GET["passwortG"])){
            if($_GET["nameG"] == "user" && $_GET["passwortG"] == "pw"){
                echo "Passwort richtig von get";
            }
        }
    ?>
</body>

</html>