<?php
  include './assets/includes/modules/_addPage_Validation.php';
  include './assets/includes/base/_variables.php';
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
  <form action="#" method="POST" class="edit" enctype="multipart/form-data">
    <label for="catagory">Catagory:</label>
    <select name="catagory">
      <option value="0">--Select Catagory--</option>
      <option value=<?php echo "'".$manuf."'"?>>Manufacturing</option>
      <option value=<?php echo "'".$polish."'"?>>Polishing</option>
      <option value=<?php echo "'".$tools."'"?>>Tooling</option>
      <option value=<?php echo "'".$plating."'"?>>Plating</option>
      <option value=<?php echo "'".$pack."'"?>>Packaging</option>
    </select>
    <label for="select_item">Select Item:</label>
    <select name="select_item">
      <option value="0">--Select Item--</option>
      <option value="1">DATA 1</option>
      <option value="2">Data 2</option>
    </select>
    <label for="description">Description:</label>
    <input placeholder="Item Desceiption" type="text" name="description">
    <label for="amount">Amount:</label>
    <input type="number" name="amount" class="small-input__dubble" placeholder="Enter Amount">
    <select name="amount_combo" class="margin-none">
      <option value="Qty">Qty</option>
      <option value="Pc">pc</option>
      <option value="Lt">Ltr</option>
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
    <label for="error" class="error" name="error">
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
    ?>
    </label>
  </form>
</body>
</html>