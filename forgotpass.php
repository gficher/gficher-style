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
                            <span class="gs-addon icon fa fa-envelope"></span>
                            <input class="gs-ftext medium" type="text" name="email" id="email" placeholder="Email" title="Email" required>
                        </div>
                    </label>
                    <input class="gs-btn success" type="submit" name="button" id="button" value="Resetar senha">
                </form>
                <?php if (isset($_POST['button'])) { ?><div id="errorbox">Um email será enviado se essa conta existir</div><?php } ?>
                <a class="gs-url" href="login.php">Voltar</a>
            </div>
        </div>
        <div id="fright">Desenvolvido por <a href="//gficher.tk" target="_blank">gficher</a></div>
    </body>
</html>