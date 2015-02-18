<div class="col-lg-12" role="main">
      <div class="reservation-form">
        <h1 id="avc-guidelines" class="page-header">AVC Reservation Form</h1>
        <div class="col-md-12 validate-content">
        
            <div style="left:10%; top:15%;">
              <form method="POST" action="<?php echo base_url(); ?>user/addreservation">

              <table>
                <?php 
                  if($this->session->userdata('message'))
                  {
                    echo $this->session->userdata('message');
                    $this->session->unset_userdata('message');
                  }
                 
                ?>
                <tr height="50">
                   <td><label for="oldpass" >Campus</label></td>
                    <td>
                      <select class="form-control-general" id="campus" name="campus">
                        <option value="1">Downtown</option>
                        <option value="2">South</option>
                        <option value="3">Talamban</option>
                      </select>
                    </td>
                </tr>


                <tr height="50" id="tc">
                   <td><label for="oldpass">Talamban Campus</label></td>
                    <td>
                      <select class="form-control-general" id="hall" name="hall1">
                        <option value="1">Rigney Hall</option>
                        <option value="2">Heoppener Hall</option>
                        <option value="3">CAS AV Hall</option>
                      </select>
                    </td>
                </tr>


                <tr height="50" id="dc">
                   <td><label for="oldpass">Downtown Campus</label></td>
                    <td>
                      <select class="form-control-general" id="hall" name="hall2">
                        <option value="5">Buttenbruch Hall</option>
                        <option value="6">Ganseweinkel Hall</option>
                      </select>
                    </td>
                </tr>



                <tr height="50" id="sc">
                   <td><label for="oldpass">South Campus</label></td>
                    <td><input type="text" class="form-control-general" id="confirmpass" value="Buchick Hall" name="hall3" readonly></td>
                </tr>


                <tr  height="50">
                   <td><label for="confirmpass">Date</label></td>
                    <td><input class="form-control-general" id="date" type="date" name="date"></td>
                </tr>

                <tr height="50" class="time-row" id="tct">
                   <td><label for="confirmpass">Time start</label></td>
                    <td id="timestart"><select class="form-control-general" id="timestartTC" name="timestartTC">
                        <option value="0730">7:30 AM</option>
                        <option value="0800">8:00 AM</option>
                        <option value="0830">8:30 AM</option>
                        <option value="0900">9:00 AM</option>
                        <option value="0930">9:30 AM</option>
                        <option value="1000">10:00 AM</option>
                        <option value="1030">10:30 AM</option>
                        <option value="1100">11:00 AM</option>
                        <option value="1130">11:30 AM</option>
                        <option value="1200">12:00 PM</option>
                        <option value="1230">12:30 PM</option>
                        <option value="1300">1:00 PM</option>
                        <option value="1330">1:30 PM</option>
                        <option value="1400">2:00 PM</option>
                        <option value="1430">2:30 PM</option>
                        <option value="1500">3:00 PM</option>
                        <option value="1530">3:30 PM</option>
                        <option value="1600">4:00 PM</option>
                        <option value="1630">4:30 PM</option>
                        <option value="1700">5:00 PM</option>
                        <option value="1730">5:30 PM</option>
                        <option value="1800">6:00 PM</option>
                        <option value="1830">6:30 PM</option>
                        <option value="1900">7:00 PM</option>
                        <option value="1930">7:30 PM</option>
                      </select></td>
                   <td><label for="confirmpass">Time end</label></td>
                    <td><select class="form-control-general" id="timeendTC" name="timeendTC">
                        <option value="0830">8:30 AM</option>
                        <option value="0900">9:00 AM</option>
                        <option value="0930">9:30 AM</option>
                        <option value="1000">10:00 AM</option>
                        <option value="1030">10:30 AM</option>
                        <option value="1100">11:00 AM</option>
                        <option value="1130">11:30 AM</option>
                        <option value="1200">12:00 PM</option>
                        <option value="1230">12:30 PM</option>
                        <option value="1300">1:00 PM</option>
                        <option value="1330">1:30 PM</option>
                        <option value="1400">2:00 PM</option>
                        <option value="1430">2:30 PM</option>
                        <option value="1500">3:00 PM</option>
                        <option value="1530">3:30 PM</option>
                        <option value="1600">4:00 PM</option>
                        <option value="1630">4:30 PM</option>
                        <option value="1700">5:00 PM</option>
                        <option value="1730">5:30 PM</option>
                        <option value="1800">6:00 PM</option>
                        <option value="1830">6:30 PM</option>
                        <option value="1900">7:00 PM</option>
                        <option value="1930">7:30 PM</option>

                      </select></td>
                </tr>

                <tr  height="50" class="time-row" id="sct">
                   <td><label for="confirmpass">Time start</label></td>
                    <td id="timestart"><select class="form-control-general" id="timestartSC" name="timestartSC">
                         <option value="0730">7:30 AM</option>
                        <option value="0800">8:00 AM</option>
                        <option value="0830">8:30 AM</option>
                        <option value="0900">9:00 AM</option>
                        <option value="0930">9:30 AM</option>
                        <option value="1000">10:00 AM</option>
                        <option value="1030">10:30 AM</option>
                        <option value="1100">11:00 AM</option>
                        <option value="1130">11:30 AM</option>
                        <option value="1200">12:00 PM</option>
                        <option value="1230">12:30 PM</option>
                        <option value="1300">1:00 PM</option>
                        <option value="1330">1:30 PM</option>
                        <option value="1400">2:00 PM</option>
                        <option value="1430">2:30 PM</option>
                        <option value="1500">3:00 PM</option>
                        <option value="1530">3:30 PM</option>
                        <option value="1600">4:00 PM</option>
                        <option value="1630">4:30 PM</option>
                        <option value="1700">5:00 PM</option>
                      </select></td>
                   <td><label for="confirmpass">Time end</label></td>
                    <td><select class="form-control-general" id="timeendSC" name="timeendSC">
                        <option value="0830">8:30 AM</option>
                        <option value="0900">9:00 AM</option>
                        <option value="0930">9:30 AM</option>
                        <option value="1000">10:00 AM</option>
                        <option value="1030">10:30 AM</option>
                        <option value="1100">11:00 AM</option>
                        <option value="1130">11:30 AM</option>
                        <option value="1200">12:00 PM</option>
                        <option value="1230">12:30 PM</option>
                        <option value="1300">1:00 PM</option>
                        <option value="1330">1:30 PM</option>
                        <option value="1400">2:00 PM</option>
                        <option value="1430">2:30 PM</option>
                        <option value="1500">3:00 PM</option>
                        <option value="1530">3:30 PM</option>
                        <option value="1600">4:00 PM</option>
                        <option value="1630">4:30 PM</option>
                        <option value="1700">5:00 PM</option>
                      </select></td>
                </tr>


                <tr  height="50" class="time-row" id="dct">
                   <td><label for="confirmpass">Time start</label></td>
                    <td id="timestartDC"><select class="form-control-general" id="timestart" name="timestartDC">
                        <option value="073000">7:30 AM</option>
                        <option value="080000">8:00 AM</option>
                        <option value="083000">8:30 AM</option>
                        <option value="090000">9:00 AM</option>
                        <option value="093000">9:30 AM</option>
                        <option value="100000">10:00 AM</option>
                        <option value="103000">10:30 AM</option>
                        <option value="110000">11:00 AM</option>
                        <option value="113000">11:30 AM</option>
                        <option value="120000">12:00 PM</option>
                        <option value="123000">12:30 PM</option>
                        <option value="130000">1:00 PM</option>
                        <option value="133000">1:30 PM</option>
                        <option value="140000">2:00 PM</option>
                        <option value="143000">2:30 PM</option>
                        <option value="150000">3:00 PM</option>
                        <option value="153000">3:30 PM</option>
                        <option value="160000">4:00 PM</option>
                        <option value="163000">4:30 PM</option>
                        <option value="170000">5:00 PM</option>
                        <option value="173000">5:30 PM</option>
                        <option value="180000">6:00 PM</option>
                        <option value="183000">6:30 PM</option>
                        <option value="190000">7:00 PM</option>
                        <option value="193000">7:30 PM</option>
                        <option value="200000">8:00 PM</option>
                      </select></td>
                   <td><label for="confirmpass">Time end</label></td>
                    <td><select class="form-control-general" id="timeendDC" name="timeendDC">
                        <option value="083000">8:30 AM</option>
                        <option value="090000">9:00 AM</option>
                        <option value="093000">9:30 AM</option>
                        <option value="100000">10:00 AM</option>
                        <option value="103000">10:30 AM</option>
                        <option value="110000">11:00 AM</option>
                        <option value="113000">11:30 AM</option>
                        <option value="120000">12:00 PM</option>
                        <option value="123000">12:30 PM</option>
                        <option value="130000">1:00 PM</option>
                        <option value="133000">1:30 PM</option>
                        <option value="140000">2:00 PM</option>
                        <option value="143000">2:30 PM</option>
                        <option value="150000">3:00 PM</option>
                        <option value="153000">3:30 PM</option>
                        <option value="160000">4:00 PM</option>
                        <option value="163000">4:30 PM</option>
                        <option value="170000">5:00 PM</option>
                        <option value="173000">5:30 PM</option>
                        <option value="180000">6:00 PM</option>
                        <option value="183000">6:30 PM</option>
                        <option value="190000">7:00 PM</option>
                        <option value="193000">7:30 PM</option>
                        <option value="200000">8:00 PM</option>

                      </select></td>
                </tr>

                <tr  height="50">
                   <td><button type="submit" class="btn btn-success" >Validate</button></td>
                </tr> 
                </table>
              </form>
            </div>
      </div>
      </div>
    </div>


    </div>
    </div> <!-- End of Container -->

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/formJquery.js"></script>


