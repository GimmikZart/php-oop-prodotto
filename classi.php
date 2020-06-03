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

      echo "<br>" . "<br>" . "Il tuo personaggio sarà " . $this->corporatura . " con capelli " . $this->capelli . " e occhi " . $this->occhi . ", sarà alto " . $this->altezza . "cm" . ". Il tuo personaggio sarà forte: " . $this->forza . " con intelletto: " . $this->intelletto . " e stamina: " . $this->stamina . "." ;
    }
  }

  $oggetto = new CreaAvatar("castani", "azzurri", "robusto", 180, 76, 35, 98);
  var_dump($oggetto);

  $oggetto-> printMe();

 ?>
