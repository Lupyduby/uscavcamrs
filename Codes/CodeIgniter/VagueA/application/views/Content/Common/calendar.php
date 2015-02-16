<html>
<head>
<link rel='stylesheet' href='<?php echo base_url(); ?>assets/js/calendar/lib/cupertino/jquery-ui.min.css' />
<link href='<?php echo base_url(); ?>assets/css/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo base_url(); ?>assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo base_url(); ?>assets/js/calendar/lib/moment.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/calendar/lib/jquery.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/calendar/fullcalendar.min.js'></script>

<script>
/*for more info go to http://fullcalendar.io/docs/ */
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaDay'
			},
			displayEventEnd: true, 
			minTime: '07:00:00',
			maxTime: '22:00;00',
			eventLimit: true, // allow "more" link when too many events
			allDaySlot: false,
			clickable: true,
			selectable: true,
			events: [
			{
				/*ari i.retrieve ang data from db*/
				title: 'gwpawo',
				start: '2015-02-15T08:30:00',
				end: '2015-02-15T09:30:00'
				/*url: '<?php echo base_url(); ?> application/controllers/json-rigney'*/
			}
			]		
		});
			
		
	});

</script>

<style>

	body {
		margin: 20px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;	
			}

	#calendar {
		max-width: 800px;
		margin: 0 auto;
		
	}

</style>
</head>


<body>


	<div id='calendar'>
		
	</div>


</body>

</html>

 
