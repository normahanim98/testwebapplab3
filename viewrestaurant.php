<?php

    $serverName = "testdbtp043719.database.windows.net";   
    
    $connectionOptions = array(
          "Database" => "testdbtp043719",
          "Uid" => "apuadmin",
          "PWD" => "apu@123456");  
    //Establish the connection
    $conn = sqlsrv_connect ($serverName, $connectionOptions);
    if (!$conn)
    {
     die ("Error connection: ".sqlsrv_errors());
     }
     echo "DB Server: Connected!";
?>
