//jquery phone number validation

jQuery("#phone").keypress(function (e) {
  var length = jQuery(this).val().length;
  if(length > 9) {
    return false;
  } else if(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57))
  {
    return false;
  } else if((length == 0) && (e.which == 48)) {
    return false;
  }
});

//jquery code for slider data fetch in table

