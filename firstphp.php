
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
   
    <?php

// Define a function for each calculation operation
function add($num1, $num2) {
  return $num1 + $num2;
}

function subtract($num1, $num2) {
  return $num1 - $num2;
}

function multiply($num1, $num2) {
  return $num1 * $num2;
}

function divide($num1, $num2) {
  if ($num2 == 0) {
    return "Error: Division by zero!";
  }
  return $num1 / $num2;
}

function exponentiate($num1, $num2) {
  return pow($num1, $num2);
}

function percentage($num1, $num2) {
  return ($num1 / $num2) * 100;
}

function squareRoot($num) {
  return sqrt($num);
}

function logarithm($num, $base) {
  return log($num, $base);
}

// User-friendly interface for inputting numerical values and selecting desired operations
echo "<h1>Multipurpose Calculator</h1>";
echo "<form action='' method='post'>";
echo "Enter first number: <input type='number' name='num1' required><br><br>";
echo "Enter second number: <input type='number' name='num2' required><br><br>";
echo "Operation: <select name='operation' required>";
echo "<option value='add'>Addition</option>";
echo "<option value='subtract'>Subtraction</option>";
echo "<option value='multiply'>Multiplication</option>";
echo "<option value='divide'>Division</option>";
echo "<option value='exponentiate'>Exponentiation</option>";
echo "<option value='percentage'>Percentage</option>";
echo "<option value='squareRoot'>Square Root</option>";
echo "<option value='logarithm'>Logarithm</option>";
echo "</select><br><br>";
echo "<input type='submit' value='Calculate'>";
echo "</form>";

// Process the user input and perform the selected operation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $operation = $_POST["operation"];

  switch ($operation) {
    case 'add':
      $result = add($num1, $num2);
      break;
    case 'subtract':
      $result = subtract($num1, $num2);
      break;
    case 'multiply':
      $result = multiply($num1, $num2);
      break;
    case 'divide':
      $result = divide($num1, $num2);
      break;
    case 'exponentiate':
      $result = exponentiate($num1, $num2);
      break;
    case 'percentage':
      $result = percentage($num1, $num2);
      break;
    case 'squareRoot':
      $result = squareRoot($num1);
      break;
    case 'logarithm':
      $result = logarithm($num1, $num2);
      break;
    default:
      $result = "Error: Invalid operation!";
  }

  echo "<script>alert('The result is: $result');</script>";
}

?>
   
</body>
</html>
