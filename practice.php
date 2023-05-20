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
      <label for=""> user name:</label>
      <input type="text" name="uname"><hr>
      <label for="">Email:</label>
      <input type="text" name="email"><hr>
      <input type="submit" name="sub" value="validate">
</form>
<?php
if(isset($_POST['sub'])){
    $a =$_POST['uname'];
    $b =$_POST['email'];
    $userlenth =strlen($a);
    if($userlenth <4 || $userlenth>8){
        echo "<h3>username must be 4 to 8 characters</h3>";
    }
    else{
        echo "<h3>valid user name </h3>";
    }
    if(filter_var($b,FILTER_VALIDATE_EMAIL)){
        echo "<h3>valid email </h3>";
    }
    else{
        echo "<h3>Invalid email</h3>";
    }
}
?>
</body>
</html>