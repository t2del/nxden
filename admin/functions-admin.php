<?php
function section_admin($file, $conn) {
	include($file.'.php');
	if($file=='projects') {
		include('portfolio-modal.php');
	}
}
?>