<?php
class Bootstrap{
  private $controleur;
  private $action;
  private $requete;
  private $id;

  public function __construct($requete){
    $this->requete = $requete;
    if($this->requete['controleur'] == ""){
      $this->controleur = 'accueil';
    } else {
      $this->controleur = $this->requete['controleur'];
    }
    if($this->requete['action'] == ""){
      $this->action = 'index';
    } else {
      $this->action = $this->requete['action'];
    }

    if($this->requete['id'] == ""){
      $this->id = '';
    } else {
      $this->action = $this->id['id'];
    }


  }

  public function creerControleur(){
    //Verifie la class
    if(class_exists($this->controleur)){
      $parents = class_parents($this->controleur);
      // Verifie l'héritage
      if(in_array("Controleur", $parents)){
        //Test si le controleur inclut les actions
        if(method_exists($this->controleur, $this->action)){
          return new $this->controleur($this->action, $this->requete);

        } else {
          //La méthode appelé n'existe pas
          echo '<h1>La méthode n\' existe pas</h1>';
          return;
        }
      } else {
        //Base controleur Does Not Exist
        echo '<h1>Controleur de base non trouvé</h1>';
        return;
      }
    } else {
      //La classe même n'existe pas
      echo '<h1>La classe du controleur n\'existe pas</h1>';
    }
  }

}
?>
