<?php 
    include "koneksi.php";
    session_start();
    if(isset($_SESSION['level'])){
    	if (isset($_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9'])) {
    		if ($_SESSION['level'] == "admin") {
    			header("Location: ../index.php");
	    	}else {
	    		header("Location: ../index.php");
	    	}
    	}
    }
?>
<?php 
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	$login = @$_POST['login'];
	
	$sql = "SELECT * from user";
	$query = $mysql->query($sql);
	if (isset($login)) {
			while($user = mysqli_fetch_array($query)){
			if ($user['username']==$username && $user['password']==md5('$password')) {
					$_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9'] = $username;
					// header("Location: ../index.php");
			}
			else{
				// header("Location: logindulu.php");
			}
		}
		echo $username;
		echo md5($password);
	}
?>
