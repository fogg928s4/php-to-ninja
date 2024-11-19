<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll da dice Array</title>
    <link rel="icon" href="icons/php.ico">
</head>
<body>
    <?php
        $english = [
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five',
            6 => 'six',
        ];
        $roll = rand(1,6);
        echo '<p>You rolled the dice and got a '. $english[$roll]. '</p>';
        if($roll == 6)
            echo '<p><b>You Win!</b></p>';
        else 
            echo '<p><b>You Lose, good luck next time!</b></p>';
        

    ?>
</body>
</html>