<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>
	<title>Title</title>
</head>
<body>
<script>
	var socket = io.connect("http://localhost:3001");

	console.log("message");
	
	socket.on("new_order",function(data){
		console.log(data);
	})
</script>
</body>
</html>