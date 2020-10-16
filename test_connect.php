<?php 
include('dbconnect.php');
try {
    global $connString;
    $conn = pg_connect($connString);    
    if( $conn == false )
    {
        echo "Unable to connect PostgreSQL Server.";
    }else
    {
        echo "Connect to dv successfully";
    }
    pg_close($conn);
}
catch(Exception $e)
{
    echo ''.$e->getMessage();
}
?>