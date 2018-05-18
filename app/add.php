<?php
  include './assets/includes/modules/_functions.php';
  include './assets/includes/modules/add/_add-Page__Validation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="temp/css/style.css">
  <title>Add Items</title>
</head>
<body class="edit-form">
  <header>
    <?php include './assets/includes/modules/_navigation.php';?>
    <h1>Add Item</h1>
  </header>
  <?php
    if( !empty($_GET['success'])){
      if( $_GET['success'] ){
        echo "<div class='success-parent'><div class='success'><p>Item <strong>&quot;".$_GET['item_name']."&quot;</strong> Created Successfully.<span class='close'></span></p></div></div>";
      }
    }
    $check='';
    if( !empty($_GET['DataBase'])){
      $check = $_GET['DataBase'];
    }
  ?>
  <form method="POST" class="edit" enctype="multipart/form-data">
    <label for="catagory">Catagory:</label>
    <select name="catagory" class="catagory" onchange="OnChangeDataBase()" data-database="">
      <option value="0">--Select Catagory--</option>
      <option <?php if( $check == $manuf ) echo "selected"; ?> value=<?php echo "'".$manuf."'"?>>Manufacturing</option>
      <option <?php if( $check == $polish ) echo "selected"; ?> value=<?php echo "'".$polish."'"?>>Polishing</option>
      <option <?php if( $check == $tools ) echo "selected"; ?> value=<?php echo "'".$tools."'"?>>Tooling</option>
      <option <?php if( $check == $plating ) echo "selected"; ?> value=<?php echo "'".$plating."'"?>>Plating</option>
      <option <?php if( $check == $pack ) echo "selected"; ?> value=<?php echo "'".$pack."'"?>>Packaging</option>
    </select>
    <label for="select_item">Select Item:</label>
    <select name="select_item" class="item_name" onchange="OnChangeName()">
      <option value="0">--Select Item--</option>
      <?php
        if( isset($_GET['DataBase']) ){

          $cat = $_GET['DataBase'];
          $_GET['DataBase'] = $cat;
          $item_N = $_GET['item_name'];
          if( $cat !== 0 ){
            $query = returnTable($cat,"other");
            while( $row = mysqli_fetch_array($query) ){
              $Fullname = str_replace(" ","_",$row['name']);
              $echo = "<option value=". $Fullname." ";
              $echo1= ">". str_replace("_"," ",$row['name'])."</option>";
              if($item_N == str_replace(" ","_",$row['name'])){
                echo $echo ."selected " .$echo1;
              }else{
                echo $echo . $echo1;
              }
            }
          }
        }
        $db = $_GET['DataBase'];
      ?>
    </select>
    <script>
      function OnChangeDataBase(){
        var tarGet = document.querySelector('.catagory').value;
        data = "?DataBase=" + tarGet;
        window.location.href = data;
      }
      function OnChangeName(){
        var tarGet = document.querySelector('.item_name').value;
        newdata = "?DataBase="+'<?php echo $db?>' + "&item_name=" + tarGet;
        window.location.href = newdata;
      }
    </script>
    <label for="description">Description:</label>
    <input placeholder="Item Desceiption" type="text" name="description">
    <label for="amount">Amount:</label>
    <input type="number" name="amount" class="small-input__dubble" placeholder="Enter Amount">
    <select name="amount_combo" class="margin-none">
      <option value="Qty">Qty</option>
      <option value="Pc">pc</option>
      <option value="Lt">Ltr</option>
      <option value="Lt">kgm</option>
      <option value="Lt">grm</option>
    </select>
    <label for="price">Price</label>
    <input type="number" name="price" placeholder="Enter Amount">
    <label for="supplier">Supplier name:</label>
    <input placeholder="Supplier" type="text" name="supplier">
    <label for="purches_date">Purches Date:</label>
    <input type="date" name="purches_date" class="incress-width">
    <label for="item_image">Item Image:</label>
    <input type="file" name="item_image"><br>
    <label for="alert" class="inline" class="margin-top-small">Alert If Item is Lessthan or is Equal to:</label>
    <input placeholder="nmbr" type="text" name="alert" class="small-input margin-top-small">
    <label></label>
    <input type="submit" name="submit" class="border-radius-n">
    <label for="error" class="error">
    <?php
      if( !empty($catagoryErr) ){
        echo "<p>" . $catagoryErr . "</p>";
      }
      if( !empty($select_itemErr) ){
        echo "<p>" . $select_itemErr . "</p>";
      }
      if( !empty($descriptionErr) ){
        echo "<p>" . $descriptionErr . "</p>";
      }
      if( !empty($amountErr) ){
        echo "<p>" . $amountErr . "</p>";
      }
      if( !empty($priceErr) ){
        echo "<p>" . $priceErr . "</p>";
      }
      if( !empty($supplierErr) ){
        echo "<p>" . $supplierErr . "</p>";
      }
      if( !empty($dateErr) ){
        echo "<p>" . $dateErr . "</p>";
      }
      if( !empty($alertErr) ){
        echo "<p>" . $alertErr . "</p>";
      }
      if( !empty($other) ){
        echo "<p>" . $other . "</p>";
      }
    ?>
    </label>
  </form>
  <script src="temp/scripts/App.js"></script>
</body>
</html>