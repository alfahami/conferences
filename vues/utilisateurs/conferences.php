<h2>Les Conférences</h2>
<article>
  <?php foreach ($vuemodel as $value) : ?>

    <div style="border: 1px dashed #8CB2CA; padding: 8px; border-radius: 7px; margin-bottom:10px;">
      <h3><b><?php echo $value['nom']; ?></b></h3>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

      <hr>

      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div style="padding: 5px;">
          <small style="float: letf;">Date limite de soumission de papier: <b><?php echo $value['date_limite_soumission']; ?></b>
            <br>Date d'evaluation: <b><?php echo $value['date_fin_evaluation']; ?></b>
            <br>Date de la conférence <b><?php echo $value['date_conf']; ?></b></small>
          <a href="<?php echo ROOT_PATH; ?>utilisateurs/conferences" type="submit" name="submit" style="cursor: pointer; border-radius: 7px; width: 170px; float: right; margin-top: -30px; " value="S'inscrire à la conférence">S'inscrire</a>

        </div>
      </form>
    </div>
    <?php echo $_GET['$1'];?>

  <?php endforeach ; ?>
</article>
