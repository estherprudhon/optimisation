<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
	<div class="col s8 offset-s2">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Résultats :</span>
        <div class="row">
          <div class="col s10 offset-s1">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
	title: {
    fontSize: 20,
		text: "Débit turbiné par turbine sur la période de test"
	},
	axisX: {
    titleFontSize: 14,
		title: "Périodes de tests",
    labelFontSize: 14
	},
	axisY2: {
		title: "Débit turbiné",
    titleFontSize: 16,
    maximum: 180,
    interval: 20,
		suffix: "m³/s",
    labelFontSize: 14
	},
	toolTip: {
		shared: true
	},
	legend: {
    display: true,
		cursor: "pointer",
		verticalAlign: "top",
		horizontalAlign: "center",
		dockInsidePlotArea: true,
		itemclick: toogleDataSeries,
    legendFontSize: 10
	},
	data: [{
		type:"line",
		axisYType: "secondary",
    fontSize : 10,
		name: "Turbine 1",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "0m³/s",
		dataPoints: <?php echo json_encode($results[0]); ?>
	},
	{
		type: "line",
		axisYType: "secondary",
		name: "Turbine 2",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "###m³/s",
		dataPoints: <?php echo json_encode($results[1]); ?>
	},
	{
		type: "line",
		axisYType: "secondary",
		name: "Turbine 3",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "###m³/s",
		dataPoints: <?php echo json_encode($results[2]); ?>
	},
	{
		type: "line",
		axisYType: "secondary",
		name: "Turbine 4",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "#m³/s",
		dataPoints: <?php echo json_encode($results[3]); ?>
	},
	{
		type: "line",
		axisYType: "secondary",
		name: "Turbine 5",
		showInLegend: true,
		markerSize: 0,
		yValueFormatString: "###m³/s",
		dataPoints: <?php echo json_encode($results[4]); ?>
	}]
});
chart.render();

function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
<div id="chartContainer" style="height: 400px; width: 100%;"></div>
</div>
</div>
<div class="right-align">
  <a href="<?= site_url("exemple_resultats.csv"); ?>" download="exemple_resultats.csv" class="waves-effect waves-light btn"><i class="material-icons right">cloud_download</i>exemple_resultats.csv</a>
</div>
</div>

</div>
</div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>