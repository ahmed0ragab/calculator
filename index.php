<?php 
declare(strict_types=1);
include 'include/class-Autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Calculator</title>
</head>
<body>
       <form action="http://localhost/phplearning/oop/DaniKrossing/calculator_project/include/calc.inc.php" method='post'>
              <p>HELLO TO MY CALCULATOR</p>
              <input type="number" name='num1' placeholder='firt number'>
              <select name="oper">
                     <option value="add">addition</option>
                     <option value="sub">subtraction</option>
                     <option value="div">division</option>
                     <option value="mult">multiplication</option>
              </select>
              <input type="number" name='num2' placeholder='second number'>
              <button type='submit' name='submit'>calculate</button>
       </form>
</body>
</html>