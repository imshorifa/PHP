<?php
$country =[
    "Banladesh" =>"Dhaka",
    "India" =>"Delhi",
    "Pakistan"=>"Islamabad",
    "Afganistan"=>"kabul",
    "Nepal" => "kathmundu",
    "America"=> "NewYork",
    "Unaited kigdom" =>"London"
];
ksort($country);
foreach ($country as $key => $value) {
   echo $key . "=" .$value ."<br>";
}
?>