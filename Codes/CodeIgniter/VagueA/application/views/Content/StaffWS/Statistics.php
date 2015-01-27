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
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th>Month</th>
                <th>CAFA</th>
                <th>CAS</th>
                <th>COE</th>  
                <th>COED</th>
                <th>SBE</th>
                <th>SHCP</th>  
                <th>SLG</th>
                

                 
              </tr>
            </thead>
            <tbody class="table-contents">
             <?php $i=0; 
                while($i<$num)
                {
                  
              ?>
              <tr>
                <th><?php echo $college[$i]->Month; ?></th>
                <td><?php echo $college[$i]->CAFA; ?></td>
                <td><?php echo $college[$i]->CAS; ?></td>
                <td><?php echo $college[$i]->COE; ?></td>
                <td><?php echo $college[$i]->COED; ?></td>
                <td><?php echo $college[$i]->SBE; ?></td>
                <td><?php echo $college[$i]->SHCP; ?></td>
                <td><?php echo $college[$i]->SLG; ?></td>
              </tr>
              <?php $i++; } ?>
              </tbody>
            </table>
            </div>
        </div>
        <div class="tab-pane" id="activities">
            <h4>Pane B</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                ac turpis egestas.</p>
        </div>
        <div class="tab-pane" id="AVmat">
            <h4>Pane C</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                ac turpis egestas.</p>
        </div>
    </div><!-- tab content -->
      </div> 
  </div>
      
      
      
      
    
    </div>
    </div>
    </div> <!-- End of Container -->
</div>
</div>