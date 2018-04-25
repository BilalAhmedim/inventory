<?php
  function dataBaseRead($database, $table, $query){
    $connectTo = mysqli_connect('localhost', 'root', '', $database);
    $sql = mysqli_query($connectTo, "SELECT " . $query . " FROM " . $table);
    $result = mysqli_fetch_array($sql);
    if( !$result){
      echo "<p>Cannot Connect to the DataBase.</p>";
    }
    return $result[$query];
  }
?>