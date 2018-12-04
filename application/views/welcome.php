<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
	<div class="col s8 offset-s2">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Optimisation du chargement des turbines</span>
					<form>
						<div class="row">
		        <div class="input-field col s3 offset-s1">
		          <input placeholder="0" id="first_name" type="number" class="validate">
		          <label for="first_name">Débit total à turbiner en m³/s</label>
		        </div>
						<div class="input-field col s3 offset-s1">
		          <input placeholder="0" id="first_name" type="number" class="validate">
		          <label for="first_name">Elevation amont en m</label>
		        </div>
						</div>


						<div class="row">

							<div class="col s2 offset-s1" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" alt="Logo" style="height:34px;"><br>
								<b>Turbine 1</b>
							</div>
							<div class="col s2" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" alt="Logo" style="height:32px;"><br>
								<b>Turbine 2</b>
							</div>
							<div class="col s2" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" alt="Logo" style="height:32px;"><br>
								<b>Turbine 3</b>
							</div>
							<div class="col s2" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" alt="Logo" style="height:32px;"><br>
								<b>Turbine 4</b>
							</div>
							<div class="col s2" style="text-align:center">
								<img src="<?= img_url('turbine.png') ?>" alt="Logo" style="height:32px;"><br>
								<b>Turbine 5</b>
							</div>
						</div>

						<div class="row">
							<div class="col s2 offset-s1" style="text-align:center">
									<div class="switch">
								    <label>
								      Off
								      <input type="checkbox" checked="checked">
								      <span class="lever"></span>
								      On
								    </label>
								  </div>
							</div>
							<div class="col s2" style="text-align:center">
								<div class="switch">
									<label>
										Off
										<input type="checkbox" checked="checked">
										<span class="lever"></span>
										On
									</label>
								</div>
							</div>
							<div class="col s2" style="text-align:center">
								<div class="switch">
									<label>
										Off
										<input type="checkbox" checked="checked">
										<span class="lever"></span>
										On
									</label>
								</div>
							</div>
							<div class="col s2" style="text-align:center">
								<div class="switch">
									<label>
										Off
										<input type="checkbox" checked="checked">
										<span class="lever"></span>
										On
									</label>
								</div>
							</div>
							<div class="col s2" style="text-align:center">
								<div class="switch">
									<label>
										Off
										<input type="checkbox" checked="checked">
										<span class="lever"></span>
										On
									</label>
								</div>
							</div>
						</div>

						<div class="row">

							<div class="col s2 offset-s1" style="text-align:center">
								<label class="active" for="first_name2">Débit max en m³/s</label>
								<input value="160" id="first_name2" type="number" class="validate" style="text-align:right">
							</div>
							<div class="col s2" style="text-align:center">
								<label class="active" for="first_name2">Débit max en m³/s</label>
								<input value="160" id="first_name2" type="number" class="validate" style="text-align:right">
							</div>
							<div class="col s2" style="text-align:center">
								<label class="active" for="first_name2">Débit max en m³/s</label>
								<input value="160" id="first_name2" type="number" class="validate" style="text-align:right">
							</div>
							<div class="col s2" style="text-align:center">
								<label class="active" for="first_name2">Débit max en m³/s</label>
								<input value="160" id="first_name2" type="number" class="validate" style="text-align:right">
							</div>
							<div class="col s2" style="text-align:center">
								<label class="active" for="first_name2">Débit max en m³/s</label>
								<input value="160" id="first_name2" type="number" class="validate" style="text-align:right">
							</div>
						</div>

						<div class="right-align">
							<button class="btn waves-effect waves-light" type="submit" name="action">Optimiser
								<i class="material-icons right">send</i>
							</button>
						</div>
					</form>
			</div>
		</div>
	</div>
</div>