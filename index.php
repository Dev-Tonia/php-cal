
<?php
    if (isset($_POST['calculate'])) {
        // Retrieving values from the form
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = '';

        // Performing calculations based on the selected operator
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            default:
                $result = "Invalid operator";
                break;
        }

        // Displaying the result
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Enter first number:</label>
        <input type="number" name="num1" id="num1" required>
        
        <label for="operator">Select operation:</label>
        <select name="operator" id="operator">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select>
        
        <label for="num2">Enter second number:</label>
        <input type="number" name="num2" id="num2" required>
        
        <input type="submit" name="calculate" value="Calculate">
    </form>
   <?php 
        echo "<h3>Result: $result</h3>";

   ?>
</body>
</html>
