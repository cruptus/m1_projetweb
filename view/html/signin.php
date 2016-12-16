<h1>Connexion</h1>
<form action="/signin" method="post">
    <div class="form">
        <label for="email" class="form">Identifiant</label>
        <input type="email" id="email" name="email" class="form" placeholder="Email@email.fr" autofocus required />
    </div>
    <div class="form">
        <label for="password" class="form">Mot de passe</label>
        <input type="password" id="password" name="password" class="form" placeholder="Mot de passe" required />
    </div>
    <div class="form">
        <input type="submit" class="form" value="Connexion" />
        <a href="/signup">Pas encore inscrit ?</a>
    </div>
</form>