<?php
  $createTabel = "CREATE TABLE ".$removespace_name." (
    id int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(200) NOT NULL,
    total_amount int(4) NOT NULL,
    amount_type varchar(3) NOT NULL,
    left_amount int(3) NOT NULL,
    price int(6) NOT NULL,
    supplier varchar(200) NOT NULL,
    purches_date date NOT NULL,
    handover_date date NOT NULL,
    howmany int(3) NOT NULL,
  );";

  $otherTabel = "CREATE TABLE IF NOT EXISTS other(
    id int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(200) NOT NULL,
    description varchar(255) NOT NULL,
    total_amount int(4) NOT NULL,
    left_amount int(3) NOT NULL,
    amount_type varchar(3) NOT NULL,
    alert int(3) NOT NULL
    image varchar(255) NOT NULL
  );"
?>