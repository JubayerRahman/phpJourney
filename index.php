<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 2</title>
</head>
<body>
    <?php 
    // Pree defined data (Super global data)
     echo $_SERVER["DOCUMENT_ROOT"];
     echo "<br/>";
     echo $_SERVER["PHP_SELF"];
     echo "<br/>";
     echo $_SERVER["SERVER_NAME"];
     echo "<br/>";
     echo $_SERVER["REQUEST_METHOD"];
     echo "<br/>";

    //  use of get method
    echo $_GET["name"];
    echo "<br/>";
    echo $_GET["age"];
    ?>
</body>
</html>