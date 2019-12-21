<h2>Nous contactez</h2>
						<article class="loginForm">

						<div class="wrap">
							<div class="avatar">
								 <img src="<?php echo ROOT_PATH; ?>assets/images/3c.jpg">
							</div>

							<input style="border-radius: 10px; margin-bottom: 5px;" type="text" placeholder="Votre nom" required>
							<input style="border-radius: 10px; margin-bottom: 5px;" type="text" placeholder="Votre prénom" required>

								  <div class="dropdowned">
									<div class="select">
									  <span>Seclectionnez votre statut</span>
									  <i class="fa fa-chevron-left"></i>
									</div>
									<input type="hidden" name="gender">
									<ul class="dropdown-menu">
									  <li id="prof">Professeur</li>
									  <li id="etudiant">Etudiant</li>
									  <li id="autre">Autre</li>
									</ul>
								  </div>

							  <span class="msg"></span>
							<input style="border-radius: 10px; margin-bottom: 5px;" type="text" placeholder="Votre numéro de téléphone">
							<input style="border-radius: 10px; margin-bottom: 5px;" type="email" placeholder="Votre email" required>
							<textarea rows="10" cols="50" style="border-radius: 10px; margin-bottom: 5px; background: #fff;" placeholder="Votre message"></textarea>
							<div style="padding: 20px;">
								<input type="submit" name="submit" style="cursor: pointer; border-radius: 7px; width: 200px;" value="Envoyez votre message">
							</div>
						</div>


					<div class="clear"></div>

						</article>
