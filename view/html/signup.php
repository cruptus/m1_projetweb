<h1>Inscription</h1>
<form action="/signup" method="post">
    <div class="form">
        <label for="email" class="form">E-Mail</label>
        <input type="email" id="email" name="email" class="form" placeholder="Email@email.fr" autofocus required />
    </div>
    <div class="form">
        <label for="pseudo" class="form">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" class="form" placeholder="Pseudo" required />
    </div>
    <div class="form">
        <label for="password" class="form">Mot de passe</label>
        <input type="password" id="password" name="password" class="form" placeholder="Mot de passe" required />
    </div>
    <div class="form">
        <label for="password_valid" class="form">Repeter le mot de passe</label>
        <input type="password" id="password_valid" name="password_valid" class="form" placeholder="Repeter le mot de passe" required />
    </div>
    <div class="form">
        <?php
            $captcha = new \App\Helper\Captcha();
            echo $captcha->html();
        ?>
    </div>

    <div class="form">
        <input type="submit" class="form" value="Je m'inscris" />
    </div>
</form>