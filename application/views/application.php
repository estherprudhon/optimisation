<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
	<div class="col s8 offset-s2">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Optimisation du chargement des turbines</span>
					<form action="<?= site_url('app'); ?>" method="post">
						<div class="row">
		        <div class="input-field col s4 offset-s1">
		          <input placeholder="0" name="total_flow" id="total_flow" type="number" class="<?= (empty(form_error('total_flow'))) ? "validate" : "invalid" ?>" value="<?= set_value('total_flow') ?>">
							<?= form_error('total_flow'); ?>
		          <label for="total_flow">Débit total à turbiner en m³/s</label>
		        </div>
						<div class="input-field col s4 offset-s2">
		          <input placeholder="0" name="upper_elevation" id="upper_elevation" type="number" class="<?= (empty(form_error('upper_elevation'))) ? "validate" : "invalid" ?>" value="<?= set_value('upper_elevation') ?>">
							<?= form_error('upper_elevation'); ?>
		          <label for="upper_elevation">Elevation amont en m</label>
		        </div>
						</div>


						<div class="row">

							<div class="col s2 offset-s1" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" id="turbine1" alt="Logo" style="height:32px;"><br>
								<b>Turbine 1</b>
							</div>
							<div class="col s2" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" id="turbine2" alt="Logo" style="height:32px;"><br>
								<b>Turbine 2</b>
							</div>
							<div class="col s2" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" id="turbine3" alt="Logo" style="height:32px;"><br>
								<b>Turbine 3</b>
							</div>
							<div class="col s2" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" id="turbine4" alt="Logo" style="height:32px;"><br>
								<b>Turbine 4</b>
							</div>
							<div class="col s2" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" id="turbine5" alt="Logo" style="height:32px;"><br>
								<b>Turbine 5</b>
							</div>
						</div>

						<div class="row">
							<div class="col s2 offset-s1" style="text-align:center">
									<div class="switch">
								    <label>
								      Off
								      <input name="is_turbine1" id="is_turbine1" type="checkbox" checked="checked">
								      <span class="lever"></span>
								      On
								    </label>
								  </div>
							</div>
							<div class="col s2" style="text-align:center">
								<div class="switch">
									<label>
										Off
										<input name="is_turbine2" id="is_turbine2" type="checkbox" checked="checked">
										<span class="lever"></span>
										On
									</label>
								</div>
							</div>
							<div class="col s2" style="text-align:center">
								<div class="switch">
									<label>
										Off
										<input name="is_turbine3" id="is_turbine3" type="checkbox" checked="checked">
										<span class="lever"></span>
										On
									</label>
								</div>
							</div>
							<div class="col s2" style="text-align:center">
								<div class="switch">
									<label>
										Off
										<input name="is_turbine4" id="is_turbine4" type="checkbox" checked="checked">
										<span class="lever"></span>
										On
									</label>
								</div>
							</div>
							<div class="col s2" style="text-align:center">
								<div class="switch">
									<label>
										Off
										<input name="is_turbine5" id="is_turbine5" type="checkbox" checked="checked">
										<span class="lever"></span>
										On
									</label>
								</div>
							</div>
						</div>

						<div class="row">

							<div class="input-field col s2 offset-s1" style="text-align:center">
								<input placeholder="160" name="max_flow1" id="max_flow1" type="number" class="<?= (empty(form_error('max_flow1'))) ? "validate" : "invalid" ?>" style="text-align:right">
								<?= form_error('max_flow1'); ?>
								<label for="max_flow1">Débit max en m³/s</label>
							</div>
							<div class="input-field col s2" style="text-align:center">
								<input placeholder="160" name="max_flow2" id="max_flow2" type="number" class="<?= (empty(form_error('max_flow2'))) ? "validate" : "invalid" ?>" style="text-align:right">
								<?= form_error('max_flow2'); ?>
								<label for="max_flow2">Débit max en m³/s</label>
							</div>
							<div class="input-field col s2" style="text-align:center">
								<input placeholder="160" name="max_flow3" id="max_flow3" type="number" class="<?= (empty(form_error('max_flow3'))) ? "validate" : "invalid" ?>" style="text-align:right">
								<?= form_error('max_flow3'); ?>
								<label for="max_flow3">Débit max en m³/s</label>
							</div>
							<div class="input-field col s2" style="text-align:center">
								<input placeholder="160" name="max_flow4" id="max_flow4" type="number" class="<?= (empty(form_error('max_flow4'))) ? "validate" : "invalid" ?>" style="text-align:right">
								<?= form_error('max_flow4'); ?>
								<label for="max_flow4">Débit max en m³/s</label>
							</div>
							<div class="input-field col s2" style="text-align:center">
								<input placeholder="160" name="max_flow5" id="max_flow5" type="number" class="<?= (empty(form_error('max_flow5'))) ? "validate" : "invalid" ?>" style="text-align:right">
								<?= form_error('max_flow5'); ?>
								<label for="max_flow5">Débit max en m³/s</label>
							</div>
						</div>

						<div class="right-align">
							<button class="btn waves-effect waves-light" value="optimiser" type="submit" name="results">Optimiser
								<i class="material-icons right">send</i>
							</button>
						</div>
					</form>
			</div>
		</div>
	</div>
</div>