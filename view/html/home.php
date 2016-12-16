<h1>Grames, le site de jeu reférence</h1>
<p>Ce site vous propose :</p>
<ul>
    <li>Une partie HTML</li>
    <li>Une partie CSS</li>
    <li>Différent jeux (nécessite une connexion)</li>
    <li>Un livre d'Or</li>
</ul>

<div class="col">
    <img src="/images/2048.png" alt="Logo 2048" width="150" height="150">
    <h3>TOP 5 de 2048</h3>
    <?php $i=1; foreach ($game_2048 as $pseudo => $score): ?>
        <ul style="list-style: none; padding-left: 0;">
            <li><?= $i++.'. '.$pseudo. ' : '.$score ?></li>
        </ul>
    <?php endforeach; ?>
</div>
<div class="col">
    <img src="/images/snake.png" alt="Logo 2048" width="150" height="150">
    <h3>TOP 5 de Snake</h3>
    <?php $i=1; foreach ($game_snake as $pseudo => $score): ?>
        <ul style="list-style: none; padding-left: 0;">
            <li><?= $i++.'. '.$pseudo. ' : '.$score ?></li>
        </ul>
    <?php endforeach; ?>
</div>


