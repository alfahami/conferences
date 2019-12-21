<?php
class Utilisateurs extends Controleur{
  protected function connexion(){
    if(isset($_SESSION['user_data']['nom_utilisateur'])){
      header('Location: '.ROOT_PATH.'utilisateurs/accueil');
    }
    $vuemodel = new UtilisateurModel();
    $this->retournerVue($vuemodel->connexion(), true);
  }

  protected function conferences(){
    if(!isset($_SESSION['user_data']['nom_utilisateur'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new UtilisateurModel();
    $this->retournerVue($vuemodel->conferences(), true);
  }

  /*protected function conferences(){
    if(!isset($_SESSION['user_data']['nom_utilisateur'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new UtilisateurModel();
    $this->retournerVue($vuemodel->conferences(), true);
  }**/

  protected function soumettrepapier(){
    if(!isset($_SESSION['user_data']['nom_utilisateur'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new UtilisateurModel();
    $this->retournerVue($vuemodel->soumettrepapier(), true);
  }

  protected function inscrireconf(){
    if(!isset($_SESSION['user_data']['nom_utilisateur'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new UtilisateurModel();
    $this->retournerVue($vuemodel->inscrireconf(), true);
  }

  protected function vosconferences(){
    if(!isset($_SESSION['user_data']['nom_utilisateur'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new UtilisateurModel();
    $this->retournerVue($vuemodel->vosconferences(), true);
  }

  protected function deconnexion(){
    unset($_SESSION[is_logged_in]);
    unset($_SESSION['user_data']);
    session_destroy();
    //Redirect
    header('Location: '.ROOT_PATH);
  }

}

?>
