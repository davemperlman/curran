(function(){
	'use strict';
	// Animate slide-in for each option in admin
	$('#createJob').on('click', function(){
		$.get( 'createjob.php', function(result){
			$('#fetched').append(result);
		});
	});

}());