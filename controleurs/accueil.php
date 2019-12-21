<?php
class Accueil extends Controleur{
  protected function Index(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->Index(), true);
  }

  protected function Dates(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->Dates(), true);
  }

  protected function organisateursConfs(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->organisateursConfs(), true);
  }

  protected function appelsPapiers(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->appelsPapiers(), true);
  }

  protected function soumissionpapiers(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->soumissionPapiers(), true);
  }

  protected function papiersacceptes(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->papiersAcceptes(), true);
  }

  protected function comite(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->comite(), true);
  }

  protected function sujets(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->comite(), true);
  }

  protected function conferenciers(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->comite(), true);
  }

  protected function nousContacter(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->nousContacter(), true);
  }

  protected function inscription(){
    $vuemodel = new AccueilModel();
    $this->retournerVue($vuemodel->inscription(), true);
  }


}
?>
