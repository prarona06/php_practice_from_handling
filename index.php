<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<pre>";
      print_r($_GET);
    print_r($_SERVER);
  
    echo "</pre>";
    if($_SERVER['REQUEST_METHOD'] === "GET"){
        echo "I am a GET Request";
    }
    ?>


</body>
</html>