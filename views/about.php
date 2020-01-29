<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

$randNum = rand(0,5);
echo $characters[$randNum]->name; echo "<br>";
echo $characters[$randNum]->race;

?>

<!-- 
<table>
	<tbody>
	
		
        <tr> -->
            
        <!-- </tr>

	</tbody>
</table> -->

