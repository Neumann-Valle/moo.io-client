<!DOCTYPE html>
<html lang="en_US" xml:lang="en_US" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="http://localhost/socket.io/socket.io.js"></script>
<script type="text/javascript">
	var socket = io( 'http://localhost:8080');
	  socket.on('connect', function(){
	    console.log('conected');
	  });
</script>
</head>
<body>
</body>
</html>