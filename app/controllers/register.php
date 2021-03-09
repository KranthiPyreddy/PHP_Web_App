<?php
	class register extends Controller{
		public function index() {
			$this ->view('register/registerIndex');
			die;
		}

		public function verify () {
       	 	$username = $_POST['username'];
        	$password = $_POST['password'];
			
			$user = $this->model('User');
			$user->register($username, $password); 
		
    	}
	
	}
?>