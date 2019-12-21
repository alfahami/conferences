<?php
class Admins extends Controleur{
  protected function Accueil(){
    if(!isset($_SESSION['user_data']['admin_name'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new AdminModel();
    $this->retournerVue($vuemodel->Accueil(), true);
  }

  protected function connexion(){
    if(isset($_SESSION['user_data']['admin_name'])){
      header('Location: '.ROOT_PATH.'admins/accueil');
    }
    $vuemodel = new AdminModel();
    $this->retournerVue($vuemodel->connexion(), true);
  }

  protected function creerConference(){
    if(!isset($_SESSION['user_data']['admin_name'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new AdminModel();
    $this->retournerVue($vuemodel->creerConference(), true);
  }

  protected function conferences(){
    if(!isset($_SESSION['user_data']['admin_name'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new AdminModel();
    $this->retournerVue($vuemodel->conferences(), true);
  }

  protected function construireComite(){
    if(!isset($_SESSION['user_data']['admin_name'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new AdminModel();
    $this->retournerVue($vuemodel->construireComite(), true);
  }

  protected function listeComite(){
    if(!isset($_SESSION['user_data']['admin_name'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new AdminModel();
    $this->retournerVue($vuemodel->listeComite(), true);
  }

  protected function etablirtutoriel(){
    if(!isset($_SESSION['user_data']['admin_name'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new AdminModel();
    $this->retournerVue($vuemodel->etablirtutoriel(), true);
  }

  protected function determinerSession(){
    if(!isset($_SESSION['user_data']['admin_name'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new AdminModel();
    $this->retournerVue($vuemodel->determinerSession(), true);
  }

  protected function affecterpapier(){
    if(!isset($_SESSION['user_data']['admin_name'])){
      header('Location: '.ROOT_PATH);
    }
    $vuemodel = new AdminModel();
    $this->retournerVue($vuemodel->affecterpapier(), true);
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
