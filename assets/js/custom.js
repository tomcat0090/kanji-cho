$(document).ready(function(){
	$("#doSearch").click(function () {
		var word = $('#search').val();
		
		$.ajax({
				url: baseUrl+'index.php/ajax/test',
				type: 'POST',
				data: {
						word: word
				},
				dataType: 'json',
				success: function( json ) {
						var len = json.result.length;
						for(var i=0; i < len; i++){
							$('#result').append(json.result[i].value);
						}
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
