<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title>Jeux</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/style.css" rel="stylesheet">

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/hammer.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    function loadcss(filename) {
        var file = document.createElement("link");
        file.setAttribute("rel", "stylesheet");
        file.setAttribute("type", "text/css");
        file.setAttribute("href", filename);
        document.head.appendChild(file);
    }
</script>
<header>
    <a href="/" class="logo">Grames</a>
    <a href="#" id="hamburger" class="hamburger"></a>
    <nav id="nav">
        <ul>
            <?php if(\App\Helper\App::getAuth()->isConnect()) : ?>
                <li><a href="#">Jeux</a>
                    <ul>
                        <li><a href="/js/2048">2048</a></li>
                        <li><a href="/js/snake">Snake</a></li>
                    </ul>
                </li>
            <?php endif; ?>
            <li><a href="#">HTML</a>
                <ul>
                    <li><a href="/html/google">API Google</a></li>
                    <li><a href="/html/dragdrop">Drag & Drop</a></li>
                    <li><a href="/html/webworker">Webworker</a></li>
                </ul>
            </li>
            <li><a href="#">CSS</a>
                <ul>
                    <li><a href="/css/translate">Translate</a></li>
                    <li><a href="/css/rotate">Rotate</a></li>
                    <li><a href="/css/bootstrap">Bootstrap</a></li>
                </ul>
            </li>
            <?php if(\App\Helper\App::getAuth()->isConnect()) : ?>
                <li><a href="/signout">Deconnexion</a></li>
            <?php else : ?>
                <li><a href="/signin">Connexion</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<div class="container">
    <?php if(isset($errors)) :?>
        <div class="alert alert-error">
            <p>Des erreurs ont été rencontrées : </p>
            <ul>
            <?php foreach($errors as $error) : ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
    <?php endif ?>
    <?php if(isset($success)) :?>
        <div class="alert alert-success">
            <b>Bravo ! </b>
            <p><?= $success; ?></p>
        </div>
    <?php endif ?>
    <?= $content; ?>
</div>


<!--<script src="/js/jquery-1.11.1.min.js"></script>-->
<script src="/js/default.js"></script>
</body>
</html>