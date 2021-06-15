<div class="alert alert-info" role="alert">
    <p>Vous avez bien été déconnecté ! <a href="index.php">Cliquez ici</a>
        pour revenir à la page de connexion.</p>
</div>

<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
header("Refresh: 3;URL=../index.php");
