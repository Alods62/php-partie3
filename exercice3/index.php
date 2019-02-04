<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 3</title>

</head>

<body>
    
    <h1>Exercice 3</h1>
    <?php
    
    $firstInt = 100;
    $secondInt = 33;
    
    while ($firstInt >= 10)
    {
        $multiply = $firstInt * $secondInt;
        echo $firstInt . '.' . $multiply . '<br />' ;
        $firstInt--;
    }
    
    ?>  
    
    
</body>
</html>