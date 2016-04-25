<?php
	/**
	$a = [1,2,3,4,5,6,7,8,9,0];
	echo $a[0];
	echo $a[1];
	echo $a[2];
	echo $a[3];
	echo $a[4];
	*/
	
	$people =  array(
		['name' => 'Harsh', 'age' => 22, 'dept' => 'CSE'],
		['name' => 'Nikita', 'age' => 22, 'dept' => 'MSE'],
		['name' => 'Paul', 'age' => 22, 'dept' => 'BCOM'],
		['name' => 'Imtiyaz', 'age' => 22, 'dept' => 'CSE'],
		['name' => 'Shamveel', 'age' => 22, 'dept' => 'MBA'],
		['name' => 'CEO', 'age' => 22, 'dept' => 'BE'],
		['name' => 'Benson', 'age' => 22, 'dept' => 'CSE'],
	);	
?>

<style>
	.test {
		background: rebeccapurple;
		color: white;
		padding: 3px;
		border-radius: 5px;
		list-style: none;
	}
</style>


<ul>
<?php for($i =0; $i < count($people); $i++) { ?>
	
	<li class="test"><?php echo $people[$i]['name']; ?> | <?php echo $people[$i]['age']; ?> | <?php echo $people[$i]['dept']; ?></li>
	
<?php } ?>
</ul>
