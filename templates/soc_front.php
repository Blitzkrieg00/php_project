

<!-- new post modal -->
<div>
	<div id="new-post" class="modal fade">
		<div class="modal-dialog" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close" data-dismiss="modal">×</a>
					<h3>Submit a new post</h3>
				</div>
				<form id="postf" class="" method="post" action=<?php echo "\"new_post.php?soc=".$soc["soc_name"]."\"";?> enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-group">
							<input name="title" class="form-control" type="text" placeholder="Title">
						</div>
						<div class="form-group">
							<textarea name="text" class="form-control" rows="4" placeholder="Text (Optional)"></textarea>
						</div>
						<div class="form-group">
							<h3>upload pic</h3>
							<input type="file" name="fileToUpload" id="fileToUpload">
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
	<?php
		if ($soc["status"]!="LOCKED" && !$status["banned"])
			echo '<p><a data-toggle="modal" data-target="#new-post" class="btn btn-primary btn-large">New Post</a></p>';
	?>
</div>

<!-- posts -->
<div class="panel panel-default">
	<div class="panel-heading">Posts</div>
	<div class="list-group panel-body">
		<?php 
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
            				echo '<div class="col-16">';
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
                        	echo '<img src="',$p["img"],'" alt="sample" class="img-fluid">';
                    		echo '</div>';
                    		echo '<div class="card-footer">';
                        	echo '<div class="viewerSession">';
                            echo '<div class="viewer">';
                            echo '<p class="fs-5 me-5">36 views</p>';
                            //echo '<p class="fs-5" onclick="show_c">',$p['comments'],' comments</p>';
                            echo '<button type="button" type="submit" class="btn btn-dark" onclick="show_c',$p['post_id'],'()">',  $p['comments'],' &nbspcomments</button>';
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
							}
						}
					
		?>
	</div>
</div>