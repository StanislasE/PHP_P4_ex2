<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2</title>
</head>
<body>

<p>
    <?php
        $text = text('Premiere chaine de caractères. ' , ' Deuxième chaine de caractères.') ;
        echo $text ;

        function text($firstText , $secondText){
            $tools = $firstText . $secondText ;

            return $tools ;
        } ;
    ?>
</p>
    
</body>
</html>