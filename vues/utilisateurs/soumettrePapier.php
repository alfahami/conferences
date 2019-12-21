<h2>Soumission de papiers</h2>
  <article>
    <div class=" loginForm">
      					<div class="wrap">
      						<div class="avatar">
      							 <img src="../<?php echo $ROOT_PATH; ?>assets/images/3c.jpg">
      						</div>
                  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <input style="border-radius: 10px; margin-bottom: 5px;" type="text" name="titre" placeholder="titre du papier" required>
      							<input style="border-radius: 10px; margin-bottom: 5px;" type="text" name="nom_auteur" placeholder="Nom de l'auteur" required>
                    <textarea name="note" rows="10" cols="50" style="border-radius: 10px; margin-bottom: 5px; background: #fff;" placeholder="Note(Facultatif)"></textarea>

                      Inclure votre papier:
                      <input type="file" name="papier" id="papier">

                    <div style="padding: 20px;">
                      <input type="submit" name="submit" style="cursor: pointer; border-radius: 7px; width: 120px;" value="Valider">
                    </div>
                  </form>
      					</div>


    					<div class="clear"></div>

    </div><!-- .loginFrom-->
  </article>
