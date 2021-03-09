<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate($username, $password) {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		$username = strtolower($username);
		$db = db_connect();
        $statement = $db->prepare('select * from Users
                                WHERE username = :username;');
        $statement->bindValue(':username', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $rows['password'])) {
			$_SESSION['auth'] = 1;
			$_SESSION['username'] = ucwords($username);
			unset($_SESSION['failedAuth']);
			header('Location: /home');
			die;
		} else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /login');
			die;
		}
    }
	
	public function register ($username, $password) {
		$username = strtolower($username);
		$db = db_connect();
		
		if(isset($_POST['create'])){
			$sql_u = $db->prepare("select * from Users where username = '$username' ") ;
			$res_u = mysqli_query($db, $sql_u) or die(mysqli_query($db));
		 	if (mysqli_num_rows($res_u) > 0) {
			 $name_error = "Sorry Username already taken";
			 }else if (!empty($username) && !empty($password) && !is_numeric($username)){
			$query = "insert into users ('username','password') VALUES ( '$username', '" .md5($password)."')";
			mysqli_query($db,$query);
			die;
			}else{
				echo "Please enter some valid information!";
			}
			header('Location: /login');
			die;
			
			
			/*
		$statement = $db->prepare('select * from Users
                                WHERE username = :username;');
        $statement->bindValue(':username', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC); 
		
		if (isset($_SESSION['username'])){
			$username = $_SESSION['username'];
			//CHECK IF USERNAME ALREADY EXISTS
			$stmt = $db->prepare("select * from Users where username = '$username'");
			$result = mysqli_query($db, $stmt);
			if($result && mysqli_num_rows($result) > 0) {
				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
			header('Location: /login');
			die;
		} */
		
	/*
	 if(isset($_POST['create'])){
			$sql_u = "select * from Users where username = '$username' " ;
			$res_u = mysqli_query($db, $sql_u) or die(mysqli_query($db));
		 	if (mysqli_num_rows($res_u) > 0) {
			 $name_error = "Sorry Username already taken";
			 }else{
			 $query = "insert into Users ('username','password') VALUES ('$username', '" .md5($password)."')";
			 $res_u = mysqli_query($db, $query) or die(mysqli_query($db));
			 echo "saved";
			 exit();
		 }
		 }
		 
		*/
	}
}
		
		