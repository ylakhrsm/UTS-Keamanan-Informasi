<?php
session_start();
if (isset($_POST['hello']) && $_POST['hello'] === $_SESSION['hello']) {
echo "succeed, ".$_POST["data"];
}
else{
	echo "fail";
}
?>