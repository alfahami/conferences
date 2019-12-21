<h2>Determiner session</h2>
						<article class="loginForm">

						<div class="wrap">
							<div class="avatar">
								 <img src="<?php echo ROOT_PATH; ?>assets/images/3c.jpg">
							</div>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

              <select name="theme">
                <option value="0">Selectionnez une conférence</option>
                <?php foreach ($vuemodel as $value) : ?>

                  <option value="<?php echo $value['nom']; ?>"><?php echo $value['nom']; ?></option>

                <?php endforeach; ?>
              </select>

							<input type="text" name="nom_session" style="border-radius: 10px; margin-bottom: 5px;" placeholder="Nom du session" required>
              <input type="text" name="auteur" style="border-radius: 10px; margin-bottom: 5px;" placeholder="Auteur" required>
              <label>Heure début</label>
              <input type="time" name="heure_debut" style="border-radius: 10px; margin-bottom: 5px;" required>
              <label>Heure fin</label>
              <input type="time" name="heure_fin" style="border-radius: 10px; margin-bottom: 5px;" required>

							<div style="padding: 20px;">
								<input type="submit" name="submit" style="cursor: pointer; border-radius: 7px; width: 100px;" value="Valider">
							</div>
            </form>
						</div>

					<div class="clear"></div>

						</article>
