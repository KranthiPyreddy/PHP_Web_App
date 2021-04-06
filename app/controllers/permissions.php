<?php

class permissions extends Controller {
    
	public function manager() {
		check_permissions();
 	    $this->view('manager/index');
 		die;
     }
	
	public function staff() {
		
		check_permissions();
		//echo "<pre>";
	    //print_r ($_SESSION);
		//die;
 	    $this->view('staff/index');
 		die;
     }
}

?>