<?php
$host= gethostname();
$serverip=$_SERVER['HTTP_HOST'];
$dirc=$_SERVER['REQUEST_URI'];
$serverport=$_SERVER['SERVER_PORT'];
$isIP = (bool)ip2long($serverip);
$serveripa=parse_url($serverip.$dirc);
$upath=$serveripa['path'];
if(isset($_GET['msg']))
{
 echo '<script type="text/javascript">'; 
echo 'alert("'.$_GET['msg'].'");';
echo '</script>';
}
$play="playlist.m3u";
$login="logincred.php";
$ipw="ip.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Generate Playlist</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php

if (file_exists($login)) {?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="generate.php" method="GET" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Generate Playlist
					</span>


					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Enter IP address of your device with PORT or Domain (eg. 192.168.0.2:8080 or abc.com)
						</span>
						
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							
						</span>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "IP/Domain is required">
						<input class="input100" type="text" name="ipadd" value="<?php 
						
						if (file_exists($ipw))
						{
							include $ipw;
							echo $ip;
						}
						else
						{
							echo "$serverip";
							if($isIP)
							{
								echo ":$serverport";
							}
						}

						?>" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Generate Playlist
						</button>
					</div>

					
				</form>

				<?php
					if (file_exists($play)) 
					{
					?>
						<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" onclick="document.location='playlist.m3u'">
							Download Playlist
						</button>
					</div>
					<div class="container-login100-form-btn m-t-17">
					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="hidden" value="<?php 
						
						if (file_exists($ipw))
						{
							include $ipw;
							echo $ip;
							echo "/playlist.m3u";
						}
						else
						{
							echo "$serverip";
							if($isIP)
							{
								echo ":$serverport";
							}
							echo "/playlist.m3u";
						}

						?>" name="copy_url" id="copy_url""  >
						<span class="focus-input100"></span>
					</div>
						<button class="login100-form-btn" onclick="myFunction()">
							Copy Playlist URL
						</button>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" onclick="document.location='livetv.php'">
							Play On Browser
						</button>
					</div>
					<?php
					}
				?>
				<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" onclick="document.location='logout.php'">
							Logout
						</button>
					</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<?php
		}
		else
		{
	?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="account.php" method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Login to JIOTV
					</span>
					<div class="p-t-31 p-b-9">
						
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
						
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							
						</span>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="text" name="email"  >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Password
						</span>
						<a href="https://www.jio.com/selfcare/signup/forgot-password" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							
						</span>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass"  >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					
				</form>
				<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" onclick="document.location='getsso.php'">
							Try Autologin
						</button>
				</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<?php
		}
	?>
	<script>
		function myFunction() 
		{
			var copyText = document.getElementById("copy_url");
			copyText.type = 'text';
			copyText.select();
			document.execCommand("copy");
			copyText.type = 'hidden';
		}
	</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
