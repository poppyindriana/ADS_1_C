<?php
echo form_open('auth/login');
?>
<html>
<head><title>LOG IN USER</title>
    <link href = "<?php echo base_url(); ?>assets/css/Css_code.css" rel="stylesheet" type = "text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body bgcolor="#8e24aa" >
	<div style="text-align: center">
		<div class="boxLogin" style="font-size: 30; color:#757575; ">
			<br><br><b>LOGIN</b><br><br>
		<form>
			<div>
				<input class="boxInput" type="text" name="username" placeholder="username" >
			</div>
			<div>
				<input class="boxInput" type="password" name="password" placeholder="password">
			</div>
			<div>
				<button class="boxButton" type="submit" name="submit">Login</button>
			</div>
		</form>
		<br>
		<a href="/CI/" style="text-decoration: none; font-size: 12;">Back</a>
		</div>
		
			
			
	</div>
</body>
</html>