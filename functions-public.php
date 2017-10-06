<?php
function section($file, $conn) {
	
	include($file.'.php');
	if($file=='projects') {
		include('portfolio-modal.php');
	}
}
function spacer($var) { // $var is the value for the height
	include('spacer.php');
}

function quotes($conn) {
	$qry="select * from random_quote ORDER BY RAND() LIMIT 1";
	$result_info = $conn->query($qry);
	$row_info = $result_info->fetch_assoc();
	echo '<p class="lead text-center">"'.$row_info['quote'].'"<br>-'.$row_info['author']."</p>";
}

function information_details($info_section, $conn) {
	$qry="select * from information where info_section='".$info_section."'";
	$result_info = $conn->query($qry);
	$row_info = $result_info->fetch_assoc();
	echo $row_info['info_details'];
}

?>