
<div id="marginBelow">
<div class="container statistics-container">
<div class="row">
<ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Statistics</li>
      </ol> 
    
    <div class="col-lg-12" role="main">
      <h2 id="stats" class="page-header">Statistics</h2>
      <div class="col-lg-12 col-sm-7" id="usertabs">
      <div class="usertab-content">               
      <ul class="nav nav-tabs nav-justified" id="usertab-content">
      <li class="active" role="presentation">
      <a href="#department" data-toggle="tab">Department</a>
      </li>
      <li role="presentation">
      <a href="#activities" data-toggle="tab">Activties</a>
      </li>
      <li role="presentation">
      <a href="#AVmat" data-toggle="tab">AV Materials and Equipments</a>
      </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="department">
            <div class="table-responsive">
          <table id="table_dept" class="display">
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

        <div class="tab-pane" id="activities">
          <table id="table_id" class="display">
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
        <div class="tab-pane" id="AVmat">
           <table id="table_id" class="display">
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
    </div><!-- tab content -->
      </div> 
  </div>
      
      
      
      
    
    </div>
    </div>
    </div> <!-- End of Container -->
</div>
