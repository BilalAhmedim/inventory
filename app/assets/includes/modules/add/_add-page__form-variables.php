<?php

// Get Form Values
$catagory = $_POST['catagory'];
$select_item = $_POST['select_item'];
$description = $_POST['description'];
$amount = $_POST['amount'];
$amount_combo = $_POST['amount_combo'];
$price = $_POST['price'];
$supplier = $_POST['supplier'];
$date = $_POST['purches_date'];
$alert = $_POST['alert'];

// Files Uploading Validations Variables
$file = $_FILES['item_image'];
$fileName = $_FILES['item_image']['name'];
$filetmp = $_FILES['item_image']['tmp_name'];
$fileSize = $_FILES['item_image']['size'];
$fileError = $_FILES['item_image']['error'];
$filetype = $_FILES['item_image']['type'];
$fileExt = explode('.',$fileName);
$fileActExt = strtolower(end($fileExt));
$allow = array('jpg', 'jpeg', 'png');
$fileDes;

?>