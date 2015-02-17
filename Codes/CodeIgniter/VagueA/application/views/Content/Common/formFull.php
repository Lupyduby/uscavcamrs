<div class="col-md-11 reservation-form">
      <h1><center/>Reservation Form</h1>
      <form method="POST" action="<?php echo base_url(); ?>user/validateFormFull">
      <table class="purpose-content">
        
      </table>
        
        <div class="col-md-11 asset-area">
      
        <ul class="nav nav-pills asset-list">
        <li role="presentation">
          <a href="" data-toggle="tab"  id="act"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
         <span class="glyphicon-class">Activity Details</span></a>
        </li>
        <li role="presentation" >
          <a href="" data-toggle="tab"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
          <span class="glyphicon-class" id="equip">Equipments Needed</span></a>
        </li>
        <li role="presentation">
          <a href="" data-toggle="tab"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>
          <span class="glyphicon-class" id="soft">Software Needed</span></a>
        </li>
        </ul>    
        </div>

        <div class="col-md-11 activity-content" id="activity">
        <br><br><br><br>
            <div style="left:10%; top:15%;">
                   <table id="activity-subcontent activity">
                    <tr height ="50">
                      <td ><label for="activity" id="purpose">Activity</label></td>
                      <td id="activity-form">
                          <select class="form-control-group" name="activity">
                              <?php $i=0; 
                              while($i<$actNum)
                              {
                              ?>
                                <?php echo $i; ?>
                                <option value="<?php echo $activity[$i]->Activity_Name; ?>"><?php echo $activity[$i]->Activity_Name; ?></option>

                              <?php $i++; } ?>

                         </select>
                     </td>
                      <td id="purpose"><label> &emsp;&emsp;&emsp; Others: </label></td>
                      <td><input type="text" class="form-control-group" placeholder="" name="others"></td>
                    </tr>
                    <tr>
                        <td><h4 id="purpose">Purpose</h4></td>
                        <td> <select class="form-control-group" name="purpose">
                        <option value="Classroom Instruction-Related Activities">Classroom Instruction-Related Activities</option>
                        <option value="College/BED Base Activites">College/BED Base Activites</option>
                        
                      </select></td>
                  </tr>
                  
              </table>
            </div>
        </div> 

        <div class="col-md-9 activity-content" id="equipments">
        <br><br>
        <h2/>Check the box<br><br>
        
        <div class="col-md-4">
        <table class="equipments">
            <tr>
              <td><input type="checkbox" name="equip[]" value="computer"> Computer</td>
            </tr>
           <tr>
                <td><input type="checkbox" name="equip[]" value="mic">2 Microphones</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="equip[]" value="lcd"> Overhead Projector</td>
            </tr>
        </table>
        </div>

        <div class="col-md-4">
        <table class="equipments">
            <tr>
              <td><input type="checkbox" name="equip[]" value="dvd"> DVD/CD Player</td>
            </tr>
            <tr>
              <td><input type="checkbox" name="equip[]" value="vhs"> VHS Player</td>
            </tr>
        </table>
        </div>
        </div>

        <div class="col-md-9 activity-content" id="software">
        <br><br><br><br>      
  
        <table id="table_id" class="display">
            <thead class="theader-contents">
              <tr>
                <th><h4>Code</h4></th>
                <th><h4>Title</h4></th>
                <th><h4>Runtime</h4></th>
                <th><h4>Please check</h4></th>
              </tr>
            </thead>
            <tbody class="table-contents">
              <?php $i=0; 
                while($i<$num)
                {
                  
              ?>
                <tr>
                    <td><?php echo $result[$i]->Software_CallNumber; ?></td>
                    <td><?php echo $result[$i]->Software_title; ?></td>
                    <td><?php echo $result[$i]->Software_runningTime; ?></td>
                    <td><input type="checkbox" name="software[]" value="<?php echo $result[$i]->Software_ID; ?>"></td>
                    
                    
                </tr>
              <?php $i++; } ?>
             
            </tbody>
  
          </table>
           <div class="col-md-9 button-area"><button type="submit" class="btn2 btn-success">Submit</button>
       </div>

        </div>
              </form>
            </div>
            </div>



    </div>
    </div> <!-- End of Container -->

   