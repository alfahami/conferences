<h2>Inscription</h2>
						<article class="loginForm">

						<div class="wrap">
							<div class="avatar">
								 <img src="<?php echo ROOT_PATH; ?>assets/images/3c.jpg">
							</div>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
							<input type="text" name="nom" style="border-radius: 10px; margin-bottom: 5px;" placeholder="Votre nom" required>
							<input type="text" name="prenom" style="border-radius: 10px; margin-bottom: 5px;" placeholder="Votre prénom" required>
              <input type="email" name="email" style="border-radius: 10px; margin-bottom: 5px;" placeholder="email">
              <input type="password" name="password" style="border-radius: 10px; margin-bottom: 5px;" placeholder="mot de passe">
						  <input type="text" name="statut" style="border-radius: 10px; margin-bottom: 5px;"  placeholder="Votre statut(Etudiant ou Prof)">

							<div style="padding: 20px;">
								<input type="submit" name="submit" style="cursor: pointer; border-radius: 7px; width: 200px;" value="Validez votre inscription">
							</div>
            </form>
						</div>


					<div class="clear"></div>

						</article>
