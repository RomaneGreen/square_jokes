<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data,true); // decode the JSON feed
$count = $_GET['count'];
//echo $count;
$jokes = 'http://api.icndb.com/jokes/random/'. $count;
$jokesz= file_get_contents($jokes);
echo $jokesz;
//echo $data
?>

<!-- <table>
	<tbody>
		<tr>
			<th>Question</th>
			<th>Answer</th>
		</tr>
		 <?php foreach ($characters as $character) : ?> 
        <tr>
            <td> <?php echo $character->Ques; ?>  </td>
            <td> <?php echo $character->Ans; ?> </td>
        </tr>
		<?php endforeach; ?>

    
	</tbody>
</table> -->