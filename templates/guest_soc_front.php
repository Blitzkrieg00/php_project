

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