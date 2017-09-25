<?php require_once '../autoload.php'; ?>

		<form action="">
			<h1>Create Job</h1>
			<fieldset>
				<label for="name">Name</label>

			<input type="text" name="name" id="name">

			<label for="address">Address</label>

			<input type="text" name="address" id="address">

			<label for="email">Email</label>

			<input type="email" name="email" id="email">

			<label for="phone">Phone</label>

			<input type="text" name="phone" id="phone">
			</fieldset>

			<fieldset>
				<label for="problem">Problem</label>

			<textarea  name="problem" id="problem"></textarea>
			</fieldset>

			<fieldset id="employees">
				<label for="employee">Employee</label>

			<div id="employeeSelect">
				<select name="employee" id="employee">
				<?php $employees = Classes\database::get('SELECT * FROM users');?>
				<?php foreach ($employees as $employee): ?>
					<option value="<?php echo $employee['id'] ?>">
						<?php echo $employee['first'] . ' ' . $employee['last']; ?>
					</option>
				<?php endforeach ?>
			</select>
			</div>
			<a href="#" class="addEmployee">+</a>
			</fieldset>
			<input type="submit">
		</form>


		<script>
			$('.addEmployee').on('click', function(e){

				e.preventDefault();

				$('#employeeSelect').clone().insertAfter('#employeeSelect').append("<a href='#' class='removeEmployee'>-</a>");

					$('.removeEmployee').on('click', function(e){
					e.preventDefault();
					$(this).closest('#employeeSelect').remove();
				});
			});	
		</script>