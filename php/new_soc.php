<?php

	require("../includes/config.php");

	if (!isset($_POST["soc"]))
		redirect("home.php");

	if(make_soc($_POST["soc"],$_POST["text"]) === false)
		apologize("Failed to create society: ".$_POST["soc"]);

	redirect("soc.php?soc=".$_POST["soc"]);

?>