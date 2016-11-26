<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
    <?php
	$dbc = mysqli_connect('localhost','root','Rooroo12', 'elvis_store')
	or die('Error query database 1'); 
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	
	$query = "INSERT INTO email_list(first_name, last_name," .
	"email) " .
	"VALUES ('$first_name','$last_name' , '$email')";
	
	
	$result = mysqli_query($dbc,$query)
		or die('Error query database 2');
	
	mysqli_close($dbc);
	
	echo 'Customer Add Puto'
?>
    
</body>
</html>