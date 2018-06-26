<?php
  include './assets/includes/modules/_redirect.php';
  $name;
  $catErr = $nameErr = $execute_queryErr = $success = $other = $descriptionErr = '';
  if( isset($_POST['submit'] )){
    $catagory = $_POST['catagory'];
    $name = $_POST['item_name'];
    $removespace_name = str_replace(" ","_",$name);
    strtolower($removespace_name);
    include './assets/includes/base/_createTabel.php';
    if( $catagory == "0"){
      $catErr = "Please Select a Catagory !.";
    }
    if( $name == '' ){
      $nameErr = "Please Enter Item Name.";
    }
    if($catagory != 0 or $catagory != "0" ){
      $selectedDataBase = connectDb($catagory);
      $execute_query = mysqli_query($selectedDataBase, $createTabel);
      if( !$execute_query ){
        $execute_queryErr = "Error Cannot Create the ".$name. mysqli_error($selectedDataBase) or mysqli_error($execute_query);
      }
    }
    $selectedDataBase = connectDb($catagory);
    $execute_query = mysqli_query($selectedDataBase, $otherTabel);
    insertInto($catagory,$name);
    redirect("create.php?success=true&item_name=" . $name);
  }
?>