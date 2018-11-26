<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Optimisation_model extends CI_Model {

  public function getCoeffTurbine($idTurbine) {
    return $this->db->select('p00, p10, p01, p20, p11, p02, p30, p21,	p12, p03')
      ->limit(1)
      ->from('coefficient')
      ->where('idTurbine', $idTurbine)
      ->get()
      ->row_array();
    }

    public function getAllCoeffTurbines() {
      return $this->db->get('coefficient');
    }

    public function getDataTurbine($id, $idTurbine){
      return $this->db->select('q'.$idTurbine.', hNette'.$idTurbine)
        ->limit(1)
        ->from('data')
        ->where('id', $id)
        ->get()
        ->row_array();
    }

    public function getQTotalAndNiveauAmont($id){
      return $this->db->select('niveauAmont, qTotal')
        ->limit(1)
        ->from('data')
        ->where('id', $id)
        ->get()
        ->row_array();
    }

    public function getCoeffElevationAval(){
      return $this->db->select('p1,p2,p3')
        ->limit(1)
        ->from('coefficientElevationAval')
        ->get()
        ->row_array();
    }
}
