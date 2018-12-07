<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="card-image">
          <img src="<?= img_url('welcome.jpg') ?>" class="responsive-img">
          <span class="card-title">Accueil</span>
        </div>
        <div class="card-content">
          <p>Bienvenue sur notre application qui va vous permettre d'optimiser
						les charges des turbines en temps réel pour la centrale
						hydro-électrique Chutes du Diable.</p>
        </div>
        <div class="card-action">
          <a href="<?= site_url('app'); ?>">Accéder à l'application temps réel</a>
					<a href="<?= site_url('example'); ?>">Accéder à l'exemple</a>
        </div>
      </div>
    </div>
  </div>

