<?php
?>


<!--// function defatult value -->
<?php

 function greeting($name="Guest"){
    echo"<br>";
    return "Hello,$name";


 }
 $result= greeting();
 echo "<br>";
 echo $result;

//Project Start
//Po-Product Owner PCo- Project Coordinator,
//BA -Business Analyst,
//PM -Project Manager,
//QA -Quality Assurance,
//FE -Front End,
//BE -Back End


//Array
//1.Indexed Array
//2.Associated Array
//Multidimensional Array

//1.Indexed array -eg
$fruits=array("Apple","Orange","Banana");
//foreach
foreach($fruits as $fruit){
    echo"<br";
    echo$fruits;
}




//2.Associative Array -eg
$person =array(
    "name"=> "John",
    "age"=> 30,
    "city"=> "New York"

);

//foreach loop
foreach ($person as $value){
    echo"<br>";
    echo $key .":" .$value;

}

//EX
$mark =array(
    "Aung" => 80,
    "Kyaw Kyaw" => 40,
    "Hla Hla" => 70
);

foreach ($mark as $key =>$value){
    if($value >=50){
        echo "<br>";
        echo $key . "Passed";
    }
    else {
        echo "<br>";
        echo $key . "Failed";
    }
}

//hw

//Todo
//Create new file-form .php


 