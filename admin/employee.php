<?php  
require_once '../autoload.php';
?>
<div class="employees">
	<h1>Employees</h1>
	<table>
		<?php $info = Classes\database::get('SELECT * FROM users'); ?>
		<?php foreach ($info as $employee): ?>
			<tr>
				<?php foreach ($employee as $value): ?>
					<td>
						<?php echo $value; ?>
					</td>
				<?php endforeach ?>
				<td>
					<button>Edit</button>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
	<form action="">
		<h2>Add Employee</h2>
		<fieldset>

			<label>First: </label>
			<input type="text" name="first">

			<label>Last: </label>
			<input type="text" name="last">

			<label>Email: </label>
			<input type="email" name="email">

			<label>Phone: </label>
			<input type="text" name="phone">
		</fieldset>

		<fieldset>
			
			<label>Username: </label>
			<input type="text" name="username">

			<label>Password </label>
			<input type="text" name="password">

			<button>Submit</button>
		</fieldset>
	</form>
</div>