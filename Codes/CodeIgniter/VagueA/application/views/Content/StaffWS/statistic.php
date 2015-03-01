
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
                pointPadding: 0.2,
                borderWidth: 0
            }
        }, 
        series: <?php echo $collegeChart; ?>
 
    });



     $('#activity').highcharts({
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
                pointPadding: 0.2,
                borderWidth: 0
            }
        }, 
        series: <?php echo $activityChart; ?>
 
    });



      $('#software').highcharts({
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
                pointPadding: 0.2,
                borderWidth: 0
            }
        }, 
        series:[ <?php echo $softwareChart; ?> ]
 
    });

      $('#hall').highcharts({
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
                pointPadding: 0.2,
                borderWidth: 0
            }
        }, 
        series: <?php echo $hallChart; ?>   
 
    });
});

</script>


<div id="contentMargin">
<div class="stat guidelines-container content">
<div class="col-xs-3"> 
    <ul class="nav nav-tabs tabs-left">
      <li class="active" id="guidelines"><a href="#Guidelines"  data-toggle="tab"><i class="fa fa-university"></i>  College</a></li>
      <li id="policy"><a href="#Policy" data-toggle="tab"><i class="fa fa-star"></i> Activity</a></li>
      <li id="steps"><a href="#Steps" data-toggle="tab"><i class="fa fa-wrench"></i> Materials</a></li>
      <li id="halls"><a href="#hallDiv" data-toggle="tab"><i class="fa fa-wrench"></i> Halls</a></li>
    </ul>
</div>


    
    <div class="col-xs-9 sidetab-content" role="main">
      <div class="equipments-content" id="guidelinesDiv" > <!-- Start of Guidelines -->
        
		<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-bar-chart"></i>  Bar Chart (Usage Per College)</h3>
				</div>
			<div class="panel-body" id="college"></div>
			</div>
          <div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-table"></i>  Table of Data (Usage Per College)</h3>
				</div>
			<div class="panel-body">
			<div class="stat-tables table-responsive">
				 <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th>Colleges</th>
                <th>January <?php if(1>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>February <?php if(2>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>March <?php if(3>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>April <?php if(4>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>May <?php if(5>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>June <?php if(6>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>July <?php if(7>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>August <?php if(8>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>September <?php if(9>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>October <?php if(10>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>November <?php if(11>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>December <?php if(12>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
             </tr>
            </thead>
            <tbody class="table-contents">
             <?php $i=0; 
                while($i<$numColl)
                {
                  
              ?>
              <tr>
                <th><?php echo $college[$i]->college_Name; ?></th>
                <td><?php echo $college[$i]->college_January; ?></td>
                <td><?php echo $college[$i]->college_February; ?></td>
                <td><?php echo $college[$i]->college_March; ?></td>
                <td><?php echo $college[$i]->college_April; ?></td>
                <td><?php echo $college[$i]->college_May; ?></td>
                <td><?php echo $college[$i]->college_June; ?></td>
                <td><?php echo $college[$i]->college_July; ?></td>
                <td><?php echo $college[$i]->college_August; ?></td>
                <td><?php echo $college[$i]->college_September; ?></td>
                <td><?php echo $college[$i]->college_October; ?></td>
                <td><?php echo $college[$i]->college_November; ?></td>
                <td><?php echo $college[$i]->college_December; ?></td>
              </tr>
              <?php $i++; } ?>
              </tbody>
            </table>
			</div>
			</div>
			</div>
          

      </div> <!-- End of Guidelines -->

       <div class="equipments-content" id="policyDiv"> <!-- Start of Policy -->
        <div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-bar-chart"></i>  Bar Chart (Usage Per Activity Type)</h3>
				</div>
			<div class="panel-body" id="activity"></div>
			</div>
         <div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-table"></i>  Table of Data (Usage Per Activity Type)</h3>
				</div>
			<div class="panel-body">
			<div class="stats-table table-responsive">
				<table id="table_id2" class="display">
            <thead class="theader-contents">
              <tr>
                <th>Activity</th>
                <th>January <?php if(1>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>February <?php if(2>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>March <?php if(3>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>April <?php if(4>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>May <?php if(5>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>June <?php if(6>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>July <?php if(7>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>August <?php if(8>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>September <?php if(9>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>October <?php if(10>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>November <?php if(11>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>December <?php if(12>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
             </tr>
            </thead>
            <tbody class="table-contents">
             <?php $j=0; 
                while($j<$numAct)
                {
                  
              ?>
              <tr>
                <th><?php echo $activity[$j]->Activity_Name; ?></th>
                <td><?php echo $activity[$j]->Activity_January; ?></td>
                <td><?php echo $activity[$j]->Activity_February; ?></td>
                <td><?php echo $activity[$j]->Activity_March; ?></td>
                <td><?php echo $activity[$j]->Activity_April; ?></td>
                <td><?php echo $activity[$j]->Activity_May; ?></td>
                <td><?php echo $activity[$j]->Activity_June; ?></td>
                <td><?php echo $activity[$j]->Activity_July; ?></td>
                <td><?php echo $activity[$j]->Activity_August; ?></td>
                <td><?php echo $activity[$j]->Activity_September; ?></td>
                <td><?php echo $activity[$j]->Activity_October; ?></td>
                <td><?php echo $activity[$j]->Activity_November; ?></td>
                <td><?php echo $activity[$j]->Activity_December; ?></td>
              </tr>
              <?php $j++; } ?>
              </tbody>
            </table>
			</div>
			</div>
			</div>
      </div> <!-- End of Policy -->


      <div class="equipments-content" id="hallDiv"> <!-- Start of Hall -->
        <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart"></i>  Bar Chart (Usage Per Hall Type)</h3>
                </div>
            <div class="panel-body" id="hall"></div>
            </div>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-table"></i>  Table of Data (Usage Per Hall Type)</h3>
                </div>
            <div class="panel-body">
            <div class="stats-table table-responsive">
            <table id="table_id4" class="display">
            <thead class="theader-contents" >
              <tr>
                <th><center>Hall</center></th>
                <th><center>January <?php if(1>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>
                <th><center>February <?php if(2>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>
                <th><center>March <?php if(3>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>  
                <th><center>April <?php if(4>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>
                <th><center>May <?php if(5>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>
                <th><center>June <?php if(6>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>  
                <th><center>July <?php if(7>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>
                <th><center>August <?php if(8>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>  
                <th><center>September <?php if(9>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>
                <th><center>October <?php if(10>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>
                <th><center>November <?php if(11>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>  
                <th><center>December <?php if(12>date("m"))  echo date("Y")-1; else echo date("Y"); ?></center></th>
             </tr>
            </thead>
            <tbody class="table-contents">
             <?php $j=0; 
                while($j<$numHall)
                {
                  
              ?>
              <tr>
                <th id="oneLineTd"><?php echo $hall[$j]->Hall_Name; ?></th>
                <td><center><?php echo $hall[$j]->Hall_January; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_February; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_March; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_April; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_May; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_June; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_July; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_August; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_September; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_October; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_November; ?></center></td>
                <td><center><?php echo $hall[$j]->Hall_December; ?></center></td>
              </tr>
              <?php $j++; } ?>
              </tbody>
            </table>
            </div>
            </div>
            </div>
      </div> <!-- End of Hall -->



      <div class="equipments-content" id="stepsDiv">
        <div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-bar-chart"></i>  Bar Chart (Usage Per Software)</h3>
				</div>
			<div class="panel-body" id="software"></div>
			</div>
			
         <div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-table"></i>  Table of Data (Usage Per Software)</h3>
				</div>
			<div class="panel-body">
			<div class="stats-table table-responsive">
			<table id="table_id3" class="display">
            <thead class="theader-contents">
              <tr>
                <th>Materials</th>
                <th>January <?php if(1>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>February <?php if(2>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>March <?php if(3>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>April <?php if(4>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>May <?php if(5>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>June <?php if(6>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>July <?php if(7>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>August <?php if(8>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>September <?php if(9>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>October <?php if(10>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
                <th>November <?php if(11>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>  
                <th>December <?php if(12>date("m"))  echo date("Y")-1; else echo date("Y"); ?></th>
             </tr>
            </thead>
            <tbody class="table-contents">
            
              <tr>
                <th><?php echo "Software"; ?></th>
                 <?php $k=1; 
                while($k<13)
                {
                  $month = date("F", mktime(0, 0, 0, $k, 10));
              ?>
                <td><?php echo $$month; ?></td>
              <?php $k++; } ?> 
              </tr>
              
              </tbody>
            </table>
			</div>
			</div>
			</div>
      </div>




    </div>
    </div>
    </div> <!-- End of Container -->








<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/statistics.js"></script>