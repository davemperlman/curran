<?php  
	require_once('autoload.php');
	$info = Classes\database::connect()->query("SELECT * FROM jobs WHERE id = '$_GET[jobId]'")->fetch(PDO::FETCH_ASSOC);
?>
<section id="content">

	<form action="submit.php" method="post" id="jobEdit" enctype="multipart/form-data">

		<label for="description">Description</label>

		<textarea name="description" id="description" cols="30" rows="10">
			<?php echo "$info[description]"; ?>
		</textarea>
		
		<label for="photos">Photos</label>

		<input type="file" name="files[]" multiple="multiple" id="photos">

		<input id="submitButton" type="submit" name="submit">

	</form>
	<div class="verify" style="display: none;"> <!-- INLINE STYLE: CHANGE -->
		<p>Are you sure?</p>
		<button class="no">No</button>
		<button class="yes">Yes</button>
	</div>

	<script>
		// $('#submitButton').on('click', function(e){
		// 	e.preventDefault();
		// 	$('.verify').fadeIn('500ms');
		// });
		// $('.no').on('click', function(){
		// 	$('.verify').hide();
		// });
		// $('.yes').on('click', function(){
		// 	var info = $('#photos').prop('files')[0];
		// 	var formData = new FormData();
		// 	formData.append('files', info);
		// 	console.log(formData);
		// 	$.ajax({
		// 	        url: 'submit.php',
		// 	        method: "POST",
		// 	        data: formData,
		// 	        processData: false,
		// 	        contentType: false,
		// 	        success: function(result){
		// 	        	console.log(result);
		// 	        }
		// 	});
		// });
	</script>

</section>
