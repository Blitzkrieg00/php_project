<?php

    // configuration
    require("../includes/config.php");
    function get_unique_file_name($path, $filename) {
        $file_parts = explode(".", $filename);
        $ext = array_pop($file_parts);
        $name = implode(".", $file_parts);

        $i = 1;
        while (file_exists($path . $filename)) {
            $filename = $name . '-' . ($i++) . '.' . $ext;
        }
        return $filename;
    }

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["username"]))						apologize("You must provide a username.");
        if (empty($_POST["email"]))                         apologize("You must provide a email.");
        if (empty($_POST["password"]))						apologize("You must provide a password.");
        if (empty($_POST["confirmation"]))					apologize("You need to confirm your password by re-typing it.");
        if ($_POST["password"] != $_POST["confirmation"])	apologize("Password and confirmation do not match.");
		$target_dir = "../images/";
        $target_file = $target_dir . get_unique_file_name($target_dir, basename($_FILES['profileImage']['name']));;
        if (empty($error)) {
            move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file);
       }
		// create new user account
		if (make_user( $target_file, $_POST["email"],$_POST["username"],$_POST["password"]) === false)
			apologize("Username already exists.");		
		
		redirect("login.php");
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }
    
?>
