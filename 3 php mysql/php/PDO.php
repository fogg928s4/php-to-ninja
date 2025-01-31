<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPHP</title>
</head>
<body>
    <p>
        <?php
        //new PDO('mysql:host=hostname;dbname=database', 'username', 'password');
        //echo 'mysql:host='.$myHost.';dbname=ibdb', $myUser, $myPass;
        $myUser = $_POST['myUser'];
        $myHost = $_POST['myHost'];
        $myPass = $_POST['myPassword'];

        try{
            $pdo =  new PDO('mysql:host='.$myHost.';dbname=ibdb;charset=utf8mb4', $myUser, $myPass);
            $output = 'Connection established successfully B)';
        }
        catch(PDOException $e){
            $output = 'Unable to connect to db server '.$e->getMessage(). 'in ->>>> '.$e->getFile(). ' :'.$e->getLine();
        }
        
        //output
        echo $output;
        ?>    
    </p>
    <a href="table.php"><button>Create table</button></a>
</body>
</html>
    