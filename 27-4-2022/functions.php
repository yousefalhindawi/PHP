<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 27-4-2022</title>
</head>
<body>
    <?php
    echo 'Task 1'."<br><br>";
    function primeCheck($number){
        if ($number == 1)
        return 0;
        for ($i = 2; $i <= $number/2; $i++){
            if ($number % $i == 0)
                return 0;
        }
        return 1;
    }
    $number = 3;
    $flag = primeCheck($number);
    if ($flag == 1)
        echo "$number is a Prime number";
    else
        echo "$number is Not a Prime number";
    echo "<br><br>".str_repeat ("*",20);
    ?>
    <?php
    echo "<br><br>".'Task 2'."<br><br>";
    $string = "remove";
    echo 'Before Reverse <br>';
    echo $string.'<br>';
    echo 'After Reverse <br>';
    echo strrev($string);
    echo "<br><br>".str_repeat ("*",20);
    ?>
    <?php
    echo "<br><br>".'Task 3'."<br><br>";
    function lowerCase($string){
        if (ctype_lower($string)) {
            echo "Yes, Your String is lower case characters\n";
        } else {
            echo "No, Your String is Not lower case characters\n";
        }
    }
    lowerCase('remove');
    echo "<br><br>".str_repeat ("*",20);
    ?>
    <?php
    echo "<br><br>".'Task 4,5'."<br><br>";
    function swap($a, $b){
        [$a, $b] = [$b, $a];
        echo "x=$a  y=$b <br>";
    }
    function swap2($a, $b){
        $z=$a;
        $a=$b;
        $b=$z;
        echo "x=$a  y=$b <br>";
    }
    $x = 12;
    $y= 10;
    echo 'Before swap <br>';
    echo "x=$x  y=$y <br>";
    echo 'After swap <br>';
    swap($x,$y);
    swap2($x,$y);
    echo "<br><br>".str_repeat ("*",20);
    ?>
    <?php
    echo "<br><br>".'Task 6'."<br><br>";
    $num= 407;
    $total=0;
    for($i=$num;$i!=0;$i=$i/10)
    {
    $remain=$i%10;
    $total+=$remain*$remain*$remain;
    }
    if($num==$total)
    {
    echo "Yes, Number $num is an Armstrong number";
    }
    else
    {
    echo "No, Number $num it is not an armstrong number";
    }
    echo "<br><br>".str_repeat ("*",20);
    ?>
    <?php
    echo "<br><br>".'Task 7'."<br><br>";
    function Palindrome($input){
    $reverse = strrev($input);
    if($input == $reverse) {
    echo '<br> '.$input.'  is a palindrome';
    }
    else {
    echo '<br>'.$input.' is not a palindrome';
    }
    }
    Palindrome('madam');
    Palindrome('Eva');
    echo "<br><br>".str_repeat ("*",20);
    ?>
    <?php
    echo "<br><br>".'Task 8'."<br><br>";
    $array1 = array(2, 4, 7, 4, 8, 4);
    $array1 = array_unique($array1);
    echo '<pre>';
    print_r ($array1);
    echo '</pre>';
    echo "<br><br>".str_repeat ("*",20);
    ?>
</body>
</html>