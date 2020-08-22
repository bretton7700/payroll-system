<?php
function OpenCon(){
    $dbhost ='localhost';
    $dbuser ='root';
    $dbpass ="7700pusheR";
    $db ="payroll system";
   

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or
    die('connect failed: %\n'.$conn -> error);
    return $conn;





}
function CloseCon($conn){
    $conn -> close();
}



?>