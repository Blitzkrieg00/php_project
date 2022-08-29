<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Myanmar Independence</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="../app.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
<style type="text/css">
#profileDisplay { display: block; height: 60px; width: 60px; margin: 0px auto; border-radius: 50%; }
.img-placeholder {
  width: 60px;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height: 60px;
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
</head>

<body>

    <nav class="navbar fixed-top popContainer" style="cursor: pointer">
        <img src="../images/logo.svg" alt="logo" class="profile__logo text-center">
    </nav>

    <div class="firstContainer">
        <div class="mainContainer d-flex justify-content-center align-items-center flex-column">
            <img src="../images/maintxt.svg" alt="main" class="mainImg w-75 h-100 ">
        </div>
        <div class="subTitle">
            <h3 class="fs-1 ">On our Website</h3>
            <img src="../images/arrow.svg" class="arrowImg" alt="arrow">
        </div>
    </div>
    <div class="secondContainer text-center">
        <h1 class="fs-1 secondContainerTxt">Famous <br> Political figures</h1>
        <h1 class="fs-1 secondContainerTxt subtxt">During cold war era</h1>
        <img src="../images/downarrow.svg" alt="downarrow" class="downImg">
    </div>

    <div class="container-fluid w-100 h-100" id="loginContainer">
        <div class="m-auto w-75 h-75">
            <div class="m-xxl-5">
                <div class="row">
                    <a href="../Profile/post.html"
                        class="rounded-start col-sm-6 p-xxl-5 first d-flex justify-content-center align-items-center flex-column">
                        <img src="../images/logo.svg" alt="logo" class="img-fluid w-50 h-50">
                        <img src="../images/text.svg" alt="logo" class="img-fluid w-50 h-50">
                    </a>
                    <div class="col-sm-6 p-xxl-5 second rounded-end">
                        <h4 class="text-center">Log In Here</h4>
                        <form action="../php/login.php" method="post">
                            <div class="my-3">
                                <label for="name" class="form-label">User Name or
                                    Email</label>
                                <input type="text" class="form-control" id="name" name="username">
                            </div>
                            <div class="my-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <p class="text-center fs-6">If you don't have an account, please <a
                                    class="popRegisterContainer" style="cursor: pointer">create one</a>.</p>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-success rounded-pill px-xxl-5">Login</button>
                            </div>
                            <div class="text-center mt-4"><button onclick="window.location = '<?php require("../includes/oauth_config.php");  echo $login_url; ?>'" type="button" class="btn btn-danger">Login with Google</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid w-100 h-100" id="registerContainer">
        <div class="m-auto w-75 h-75">
            <div class="shadow-none m-xxl-5">
                <div class="row">
                    <a href="../Profile/post.html" class="rounded-start col-sm-6 p-xxl-5 first d-flex justify-content-center align-items-center
                        flex-column">
                        <img src="../images/logo.svg" alt="logo" class="img-fluid w-50 h-50">
                        <img src="../images/text.svg" alt="logo" class="img-fluid w-50 h-50">
                    </a>
                    <div class="rounded-end col-sm-6 p-xxl-5 second">
                        <h4 class="text-center">Register Here</h4>
                        <form  action="../php/register.php" method="post" enctype="multipart/form-data">
                                      <div class="form-group text-center" style="position: relative;" >
                                            <span class="img-div">
                                            <div class="text-center img-placeholder"  onClick="triggerClick()">
                                            </div>
                                            <img src="../images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
                                            </span>
                                            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
                                    </div>
          
                            <div class="my-3">
                                <label for="name" class="form-label">User Name </label>
                                <input type="text" class="form-control" id="name" name="username">
                            </div>
                            <div class="my-3">
                                <label for="name" class="form-label">Email</label>
                                <input type="text" class="form-control" id="name" name="email">
                            </div>
                            <div class="my-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="my-3">
                                <label for="passwod" class="form-label">Comfirm Password</label>
                                <input type="password" class="form-control" id="confirmation" name="confirmation">
                            </div>
                            <p class="text-center fs-6">Already have an account, please <a class="loginPop"
                                    style="cursor: pointer">login</a>.</p>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-success rounded-pill px-xxl-5">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Script -->
<script src="../app.js"></script>

</html>