<?php

session_start();
include __DIR__ . '/components/functions.php';

$all_typo = "A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,0,1,2,3,4,5,6,7,8,9,!,@,#,$,%,^,&,*,(,)";
$espl_typo = explode(',', $all_typo);
$num_char = isset($_GET['quantity']) ? (int) $_GET['quantity'] : 0;

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

        <h1>i risultato è:</h1>
        <h2>
            <?php
            $new_password = genera_password($espl_typo, $num_char);
            echo $new_password ?>
        </h2>

        <h1><a href="index.php">indietro</a></h1>



    </div>

</body>

</html>