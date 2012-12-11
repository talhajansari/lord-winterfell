<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">	
		<title>CV - Ansari</title>
	</head>
	<body>
		<h1>talha ansari.</h1>

		<table class="center">
			<tr>
				<td> I'am not comfortable giving non-human users access to my CV. Please enter the text below accurately.<br> </td>
			</tr>
			<tr align="center">
				<td>
					<form method="POST" action="verify.php" class="center">
						<?php
							require_once('recaptchalib.php');
							$publickey = "6Lf8DdoSAAAAAAS67FXb9-kBtmxdJIa3gKTIpRAU";
							echo recaptcha_get_html($publickey);
						?>
						<input type="submit" />
					</form>
				</td>
			</tr>
		</table>
	</body>

</html>






