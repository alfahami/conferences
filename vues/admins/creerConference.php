<h2>Creer une conférence</h2>
						<article class="loginForm">

						<div class="wrap">
							<div class="avatar">
								 <img src="<?php echo ROOT_PATH; ?>assets/images/3c.jpg">
							</div>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
							<input type="text" name="nom_conf" style="border-radius: 10px; margin-bottom: 5px;" placeholder="Thème de la conférence" required>
              <label>Date limite de soumission de papier</label>
              <input type="date" name="date_soumission" style="border-radius: 10px; margin-bottom: 5px;" value="Date limite de soumission" required>
              <label>Date de fin d'évaluation</label>
              <input type="date" name="date_eval" style="border-radius: 10px; margin-bottom: 5px;" value="Date de fin d'evaluation" required>
              <label>Date de la conférence</label>
              <input type="date" name="date_conf" style="border-radius: 10px; margin-bottom: 5px;" value="Date de la conférence" required>


							<div style="padding: 20px;">
								<input type="submit" name="submit" style="cursor: pointer; border-radius: 7px; width: 100px;" value="Valider">
							</div>
            </form>
						</div>


					<div class="clear"></div>

						</article>
