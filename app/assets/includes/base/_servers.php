<?php
  function connectDb( $dataBase ){
    $connect =  mysqli_connect('localhost','root','', $dataBase);
    if( !$connect ){
      die('<h1 style="text-align: center">Connection Failed or DataBase not Exists.</h1>
      <br>
      <button><a href="./create.php" style="text-align: center"><h3>&lt; Go Back</h3></a></button>
      '.mysqli_error($connect));
    }
    return $connect =  mysqli_connect('localhost','root','', $dataBase);
  }
?>