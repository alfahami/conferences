<h2>Vos membres de comite </h2>
<article>
  <h3 style="text-decoration: underline;">Coprésidents généraux:</h3>
  <?php foreach ($vuemodel as $value) : ?>
    <?php if ($value['categorie'] == 'President general') { ?>
    <div style="padding: 1px; border-radius: 7px; margin-bottom:10px;">
      <b><?php echo $value['nom_membre']; ?> <?php echo $value['prenom']; ?></b>: <span style="font-style: italic;"><?php echo $value['statut']; ?></span> de <?php echo $value['organisation'];?>
    </div>
    <?php } ?>
  <?php endforeach ; ?>

  <br>

  <h3 style="text-decoration: underline;">Coprésident du programme technique</h3>
  <?php foreach ($vuemodel as $value) : ?>
    <?php if ($value['categorie'] == 'Equipe technique') { ?>
    <div style="padding: 1px; border-radius: 7px; margin-bottom:10px;">
      <b><?php echo $value['nom_membre']; ?> <?php echo $value['prenom']; ?></b>: <span style="font-style: italic;"><?php echo $value['statut']; ?></span> de <?php echo $value['organisation'];?>
    </div>
  <?php } ?>
  <?php endforeach ; ?>

    <br>

  	<h3 style="text-decoration: underline;">Coprésidents des publications:</h3>
  <?php foreach ($vuemodel as $value) : ?>
    <?php if ($value['categorie'] == 'Chef Publication') { ?>
    <div style="padding: 1px; border-radius: 7px; margin-bottom:10px;">
      <b><?php echo $value['nom_membre']; ?> <?php echo $value['prenom']; ?></b>: <span style="font-style: italic;"><?php echo $value['statut']; ?></span> de <?php echo $value['organisation'];?>
    </div>
  <?php } ?>
  <?php endforeach ; ?>

  <br>

  <h3 style="text-decoration: underline;">Conférenciers et coprésident de comité :</h3>
  <?php foreach ($vuemodel as $value) : ?>
    <?php if ($value['categorie'] == 'Conferencier') { ?>
    <div style="padding: 1px; border-radius: 7px; margin-bottom:10px;">
      <b><?php echo $value['nom_membre']; ?> <?php echo $value['prenom']; ?></b>: <span style="font-style: italic;"><?php echo $value['statut']; ?></span> de <?php echo $value['organisation'];?>
    </div>
    <?php } ?>
  <?php endforeach ; ?>

</article>
