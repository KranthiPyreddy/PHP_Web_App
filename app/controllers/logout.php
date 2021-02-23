<?php
	class Logout extends Controller {

    public function index() {	
		//destroy the session and redirect to login page
		$_SESSION = array();
		session_destroy();
	    header ('Location: /login');
		die;
    }
}