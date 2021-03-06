<h1>Connexion / Inscription</h1>

<form id="connection" action="/index.php?p=form&a=connect" method="post">
    <h2>Connexion</h2>
    <input type="email" placeholder="Votre email" name="email" maxlength="150" required>
    <input type="password" placeholder="Votre mot de passe" name="password" required>

    <input type="submit" name="submitConnection">
</form>

<?php
if (isset($_SESSION['error'])) {
    foreach ($_SESSION['error'] as $value) {
        ?>
        <p><?= $value ?></p>
        <?php
    }
    unset($_SESSION['error']);
}

if (!isset($_SESSION['user'])) {
    echo '<p class="createAccount">Vous ne possédez pas de compte créer en un <span class="createAccount">ici</span></p>';
}
?>

<form id="register" action="/index.php?p=form&a=register" method="post">
    <h2>Inscription</h2>
    <input type="email" placeholder="Votre email" name="email" maxlength="150">
    <input type="text" placeholder="Votre pseudo" name="username" class="username" maxlength="100" required>

    <input type="password" placeholder="Votre mot de passe" name="password" id="p1" required>
    <input type="password" placeholder="Répéter votre mot de passe" name="passwordRepeat" id="p2" required>

    <input type="submit" name="submitRegister">
</form>
