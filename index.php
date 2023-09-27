<?php
$all_typo = "A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,0,1,2,3,4,5,6,7,8,9,!,@,#,$,%,^,&,*,(,)";
$espl_typo = explode(',', $all_typo);

$num_char = (int) $_GET['quantity'];

// $has_number = isset($_GET['quantity']);

include __DIR__ . '/components/functions.php';

// function genera_password($range_typo, $range_leng)
// {

//     $result = "";
//     $max_leng_array = sizeof($range_typo);
//     for ($i = 0; $i < $range_leng; $i++) {

//         $random_number = rand(0, $max_leng_array - 1);

//         $result = $result . $range_typo[$random_number];
//     }
//     ;

//     return $result;
// }
// ;

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
                <form method="get" action="">
                    <input class="form-control" type="number" id="quantity" name="quantity" min="4" max="20" value="4x"
                        placeholder="inserisci qui il numero">

                </form>
            </div>
        </div>

        <h1>i risultato è:</h1>
        <h2>
            <?php echo genera_password($espl_typo, $num_char); ?>
        </h2>



    </div>

</body>

</html>