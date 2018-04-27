<?php
  function connectDb( $dataBase ){
    $connect =  mysqli_connect('localhost','root','', $dataBase);
    if( !$connect ){
      die('Query Failed '.mysqli_error($connect));
    }
    return $connect =  mysqli_connect('localhost','root','', $dataBase);
  }
?>