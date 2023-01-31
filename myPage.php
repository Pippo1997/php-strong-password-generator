<?php

    include __DIR__ .'/partials/functions.php';

    session_start();

    $_SESSION['psw'] = $_GET['psw'];

    if(empty($_SESSION['psw'])){
        header('Location:./index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
    <body>
        <h1>La tua password <?php echo random_psw($_GET['psw']); ?></h1>
    </body>
</html>