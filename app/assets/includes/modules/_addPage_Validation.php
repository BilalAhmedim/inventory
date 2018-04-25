<?php
  include './assets/includes/base/_variables.php';
  if( isset($_POST['submit']) ){
    // Get Form Values
    $catagory = $_POST['catagory'];
    $item_name = $_POST['item_name'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];
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

    if($catagory == 0){
      
    }
  }
?>