<?php
  include './assets/includes/base/_servers.php';
  include './assets/includes/base/_variables.php';
  include './assets/includes/modules/_functions.php';
  include './assets/includes/modules/_createPage_Validation.php';
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
  <form action=<?php echo $_SERVER['PHP_SELF']?> method="POST" class="margin-top-pl">
    <label for="catagory">Select Catagory</label>
    <select name="catagory">
      <option value="0">--Select Catagory--</option>
      <option value=<?php echo "'".$manuf."'"?>>Manufacturing</option>
      <option value=<?php echo "'".$polish."'"?>>Polishing</option>
      <option value=<?php echo "'".$tools."'"?>>Tooling</option>
      <option value=<?php echo "'".$plating."'"?>>Plating</option>
      <option value=<?php echo "'".$pack."'"?>>Packaging</option>
    </select>
    <label for="item_name">Item Name:</label>
    <input placeholder="Item Name" type="text" name="item_name" >
    <label></label>
    <input type="submit" name="submit" class="border-radius-n">
    <label for="error" class="error" name="error">
      <?php
        if( !empty($catErr)){
          echo "<p>".$catErr."</p>";
          exit();
        }
        if( !empty($nameErr)){
          echo "<p>".$nameErr."</p>";
          exit();
        }
        if( !empty($execute_queryErr)){
          echo "<p>".$execute_queryErr."</p>";
          exit();
        }
      ?>
    </label>
  </form>
</body>
</html>