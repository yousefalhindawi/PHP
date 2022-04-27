<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops 26-4-2022</title>
    <style>
        td {
            
        }
    </style>
</head>
<body>
    <?php
    echo 'Task 1'."<br><br>";
        $total = 0;
        for($i = 0; $i <=30; $i++) {
            $total += $i;
        }
        echo $total;
        echo "<br><br>".str_repeat ("*",20);
    ?>
    <?php
    echo "<br><br>".'Task 2'."<br><br>";
        $row='';
        $numberOfLetters =5;
        for($i = 0; $i < $numberOfLetters; $i++) {
            for($j = $numberOfLetters-1 ; $j > $i; $j--){
                $row.= chr(65).' ';
            }
            for ($k = 0; $k <= $i; $k++){
                $row.= chr(65 + $i).' ';
            }
            $row.='<br>';
        }
        echo $row;
        echo "<br><br>".str_repeat ("*",20);
        
    ?>
    <?php
    echo "<br><br>".'Task 3'."<br><br>";
        $row='';
        for($i = 1; $i <= 5; $i++) {
            for($j = 5 ; $j > $i; $j--){
                    $row.= '1 ';
            }
            for ($k = 1; $k <= $i; $k++)
            {
                $row.= $i.' ';
            }
            $row.='<br>';
        }
        echo $row;
        echo "<br><br>".str_repeat ("*",20);
        
    ?>
    <?php
    echo "<br><br>".'Task 4'."<br><br>";
        $row='';
        for($i = 1; $i <= 5; $i++) {
            for ($k = 1; $k <= 5; $k++)
            {
                if ($i==$k){
                    $row.= $i.' ';
                }else {
                    $row.= ' 0 ';
                }
            }
            $row.='<br>';
        }
        echo $row;
        echo "<br><br>".str_repeat ("*",20);
        
    ?>
    <?php
    echo "<br><br>".'Task 5'."<br><br>";
        $num = 5;
        $factorial=1;
        for($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
        }
        echo $factorial;
        echo "<br><br>".str_repeat ("*",20);
        
    ?>
    <?php
    echo "<br><br>".'Task 6'."<br><br>";
    function Fibonacci($n){
        $num1 = 0;
        $num2 = 1;
        for($i = 0; $i < $n; $i++){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }
    }
    echo Fibonacci(9);
    echo "<br><br>".str_repeat ("*",20);
        
    ?>
    <?php
    echo "<br><br>".'Task 7'."<br><br>";
    echo "<table style='border: 1px solid black ; border-collapse: collapse'>";
    for ($i =1; $i <= 6; $i++){
        echo "<tr>";
        for($j = 1; $j < 6; $j++){
            $result = $i*$j;
            echo "<td style='border: 1px solid black; width: 100px; padding: 3px'>$i*$j = $result</td>";
            
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><br>".str_repeat ("*",20);
        
    ?>
    <?php
    echo "<br><br>".'Task 8'."<br><br>";
    function fizzbuzz($num){
    if ($num % 15 === 0) {
        print " FizzBuzz " ;
    } else if($num % 5 === 0){
        print " Buzz " ;
        } else if($num % 3 === 0){
            print " Fizz " ;
            } else {
                print $num.' ' ;
            }
        }
    for ($i = 1; $i <= 50; $i++) {
    fizzbuzz($i);
    }
    echo "<br><br>".str_repeat ("*",20);
        
    ?>
    <?php
    echo "<br><br>".'Task 9'."<br><br>";
    $k=1;
    $row='';
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++){
            $row.= $k." ";
            $k++;
        }
        $row.="<br>";
    }
    echo $row;
    echo "<br><br>".str_repeat ("*",20);
        
    ?>
    <?php
    echo "<br><br>".'Task 10'."<br><br>";
    $n = 3;
    $string = "";
// Pyramid
for ($i = 1; $i <= $n; $i++) {
//   for ($j = 1; $j < $n - $i + 1; $j++) {
//     $string .= " ";
//   }
  for ($k = 0; $k < 2 * $i - 1; $k++) {
    $string .= chr($k + 65).' ';
  }
  $string .= "<br>";
}
// Reverse Pyramid
for ($i = 1; $i <= $n - 1; $i++) {
//   for ($j = 1; $j < $i + 1; $j++) {
//     $string .= " ";
//   }
  for ($k = 0; $k < 2 * ($n - $i) - 1; $k++) {
    $string .= chr($k + 65).' ';
  }
  $string .= "<br>";
}
echo $string;
    echo "<br><br>".str_repeat ("*",20);
        
    ?>
</body>
</html>