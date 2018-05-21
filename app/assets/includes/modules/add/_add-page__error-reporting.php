<?php
// all variables
include './assets/includes/modules/add/_add-page__form-variables.php';
//  Variables for error Reporting is set to empty
$catagoryErr = $select_itemErr = $descriptionErr = $amountErr = $amount_comboErr = $priceErr = $supplierErr = $dateErr = $alertErr = '';

//  Error is set to false
$error = false;
//  Variables for error Reporting is set to empty
$catagoryErr = $select_itemErr = $descriptionErr = $amountErr = $amount_comboErr = $priceErr = $supplierErr = $dateErr = $alertErr = $other = '';

//  Check Input and report if is not Valid
if($catagory == '0'){
  $catagoryErr = "Please Select a Catagory.";
  $error = true;
}
if( ($select_item === '0' or $select_item === 0 ) and empty($_GET['item_name'])){
  $select_itemErr = "Please Select an Item.";
  $error = true;
}
if( trim($description) == ""){
  $descriptionErr = "Please Fill Item Description.";
  $error = true;
}
if( ( $amount == 0 and $amount == "" ) or $amount > 4 ){
  $amountErr = "Please Enter Item Amount is Lessthan 9999.";
  $error = true;
}
if( ($price == 0 and $price == "") or $price > 6 ){
  $priceErr = "Please Enter Item Price is Lessthan 999999.";
  $error = true;
}
if( trim($supplier) == ""){
  $supplierErr = "Please Enter Supplier Name.";
  $error = true;
}
if( $date == 0) {
  $dateErr = "Please Fill Date.";
  $error = true;
}
if( $alert == 0){
  $alertErr = "Please Enter Number that's Alert you if is Item not enough.";
  $error = true;
}
?>