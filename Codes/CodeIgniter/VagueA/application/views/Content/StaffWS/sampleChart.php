<script>
/*for more info go to http://www.highcharts.com/docs */
    $(function () {
    $('#college').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Audio Visual Center Usage'
        },
        xAxis: {
            categories: <?php echo $monthJ; ?>
      

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
                grouping: false,
                shadow: false,
                borderWidth: 0
            }
        }, 
        series: <?php echo $monthK; ?>
 //       [{ /*ari para retrieve ug data*/ 
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
    });
});

</script>

 <div id="college" style="min-width: 400px; height: 400px; margin: 0 auto">
            
        </div>

        <?php echo $monthJ; ?>