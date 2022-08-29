<?php

    require("guest_soc_common.php");


	// fetch posts
	$posts = guest_get_posts($soc, isset($_GET["page"]) ? $_GET["page"]:0, 10);

	render_mult([	
					"guest_soc_common.php", 
					"guest_soc_front.php"
				], 
				[
					"title"  => $soc["soc_name"],
					"posts"  => $posts,
					"soc"    => $soc,
					"status" => $status
				]
				);

?>