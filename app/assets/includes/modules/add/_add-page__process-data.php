<?php
  if($error == false){
    $name = $_GET['DataBase'];
    $query_insert = "INSERT INTO ".$select_item."(name, description, total_amount, amount_type, price, supplier, purches_date ) VALUE('$select_item', '$description', '$amount', '$amount_combo', '$price', '$supplier', '$date')";
    insert($name, $query_insert);
    $update_query = "UPDATE other SET total_amount += '$amount' where name = $select_item";
    insert($name, $update_query);
  }
?>