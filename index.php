<?php

// déclaration de la variable lyrics qui doit être sur plusieurs ligne comme sur le doc

 // votre code ici
$song = "Hello, Dolly\nWell, hello, Dolly\nIt's so nice to have you back where you belong\nYou're lookin' swell, Dolly\nI can tell, Dolly\nYou're still glowin', you're still crowin'\nYou're still goin' strong\nI feel the room swayin'\nWhile the band's playin'\nOne of our old favorite songs from way back when\nSo, take her wrap, fellas\nDolly, never go away again\nHello, Dolly\nWell, hello, Dolly\nIt's so nice to have you back where you belong\nYou're lookin' swell, Dolly\nI can tell, Dolly\nYou're still glowin', you're still crowin'\nYou're still goin' strong\nI feel the room swayin'\nWhile the band's playin'\nOne of our old favorite songs from way back when\nSo, golly, gee, fellas\nHave a little faith in me, fellas\nDolly, never go away\nPromise, you'll never go away\nDolly'll never go away again\n
";
/**
 * fonction qui permet de transformer une chaine en un table de sous chaines.
 * Chaque segment correspond à une ligne.
 * @param String $string
 * @return Array
 */

 // votre code ici
function getLyricsList($input){
  $verses = explode("\n",$input);
  return $verses;
}


/**
 * Fonction qui prend en paramètre un tableau et retourne un élément du tableau aléatoirement
 * @param Array $array
 * @return String
 */

 // votre code ici
 function getRandLyrics($input){
   $num = rand(0,count($input)-1);
   return $input[$num];
 }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>hello, dolly</title>
</head>

<body>
    <div class="container">
        <main>
            <h1>Hello, Dolly Song</h1>
            <blockquote>
                <p>Hello, Dolly</p>
                <footer><cite>Louis Armstrong</cite> - 1964</footer>
            </blockquote>
            <pre>
              <?php
                $randLyrics = getLyricsList($song);
                echo getRandLyrics($randLyrics);
             ?>
           </pre>
        </main>
        <footer id="site-footer">
            <p>Crédit image <a href='https://www.freepik.com/vectors/background'>Background vector created by starline - www.freepik.com</a></p>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
