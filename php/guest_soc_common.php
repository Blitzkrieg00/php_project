<?php

    // configuration
    require("../includes/config.php"); 
	
	if (!isset($_GET["soc"])) 		
		redirect("home.php");

	// assoc array containing name, creator, date created, and description 
	$soc = get_society($_GET["soc"]);
	
	if (!$soc)
	{
		apologize("Nothing here!");
	}

	//log_soc_activity($soc["soc_id"]);

	$title = $soc["soc_name"];
	$status = "mmk";
	


?>