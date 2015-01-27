var response,
    url = 'r.php?q=';

function querysearch(){
	request($('#search').val());
}

function request(arg){
	response = $.ajax({
		url: 'r.php?q='+arg,
		dataType: 'json',
		type: 'get',
		cache: false,
		success: function(data){
			response = data;
		}
	});

	console.log(response);
}
