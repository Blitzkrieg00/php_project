<div class="container-fluid well well-lg page-header" >
	<h1 class="soc_title"><?php echo to_html(soc_link($soc["soc_name"]), "soc-title"); ?><small></small></h1>
	<div class="btn-toolbar">
		<hr>
		<?php
			echo "<a role=button href=\"soc.php?soc=".$soc["soc_name"]."&saction=";

			echo "</a>";
			// info
			echo "	<a role=button href=\"soc.php?soc=".$soc["soc_name"]."&view=info\" class=\"btn btn-default btn-sm\">
							<span class=\"glyphicon glyphicon-info-sign\"></span>
							About
						</a>";
		?>
	</div>
</div>
