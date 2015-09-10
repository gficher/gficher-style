<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="icon" href="favicon.ico"/>
		<meta name="Author" content="gficher"/>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href='css/form.css' rel='stylesheet' type='text/css'>
		<link href='css/message.css' rel='stylesheet' type='text/css'>
		<link href='css/login.css' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<div id="content">
			<div id="box">
				<div id="logo"></div>
				<form name="form-login" method="post" action="">
					<input class="gs-ftext fuser" type="text" name="user" id="user" placeholder="Usuário">
					<input class="gs-ftext fpass" type="password" name="pass" id="pass" placeholder="Senha">
					<input class="gs-btn success" type="submit" name="button" id="button" value="Entrar">
				</form>
				<?php if (isset($_POST['button'])) { ?><div id="errorbox">Usuário ou senha incorreta!</div><?php } ?>
				<a id="forgotpass" href="#">Esqueci minha senha</a>
			</div>
		</div>
		<div id="fright">Desenvolvido por <a href="//gficher.tk" target="_blank">gficher</a></div>
	</body>
</html>