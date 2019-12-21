<?php
class AdminModel extends Model{
  public function Accueil(){
    $this->query('SELECT * FROM utilisateurs');
    $rows = $this->resultSet();
    return $row;

  }

  public function connexion(){
    //Sanitize the post
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $password = md5($post['password']);

    if($post['submit']){
      // Compare login
      $this->query('SELECT * FROM admin WHERE email = :email AND mot_passe = :mot_passe');
      $this->bind(':email', $post['email']);
      $this->bind(':mot_passe', $password);

      $row = $this->single();

      if($row){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_data'] = array(
          "id_admin"      => $row['id_admin'],
          "admin_name"    => $row['nom'],
          "admin_email"   => $row['nom'],
        );
        header('Location: '.ROOT_PATH.'admins/accueil');

      } else {
          Messages::setMsg('email et/ou mot de passe incorrect', 'error');
      }
    }
    return;
  }

  public function creerConference(){
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if($post['submit']){
              // Insert into MySQL
      $this->query('INSERT INTO conferences(nom, date_limite_soumission, date_fin_evaluation, date_conf) VALUES(:nom, :date_limite_soumission, :date_fin_evaluation, :date_conf)');
      $this->bind(':nom', $post['nom_conf']);
      $this->bind(':date_limite_soumission', $post['date_soumission']);
      $this->bind(':date_fin_evaluation', $post['date_eval']);
      $this->bind(':date_conf', $post['date_conf']);

      $this->execute();

      header('Location: '.ROOT_PATH.'admins/conferences');
    }

    return;
  }

  public function conferences(){
    // Sanitize POST

      $this->query('SELECT nom, date_limite_soumission, date_fin_evaluation, date_conf FROM conferences ORDER BY date_conf ASC');
      $rows = $this->resultSet();
      return $rows;
      //print_r($rows);
  }

  public function listeComite(){

      $this->query('SELECT nom_membre, prenom, statut, organisation, categorie FROM comite  ORDER BY nom_membre');
      $rows = $this->resultSet();

      return $rows;
  }

  public function construireComite(){

      $this->query('SELECT nom, prenom FROM utilisateurs ORDER BY nom');
      $rows = $this->resultSet();
      return $rows;

      //Sanitize POST
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      if($post['submit']){
        // Insert into MySQL
        if(!empty($_POST['check_list'])){

          foreach ($_POST[check_list] as $checked) {
            $this->query('INSERT INTO comite(nom_membre, categorie) VALUES(:nom_membre, :categorie)');
            $this->bind(':nom_membre', $checked);
            //$this->bind(':prenom', $post['prenom']);
            $this->bind(':categorie', $post['categorie']);
            $this->execute();
          }

          }  else{
              echo "Check list is empty!";
        }
      }
    header('Location: '.ROOT_PATH.'admins/construirecomite');
  }


  public function etablirtutoriel(){
    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if($post['submit']){
              // Insert into MySQL
      $this->query('INSERT INTO tutoriels(titre, auteur, date_tutoriel, heure_debut, heure_fin) VALUES(:titre, :auteur, :date_tutoriel, :heure_debut, :heure_fin)');

      $this->bind(':titre', $post['titre']);
      $this->bind(':auteur', $post['auteur']);
      $this->bind(':date_tutoriel', $post['date_tutoriel']);
      $this->bind(':heure_debut', $post['heure_debut']);
      $this->bind(':heure_fin', $post['heure_fin']);

      $this->execute();

      Messages::setMsg('Tutoriel ajouté avec succès', 'success');
    }

    return;
  }

  public function determinerSession(){
    //$nom_conf = $_POST['theme'];

    // Sanitize POST
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if($post['submit']){
      // Insert into MySQL
      $this->query('INSERT INTO sessions(nom_session, nom_conf, auteur, heure_debut, heure_fin) VALUES(:nom_session, :nom_conf, :auteur, :heure_debut, :heure_fin)');
      $this->bind(':nom_session', $post['nom_session']);
      $this->bind(':nom_conf', $post['theme']);
      $this->bind(':auteur', $post['auteur']);
      $this->bind(':heure_debut', $post['heure_debut']);
      $this->bind(':heure_fin', $post['heure_fin']);

      $this->execute();



      Messages::setMsg('Session ajoutée avec succès', 'success');
    }
    $this->query('SELECT nom FROM conferences');
    $rows = $this->resultSet();
    return $rows;
  }

  public function affecterpapier(){

      $this->query('SELECT nom, prenom FROM utilisateurs ORDER BY nom');
      $rows = $this->resultSet();
      return $rows;

      //Sanitize POST
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      if($post['submit']){
        // Insert into MySQL
        if(!empty($_POST['check_list'])){

          foreach ($_POST[check_list] as $checked) {
            $this->query('INSERT INTO comite(nom_membre, categorie) VALUES(:nom_membre, :categorie)');
            $this->bind(':nom_membre', $checked);
            //$this->bind(':prenom', $post['prenom']);
            $this->bind(':categorie', $post['categorie']);
            $this->execute();
          }

          }  else{
              echo "Check list is empty!";
        }
      }
    header('Location: '.ROOT_PATH.'admins/construirecomite');
  }

}

?>
