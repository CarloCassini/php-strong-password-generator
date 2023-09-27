<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- aggiungo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
        defer>
        </script>
    <title>Document</title>

</head>

<body>

    <div class=" container mt-5 w-50">

        <div class="card">
            <div class="card-header">
                scegli la lunghezza della tua password (tra 4 caratteri e 20)
            </div>
            <div class="list-group list-group-flush">
                <form method="get" action="risultato.php">
                    <input class="form-control" type="number" id="quantity" name="quantity" min="4" max="20" value="4x"
                        placeholder="inserisci qui il numero">

                </form>
            </div>
        </div>




    </div>

</body>

</html>