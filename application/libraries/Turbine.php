<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turbine {
  private $CI;
  private $id; //Turbine number
  private $avaibility; //Turbine availability
  private $elevAmont; //elevAmont -> same for every turbine
  private $elevAval; //elevAval -> same for every turbine
  private $maxQ; //maximum flow for the turbine
  private $coeffProduction; //array of the coefficients used to calculate the production
  private $stateArray; //dynamic program table for the turbine
  private $optimalQ; //optimal flow for the turbine
  private $optimalProduction; //optimal production for the turbine
  private $optimalProductionSum; //optimal production for this and the next ones

  //Constructor
  public function __construct(int $id, int $maxQ = 160, bool $avaibility = true, $coeff = NULL, float $elevAmont = NULL, float $elevAval){
    $this->CI = & get_instance();
    $this->id = $id;
    $this->maxQ = $maxQ; //maxQ can be added by the user, its default value is 160
    $this->avaibility = $avaibility;
    $this->stateArray = array();

    if(!is_null($coeff)){
      $this->coeffProduction = $coeff;
    }

    if(!is_null($elevAmont)){
      $this->elevAmont = $elevAmont;
    }

    if(!is_null($elevAval)){
    $this->elevAval = $elevAval;
    }

    $this->optimalQ = 0;
    $this->optimalProduction = 0;
  }

  //Setter
  public function setAvaibility(bool $avaibility){
    $this->avaibility = $avaibility;
  }

  //Getter availability
  public function isAvailable() : bool{
    return $this->avaibility;
  }

  //Getters
  public function getId() : int {
    return $this->id;
  }

  public function getMaxQ() : int {
    return $this->maxQ;
  }

  public function getOptimalQ() : float{
    return $this->optimalQ;
  }

  public function getOptimalProduction() : float{
    return $this->optimalProduction;
  }

  public function getOptimalProductionSum() : float{
    return $this->optimalProductionSum;
  }

  public function getStateArray(){
    return $this->stateArray;
  }

  //Method to fill the dynamic program table of the last turbine
  public function fillArrayLastStep($qTotal){
    for($i=0 ; $i<=$qTotal ; $i+=5){
      $this->stateArray[$i] = array($this->production(min($i, $this->maxQ)), min($i, $this->maxQ));
    }
    //UNCOMMENT TO DISPLAY THE ARRAYS OF THE DYNAMIC PROGRAM
    //print_r($this->stateArray);
    //echo('<br><br>');
  }
  //Method to fill the dynamic program table of the intermediate turbines
  public function fillArrayMiddleStep($previousArray, $qTotal){
    for($i=0 ; $i<=$qTotal ; $i+=5){
      $line = array();
      for($j=0 ; $j<=min($i, $this->maxQ) ; $j+=5){
        $line[$j] = (($this->production($j))+($previousArray[$i-$j][0]));
      }
      $optimalValue = max($line);
      $optimalKey = array_search(max($line), $line);
      //echo ('clé : '.$optimalKey);
      $this->stateArray[$i] = array($optimalValue, $optimalKey);
    }
    //UNCOMMENT TO DISPLAY THE ARRAYS OF THE DYNAMIC PROGRAM
    //print_r($this->stateArray);
    //echo('<br><br>');
  }

  //Method to fill the dynamic program table of the first turbine
  public function fillArrayFirstStep($previousArray, $qTotal){
    $line = array();
    for($i=0 ; $i<=$this->maxQ ; $i+=5){
      $line[$i] = (($this->production($i))+($previousArray[$qTotal-$i][0]));
    }
    $optimalValue = max($line);
    $optimalKey = array_search(max($line), $line);
    $this->stateArray[$qTotal] = array($optimalValue, $optimalKey);
    //UNCOMMENT TO DISPLAY THE ARRAYS OF THE DYNAMIC PROGRAM
    //print_r($this->stateArray);
    //echo('<br><br>');
  }

  //Function to calculate the optimum, for a given state qLeft
  public function calculateOptimum($qLeft){
    $this->optimalProductionSum = $this->stateArray[$qLeft][0];
    $this->optimalQ = $this->stateArray[$qLeft][1];
    $this->optimalProduction = $this->production($this->optimalQ);
  }

  //Function to calculate hNette and the production, for a given flow q
  //This function differs for each turbine, due to different coefficients
  private function production($q) : float{
    $hNette = $this->elevAmont - $this->elevAval - 0.5*pow(10, -5)*$q;
    if($q<=0){
      $ret = 0;
    }else{
    $ret = $this->coeffProduction['p00'] + $this->coeffProduction['p10']*$hNette +
    $this->coeffProduction['p01']*$q + $this->coeffProduction['p20']*pow($hNette,2) +
    $this->coeffProduction['p11']*$hNette*$q + $this->coeffProduction['p02']*pow($q,2) +
    $this->coeffProduction['p30']*pow($hNette,3) + $this->coeffProduction['p21']*pow($hNette,2)*$q +
    $this->coeffProduction['p12']*$hNette*pow($q,2) + $this->coeffProduction['p03']*pow($q,3);
  }
    return $ret;
  }
}
