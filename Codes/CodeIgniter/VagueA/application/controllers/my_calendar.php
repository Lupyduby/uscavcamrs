<?php

class my_calendar extends CI_Controller {

     public function index() {
        $year = null;
         $month = null;
        $pref = array(
            'show_next_prev' => true,
            'next_prev_url' => base_url()."my_calendar/showcal",
            'day_type' => 'long',
            'start_day' => 'monday'
            
        );
        
        $this->load->library('calendar', $pref);
        $this->load->view('calendar_show',$pref);
        echo $this->calendar->generate($year, $month);  
          
        
    }

}
