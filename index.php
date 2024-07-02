<?php

include_once __DIR__.'/class/Movie.php';

$darkKnight = new Movie("The Dark Knight", "Christopher Nolan", 2008, "Action");
$interstellar = new Movie("Interstellar", "Christopher Nolan", 2014, "Sci-fi");
$spiritedAway = new Movie("Spirited Away", "Hayao Miyazaki", 2001, "Animation");

echo $darkKnight->getDetails();
echo $interstellar->getDetails();
echo $spiritedAway->getDetails();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>