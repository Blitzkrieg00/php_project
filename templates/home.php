<script>
	function show_c() {
		var x = document.getElementById("show_comments");
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
			}
		}
</script>
<!-- news feed -->
    <div class="container profile__container">
        <div class="row">
				<?php 
					$hola=1;
					if (count($posts) == 0)
					{
						echo to_html(par("No posts yet."));
					}
					else
					{	
						foreach($posts as $p)
						{
							echo '<script>';
							echo 'function show_c',$p['post_id'],'() {';
							echo 'var x = document.getElementById("show_comments',$p['post_id'],'");';
							echo 'if (x.style.display === "none") {';
							echo 'x.style.display = "block";';
							echo '} else {';
							echo 'x.style.display = "none";';
							echo '}}';
							echo '</script>';
							//echo '<div class="container profile__container">';
        					//echo '<div class="row">';
            				echo '<div class="col-8">';
                			echo '<div class="card mb-4">';
                    		echo '<div class="card-header d-flex">';
                        	echo '<img src="',$p["avatar"],'"alt="profile" class="profile__img" style="width:80px;height:80px;" id="profile">';
                        	echo '<div class="card-title">';
                            echo '<h4>',$p['username'],'</h4>';
                            echo '<p>',$p['time'],'</p>';
                        	echo '</div>';
                    		echo '</div>';
                    		echo '<div class="card-body">';
                    		echo '<h4>';
							echo "<b>";
							echo $p["title"];
							echo "</b>";
							echo  "</h4>";
							echo "<h5>";
							echo  $p['text'];
							echo "</h5>";
                        	echo '<img src="',$_SESSION["user"]["avatar"],'" alt="sample" class="img-fluid">';
                    		echo '</div>';
                    		echo '<div class="card-footer">';
                        	echo '<div class="viewerSession">';
                            echo '<div class="viewer">';
                            echo '<p class="fs-5 me-5">36 views</p>';
                            //echo '<p class="fs-5" onclick="show_c">',$p['comments'],' comments</p>';
                            echo '<button type="button" type="submit" class="btn btn-dark" onclick="show_c',$p['post_id'],'()">',  $p['comments'],' &nbspcomments&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>';
                            echo '</div>';
                            echo '<div class="like">';
                            echo '<i data-feather="heart"></i>';
                            echo '</div>';
                        	echo '</div>';
                        	$comms = get_comments($p);
                        	echo '<div id="show_comments',$p['post_id'],'" style="display:None;">';
                        	foreach ($comms as $c) {                        	
                        	echo '   <h4> &nbsp'.$c["username"],'</h4>';
                            echo '<div class="commentContainer d-flex">';
                            echo '<img src="',$c["avatar"],'" alt="profile" class="img-fluid cmt__profile" id="profile">';
                            echo '<p>&nbsp;&nbsp;&nbsp;</p>';
                            echo '<div class="card"><div class="card-body"><h5>',$c['text'],'</h5></div></div>';
                            echo '</div>';
                            echo '<br>';
                        	}
                         	echo '</div>';            
                         	echo '<form action="new_comm.php" method="POST">';           	
                        	echo '<div class="mt-3 mb-3 commentSession">';
                            echo '<p>Comment</p>';
                            echo '<div class="commentContainer d-flex">';
                            echo '<img src="',$_SESSION["user"]["avatar"],'" alt="profile" class="img-fluid cmt__profile" id="profile">';
                            echo '<input type="hidden" id="pid" name="pid" value="',$p['post_id'],'">';
                            $parent_id = $p["soc_id"];
                            echo '<input type="hidden" id="parent_id" name="parent_id" value="',$p['soc_id'],'">';
                            echo '<input type="text" class="ms-5 form-control" name="text" placeholder="Comment Here">';
                            echo '<button type="submit" class="btn btn-dark">  Submit  </button>';
                            echo '</div>';
                        	echo '</div>';
                            echo '</form>';
                    		echo '</div>';
                			echo '</div>';
            				echo '</div>';
                        	/*echo '<img src="',$p["avatar"],'"alt="profile" class="profile__img" style="width:80px">';
                        	echo '<div class="card-title">';
                            echo  '<h4>',$p['username'],'</h4>';
                            echo '<p>Aug 19, 2022</p>';
                        	echo '</div>';
                    		echo '</div>';
							echo "<div class='card-body'>";
							echo "<b>";
							echo $p["title"];
							echo "</b>";
							echo  "<p>";
							echo  $p['text'];
							echo "</p>";
							//echo to_html(post_summary($p, $p["society"], true));
							echo "</div>";
							echo "<hr>";*/
							
							if ($hola==1){
								echo '<div class="col-4 suggested__lists">';
								echo '<h2 style="color:white;">subcribed society</h2>';
            					echo '<div class="card">';
            					echo '<div class="card-body">';

								foreach ($subs as $sub) {
								echo '<div class="suggestedContainer d-flex">';
            					echo '<img src="../images/profile.png" alt="profile" class=" me-2 mt-2 sug__profile">';
            					echo '<div class="ms-3 sug__text">';
            					echo '<a href="soc.php?soc=',$sub['society'],'" >';
            					echo '<p>',$sub['society'],'</p>';
            					echo '</a>';
            					echo '<p>Aug 20, 2022</p>';
            					echo '</div>';
            					echo '</div>';
            					echo '<hr>';
            					$hola=0;
            				}
            					echo '<a data-toggle="modal" data-target="#new-soc" class="btn btn-primary btn-large form-control" >Create a Society</a>';
            					echo '</div>';
            					echo '</div>';
            					echo '</div>';
							}
						}
					}
				?>
		<?php

			//$t = make_table($subs, ["society"], "table", "sub_socs", [], [0]);
			//$t["children"][0]["attribs"]["hidden"] = ""; // hide table header
			
			//$table = div(div(par("Subscribed societies"), "panel-heading"), "panel panel-primary");
			//$table["children"][] = $t;
			//echo to_html($table);
			foreach ($subs as $sub) {
		    //echo '<div class="col-4 suggested__lists">';
            //echo '<div class="card">';
            //echo '<div class="card-body">';
			/*
            echo '<div class="suggestedContainer d-flex">';
            echo '<img src="../images/profile.png" alt="profile" class=" me-2 mt-2 sug__profile">';
            echo '<div class="ms-3 sug__text">';
            echo '<p>',$sub["society"],'</p>';
            echo '<p>Aug 20, 2022</p>';
            echo '</div>';
            echo '</div>';
            echo '<hr>';
            */
        }
		?>
		

		                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- new-society modal -->
<div id="new-soc" class="modal fade">
	<div class="modal-dialog" role="form">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Create a new Society</h3>
			</div>
			<form id="new-soc-form" class="" method="POST" action="new_soc.php" >
				<div class="modal-body">
					<div class="form-group">
						<input name="soc" class="form-control" type="text" placeholder="Society name">
					</div>
					<div class="form-group">
						<textarea name="text" class="form-control" rows="4" placeholder="Text (Optional)"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<input class="btn btn-default" type="submit" value="Submit" id="new_post">
					<a href="#" class="btn" data-dismiss="modal">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>