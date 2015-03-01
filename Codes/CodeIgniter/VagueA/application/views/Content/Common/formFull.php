<div id="marginTopFormFull">
<div id="contentMargin">
<div class="col-md-11 reservation-form">
      <h1><center/><b>Reservation Form<b></h1>
      <form method="POST" action="<?php echo base_url(); ?>user/validateFormFull">

        
 <div id="marginLeftFullForm">

        <div class="col-md-11 activity-content" id="activity">
        <br><br><br><br>
            <div style="left:10%; top:15%;">
              <h2 id="titleFormFull"><b><i/>Activity</b></h2>
                   <table id="activity-subcontent activity">
                    <tr height ="50">
                      <td ><label for="activity" id="purpose">Activity</label></td>
                      <td id="activity-form">
                          <select class="form-control-group" name=" activity">
                            <option value="Others">Others</option>
                              <?php $i=0; 
                              while($i<$actNum)
                              {
                              ?>
                                <?php echo $i; ?>
                                <option value="<?php echo $activity[$i]->Activity_Name; ?>"><?php echo $activity[$i]->Activity_Name; ?></option>

                              <?php $i++; } ?>

                         </select>
                     </td>
                     <?php 
                  if($this->session->userdata('message'))
                  {
                    echo $this->session->userdata('message');
                    $this->session->unset_userdata('message');
                  }
                 
                ?>
                      <td id="purpose"><label> &emsp;&emsp;&emsp; Others: </label></td>
                      <td><input type="text" class="form-control-group" placeholder="" name="others" value=''></td>
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
        <h2 id="titleFormFullE"><b>Equipments needed</b></h2>
        <h3/>Check the box<br><br>
        
        <div class="col-md-4">
        <table class="equipments">
         <?php $i=0; 
                while($i<$numAsset)
                {
                  if($asset[$i]->Asset_Remarks=="Functioning") 
                  {
              ?>
                     <tr>
                        <td><input type="checkbox" name="equip[]" value="<?php echo $asset[$i]->Asset_ID?>"> <?php echo $asset[$i]->Asset_Quantity." ".$asset[$i]->Asset_Name; ?> </td>
                    </tr>

            <?php } 
                  if($asset[$i]->Asset_Remarks!="Functioning")
                  {  ?>    
                    <tr>
                        <td><input type="checkbox" name="equip[]" DISABLED> <?php echo $asset[$i]->Asset_Quantity." ".$asset[$i]->Asset_Name." (".$asset[$i]->Asset_Remarks.")"; ?></td>
                    </tr>
             <?php }
                 $i++; 
              } ?>
        </table>
        </div>


      
        </div>

        <div class="col-md-9 activity-content" id="software">
        <br><br><br><br>      
           <h2 id="titleFormFullS"><b>Software needed</b></h2>
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

    </div>
  </div>


  