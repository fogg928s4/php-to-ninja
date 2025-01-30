<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll da dice Switch</title>
    <link rel="icon" href="elephant.ico">
</head>
<body>
    <?php
        $roll = rand(1,6);
        switch($roll) {
            case 1:
                $english = 'one';
                break;
            case 2:
                $english = 'two';
                break;
            case 3:
                $english = 'three';
                break;
            case 4:
                $english = 'four';
                break;
            case 5:
                $english = 'five';
                break;
            case 6:
                $english = 'six';
                break;
        }
        echo '<p>You rolled the dice and got a '. $english. '</p>';
        if($roll == 6)
            echo '<p><b>You Win!</b></p>';
        else 
            echo '<p><b>You Lose, good luck next time!</b></p>';
        
    ?>
</body>
</html>