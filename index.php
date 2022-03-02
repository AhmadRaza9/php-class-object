<?php

require_once "init.php";
$object = new Product();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
<?php
$object->show_products_on_frontend();
?>
</div>
</body>
</html>
