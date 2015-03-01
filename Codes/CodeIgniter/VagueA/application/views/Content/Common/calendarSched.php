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

<div id="contentMargin">
<div class="container equipments-container content">
<div class="row">
  <ol class="breadcrumb">
        <li><a href="#">Calendar</a></li>
        <li class="active"><?php echo $hall; ?></li>
      </ol>
    
    <div class="panel panel-default">
  <div class="panel-body">
	<div class="panel panel-success">
  <div class="col-md-12 panel-heading"> <!--panel heading-->
	<div class="col-md-9 title-content"> 
	  <h3 class="panel-title"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>  Calendar of Bookings</h3>
	</div>
  </div> <!--panel heading-->
     
     <div class="panel-body"> 
		<center><h3 class="page-header"><?php echo $hall; ?></h3></center>
		<div class="panel panel-default">
  <div class="panel-body" id="calendar">
  </div>
  </div>
      </div>
     
    </div> <!--panel body-->
    </div> <!--panel success-->
	
	</div> <!--panel default-->
    </div> <!-- row -->
  </div>
  </div>
  
  