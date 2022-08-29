	<div class="col-md-2 container-fluid">
		<?php

			$t = make_table($subs, ["society"], "table", "sub_socs", [], [0]);
			$t["children"][0]["attribs"]["hidden"] = ""; // hide table header
			
			$table = div(div(par("societies"), "panel-heading"), "panel panel-primary");
			$table["children"][] = $t;
			echo to_html($table);

		?>
	</div>