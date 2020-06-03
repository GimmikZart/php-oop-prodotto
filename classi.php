<?php
  class CreaAvatar {

    public $capelli;

    public $occhi;

    public $corporatura;

    public $altezza;

    public $stamina;

    public $intelletto;

    public $forza;

    public function __construct($capelli, $occhi, $corporatura, $altezza, $stamina, $intelletto, $forza) {

      $this-> capelli = $capelli;
      $this-> occhi = $occhi;
      $this-> corporatura = $corporatura;
      $this-> altezza = $altezza;
      $this-> stamina = $stamina;
      $this-> intelletto = $intelletto;
      $this-> forza = $forza;

    }

    public function printMe() {

      echo "Il tuo personaggio sarà " . $this->corporatura . "con capelli " . $this->capelli . "e occhi " . $this->occhi . ",sarà alto " . $this->altezza . "Il tuo personaggio sarà forte: " . $this->forza . "con intelletto: " . $this->intelletto . " e stamina: " . $this->stamina . "." ;
    }

// echo "ci sono questi pesci:" . $this->pesce . "e queste carni:" . $this->carne . "e queste verdurcce:" . $verdure . "e questi legumi:" . $legumi . "e questi cereali:" . $cereali . "e questi frutti di mare:" . $fruttiDiMare . "e questi dolci:" . $dolci;
  }

  $oggetto = new CreaAvatar("castani", "azzurri", "robusta", 1.80, 76, 35, 98);
  var_dump($oggetto);

  $oggetto-> printMe();

 ?>
