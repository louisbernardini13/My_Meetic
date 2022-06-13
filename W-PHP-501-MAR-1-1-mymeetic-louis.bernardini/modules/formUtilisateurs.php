<div class="formConnexion">
    <div class="form-text">Inscription</div>
    <div class="form-saisie">
        <form action="./controller/inscriptionController.php" method="POST">
            <span>Nom :</span>
            <input type="text" name="nom" placeholder="Nom">
            <span>Prenom :</span>
            <input type="text" name="prenom" placeholder="Prenom">
            <span>Date de naissance :</span>
            <input type="date" name="date_de_naissance" placeholder="Date de naissance" 
            min="1921-01-01" max="2003-01-01">
            <span>Genre :</span>
            <input type="text" name="genre" placeholder="Genre">
            <span>Ville :</span>
            <input type="text" name="ville" placeholder="Ville">        
            <span>Adresse e-mail :</span>
            <input type="text" name="email" placeholder="Email">
            <span>Mot de passe :</span>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe">
            <span>Loisirs :</span>
            <input type="text" name="loisir" placeholder="Loisirs">
            <input type="submit" value="Envoyer">
        </form>
        <!-- <p id="dejaInscrit"><a href="./formLogin.php">Vous avez déjà un compte ?</a></p> -->
    </div>
</div>
