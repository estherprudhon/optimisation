<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Optimisation</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?= css_url('materialize') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="<?= css_url('style') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?= img_url('turbine.png'); ?>" type="image/jpg" rel="icon"/>
</head>

<body>
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="<?= site_url('app'); ?>">Application</a></li>
		<li class="divider"></li>
		<li><a href="<?= site_url('example'); ?>">Exemple</a></li>
	</ul>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper valign-wrapper">
      <a id="logo-container" href="<?= site_url('') ?>" class="brand-logo center"><img class="valign-wrapper" src="<?= img_url('logo.png') ?>" alt="Logo" style="height:34px;"></a>
			<ul class="right hide-on-med-and-down">
	      <!-- Dropdown Trigger -->
	      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
	    </ul>
		</div>
  </nav>