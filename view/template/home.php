<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Jeux</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/style.css" rel="stylesheet">

</head>
<body>

<header>
    <a href="/" class="logo">Grames</a>
    <a href="#" id="hamburger" class="hamburger"></a>
    <nav id="nav">
        <ul>
            <li><a href="#">HTML</a>
                <ul>
                    <li><a href="/html/google">API Google</a></li>
                    <li><a href="/html/dragdrop">Drag & Drop</a></li>
                    <li><a href="/html/webworker">Webworker</a></li>
                </ul>
            </li>
            <li><a href="#">CSS</a>
                <ul>
                    <li><a href="/css/webkit">Webkit</a></li>
                    <li><a href="/css/translate">Translate</a></li>
                    <li><a href="/css/rotate">Rotate</a></li>
                    <li><a href="/css/bootstrap">Bootstrap</a></li>
                </ul>
            </li>
            <li><a href="/signin">Connexion</a></li>
        </ul>
    </nav>
</header>
<?= $content; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!--<script src="/js/jquery-1.11.1.min.js"></script>-->
<script src="/js/default.js"></script>
</body>
</html>