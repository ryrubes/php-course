<html>
<head>
<title> Guessing game for Ryland Rubens </title>
</head>

<body>
    <h1> Welcome to my guessing game </h1>



<?php

    if ( ! isset($_GET['guess'])){
        echo("Missing guess parameter");
    }
    else if ( strlen($_GET['guess']) < 1) {
        echo("Your guess is too short");
    }
    else if ( ! is_numeric($_GET['guess'])) {
        echo('Your guess is not a number');
    }
    else if ( $_GET['guess'] < 38 ) {
        echo("Your guess is too low");
    }
    else if ( $_GET['guess'] > 38 ) {
        echo("Your guess is too high");
    }
    else if ( $_GET['guess'] == 38 ) {
        echo("Congratulations - You are right");
    }
?>


</html>