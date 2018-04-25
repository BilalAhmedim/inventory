<?php
  function connectDb( $dataBase ){
    $connect =  mysqli_connect('localhost','root','', $dataBase);
    if( !$connect ){
      die('Query Failed '.$connect);
    }
    return $connect =  mysqli_connect('localhost','root','', $dataBase);
  }
?>