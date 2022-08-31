<?php

	require("../includes/config.php");

	if (!isset($_POST["soc"]))
		redirect("home.php");
	$soc=htmlspecialchars($_POST["soc"]);
	$text=htmlspecialchars($_POST["text"])
	if(make_soc($soc,$text) === false)
		apologize("Failed to create society: ".$soc);

	redirect("soc.php?soc=".$soc);

?>