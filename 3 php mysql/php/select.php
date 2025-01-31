<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>artits Select on MySQL</title>
</head>
<body>
    <h1>ARTISTS IN DATABASE</h1>
    <table>
        <tr>
            <th>Number</th>
            <th>Artist Name</th>
        </tr>
    <?php
    //this script will test the capabilities between select in MySQL and PHP
    try {
        $myUser = $_POST['myUser'];
        $myHost = $_POST['myHost'];
        $myPass = $_POST['myPassword'];

        $pdo =  new PDO('mysql:host='.$myHost.';dbname=ibdb;charset=utf8mb4', $myUser, $myPass);
        //sql query for select

        $sql = 'SELECT `name` FROM `Artists`';

        //$var2store = $pdoObject->query("sumn query");
        $result = $pdo->query($sql); //this will store the output

        //print the results
        //if no more rows, fetch returns false
        while($row = $result->fetch()) {
            //process the row
            $artists[] = $row['name']; //to access each artis we just have to access the array
        }
        
        $i = 1; //counter
        //display values
        foreach ($artists as $a) {
            echo '<tr>
            <td>'.$i.'</td> 
            <td>'.$a.'</td>
            </tr>';
            $i++;
        }
        
    }
    catch (PDOException $e) {
        $output = 'Unable to connect to db server '.$e->getMessage(). 'in ->>>> '.$e->getFile(). ' :'.$e->getLine();
        echo $output;
    }
    $pdo = null;
    ?>
    
    </table>
</body>
</html>
