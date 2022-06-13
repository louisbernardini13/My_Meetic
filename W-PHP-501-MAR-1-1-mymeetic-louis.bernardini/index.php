<?php
// affiche les messages d'erreur
error_reporting(E_ALL);
ini_set("display_errors", 1);
require "./controller/indexController.php";
require "./includes/header.php";
require "./modules/formLogin.php";
require "./modules/formUtilisateurs.php";
?>
    <section class="presentation first">
		<div class="product-presentation">
			<h1>Rencontrez de nouvelles personnes !</h1>
			<p>
				Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum
				odio eos beatae labore possimus. Pariatur ipsa, tempore optio
				placeat expedita minus cupiditate nulla iure quis error. A vitae
				quibusdam ipsum dolor sit amet consectetur adipisicing elit.
			</p>
			<button>Je recherche un homme</button>
            <button>Je recherche une femme</button>
		</div>
		<div class="image-presentation">
			<img src="images/cpl.png"/>
            <!-- <img style="max-width: 13%;" src="https://iliusstu-a.akamaihd.net/www.meetic.fr/hpv/csoy2022.responsive-93529355305.png" alt=""> -->
		</div>
	</section>
</header>
    <!-- <section class="presentation second">
	<div class="image-presentation">
			<img src=""/>
		</div>	
    <div class="product-presentation">
		    <p class="new">Actualités</p>
            <h1>Les nouveaux inscrits :</h1>
		    <p>
			Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum odio
			eos beatae labore possimus. Pariatur ipsa, tempore optio placeat
			expedita minus cupiditate nulla iure quis error. A vitae quibusdam
			veniam.
		    </p>
		    <button>Voir plus</button>
	    </div>
	</section> -->

<?php
    require "./includes/footer.php";
?>