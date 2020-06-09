<?php
    $serverName = “testdbtp043719.database.windows.net”;    -buh server name kita
    
    $connectionOptions = array(
          “Database” => “hat dalam azure”,
          “Uid” => “apuadmin”,
           “PWD” => “apuadmin12345”);  //apu@123456
    //Establish the connection
    $conn = sqlsrv_connect ($serverName, $connectionOptions);
    If (!$conn)
    {
     die (“Error connection: “.sqlsrv_errors());
     }
     Echo “DB Server: Connected!”;
}
?>
