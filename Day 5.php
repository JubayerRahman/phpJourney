<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 5</title>
</head>
<body>
    <?php
    
    $name = "ohee";
    $x = 5;
    $y = 10;

    // This is to test the type of the variable
    // var_dump(100);
    // var_dump("oree");
    // var_dump(true);
    // var_dump(9.99);
    // var_dump(null);
    // var_dump([1,2,3,4]);

    function myName  () {

        global $name ;


        echo "My name is  $name";
    }

    // myName();

    function checkingSum () {

        // $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        $GLOBALS['y'] = $GLOBALS['y'] - $GLOBALS['x'];
    }

    checkingSum();


    // static keyword:

    function staticSum () {

        static $a = 0;

        echo $a;

        $a++;
    }

    staticSum();
    staticSum();
    staticSum();
    staticSum();

    // echo $y
    // Just to check PHP version
    // echo phpversion()
    ?>
</body>
</html>