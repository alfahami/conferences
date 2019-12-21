
<article style="margin-top: 50px">
  <div class=" loginForm">
    					<div class="wrap">
    						<div class="avatar">
    							 <img src="../<?php echo $ROOT_PATH; ?>assets/images/3c.jpg">
    						</div>
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                  <input style="border-radius: 10px; margin-bottom: 5px;" type="email" name="email" placeholder="email" required>
    							<input style="border-radius: 10px; margin-bottom: 5px;" type="password" name="password" placeholder="mot de passe" required>

                  <div style="padding: 20px;">
    								<input type="submit" name="submit" style="cursor: pointer; border-radius: 7px; width: 150px;" value="Connexion">
    							</div>
                </form>
    					</div>


  					<div class="clear"></div>

  </div><!-- .loginFrom-->
</article>
