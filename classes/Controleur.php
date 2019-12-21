<?php
abstract class Controleur{
  protected $requete;
  protected $action;

  public function __construct($action, $requete){
    $this->action = $action;
    $this->requete = $requete;
  }

  public function executerAction(){
    return $this->{$this->action}();
  }

  public function retournerVue($vuemodel, $vue_entiere){

    $vue = '/' . strtolower(get_class($this)). '/' .$this->action. '.php';
    if($vue_entiere){
      require('vues/main.php');
    } else {
      require('$vue');
    }
  }
}
?>
