<h2>Etablir la liste de comite</h2>
						<article class="loginForm">

						<div class="wrap">
							<div class="avatar">
								 <img src="<?php echo ROOT_PATH; ?>assets/images/3c.jpg">
							</div>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">


              <input type="text" name="categorie" style="border-radius: 10px;" placeholder="Catégorie" required>


							<?php foreach ($vuemodel as $value) { ?>

								<div class="item">
								<input type="checkbox" name="check_list[]" value="<?php  echo $value['nom'].' '.$value['prenom'];?>" style="width: 10px; height: 10px; margin-top: 4px;">
								<label style="display: inline;"><?php  echo $value['nom'].' '.$value['prenom']; } ?></label>
							</div>

							<div style="padding: 20px;">
								<input type="submit" name="submit" style="cursor: pointer; border-radius: 7px; width: 100px;" value="Valider">
							</div>
            </form>
						</div>





					<div class="clear"></div>

						</article>
