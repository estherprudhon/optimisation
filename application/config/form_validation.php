<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$CI = & get_instance();

$config = array(
  //Formulaire de connexion au site-------------------------------------------
  'results' => array(
    array(
      'field' => 'total_flow',
      'label' => 'total_flow',
      'rules' => 'required|is_natural_no_zero'
    ),
    array(
      'field' => 'upper_elevation',
      'label' => 'upper_elevation',
      'rules' => 'is_natural'
    ),
    array(
      'field' => 'max_flow1',
      'label' => 'max_flow1',
      'rules' => 'is_natural'
    ),
    array(
      'field' => 'max_flow2',
      'label' => 'max_flow2',
      'rules' => 'is_natural'
    ),
    array(
      'field' => 'max_flow3',
      'label' => 'max_flow3',
      'rules' => 'is_natural'
    ),
    array(
      'field' => 'max_flow4',
      'label' => 'max_flow4',
      'rules' => 'is_natural'
    ),
    array(
      'field' => 'max_flow5',
      'label' => 'max_flow5',
      'rules' => 'is_natural'
    )
  )
);

$config['error_prefix'] = '<span class="red-text  text-lighten-1">';
$config['error_suffix'] = '</span>';