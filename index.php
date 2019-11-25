<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file_explorer</title>
</head>
<body>
        <?php

            $fichier = fopen('essaie.txt','r+');


            $i=1;
            while(i<= 10){
            $ligne = fgets($fichier);
            echo $ligne;
            $i++;
            }
            fclose($fichier);


        ?>
</body>
</html>