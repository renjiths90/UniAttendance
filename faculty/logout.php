<?php
	session_start();
	session_unset('faculty_id');
	header('location:index.php');