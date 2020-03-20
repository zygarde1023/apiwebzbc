<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="414340021624-iuucd1961p5mli211o1ovo3v8mdftk6b.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<title>Exam</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="login-form">
        <h2 class="text-center">Sign in</h2>
		<br>
        <div class="text-center social-btn">
            <div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=2704847169627884&autoLogAppEvents=1">
			</script>
			<?php
			
			require 'vendor/autoload.php';
			
			$fb = new Facebook\Facebook([
			 'app_id' => '2704847169627884',
			 'app_secret' => 'e71a05412c40a782a96e71782a4280d8',
			 'default_graph_version' => 'v2.10',
			]);
			$helper = $fb->getRedirectLoginHelper();
			$permissions = ['email']; // optional
			
			try {
				
			if (isset($_SESSION['facebook_access_token'])) {
				header('Location: https://apiwebzbc.herokuapp.com/');
			
			} else {
			  $accessToken = $helper->getAccessToken();
			  $oAuth2Client = $fb->getOAuth2Client();
			}
			} catch(Facebook\Exceptions\facebookResponseException $e) {
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage();
			  exit;
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			  exit;
			}
			if (isset($accessToken)) {
				header('Location: : ');
				
			if (isset($_SESSION['facebook_access_token'])) {
				
			$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
			} else {
			// getting short-lived access token
			$_SESSION['facebook_access_token'] = (string) $accessToken;
			  // OAuth 2.0 client handler
			$oAuth2Client = $fb->getOAuth2Client();
			// Exchanges a short-lived access token for a long-lived one
			$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
			$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
			// setting default access token to be used in script
			$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
			}
			// redirect the user to the profile page if it has "code" GET variable
			if (isset($_GET['code'])) {
			header('Location: https://apiwebzbc.herokuapp.com/');
			}
			// getting basic info about user
			try {
			header('Location: https://apiwebzbc.herokuapp.com/');
			$profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
			$requestPicture = $fb->get('/me/picture?redirect=false&height=200'); //getting user picture
			$picture = $requestPicture->getGraphUser();
			$profile = $profile_request->getGraphUser();
			$fbid = $profile->getProperty('id');           // To Get Facebook ID
			$fbfullname = $profile->getProperty('name');   // To Get Facebook full name
			$fbemail = $profile->getProperty('email');    //  To Get Facebook email
			$fbpic = "<img src='".$picture['url']."' class='img-rounded'/>";
			# save the user nformation in session variable
			$_SESSION['fb_id'] = $fbid.'</br>';
			$_SESSION['fb_name'] = $fbfullname.'</br>';
			$_SESSION['fb_email'] = $fbemail.'</br>';
			$_SESSION['fb_pic'] = $fbpic.'</br>';
			} catch(Facebook\Exceptions\FacebookResponseException $e) {
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage();
			// redirecting user back to app login page
			header("Location: ./");
			exit;
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
			}
			} else {
			// replace your website URL same as added in the developers.Facebook.com/apps e.g. if you used http instead of https and you used            
			$loginUrl = $helper->getLoginUrl('https://apiwebzbc.herokuapp.com/', $permissions);
			echo '<a href="' . $loginUrl . '"><div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-layout="default" data-auto-logout-link="true" data-use-continue-as="true"></div></a>';
			}
			?>
			<br>
			<br>
			<div id="my-signin2" data-onsuccess="onSuccess" data-redirecturi="https://iceinventory.000webhostapp.com/?p=admin"></div>
			<script>
    function onSuccess(googleUser) {
        window.location="https://apiwebzbc.herokuapp.com/";
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 230,
        'height': 40,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
        </div>
</div>
</body>
</html>         