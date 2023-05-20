<!-- show maximum and minimum 3 input values -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
        <label for="">Enter First Number</label><br>
        <input type="text" name="firstNumber"><br>

        <label for="">Enter Second Number</label><br>
        <input type="text" name="secondNumber"><br>

        <label for="">Enter Third Number</label><br>
        <input type="text" name="thirdNumber"><br>

        <input type="submit" name="calc">
    </form>
    <?php
    if(isset($_POST['calc'])){
        $a = $_POST['firstNumber'];
        $b = $_POST['secondNumber'];
        $c = $_POST['thirdNumber'];
        if($a>=$b && $a>=$c){
            $maxval = $a;
        }
        elseif($b >=$c && $b >= $a){
            $maxval = $b;
        }
        else{
            $maxval = $c;
        }
        if($a <= $b && $a <= $c){
            $minval = $a;
        }
        elseif($b<=$a && $b<=$c ){
            $minval = $b;
        }else{
            $minval =$c;
        }
    }
    echo "<h1>Maximum value: ".$maxval ."<br></h1>";
    echo "<h1> Minimum value: ".$minval."<br></h1>"
    ?>
    </div>
</body>
</html>