<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

$randNum = rand(0,4);
echo $characters[$randNum]->Ans; echo "<br>";
echo $characters[$randNum]->Ques;

?>



