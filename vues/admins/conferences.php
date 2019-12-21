<h2>Les Conférences </h2>
<article>
  <?php foreach ($vuemodel as $value) : ?>
    <div style="border: 1px dashed red; padding: 15px; border-radius: 7px; margin-bottom:10px;">
      <h3><b><?php echo $value['nom']; ?></b></h3>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

      <br><br>
      Date limite de soumission de papier <b><?php echo $value['date_limite_soumission']; ?></b><br>
      Date d'evaluation: <b><?php echo $value['date_fin_evaluation']; ?></b> <br>
      Date de conference <b><?php echo $value['date_conf']; ?></b>
      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div style="padding: 20px;">
          <input type="submit" name="submit" style="cursor: pointer; border-radius: 7px; width: 150px;" value="S'inscrire à la conférence">
        </div>
      </form>
    </div>


  <?php endforeach ; ?>
</article>
