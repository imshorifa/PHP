<form action="" method="post">
    <label for="">Enter your grade value(A+,A,B,C,F)</label><br>
    <input type="text" name="value"><br>
    <input type="submit" name="calc">

</form>

<?php
function xyz($z){
    $z = strtoupper($z);
    if($z =="A+"){
        return "outstanding";
    }
    elseif($z=="A"){
        return "very Good";
    }
    elseif($z=="B"){
        return "Good";
    }
    elseif($z=="C"){
        return "poor";
    }
    else{
        return "Fail";
    }
}
if(isset($_POST['calc'])){
    $abc = $_POST['value'];
    $result = xyz($abc);
    echo "<b>Result: </b> " .$result;
}
?>