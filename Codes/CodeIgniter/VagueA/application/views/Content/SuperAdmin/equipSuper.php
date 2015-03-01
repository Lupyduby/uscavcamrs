<div id="contentMargin">
<div class="container equipments-container content">
<div class="row">
<ol class="breadcrumb">
        <li><a href="#">Manage</a></li>
        <li class="active">Equipment Management</li>
      </ol>
<div class="panel panel-default">
  <div class="panel-body">
  <div class="panel panel-success">
  <div class="col-md-12 panel-heading">
  <div class="col-md-9 title-content">
    <h3 class="panel-title"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>  Equipment Management</h3>
  </div>

  </div>
  
  <div class="panel-body">
         <div class="equipments-content">
        <div class="table-responsive">
          <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th><h4>Campus</h4></th>
                <th><h4>Name</h4></th>
                <th><h4>Brand</h4></th>
                <th><h4>Serial</h4></th>
                <th><h4>Remarks</h4></th>
                <th><h4>Quantity</h4></th>
                
              </tr>
            </thead>
            
              <?php $i=0; 
                while($i<$num)
                {
                   
              ?>
                      

          <tr>
            <td id="oneLineTd"><?php echo $result[$i]->Campus_Name; ?></td>
            <td id="oneLineTd"><?php echo $result[$i]->Asset_Name; ?></td>
            <td id="oneLineTd"><?php echo $result[$i]->Asset_Brand; ?></td>
            <td id="oneLineTd"><?php echo $result[$i]->Asset_Serial; ?></td>
            <td id="oneLineTd"><?php echo $result[$i]->Asset_Remarks; ?></td>
            <td id="oneLineTd"><?php echo $result[$i]->Asset_Quantity; ?></td>
           
          </tr>
              <?php $i++; } ?> 
              
           </table>
          </div>
        </div>
     
    </div>
  </div>
</div>
           
            
  

          
   </div>

      </div>
  </div>
</div>

      