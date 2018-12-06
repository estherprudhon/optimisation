(function($){
  console.log('start');
  $('#is_turbine1').change(function() {
    if ($('#is_turbine1').is(':checked') == true){
      $('#max_flow1').val('160').prop('disabled', false);
      console.log('checked');
  } else {
      $('#max_flow1').val('0').prop('disabled', true);
      console.log('unchecked');
  }
  });

  $('#is_turbine2').change(function() {
    if ($('#is_turbine2').is(':checked') == true){
      $('#max_flow2').val('160').prop('disabled', false);
      console.log('checked');
  } else {
      $('#max_flow2').val('0').prop('disabled', true);
      console.log('unchecked');
  }
  });

  $('#is_turbine3').change(function() {
    if ($('#is_turbine3').is(':checked') == true){
      $('#max_flow3').val('160').prop('disabled', false);
      console.log('checked');
  } else {
      $('#max_flow3').val('0').prop('disabled', true);
      console.log('unchecked');
  }
  });

  $('#is_turbine4').change(function() {
    if ($('#is_turbine4').is(':checked') == true){
      $('#max_flow4').val('160').prop('disabled', false);
      console.log('checked');
  } else {
      $('#max_flow4').val('0').prop('disabled', true);
      console.log('unchecked');
  }
  });

  $('#is_turbine5').change(function() {
    if ($('#is_turbine5').is(':checked') == true){
      $('#max_flow5').val('160').prop('disabled', false);
      console.log('checked');
  } else {
      $('#max_flow5').val('0').prop('disabled', true);
      console.log('unchecked');
  }
  });
})(jQuery); // end of jQuery name space

