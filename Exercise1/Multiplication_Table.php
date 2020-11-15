<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise01</title>
</head>

<body>
<table border="1">
	<?php for($i = 0; $i <= 100; $i++){ ?>
		<tr>
			<?php for($j = 0; $j <= 100; $j++){?>
				<td>
					<?php 
						if($i == 0 && $j == 0){
						    each($i);
						}
						else if($i == 0 && $j != 0){
						    echo($j);
						}
						else if($i != 0 && $j == 0){
						    echo($i);
						}
						else{
						    echo(($i) * ($j));
						}
					 ?>
				</td>
			<?php } ?>
		</tr>
	<?php } ?>
</table>

</body>

</html>