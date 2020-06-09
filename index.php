<?php

include('config.php');
if($user == null) { echo '<script>window.location.href="/install.php";</script>';
} else {
	echo "Connected";
}
	
?>