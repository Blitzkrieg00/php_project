<?php

    // configuration
    require("../includes/config.php"); 
	
	verify_access();

	$subs = get_subbed_socs();
	$all_subs = get_all_socs();
	$feed = get_news_feed();
	
	render("home.php", ["title" => "Home", "subs" => $subs, "posts" => $feed,"all_subs" => $all_subs]);
  
?>