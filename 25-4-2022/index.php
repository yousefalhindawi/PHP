<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 25-4-2022</title>
</head>
<body>
    <?php
    echo 'Task 1'."<br><br>";
    $year = 2016;
    if (( $year % 400 == 0) || (( $year % 4 == 0 ) && ( $year % 100 != 0))){
        echo "$year is Leap Year";
    }
        
    else{
        echo "$year is Not the Leap Year" ;
    }
        echo "<br><br>".str_repeat ("*",20);
    ?>
    <?php
    echo "<br><br>".'Task 2'."<br><br>";
    $temp = 19;
    if($temp < 20)
    echo"It is winter!";
    else echo "It is summertime!";
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 3'."<br><br>";
    $firstInteger = 2;
    $secondInteger = 2;
    if($firstInteger===$secondInteger) {
        $result = ($firstInteger+$secondInteger)*3;
        echo $result;
    }
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 4'."<br><br>";
    $firstInteger = 10;
    $secondInteger = 15;
    if(($firstInteger+$secondInteger)===30) echo 30;
    else echo "false";
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 5'."<br><br>";
    $num = 9;
    if($num %3==0) echo 'true';
    else echo "false";
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 6'."<br><br>";
    $num = 20;
    if($num >=20 && $num <=50) echo 'true';
    else echo "false";
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 7'."<br><br>";
    $arrayNums = [1, 5, 9, 20];
    $largest = max($arrayNums);
    echo($largest);
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 8'."<br><br>";
    $unit_cost_first = 2.50;
    $unit_cost_second = 5.00;
    $unit_cost_third = 6.20;
    $unit_cost_fourth = 7.50;
    $units = 900;
    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * $unit_cost_first) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * $unit_cost_first) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    echo number_format($bill, 2, '.', ','); // to format the bill
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 9'."<br><br>";
    $age = 17;
    if($age>= 18) echo "eligible to vote";
    else echo "not eligible to vote";
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 9'."<br><br>";
    $num = -0.5;
    switch($num) {
        case 0 : echo "zero"; break;
        case $num > 0 : echo "positive"; break;
        case $num < 0 : echo "negative"; break;
    }
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 10'."<br><br>";
    $num = -0.5;
    switch($num) {
        case 0 : echo "zero"; break;
        case $num > 0 : echo "positive"; break;
        case $num < 0 : echo "negative"; break;
    }
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 11'."<br><br>";
    function calculate($n1,$n2,$operator){
    // $operator='+';
    // $n1 = 3;
    // $n2 = 3;
    if ($operator==='+') return $n1+$n2;
    else if ($operator==='-') return $n1-$n2;
    else if ($operator==='*') return $n1*$n2;
    else if ($operator==='/') return $n1/$n2;
}
   echo calculate(3,3,'*');
    echo "<br><br>".str_repeat ("*",20);
    ?>
     <?php
    echo "<br><br>".'Task 12'."<br><br>";
    $grade =[60,86,95,63,55,74,79,62,50];
    $average = round( array_sum($grade) / count($grade) );
    switch ($average){
        case $average<=60 : echo 'F'; break;
        case $average<=70 : echo 'D'; break;
        case $average<=80 : echo 'C'; break;
        case $average<=90 : echo 'B'; break;
        case $average<=100 : echo 'A'; break;
    }
    echo "<br><br>".str_repeat ("*",20);
    ?>
</body>
</html>