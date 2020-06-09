<?php
    $serverName = “testdbtp043719.database.windows.net”;   
    
    $connectionOptions = array(
          “Database” => “testdbtp043719”,
          “Uid” => “apuadmin”,
           “PWD” => “apu@123456”);  //apu@123456
    //Establish the connection
    $conn = sqlsrv_connect ($serverName, $connectionOptions);
    If (!$conn)
    {
     die (“Error connection: “.sqlsrv_errors());
     }
     Echo “DB Server: Connected!”;
}
?>
