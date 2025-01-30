<?php
if(!isset($_POST['firstname'])){
    //includes the templates ffile from the dir of site
    echo __DIR__;
    echo '<p>'. __DIR__.'/../templates/form.html.php</p>';
    include __DIR__.'/../templates/form.html.php';
    
}
else {
    echo __DIR__;
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];

    //print the output
    $output = 'Welcome to this php website, '. 
    htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8').' '.
    htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8').
    '!!! :D';

    include __DIR__.'/../templates/welcome.html.php';
    
}