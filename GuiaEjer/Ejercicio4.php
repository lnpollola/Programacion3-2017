<?PHP
$operador= "";

$operador="/";

$op1 = 100;
$op2 = 0;

switch ($operador)
{
    case '+':
        echo $op1+$op2;
        break;
    case '-':
        echo $op1-$op2;
        break;
    case '/':
        if($op2<>0 and $op1>$op2)
        {
            echo $op1/$op2;
        }else 
        {
            echo "El divisor debe ser distinto de 0";
        }
        break;
    case '*':
        echo $op1*$op2;
        break;
}
?>