<?php
  include './assets/includes/base/_variables.php';
  $catErr = '';
  $nameErr = '';
  if( isset($_POST['submit'] )){
    $catagory = $_POST['catagory'];
    $name = $_POST['item_name'];
    if( $catagory == 0){
      $catErr = "Please Select a Catagory !.";
    }
    if( $name == '' ){
      $nameErr = "Please Enter Item Name.";
    }
  }
?>