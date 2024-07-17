
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    if (empty($num1) || empty($num2)) {
      $error = "Please enter both numbers.";
    } else if (!is_numeric($num1) || !is_numeric($num2)) {
      $error = "Invalid input. Please enter numbers only.";
    } else {
      $result = "";
      switch ($operator) {
        case "+":
          $result = $num1 + $num2;
          break;
        case "-":
          $result = $num1 - $num2;
          break;
        case "*":
          $result = $num1 * $num2;
          break;
        case "/":
          if ($num2 == 0) {
            $error = "Cannot divide by zero.";
          } else {
            $result = $num1 / $num2;
          }
          break;
      }
    }
  }
?>

<form method="post">
  <?php if (isset($error)) : ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php endif; ?>
  <input type="number" name="num1" placeholder="Enter first number">
  <select name="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" name="num2" placeholder="Enter second number">
  <input type="submit" value="Calculate">
</form>

<?php if (isset($result)) : ?>
  <p>The result is: <?php echo $result; ?></p>
<?php endif; ?>

