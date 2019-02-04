<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 3</title>

</head>

<body>
    
    <h1>Exercice 2</h1>
    <?php
    
    $firstInt = 0;
    $secondInt = 33;
    
    while ($firstInt <= 20)
    {
        $multiply = $firstInt * $secondInt;
        echo $multiply . '<br />';
        $firstInt++;
    }
    
    ?>  
    
    
</body>
</html>