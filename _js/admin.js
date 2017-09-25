(function(){
	'use strict';
	// Animate slide-in for each option in admin
	$('#createJob').on('click', function(){
		$.get( 'createjob.php', function(result){
			$('#fetched').append(result);
		});
	});
	$('#jobs').on('click', function(){
		$.get( 'jobs.php', function(result){
			$('#fetched').empty();
			$('#fetched').append(result);
		});
	});
}());