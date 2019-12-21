<?php
class AccueilModel extends Model{
  public function Index(){
    return;
  }

  public function Dates(){
    return;
  }

  public function organisateursConfs(){
    return;
  }

  public function appelsPapiers(){
    return;
  }

  public function soumissionPapiers(){
    return;
  }

  public function papiersAcceptes(){
    return;
  }

  public function comite(){
    return;
  }

  public function sujets(){
    return;
  }

  public function conferenciers(){
    return;
  }

  public function nousContacter(){
    return;
  }

  public function inscription(){
      // Sanitize POST
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


      $password = md5($post['password']);

      if($post['submit']){
                // Insert into MySQL
        $this->query('INSERT INTO utilisateurs(nom, prenom, email, mot_passe, statut) VALUES(:nom, :prenom, :email, :mot_passe, :statut)');
        $this->bind(':nom', $post['nom']);
        $this->bind(':prenom', $post['prenom']);
        $this->bind(':email', $post['email']);
        $this->bind(':mot_passe', $password);
        $this->bind(':statut', $post['statut']);

        $this->execute();

        header('Location: '.ROOT_PATH.'utilisateurs/connexion');
      }

      return;
    }


}

?>
