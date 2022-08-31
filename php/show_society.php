<?php

    // configuration
    require("../includes/config.php"); 
	


	$subs = get_all_socs();
	
	render("show_society.php", ["title" => "Show Societies", "subs" => $subs]);
  
?>