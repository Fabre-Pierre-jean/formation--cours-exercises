<?php
class Battle
{
  /*private $idCombat;
  private $dresseur1;
  private $dresseur2;*/
  private $pokemon1;
  private $degatpok1;
  private $hp1;
  private $exppok1;
  private $pokemon2;
  private $degatpok2;
  private $hp2;
  private $exppok2;
  public function __construct($Pok1, $Degatpok1, $Hp1,$Exppok1,$Pok2, $Degatpok2, $Hp2,$Exppok2){
    /*$this->setDresseur1($Dress1);
    $this->setDresseur2($Dress2);*/
    $this->setPokemon1($Pok1);
    $this->setDegatpok1($Degatpok1);
    $this->setHp1($Hp1);
    $this->setExppok1($Exppok1);
    $this->setPokemon2($Pok2);
    $this->setDegatpok2($Degatpok2);
    $this->setHp2($Hp2);
    $this->setExppok2($Exppok2);

  }
/*  public function gagnerExperience()
  {

    $this->ExpPokemon1++;
    $this->ExpPokemon2++;

  }
  public function setDresseur1($dress)
  {
    $this->dresseur1 = $dress;
  }
  public function setDresseur2($dress)
  {
    $this->dresseur1 = $dress;
  }*/
  public function setPokemon1($pok1)
  {
    $this->pokemon1 = $pok1;
  }
  public function setDegatpok1($Degatpok1)
  {
    $this->degatpok1 = $Degatpok1;
  }
  public function getDegatpok1()
  {
    return $this->degatpok1;
    /*$suddenlife1=ceil((($this->hp1-$this->degatpok1)/$this->hp1)*100);
    if($suddenlife1<0){
      $suddenlife1=0;
      return 'vie restante ennemi: '.$suddenlife1  . '<br>';
    }else if($this->getDegatpok2()>0){
    return 'vie restante ennemi: '.$suddenlife1  . '<br>';
  }*/
  }
  public function setHp1($Hp1)
  {
    $this->hp1 = $Hp1;
  }
  public function setExppok1($Exppok1)
  {
    $this->exppok1 = $Exppok1;
  }

  public function setPokemon2($pok2)
  {
    $this->pokemon2 = $pok2;
  }
  public function setDegatpok2($Degatpok2)
  {
    $this->degatpok2 = $Degatpok2;
  }
  public function getDegatpok2()
  {
    return $this->degatpok2;
    /*$suddenlife2=ceil((($this->hp2-$this->degatpok2)/$this->hp2)*100);

    if($suddenlife2<0){
      $suddenlife2=0;
      return 'vie restante ennemi: '.$suddenlifeb . '<br>';
    }elseif($this->getDegatpok1()>0){
    return 'vie restante ennemi: '.$suddenlifeb  . '<br>';
  }*/
  }
  public function setHp2($Hp2)
  {
    $this->hp2 = $Hp2;
  }
  public function setExppok2($Exppok2)
  {
    $this->exppok2 = $Exppok2;
  }

  //pokemonselected recoit les degats
  public function recevoirdegat1($Degatattack){
    $this->degatpok1 += $Degatattack;
    if($this->degatpok1>=$this->hp1){
      $this->degatpok1=$this->hp1;
    }
    else{
      $this->degatpok1=$this->degatpok1;
    }
  }
  public function recevoirdegat2($Degatattack){
    $this->degatpok2 += $Degatattack;
    if($this->degatpok2>=$this->hp2){
      $this->degatpok2=$this->hp2;
    }
    else{
      $this->degatpok2 = $this->degatpok2;
    }
  }



}
?>
