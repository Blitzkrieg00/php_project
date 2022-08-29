<!-- Post Section -->
<?php

	$mod = am_mod($soc);
	echo to_html(post_full($post, $soc, $mod));

?>

<!-- Comment Section -->
<div class="panel panel-default well">
	<div class="panel-heading">
			<?php
				echo "<h3>";
					echo "Comments (".$post["comments"].")"."<br>";
				echo "</h3>";
			?>

	</div>
	<div class="panel-body well-lg">
		<?php

			if (count($comms) == 0)
				echo to_html(par("No comments yet."));
			else
				echo to_html(build_comment_tree($comms, $mod));

		?>
	</div>
</div>

<script>
	$( document ).ready(function(){
		$(".downvote-active").addClass("btn-danger");
		$(".upvote-active").addClass("btn-success");
		
		$(".post-upvote").click(function() {
			var hasVoted = $(this).hasClass("btn-success");
		    $.ajax({
			    url: "post_vote.php",
			    data: {
			        post_id: this.value,
			        vote: hasVoted ? "UNVOTE":"UP"
			    },
			    type: "POST",
			    dataType : "json",
			    context: this,
			    success: function( json ) {
			    	if (hasVoted)
			    	{
				    	$(this).removeClass("btn-success").addClass("btn-default");
			    	}
			    	else
			    	{
				    	$("#post-down-"+this.value).removeClass("btn-danger").addClass("btn-default");
				    	$(this).removeClass("btn-default").addClass("btn-success");
				    }
			    },
			    error: function( xhr, status, errorThrown ) {
			        alert( "Sorry, there was a problem!" );
			        console.log( "Error: " + errorThrown );
			        console.log( "Status: " + status );
			        console.dir( xhr );
			    }
			});
		});
		$(".post-downvote").click(function() {
			var hasVoted = $(this).hasClass("btn-danger");
		    $.ajax({
			    url: "post_vote.php",
			    data: {
			        post_id: this.value,
			        vote: hasVoted ? "UNVOTE":"DOWN"
			    },
			    type: "POST",
			    dataType : "json",
			    context: this,
			    success: function( json ) {
			    	if (hasVoted)
			    	{
						$(this).removeClass("btn-danger").addClass("btn-default");
			    	}
			    	else
			    	{
				    	$("#post-up-"+this.value).removeClass("btn-success").addClass("btn-default");
				    	$(this).removeClass("btn-default").addClass("btn-danger");
			    	}
			    },
			    error: function( xhr, status, errorThrown ) {
			        alert( "Sorry, there was a problem!" );
			        console.log( "Error: " + errorThrown );
			        console.log( "Status: " + status );
			        console.dir( xhr );
			    }
			});
		});
		$(".comm-upvote").click(function() {
			var hasVoted = $(this).hasClass("btn-success");
		    $.ajax({
			    url: "comm_vote.php",
			    data: {
			        comm_id: this.value,
			        vote: hasVoted ? "UNVOTE":"UP"
			    },
			    type: "POST",
			    dataType : "json",
			    context: this,
			    success: function( json ) {
			    	if (hasVoted)
			    	{
				    	$(this).removeClass("btn-success").addClass("btn-default");
			    	}
			    	else
			    	{
				    	$("#comm-down-"+this.value).removeClass("btn-danger").addClass("btn-default");
				    	$(this).removeClass("btn-default").addClass("btn-success");
				    }
			    },
			    error: function( xhr, status, errorThrown ) {
			        alert( "Sorry, there was a problem!" );
			        console.log( "Error: " + errorThrown );
			        console.log( "Status: " + status );
			        console.dir( xhr );
			    }
			});
		});
		$(".comm-downvote").click(function() {
			var hasVoted = $(this).hasClass("btn-danger");
		    $.ajax({
			    url: "comm_vote.php",
			    data: {
			        comm_id: this.value,
			        vote: hasVoted ? "UNVOTE":"DOWN"
			    },
			    type: "POST",
			    dataType : "json",
			    context: this,
			    success: function( json ) {
			    	if (hasVoted)
			    	{
				    	$(this).removeClass("btn-danger").addClass("btn-default");
			    	}
			    	else
			    	{
				    	$("#comm-up-"+this.value).removeClass("btn-success").addClass("btn-default");
				    	$(this).removeClass("btn-default").addClass("btn-danger");
			    	}
			    },
			    error: function( xhr, status, errorThrown ) {
			        alert( "Sorry, there was a problem!" );
			        console.log( "Error: " + errorThrown );
			        console.log( "Status: " + status );
			        console.dir( xhr );
			    }
			});
		});
		
		$(".comm-reply").click(function() {
			$("#parent-id").attr("value", $(this).attr("value"));
			$("#new-comm-heading").text("Reply");
		});

		$(".comm-del").click(function() {
			$("#del-comm-id").val($(this).attr("value"));
			$("#del-comm-title").val($.trim($("#comm-title-"+$(this).attr("value")).text())+" "+$("#comm-time-"+$(this).attr("value")).text());
			$("#del-comm-text").val($("#comm-text-"+$(this).attr("value")).text());
		});
		$(".comm-report").click(function() {
			$("#report-comm-id").val($(this).attr("value"));
			$("#report-comm-title").val($.trim($("#comm-title-"+$(this).attr("value")).text())+" "+$("#comm-time-"+$(this).attr("value")).text());
			$("#report-comm-text").val($("#comm-text-"+$(this).attr("value")).text());
		});
	});
</script>


<!-- post-sticky modal -->
<div id="sticky-post" class="modal fade">
	<div class="modal-dialog" role="form">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3 id="sticky-post-heading"><?php echo ($post["status"]=="STICKIED") ? "Unsticky":"Sticky"; ?> post</h3>
			</div>
			<form id="post_sticky_f" class="" method="POST" action="sticky_post.php" >
				<div class="modal-body">
					<div class="form-group">
						<input name="sticky_post_id" id="sticky-post-id" class="" hidden readonly value=<?php echo $post["post_id"]; ?> >
						<input name="soc_name" id="sticky-soc-name" class="" hidden readonly value=<?php echo $soc["soc_name"]; ?> >
						<input name="action" id="sticky-action" class="" hidden readonly value=<?php echo ($post["status"]=="STICKIED") ? "UNSTICKY":"STICKY";?> >
					</div>
					<div class="form-group">
						<strong><input name="sticky_post_title" id="sticky-post-title" class="form-control" value=<?php echo "\"".$post["title"]."\""; ?> disabled="">
					</div></strong>
					<div class="form-group">
						<textarea name="sticky_post_text" id="sticky-post-text" class="form-control" rows="4" value="" disabled=""><?php echo $post["text"]; ?></textarea>
					</div>
					<div class="form-group">
						<textarea name="sticky_post_reason" id="sticky-post-text" class="form-control" rows="2" placeholder=<?php echo "\"Reason for ".(($post["status"]=="STICKIED") ? "un":"" )."sticky-ing...\""; ?>></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<input class="btn btn-default" type="submit" value="Confirm" id="sticky-post-btn">
					<a href="#" class="btn" data-dismiss="modal">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
