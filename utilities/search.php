<?php
require_once '../autoload.php';

	$name = $_POST['search'];
	$results = Classes\database::get("SELECT name FROM jobs WHERE name LIKE '%$name%' LIMIT 5");

?>
<ul>
	<?php foreach ($results as $key => $value): ?>
		<li onclick='fill("<?php echo $value['name']; ?>")'><?php echo $value['name'] ?></li>
	<?php endforeach ?>
</ul>

