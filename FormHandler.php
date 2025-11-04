<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstName  = htmlspecialchars($_POST["firstname"]);
    $lastname  = htmlspecialchars($_POST["lastname"]);
    $favouritePets  = htmlspecialchars($_POST["favouritePets"]);

    if (empty($firstName)) {
        header("Location: index.php");
        exit();
    }

    echo "The payload of the form:";
    echo "<br/>";
    echo $firstName;
    echo "<br/>";
    echo $lastname;
    echo "<br/>";
    echo $favouritePets;

    header("Location: index.php");
}
else{
    echo "hii, I am ohee";
    header("Location: index.php");
}