<?php

    require("../includes/config.php");
    session_start();

    // sanity checks
	if (empty($_POST['text']))		apologize("Cannot post empty comment.");
	if (empty($_POST["pid"]))		apologize("Post-id missing.");

	// make post
	if (make_comment(get_post($_POST["pid"]), $_POST["text"], !empty($_POST["parent_id"]) ? $_POST["parent_id"]:null) === false){
		apologize("Failed to submt comment.");
	}

	redirect("/php/home.php");

?>