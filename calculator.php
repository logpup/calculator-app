<head><title>Hello World</title></head>
<body>
<form action="calculator.php" method="get">
    x:  <input type="text" name="x" /><br />
    y:  <input type="text" name="y" /><br />
    op:  
    <br><input type="radio" id="*" name="op" value="*">
    <label for="*">Multiply</label><br>
    <input type="radio" id="/" name="op" value="/">
    <label for="/">Divide</label><br>
    <input type="radio" id="+" name="op" value="+">
    <label for="+">Add</label><br>
    <input type="radio" id="-" name="op" value="-">
    <label for="-">Minus</label><br>
    <input type="submit" name="submit" value="Submit me!" />
</form>
<?php
$x = $_GET['x'];
$y = $_GET['y'];
$op = $_GET['op'];

if ($op == "*") {
    echo $x * $y;
} elseif ($op == "/") {
    echo $x / $y;;
} elseif ($op == "+") {
    echo $x + $y;;
} elseif ($op == "-") {
    echo $x - $y;;
}

// printf("<p>Hello, %s; how do you do?</p>\n",
//     htmlentities($name)
// );
?>
</body>
</html>