<?php
echo "-----------1) Non Parameter Function | Satatic Function   ----------<br><br>";

function Name()
{
    echo "Ali";
}
Name();


echo "<br><br>-----------2)  Parameterized Function | Dynamic Function   ----------<br><br>";

function Add($num1, $num2)
{

    echo $num1 + $num2;
}
Add(16, 4);

echo "<br><br>-----------3)  Return Function  ----------<br><br>";

function sub($n1, $n2)
{
    return $n1 - $n2;
}
$data = sub(120, 20);
echo $data + 100;

echo "<br><br>-----------4)  Defult Parametrized Function  ----------<br><br>";

function stdname($name = "ali")
{

    echo $name;
}
// stdname();
stdname("Abdullah");

echo "<br><br>-----------5)  Recursive  ----------<br><br>";


?>
