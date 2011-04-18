<?php
	if ( ! file_exists('include/config.php'))
	{
		header('location:include/install.php'));
	}
	header('location:quest_search.php');
?>