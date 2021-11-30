<?php

    $hName='localhost'; // host name

    $uName='admin';   // database user name

    $password='Zalego@1234';   // database password

    $dbName = "my_db"; // database name

    $dbCon = mysqli_connect($hName,$uName,$password,"$dbName");

      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }
      else{
               echo "MySql successfully connected";

      }
?>