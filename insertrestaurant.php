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
     $sql = “INSERT INTO restaurant (restaurant_name, restaurant_address, restaurant_phone) VALUES (?,?,?)”;
     $params = array (“Burger King”,”Bukit Jalil”,”03-21134345”);

     $stmt = sqlsrv_query( $conn, $sql, $params);
     if($stmt === false){
       die( print_r(sqlsrv_errors(),true));
     }
     ?>
