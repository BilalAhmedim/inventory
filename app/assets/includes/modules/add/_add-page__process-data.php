<?php
  if($error == false){
    $name = $_GET['DataBase'];
    $query_insert = "INSERT INTO ".$select_item."(name, description, total_amount, amount_type, price, supplier, purches_date ) VALUE('$select_item', '$description', '$amount', '$amount_combo', '$price', '$supplier', '$date')";
    insert($name, $query_insert);
  }
?>