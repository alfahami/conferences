<?php
class UtilisateurModel extends Model{

  public function connexion(){
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $password = md5($post['password']);

    if($post['submit']){
      // Compare login
      $this->query('SELECT * FROM utilisateurs WHERE email = :email AND mot_passe = :mot_passe');
      $this->bind(':email', $post['email']);
      $this->bind(':mot_passe', $password);

      $row = $this->single();

      if($row){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_data'] = array(
          "id_utilisateur"      => $row['id_utilisateur'],
          "nom_utilisateur"     => $row['nom'],
          "email_utilisateur"   => $row['email'],
          "statut_utilisateur"  => $row['statut'],
          "conference_utilisateur"  => $row['conference']
        );
        header('Location: '.ROOT_PATH.'utilisateurs/conferences');

      } else {
          Messages::setMsg('email et/ou mot de passe incorrect', 'error');
      }
    }
    return;
  }

  public function conferences(){
      $this->query('SELECT id_conf, nom, date_limite_soumission, date_fin_evaluation, date_conf FROM conferences');
      $rows = $this->resultSet();
      return $rows;
      //print_r($rows);
      if(POST[submit]){
        echo "DONE";
        header(ROOT_PATH);
      }
  }

  public function vosconferences() {
    $this->query('SELECT conference FROM utilisateurs WHERE id := id');
    $this->bind(':id', $_SESSION['user_data']['id_utilisateur']);
    $rows = $this->resultSet();
    return $row;
  }

  public function soumettrepapier(){
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      if($post['submit']){
        $this->query('INSERT INTO papiers(auteur, titre, note, papier) VALUES(:auteur, :titre, :note, :papier)');
        $this->bind(':auteur', $post['nom_auteur']);
        $this->bind(':titre', $post['titre']);
        $this->bind(':note', $post['note']);
        $this->bind(':papier', $post['papier']);
        $rows = $this->resultSet();

        Messages::setMsg('Papier soumis avec succès', 'success');

      }

  }

  public function inscrireconf(){
    $nom = $_GET['$3'];


    $this->query('INSERT INTO utilisateurs(conference) VALUES(:conference) WHERE id_utilisateur =:id_utilisateur');
    $this->bind(':conference', $nom);
    $this->bind(':id_utilisateur', $_SESSION['user_data']['id_utilisateur']);
    $this->resultSet();

    header('Location: '.ROOT_PATH.'utilisateurs/conferences/$3');

  }

}

?>
