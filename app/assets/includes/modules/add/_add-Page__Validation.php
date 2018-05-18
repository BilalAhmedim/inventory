<?php
  include './assets/includes/base/_variables.php';

  if( isset($_POST['submit']) ){
    // Error Reporting
    
    // all variables
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

    //  Variables for error Reporting is set to empty
    $catagoryErr = $select_itemErr = $descriptionErr = $amountErr = $amount_comboErr = $priceErr = $supplierErr = $dateErr = $alertErr = $other = '';

    //  Check Input and report if is not Valid
    if($catagory == '0'){
      $catagoryErr = "Please Select a Catagory.";
    }
    if( ($select_item === '0' or $select_item === 0 ) and empty($_GET['item_name'])){
      $select_itemErr = "Please Select an Item.";
    }
    if( trim($description) == ""){
      $descriptionErr = "Please Fill Item Description.";
    }
    if( $amount == 0 and $amount == ""){
      $amountErr = "Please Enter Item Amount.";
    }
    if( $price == 0 and $price == ""){
      $priceErr = "Please Enter Item Price.";
    }
    if( trim($supplier) == ""){
      $supplierErr = "Please Enter Supplier Name.";
    }
    if( $date == 0) {
      $dateErr = "Please Fill Date.";
    }
    if( $alert == 0){
      $alertErr = "Please Enter Number that's Alert you if is Item not enough.";
    }
    $name = $_GET['DataBase'];
    $query_insert = "INSERT INTO ".$select_item."(name, description, total_amount, amount_type, price, supplier, purches_date ) VALUE('$select_item', '$description', '$amount', '$amount_combo', '$price', '$supplier', '$date')";
    insert($name, $query_insert);
  }
?>