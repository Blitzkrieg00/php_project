<?php

    // configuration
    require("../includes/config.php"); 
	
	function hola_access()
	{
		session_start();
		if (!isset($_SESSION["user"]))
		{
			$id=$_GET["soc"];
			redirect("guest_soc.php?soc=$id");
		}
	}
	hola_access();
	if (!isset($_GET["soc"])) 		
		redirect("home.php");

	// assoc array containing name, creator, date created, and description 
	$soc = get_society($_GET["soc"]);
	
	if (!$soc)
	{
		apologize("Nothing here!");
	}

	log_soc_activity($soc["soc_id"]);

	$title = $soc["soc_name"];
	$status = soc_rel($soc);

	if (isset($_GET["saction"]))
	{
		if (strcasecmp($_GET["saction"], "sub") == 0 && !$status["sub"])
			sub_soc($soc);
		elseif (strcasecmp($_GET["saction"], "unsub") == 0 && $status["sub"])
			unsub_soc($soc);

		$status = soc_rel($soc);
	}	

?>