<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Unsanitized code</p>
    <p>
    <?php
    //gets the variable passed in the url
        $name = $_GET['name'];
        $lastname = $_GET['lastname'];

        echo 'Welcome in '. $name.' '.$lastname.  '!!!';
        //lets saniteze it
    ?>
    </p>
    <span style="color: blue">
    <p> Sanitized code</p>
    <p>
    <?php
    //gets the variable passed in the url
        //$name = $_GET['name'];
        //convert < into &lt
        //and > into &gt

        echo 'Welcome in '. 
        htmlspecialchars($name, ENT_QUOTES, 'UTF-8'). ' '.
        htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8').'!!!!';
        //lets saniteze it
    ?>
    </p>
    </span>
</body>
</html>