<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

array_slice($data, 2); 
print_r($data)
// foreach ($characters as $character) {
// 	echo $character->name . '<br>';
// }
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