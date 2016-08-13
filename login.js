// Function that validates email address through a regular expression.

$(document).ready(function() {
	$("#LoginBtn").click(function() {
		var email = document.getElementById("emailId").value;
		var password = document.getElementById("password").value;

		//var email = $("#emailId").val();
		//var password = $("#password").val();


		if (email == '' && password == '') {
			$(".login").addClass('animated bounce');
			$(".login").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      		$(this).removeClass('animated bounce');

			});

      		alert("Ingrese  algun dato");
      	
		} else if (password == '') {
			$("#password").addClass('animated shake');
			$("#password").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		    $(this).removeClass('animated shake');
			});

		    alert("Ingrese Clave");

			
		} else  {
			/* write below POST method to send data to php file. 

			$.post("filename.php", {
				email1: email,
				password1: password
			}, function(data) {

				if (data == 'success') {
					$("form")[0].reset();
				}
				alert(data);
			});
			*/

			$(".login").addClass('animated zoomOutDown');
			$(".login").hide();
			$(".welcomeMsg").html('Welcome !!').addClass('animated zoomInDown');

		
		}
	});
});








//HOLA AMOR n.n 





































