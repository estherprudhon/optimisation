<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
	<div class="col s8 offset-s2">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Résultats :</span>
        <div class="row">
          <div class="col s8 offset-s2">
            <table class="striped centered responsive-table">
              <thead>
                <tr>
                    <th>Turbine</th>
                    <th>Débit en m³/s</th>
                    <th>Puissance en MWh</th>
                </tr>
              </thead>

              <tbody>
                <?php $countOptimalQ = 0; $countOptimalProduction = 0;
                foreach ($turbines as $num_turbine => $turbine) { ?>
                  <tr>
                    <td> Turbine <?= $num_turbine; ?></td>
                    <td> <?php echo($turbine[0]); $countOptimalQ += $turbine[0]; ?></td>
                    <td> <?php echo($turbine[1]) ;$countOptimalProduction += $turbine[1]; ?></td>
                  </tr>
                <?php } ?>
                <tr>
                  <td> <b><em>Total</em></b></td>
                  <td> <b><em><?= $countOptimalQ; ?></em></b></td>
                  <td> <b><em><?= $countOptimalProduction; ?></em></b></td>
              </tbody>
            </table>
          </div>
        </div>
        <div class="right-align">
          <a href="<?= site_url("resultats.csv"); ?>" download="resultats.csv" class="waves-effect waves-light btn"><i class="material-icons right">cloud_download</i>resultats.csv</a>
        </div>

      </div>
    </div>
  </div>
</div>
