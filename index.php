<?php
if(include('confg.php')) {
	section('header', $conn); // important do not remove
	
	section('about', $conn);
	
	section('projects', $conn);
	
	include('footer.php'); // important do not remove
}	
?>