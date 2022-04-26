<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 26-4-2022</title>
</head>
<body>
<?php
    echo "<br><br>".'Task 1'."<br><br>";
    $colors = array('white', 'green', 'red') ;
    echo '<ul>';
    foreach ($colors as $color){
       echo "<li>$color</li>";
    }
    echo '</ul>';
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
<?php
    echo "<br><br>".'Task 2'."<br><br>";
    $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
    
    echo'before sorting';
    echo '<pre>';
    var_dump($cities);  
    echo '</pre>';
    
    echo "after sorting <br><br>";
    asort($cities);
    foreach($cities as $city=>$capital) {
        echo "The capital of $city is $capital <br><br>";
    }
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
<?php
    echo "<br><br>".'Task 3'."<br><br>";
    $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
    echo $color['4'];
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
<?php
    echo "<br><br>".'Task 4'."<br><br>";
    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    asort($fruits);
    foreach($fruits as $key=> $fruit){
        echo "$key = $fruit <br><br>";
    }
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
<?php
    echo "<br><br>".'Task 5'."<br><br>";
    $temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $average =  array_sum($temp)/ count($temp);
    echo "Average Temperature is : $average .<br>";
    sort($temp);
    echo " List of five lowest temperatures :"; 
    for ($i = 0; $i < 5; $i++) echo $temp[$i].', ';
    echo "<br>List of five highest temperatures :";
    for ($i=(count($temp)-5); $i < count($temp); $i++) echo $temp[$i].', ';
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
<?php
    echo "<br><br>".'Task 6'."<br><br>";
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $new = array_merge($array1,$array2);
    echo '<pre>';
    print_r($new);
    echo '</pre>';
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
<?php
    echo "<br><br>".'Task 7'."<br><br>";
    $ranges= range(200,250);
    // echo '<pre>';
    // print_r($range);
    // echo '</pre>';
    foreach($ranges as $num){
        if($num % 4 == 0) echo $num.', ';
    }
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
<?php
    echo "<br><br>".'Task 8'."<br><br>";
    $words =  array("abcd","abc","de","hjjj","g","wer",'gggggggggggggggg','');
    $x = [];
    foreach($words as $word){
        array_push($x,strlen($word));
    }
    echo '<pre>';
    print_r($x) ;
    echo '</pre>';
    $max = max($x);
    $min = min($x);
    echo "The shortest array length is $min. The longest array length is $max.";
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
<?php
    echo "<br><br>".'Task 9'."<br><br>";
    for ($i = 0; $i < 10; $i++) echo rand(11,20).' ';
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
<?php
    echo "<br><br>".'Task 10'."<br><br>";
    $arr = array( 2, 0, 10, 12, 6) ;
    $smallest = $arr[0];

    for( $i=0; $i < count($arr); $i++){
    if($arr[$i] ===0) continue;
    else if($arr[$i] < $smallest){
        $smallest = $arr[$i];   
    }
}
echo $smallest;
    echo "<br><br>".str_repeat ("*",20);
    
    ?>
</body>
</html>