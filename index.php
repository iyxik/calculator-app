<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="calculator">
        <h2>Calculator</h2>
        <form method="post">
            <input type="number" name="num1" step="any" placeholder="Enter first number" required>
            <input type="number" name="num2" step="any" placeholder="Enter second number" required>

            <select name="operation" required>
                <option value="">- Select Operation -</option>
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (×)</option>
                <option value="divide">Division (÷)</option>
            </select>

            <button type="submit" name="calculate">Calculate</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            $result = "";

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                default:
                    $result = "Invalid operation";
            }

            echo "<div class='result'>Result: $result</div>";
        }
        ?>
    </div>

</body>

</html>