<html>
<head>


<!--<script src="<?php echo base_url(); ?>assets/js/chart/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart/js/jquery.min.js"></script>
-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<!--<script src="<?php echo base_url(); ?>assets/js/chart/js/adapters/standalone-framework.js"></script>
-->
<script>
/*for more info go to http://www.highcharts.com/docs */
    $(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Audio Visual Center Usage'
        },
        xAxis: {
            categories:  /*para ni sa month. it should be dynamic*/
                <?php echo $monthJ; ?>
            
        },
        yAxis: [{
            min: 0,
            title: {
                text: 'Number of Usage'
            }
        }, {
            title: {
                text: 'Number of Usage'
            },
            opposite: true
        }],
        legend: {
            shadow: false
        },
        tooltip: {
            shared: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.1,
                borderWidth: 0
            }
        }, 
        series:
        // [{ /*ari para retrieve ug data*/ 
 /*           name: 'Rigney Hall',
            color: 'rgba(165,170,217,1)',
            data: [150, 73, 20],
            pointPadding: 0.4,
            pointPlacement: -0.3
        }, {
            name: 'Van Engelen Hall',
            color: 'rgba(126,86,134,.9)',
            data: [140, 90, 40],
            pointPadding: 0.4,
            pointPlacement: -0.15
        }, {
            name: 'Hoepenner Hall',
            color: 'rgba(248,161,63,1)',
            data: [183.6, 178.8, 198.5],
            pointPadding: 0.4,
            pointPlacement: 0,
            yAxis: 1
            
        }, {
            name: 'Buttenbruch Hall',
            color: 'rgba(186,60,61,.9)',
            data: [203.6, 198.8, 208.5],
            pointPadding: 0.4,
            pointPlacement: 0.15,
            yAxis: 1
        },{
            name: 'Gansewinkel Hall',
            color: 'yellow',
            data: [103.6, 128.8, 204.5],
            pointPadding: 0.4,
            pointPlacement: 0.3,
            yAxis: 1
        }]
   */
    <?php echo $monthK; ?>

    });
});

</script>

</head>

    <body>
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto">
            
        </div>
         <?php echo $monthK; ?>
    </body>
</html>