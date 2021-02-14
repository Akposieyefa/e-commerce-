	//newsletter
	var news = function() {

		$(document).on('click','#subscribe', function(event){
			event.preventDefault();
			alert("woring");
			var mail = document.getElementById("mail").value;
			$.ajax({
				type:"POST",
				url:"config/Insert.php",
				statusCode: {
				  404: function(){
				    alert("Page not found");
				  }
				},
				data: {
					mail : mail
				},
				success: function(data){
					var message = data;
					alert(message);
				}
			 }).error(function(){
				alert("Error in connection");
			 });
		});

	};