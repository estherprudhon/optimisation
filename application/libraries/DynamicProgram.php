<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DynamicProgram {
  private $CI;
  private $n;
  private $turbineArray;
  private $qTotal;

public function __construct(&$turbine1 = NULL, &$turbine2 = NULL, &$turbine3 = NULL, &$turbine4 = NULL, &$turbine5 = NULL, $qTotal = NULL){
    $this->CI = & get_instance();
    require_once('Turbine.php');

    if(!is_null($qTotal)){
      $this->turbineArray = array();
      ($turbine1->isAvailable()) ? array_push($this->turbineArray, $turbine1) : NULL;
      ($turbine2->isAvailable()) ? array_push($this->turbineArray, $turbine2) : NULL;
      ($turbine3->isAvailable()) ? array_push($this->turbineArray, $turbine3) : NULL;
      ($turbine4->isAvailable()) ? array_push($this->turbineArray, $turbine4) : NULL;
      ($turbine5->isAvailable()) ? array_push($this->turbineArray, $turbine5) : NULL;

      $this->n = count($this->turbineArray);

      $this->qTotal = (int)($qTotal/5)*5;
    }
  }

  public function backward(){
    $this->turbineArray[$this->n-1]->fillArrayLastStep($this->qTotal);
    for($i=$this->n-2 ; $i>0 ; $i--){
      $this->turbineArray[$i]->fillArrayMiddleStep($this->turbineArray[$i+1]->getStateArray(), $this->qTotal);
    }
    $this->turbineArray[0]->fillArrayFirstStep($this->turbineArray[1]->getStateArray(), $this->qTotal);
  }

  public function forward() : int{
    echo('<br><br>'.'Résultats de l\'optimisation de la production d\'énergie par turbine :'.'<br>');
    $qLeft = $this->qTotal;
    for($i=0 ; $i < $this->n ; $i++){
      $this->turbineArray[$i]->calculateOptimum($qLeft);
      $qLeft -= $this->turbineArray[$i]->getOptimalQ();
      echo("-Pour la turbine ".($this->turbineArray[$i]->getId()).' : '.'<br>'.'Débit optimal Q'.($this->turbineArray[$i]->getId()).' = '.$this->turbineArray[$i]->getOptimalQ().' m3/s');
      echo( '<br>'.'production (puissance) maximale P'.($this->turbineArray[$i]->getId()). ' = '.$this->turbineArray[$i]->getOptimalProduction().' MWh'.'<br><br>');
    }
    return $qLeft;
  }
}
