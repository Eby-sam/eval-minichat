<?php

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}
?>

<section>
    <div class="top">
        <a href="/index.php?p=form&a=disconnect">ce deconecté</a>
    </div>

    <div class="messages">

    </div>

    <div class="bottom">
        <textarea name="message" id="message" cols="30" rows="1" maxlength="255"></textarea>
        <input type="submit" name="submit" id="new_message">
    </div>
</section>
