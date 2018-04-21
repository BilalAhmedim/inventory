<?php
  $connect_inventory = mysqli_connect('localhost','root','','inventory');
  if( !$connect_inventory ){
    die('Query Failed '.$connect_inventory);
  }
?>