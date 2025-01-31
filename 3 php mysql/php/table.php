<?php
    
    echo '<p> welcome</p>';

    //lets create a table
    $sqlquery = 'CREATE TABLE Tracks (
        id int NOT NULL PRIMARY KEY,
        `name` nchar(250) NOT NULL,
        `length` time,
        album int,
        FOREIGN KEY (album) REFERENCES Albums(id),
        `artist` int,
        FOREIGN KEY (artist) REFERENCES Artists(id)
    );';

    //try to do it
    try {
        $pdo->exec($sqlquery);
        $output = 'Great! the table Tracks was created succesfully!';
    }
    catch(PDOException $e) {
        $output = 'Something went wrong ....'.$e->getMessage(). 'in ->>>> '.$e->getFile(). ' :'.$e->getLine();
    }
    echo '<p>'.$output.'</p>';
    $pdo = null; //close the connection
