<?php

    require("../includes/config.php");
    session_start();

    // sanity checks
	if (empty($_POST['text']))		apologize("Cannot post empty comment.");
	if (empty($_POST["pid"]))		apologize("Post-id missing.");

	// make post
	$pid = htmlspecialchars($_POST["pid"]);
	$text = htmlspecialchars($_POST["text"]);
	if (make_comment(get_post($pid), $text, !empty($_POST["parent_id"]) ? $_POST["parent_id"]:null) === false){
		apologize("Failed to submt comment.");
	}

	redirect("/php/home.php#".$pid);

?>