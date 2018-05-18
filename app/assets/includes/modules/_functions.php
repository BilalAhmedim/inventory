<?php
  include './assets/includes/base/_servers.php';
// For read particular Row af any Tabe
  function dataBaseRead($database, $table, $query){
    $connectTo = mysqli_connect('localhost', 'root', '', $database);
    $sql = mysqli_query($connectTo, "SELECT " . $query . " FROM " . $table);
    $result = mysqli_fetch_array($sql);
    if( !$result){
      echo "<p>Cannot Connect to the DataBase </p>" .mysqli_error($result);
    }
    return $result[$query];
  }

  //  Select All Inside Tabels
  function returnTable($dataBase, $table){
    $connectTo = connectDb($dataBase);
    $sql = "SELECT * FROM ".$table;
    $result = mysqli_query($connectTo, $sql);
    return $result;
  }

  //  Insert Into Tabel other
  function insertInto($dataBase,$name){
    $connectTo = connectDb($dataBase);
    $query = "INSERT INTO other (name) VALUE('$name')";
    $sql = mysqli_query($connectTo, $query);
    if( !$sql ){
      $other = "InsetInTo Function Connection Filed ".mysqli_error($sql);
    }
  }

  // insert in to table any
  function insert($dataBase, $query){
    $connectTo = mysqli_connect('localhost', 'root', '', $dataBase);
    $sql = mysqli_query($connectTo, $query);
    if( !$sql ){
      $other = "Inset Function Connection Failed ".mysqli_error($connectTo);
    }
  }
?>