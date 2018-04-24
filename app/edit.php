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
  <form action="#" method="POST" class="edit">
    <label for="catagory">Catagory:</label>
    <select name="catagory">
      <option value="0">--Select Catagory--</option>
      <option value="1">DATA 1</option>
      <option value="2">Data 2</option>
    </select>
    <label for="select_item">Select Item:</label>
    <select name="select_item">
      <option value="0">--Select Item--</option>
      <option value="1">DATA 1</option>
      <option value="2">Data 2</option>
    </select>
    <label for="amount">Amount:</label>
    <input type="number" name="amount" class="small-input__dubble" placeholder="Enter Amount">
    <select name="amount_combo" class="margin-none">
      <option value="Qty">Qty</option>
      <option value="Pc">pc</option>
      <option value="Lt">Ltr</option>
    </select>
    <label for="price">Price</label>
    <input type="number" name="price" placeholder="Enter Amount">
    <label for="purches_date">Purches Date:</label>
    <input type="date" name="purches_date" class="incress-width">
    <label for="error" class="error" name="error"></label><br>
    <input type="submit" name="submit" class="border-radius-n">
  </form>
</body>
</html>