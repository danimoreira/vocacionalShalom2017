<?php 
	require_once("inc/config.php"); 
	require_once("inc/funcoes.php");

	if (isset($_GET["url"])) {
		$url = $_GET["url"];
		urlamigavel($url);
	} else {
		require_once("html/home.php");
	}
			

?>