<!DOCTYPE html>
<html>
<head>
	<title>Ajax POST request with JQuery and PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<style type="text/css">
		body {
			font-family: calibri;
		}
		.box {
			margin-bottom: 10px;
		}
		.box label {
			display: inline-block;
			width: 80px;
			text-align: right;
			margin-right: 10px;
		}
		.box input, .box textarea {
			border-radius: 3px;
			border: 1px solid #ddd;
			padding: 5px 10px;
		}
		.btn-submit {
			margin-left: 90px;
		}
	</style>
</head>
<body>
	<h2>Ajax POST request with JQuery and PHP - <a href="https://www.cluemediator.com" target="_blank">Clue Mediator</a></h2>
	<form>
		<div class="box">
			<label>First Name:</label><input type="text" name="firstName" id="firstName" />
		</div>
		<div class="box">
			<label>Last Name:</label><input type="text" name="lastName" id="lastName" />
		</div>
		<div class="box">
			<label>Email:</label><input type="email" name="email" id="email" />
		</div>
		<div class="box">
			<label>Message:</label><textarea type="text" name="message" id="message"></textarea>
		</div>
		<input id="submit" type="button" class="btn-submit" value="Submit" />
	</form>
	<script>
		$(document).ready(function() {

			$("#submit").click(function() {

				var firstName = $("#firstName").val();
				var lastName = $("#lastName").val();
				var email = $("#email").val();
				var message = $("#message").val();

				if(firstName==''||lastName==''||email==''||message=='') {
					alert("Please fill all fields.");
					return false;
				}

				$.ajax({
					type: "POST",
					url: "submission.php",
					data: {
						firstName: firstName,
						lastName: lastName,
						email: email,
						message: message
					},
					cache: false,
					success: function(data) {
						alert(data);
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});
				
			});

		});
	</script>
</body>
</html>
