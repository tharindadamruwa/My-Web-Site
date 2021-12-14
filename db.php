<?php

  $server="sql207.epizy.com";
  $username="epiz_30566038";
  $paasword="rB7m6LmN0JJ7V";
  $dbname="epiz_30566038_tharinda_greate_site";

  $conn = mysql_connect($server, $username,  $paasword, $dbname);
  
  if(!$conn) {
    die("Connection Failed".mysqli_connect_error());
  }


?>