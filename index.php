<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day4- Calculator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 0;
            display: flex;
             flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        main {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 90%;
            max-width: 400px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        input, select {
            padding: 12px;
            border: 2px solid #e1e1e1;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        input[type="submit"] {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 15px;
            transition: transform 0.2s ease;
        }

        input[type="submit"]:hover {
            transform: translateY(-2px);
        }

        .error-p {
            color: #e74c3c;
            background: #fdf0f0;
            padding: 12px;
            border-radius: 6px;
            border-left: 4px solid #e74c3c;
            margin: 1rem 0;
            font-weight: 500;
        }

        .result {
            color: #27ae60;
            background: #f0fdf4;
            padding: 12px;
            border-radius: 6px;
            border-left: 4px solid #27ae60;
            margin: 1rem 0;
            font-weight: 500;
            font-size: 1.2rem;
            text-align: center;
        }

        @media (max-width: 480px) {
            main {
                padding: 1.5rem;
                margin: 1rem;
            }
            
            input, select {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <main>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">
            <input type="number" placeholder="first number" name="number1"/>
            <Select name="operator">
                <Option value="add">+</Option>
                <Option value="minus">-</Option>
                <Option value="multiply">*</Option>
                <Option value="Devide">/</Option>
            </Select>
            <input type="number" placeholder="Secound number" name="number2"/>
            <input type="Submit" value="Submit" name="Submit"/>
        </form>
    </main>

    <?php
     if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $num1 = filter_input(INPUT_POST, "number1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "number2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operators = htmlspecialchars($_POST["operator"]);

        $error = false;
        
        if (empty($num1) || empty($num2) || empty($operators)) {
            echo "<p class='error-p'>fill all the numbers and operator</p>";
            $error = true;
        }
        
        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "<p class='error-p'>The inputs must be number</p>";
            $error = true;
        }

        // calculate function
        if (!$error) {
            $Value = 0;
            switch($operators){

                case "add":
                    $value = $num1 + $num2;
                    break;
                case "minus":
                    $value = $num1 - $num2;
                    break;
                case "multiply":
                    $value = $num1 * $num2;
                    break;
                case "Devide":
                    $value = $num1 / $num2;
                    break;
                default :
                    echo "<p class='error-p'>Something went wrong</p>"; 
            }
            echo "<p class='result'> Result = ". $value . " </p>";
        }

     }
    ?>
</body>
</html>