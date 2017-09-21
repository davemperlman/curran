<?php
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location:login.php');
	}
	require 'autoload.php';
	date_default_timezone_set('America/New_York');
		$jobs = Classes\database::connect()->query("SELECT * FROM jobs WHERE DATE(start_date) <= '$_GET[date]' AND complete = 0 ORDER BY time ASC")->fetchAll(PDO::FETCH_ASSOC);
		$headings = array('Name', 'Address', 'Email', 'Phone', 'Problem', 'Time', 'Started');
	?>		
<h2><?php echo date('D, F jS',strtotime($_GET[date])); ?></h2>
<table>
	<tr>
	<?php foreach ($headings as $heading) {
		echo "<th>$heading</th>";
	} ?>
	</tr>
	<?php foreach ($jobs as $job) {
		echo "<tr>";
			echo "<td>$job[name]</td>";
			echo "<td>$job[address]</td>";
			echo "<td>$job[email]</td>";
			echo "<td>$job[phone]</td>";
			echo "<td>$job[problem]</td>";
			echo "<td>$job[time]</td>";
			echo "<td>$job[origination_date]</td>";
			echo "<td><button class='activate'" . (($job['employee_id'] !== $_SESSION['id']) ? 'disabled' : '') . " data-employee='$job[employee_id]' data-jobId='$job[id]' '>EDIT</button></td>";
		echo "</tr>";
	} ?>


	<script>
		$('.activate').on('click', function(){
			console.log($(this));
			$.get( 'job.php', { jobId: $(this).attr('data-jobId') }, function(result){
				$('#jobs').html(result);
			});
		});
	</script>
</table>
