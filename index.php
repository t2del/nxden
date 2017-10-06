<?php
if(include('confg.php')) {
	section('header', $conn); // important do not remove
	section('home', $conn);
	section('about', $conn);
	section('services', $conn);
	section('projects', $conn);
	section('contact', $conn); //  either contact or call-to-action
	spacer(10); // 40 or any value is the height of spacer in px
	include('footer.php'); // important do not remove
}	
?>