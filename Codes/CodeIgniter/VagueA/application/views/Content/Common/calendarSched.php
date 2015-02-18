
<script>
/*for more info go to http://fullcalendar.io/docs/ */
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			height: 500,
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
			events: <?php echo $sked; ?>
	//		onclick (js)
		});
			
	});

</script>

	<div id="cal">
<h1><?php echo $hall; ?></h1>
</div>
<div id='calendar'>
		
	</div>

