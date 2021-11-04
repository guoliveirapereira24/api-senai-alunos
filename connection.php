<?php 

$serverName = 'localhost';

$userName = 'root';

$password = 'bcd127';

$dataBase = 'cadastro';

$conn = new mysqli($serverName, $userName, $password, $dataBase);

    
/*   
    echo '<pre>'; 
    var_dump($conn);
    echo '<pre>';
*/

    if($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }

    return $conn;









?>