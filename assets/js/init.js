$(document).ready(function(){
    $(".dropdown-trigger").dropdown();
  });

(function($){
  console.log('start');
  $('#is_turbine1').change(function() {
    if ($('#is_turbine1').is(':checked') == true){
      $('#max_flow1').prop('disabled', false);
      $("#turbine1").attr('src',"assets/img/turbine.png");
      console.log('checked');
  } else {
      $('#max_flow1').prop('disabled', true);
      $("#turbine1").attr('src',"assets/img/turbine_off.png");
      console.log('unchecked');
  }
  });

  $('#is_turbine2').change(function() {
    if ($('#is_turbine2').is(':checked') == true){
      $('#max_flow2').prop('disabled', false);
      $("#turbine2").attr('src',"assets/img/turbine.png");
      console.log('checked');
  } else {
      $('#max_flow2').prop('disabled', true);
      $("#turbine2").attr('src',"assets/img/turbine_off.png");
      console.log('unchecked');
  }
  });

  $('#is_turbine3').change(function() {
    if ($('#is_turbine3').is(':checked') == true){
      $('#max_flow3').prop('disabled', false);
      $("#turbine3").attr('src',"assets/img/turbine.png");
      console.log('checked');
  } else {
      $('#max_flow3').prop('disabled', true);
      $("#turbine3").attr('src',"assets/img/turbine_off.png");
      console.log('unchecked');
  }
  });

  $('#is_turbine4').change(function() {
    if ($('#is_turbine4').is(':checked') == true){
      $('#max_flow4').prop('disabled', false);
      $("#turbine4").attr('src',"assets/img/turbine.png");
      console.log('checked');
  } else {
      $('#max_flow4').prop('disabled', true);
      $("#turbine4").attr('src',"assets/img/turbine_off.png");
      console.log('unchecked');
  }
  });

  $('#is_turbine5').change(function() {
    if ($('#is_turbine5').is(':checked') == true){
      $('#max_flow5').prop('disabled', false);
      $("#turbine5").attr('src',"assets/img/turbine.png");
      console.log('checked');
  } else {
      $('#max_flow5').prop('disabled', true);
      $("#turbine5").attr('src',"assets/img/turbine_off.png");
      console.log('unchecked');
  }
  });
})(jQuery); // end of jQuery name space

