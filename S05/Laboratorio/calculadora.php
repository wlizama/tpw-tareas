<?php

$action = $_POST["action"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operador = $_POST["operador"];
$result = 0;

try {
    if ($operador == '+') $result = $num1 + $num2;
    elseif ($operador == '-') $result = $num1 - $num2;
    elseif ($operador == '*') $result = $num1 * $num2;
    elseif ($operador == '/') $result = $num1 / $num2;
    elseif ($operador == 'mod') $result = $num1 % $num2;
    elseif ($operador == '++') $result = ++$num1." y ".++$num2;
    elseif ($operador == '--') $result = --$num1." y ".--$num2;

    echo $_POST["num1"]." ".$operador." ".$_POST["num2"]." = ".$result;
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
