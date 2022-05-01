<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<?php
$ans='';
    if(isset($_POST['sub'])){
        $num1=$_POST['n1'];
        $num2=$_POST['n2'];
        $oprnd=$_POST['sub'];
        if($oprnd=="+")
        $ans=$num1+$num2;
        else if($oprnd=="-")
        $ans=$num1-$num2;
        else if($oprnd=="x")
        $ans=$num1*$num2;
        else if($oprnd=="/")
        $ans=$num1/$num2;
    }
    ?>
    <div class="container col-4 mt-5">
    <form method="post" action="">
      <h1>Calculator</h1>
      <label for="firstNumber">First Number</label>
      <input name="n1" value="" class="form-control" id="firstNumber" aria-describedby="firstNumber" placeholder="Enter firstNumber">
      <label for="secoundNumber">Secound Number</label>
      <input name="n2" value="" class="form-control" id="secoundNumber" aria-describedby="secoundNumber" placeholder="Enter secoundNumber"><br><br>
  <input type="submit" name="sub" value="+" class="btn btn-primary">
  <input type="submit" name="sub" value="-" class="btn btn-primary">
  <input type="submit" name="sub" value="x" class="btn btn-primary">
  <input type="submit" name="sub" value="/" class="btn btn-primary"><br><br>
  <label for="result">Result</label>
  <input type='text' value="<?php echo $ans; ?>" class="form-control" id="result" aria-describedby="result">
  </form>
  </div>
    </body>
    </html>