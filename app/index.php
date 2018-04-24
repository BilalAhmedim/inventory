<?php
  include './assets/includes/base/_servers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Item</title>
  <link rel="stylesheet" href="temp/css/style.css">
</head>
<body class="create-form">
  <header>
    <?php include './assets/includes/modules/_navigation.php'; ?>
    <h1>Create Item</h1>
  </header>
  <form action="#" method="POST" enctype="multipart/form-data">
    <label for="catagory">Select Catagory</label>
    <select name="catagory" name="catagory" value="0">
      <option value="0">--Select Catagory--</option>
      <option value="1">Hello</option>
      <option value="2">Polish</option>
    </select>
    <label for="item_name">Item Name:</label>
    <input placeholder="Item Name" type="text" name="item_name" >
    <label for="description">Description:</label>
    <input placeholder="Item Desceiption" type="text" name="description">
    <label for="amount">Amount:</label>
    <input placeholder="Amount" type="number" name="amount">
    <label for="price">Price:</label>
    <input placeholder="Price" type="number" name="price">
    <label for="supplier">Supplier name:</label>
    <input placeholder="Supplier" type="text" name="supplier">
    <label for="purches_date">Purches Date:</label>
    <input type="date" name="purches_date" class="incress-width">
    <label for="item_image">Item Image:</label>
    <input type="file" name="item_image"><br>
    <label for="alert" class="inline" class="margin-top-small">Alert If Item is Lessthan or is Equal to:</label>
    <input placeholder="nmbr" type="text" name="alert" class="small-input margin-top-small">
    <label for="error" class="error" name="error"></label>
    <input type="submit" name="submit_create" class="border-radius-n">
  </form>
</body>
</html>