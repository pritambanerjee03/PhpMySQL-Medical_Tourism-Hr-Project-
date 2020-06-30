
;(function () {
var dateTimeForm = function() {
		// $('#date-start').datepicker();
		$('#dp1').datepicker({
         format: 'dd-M-yyyy',
         endDate: new Date()
     	});

	};

$(function(){
		dateTimeForm();
	});


}());