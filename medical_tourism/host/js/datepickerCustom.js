// When the document is ready
jQuery(document).ready(function ($) {
  var date = new Date();
	//date.setDate(date.getDate()-1);           
  $('#appointmentForm .input-group.date').datepicker({ format: "dd-M-yyyy", startDate: '+1d', autoclose: true });  
            
});