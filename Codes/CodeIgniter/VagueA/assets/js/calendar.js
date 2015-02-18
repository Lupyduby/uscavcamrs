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
            events: <?php echo $sked; ?> ,
            eventClick: function(event) {
                if (event.title) {
                 alert(event.title);
                }   
             }  
        });

});