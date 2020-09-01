<?php
session_start();

if(isset($_SESSOIN['email'])){
	session_destroy();
	echo "<script> location.href='emplogin.html'</script>";
}

?>