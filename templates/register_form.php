      <style type="text/css">
    .form-div { margin-top: 100px; border: 1px solid #e0e0e0; }
#profileDisplay { display: block; height: 100px; width: 100px; margin: 0px auto; border-radius: 50%; }
.img-placeholder {
  width: 100px;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height: 100px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 40%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}

  </style>
  <script type="text/javascript">
    function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>
<div class="container" style="width:300px">

<form class="form-signin"  action="register.php" method="post" enctype="multipart/form-data">
	<h2 class="form-signin-heading">Sign up</h2>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h5>Update image</h5>
              </div>
              <img src="../images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Profile Image</label>
          </div>
          </div>
          
	<div class="form-group">
		<input autofocus required class="form-control" name="username" placeholder="Username" type="text"/>
	</div>

    <div class="form-group">
    	<input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="email">
    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     </div>
	
	<div class="form-group">
		<input required class="form-control" name="password" placeholder="Password" type="password"/>
	</div>
	
	<div class="form-group">
		<input required class="form-control" name="confirmation" placeholder="Confirm Password" type="password"/>
	</div>
	
	<div class="form-group">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
	</div>
</form>
<div>
    or <a href="login.php">log in</a>
</div>
</div>