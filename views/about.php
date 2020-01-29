<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
//$charactersz = $data.map(obj => delete obj.Ans && obj);
$characters = json_decode($data); // decode the JSON feed
$count = $_GET['count'];
//echo $count;
//echo "<br>";
echo $data;

?>

<table>
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
</table>