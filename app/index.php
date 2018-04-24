<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="temp/css/style.css">
  <title>HOME</title>
</head>
<body class="home">
  <header>
    <?php include 'assets/includes/modules/_navigation.php';?>
  </header>

  <div class="main-box main-box__first">

    <div class="create-box border-r border-t">
      <h1><a href="create.php">Create Item</a></h1>
    </div>

    <div class="add-box border-t">
      <h1><a href="add.php">Add Item</a></h1>
    </div>

  </div>

  <div class="main-box">

    <div class="edit-box border-t border-r">
      <h1><a href="
      edit.php">Edit Item</a></h1>
    </div>

    <div class="delete-box border-t">
      <h1><a href="delete.php">Delete Item</a></h1>
    </div>

  </div>

</body>
</html>