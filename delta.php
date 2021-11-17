<?php
session_start();

$_SESSION['hello'] = base64_encode(openssl_random_pseudo_bytes(32));

?>
<html>
<head>
<title>Form UTS Yulia Kharisma</title>
</head>
<body>
<form action="charlie.php" method="Post">
<input type="hidden" name="hello" value="<?=$_SESSION['hello']?>" />
<input type="text" name="data" />
<input type="submit" name="sub" value="Go" />
</form>
</body>
</html>