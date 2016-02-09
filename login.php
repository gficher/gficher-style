<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="icon" href="favicon.ico"/>
		<meta name="Author" content="gficher"/>
		<meta name="description" content="gficher's style"/>
		<meta name="keywords" content="gficher,style"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href='css/form.css' rel='stylesheet' type='text/css'>
		<link href='css/login.css' rel='stylesheet' type='text/css'>
		<link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<div id="content">
			<div id="box">
				<div id="logo"></div>
				<form name="form-login" method="post" action="">
					<label class="gs-flabel">
						<div class="gs-prefix-group">
							<span class="gs-addon icon fa fa-user"></span>
                            <input class="gs-ftext medium" type="text" name="user" id="user" placeholder="Usuário" title="Usuário" autofocus required>
						</div>
					</label>
					<label class="gs-flabel">
						<div class="gs-prefix-group">
							<span class="gs-addon icon fa fa-lock"></span>
                            <input class="gs-ftext medium" type="password" name="pass" id="pass" placeholder="Senha" title="Senha" autofocus required>
						</div>
					</label>
					
					<input class="gs-btn success" type="submit" name="button" id="button" value="Entrar">
				</form>
                <?php if (isset($_POST['button'])) { ?><div id="errorbox">Usuário ou senha incorreta!</div><?php } ?>
                <a class="gs-url" href="register.php">Criar conta</a>
                <a class="gs-url" href="forgotpass.php">Esqueci minha senha</a>
			</div>
		</div>
		<div id="fright">Desenvolvido por <a href="//gficher.tk" target="_blank">gficher</a></div>
	</body>
</html>