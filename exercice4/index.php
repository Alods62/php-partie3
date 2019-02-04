<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>PHP Partie 3</title>

</head>

<body>
    
    <h1>Exercice 4</h1>
    <?php
    
    $count = 1;
    
    while ($count < 10)
    {
        echo $count . '<br />';
        $count = $count + ($count/2);
    }
    
    ?>  
    
    
</body>
</html>