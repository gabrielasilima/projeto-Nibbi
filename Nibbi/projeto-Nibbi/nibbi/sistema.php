<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
       // header('Location: login.php');
        $logado = $_SESSION['email'];
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
    <title> Nibbi </title>
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicons/grandelogo.png">
</head>

<body>
    <div class="sair-button">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
    <br>
    <?php
    echo "<h1> Bem vindo <u> $logado </u></h1>";
    ?>
    <div class="input-field">
        <h1> Acessou o Sistema </h1>
    </div>

</body>

</html>