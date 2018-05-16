<?php
//  Variables for error Reporting is set to empty
$catagoryErr = $select_itemErr = $descriptionErr = $amountErr = $amount_comboErr = $priceErr = $supplierErr = $dateErr = $alertErr = '';

//  Check Input and report if is not Valid
if($catagory == '0'){
  $catagoryErr = "Please Select a Catagory.";
}
if($select_item == 0){
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
?>