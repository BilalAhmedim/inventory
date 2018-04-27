<?php
// For read particular Row af any Tabel
  function dataBaseRead($database, $table, $query){
    $connectTo = mysqli_connect('localhost', 'root', '', $database);
    $sql = mysqli_query($connectTo, "SELECT " . $query . " FROM " . $table);
    $result = mysqli_fetch_array($sql);
    if( !$result){
      echo "<p>Cannot Connect to the DataBase </p>" .mysqli_error($result);
    }
    return $result[$query];
  }

  function returnTable($dataBase, $table){
    $connectTo = connectDb($database);
    $sql = "SELECT * FROM ".$table;
    return $result = mysqli_query($connectTo, $sql);
  }
?>