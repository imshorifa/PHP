<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Your total sales amount :</label><br>
        <input type="text" name="amount"><br>
        <input type="submit" name="calc">
    </form>
    <?php
     function calc_sales_amount($z){
        if($z>5000){
            return $z*.10;
        }else{
            return $z*0;
        }
     }
     if(isset($_POST['calc'])){
          $abc= (float) $_POST['amount'];
          $result= calc_sales_amount($abc);
          echo "<b>Sales amount:</b> " . $abc . "<br><b> Discount Amount: </b>" . $result. "<br>";
          echo "<b>Payment Amount: </b>" .($abc-$result) . "<br>";
     }
    ?>
</body>
</html>