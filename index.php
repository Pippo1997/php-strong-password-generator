<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP strong password generator</title>
</head>
    <body>

        <div class="container">
            <div class="row text-center py-2">
                <div class="col-12">
                    <h1 class="aqua">Strong password generator</h1>
                </div>
                <div class="col-12">
                    <h2 class="text-light">Genera una password sicura</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bg-aqua border-radio">
                <div class="col-12 py-2">
                    <div class="text-primary-emphasis py-2">Nessun parametro inserito</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bg-light border-radio mt-2 py-2 d-flex justify-content-between">
                <div class="col-6">
                    <div>Lunghezza password:</div>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <form action="./index.php" method="GET" class="d-flex aling-items-center gap-2">
                        <input type="number">
                        <button class="btn btn-sm btn-primary" type="submit">Invia</button>
                        <button class="btn btn-sm btn-secondary" type="reset">Annulla</button>
                    </form>
                </div>
            </div>
        </div>


    </body>
</html>