$(document).ready(function(){
	$("#doSearch").click(function () {
		var word = $('#search').val();
		console.log(word);
		
		$.ajax({
				url: baseUrl+'index.php/ajax/test',
				type: 'POST',
				data: {
						word: word
				},
				dataType: 'json',
				success: function( json ) {
						console.log(json.word);
				},
				error: function( data ) {
						// ...
				},
				complete: function( data ) {
						// ...
				}
		});
		return false;
	});
	console.log('nya');
});
