<?php

    // configuration
    require("../includes/config.php"); 
    require("../includes/oauth_config.php"); 
    function append_string ($str1, $str2) {
      
    // Using Concatenation assignment
    // operator (.=)
    $str1 .=$str2;
      
    // Returning the result 
    return $str1;
    }
  
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))		apologize("You must provide your username.");
        if (empty($_POST["password"]))		apologize("You must provide your password.");
		
        // if we found user, check password
        if ($user = get_user($_POST["username"]))
        {
			if ($user["failed_logins"] >= 3)
				apologize("account locked");

			log_attempt(	$user, 
							$_SERVER["REMOTE_ADDR"], 
							$success = password_verify($_POST["password"], $user["password"])
						);

			if ($success)
			{			
				// remember that the user is now logged in
				session_start();
				$_SESSION["user"] = $user;

				// redirect to homepage
				redirect("home.php");
			}
        }
        // else apologize
        apologize("Invalid username and/or password.");
    }
    else if (isset($_GET['code'])){
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
        // get data from google
        $oAuth = new Google_Service_Oauth2($gClient);
        $userData = $oAuth->userinfo_v2_me->get();
        $username = append_string($userData['familyName'],$userData['givenName']);
        if(get_user($username)){
            $user = get_user($username);
            session_start();
            $_SESSION["user"] = $user;
            redirect("home.php");
        }
        if (make_user($userData['picture'],$userData['email'],$username) === false)
            apologize("Username already exists.");    
        if (empty($error)){
            $user = get_user($username);
            session_start();
            $_SESSION["user"] = $user;
            redirect("home.php");
        }   
        else {
            redirect("login.php");
        }
        
    }
    else
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }


?>
