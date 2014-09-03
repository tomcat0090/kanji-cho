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
				console.log(json.result);
						var len = json.result.length;
							$('#selecter').empty();
							if (json.result == false)
								$('#selecter').append('<option value="0">見つかりません</option>');
						for(var i=0; i < len; i++){
							$('#selecter').append('<option value="'+json.result[i].id+'">'+json.result[i].value+'</option>');
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
