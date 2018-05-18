<?php
  include './assets/includes/modules/add/_add-page__error-reporting.php';
  $name = $_GET['DataBase'];
  $query_insert = "INSERT INTO ".$select_item." 
  (name, description, total_quantity, type_qty, price, supplier, purches_date ) VALUE
  ($select_item, $description, $amount, $amount_combo, $price, $supplier, $date)";
  insert($name, $query_insert);
?>