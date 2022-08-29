<?php

    require("guest_soc_common.php");
	
	if (isset($_GET["pid"]))
	{		
		// fetch post
		$post = guest_get_post($_GET["pid"]);

		if (!$post || $post["status"] == "DELETED")
			apologize("Nothing here!");

		if ($post["soc_id"] != $soc["soc_id"])
			redirect("guest_spost.php?pid=".$_GET["pid"]."&soc=".get_society_by_id($post["soc_id"])["soc_name"]);

		// register post view
		//register_post_view($post["post_id"]);
		

		
		// fetch comments
		$comms = guest_get_comments($post);
		
		render_mult([	"guest_soc_common.php",
						"guest_post.php"
					],
					[	
						"title" => $post["title"]." - ".$soc["soc_name"],
						"post" => $post,
					    "soc" => $soc,
					    "status" => guest_soc_rel($soc),
						"psub" => guest_post_rel($post["post_id"]),
						"comms" => $comms
					]
				);
	}
	else
	{
		redirect("guest_soc.php?soc=".$soc["soc_name"]);
	}

?>