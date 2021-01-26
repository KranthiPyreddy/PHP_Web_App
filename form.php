<?php
			$dbhost = 'remotemysql.com';
			$dbname = 'FQ8Nmc0mjJ';
			$dbuser = 'FQ8Nmc0mjJ';
			$dbpass = '7M4LNvSfNp';
			
			$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
			$query = "SELECT * FROM Fruits";
			$stmt = $conn->prepare($query);
			$stmt->execute();
		
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
    		$query = "SELECT * FROM Fruits"; 

    		$stmt = $conn->prepare($query); 

    		$stmt->execute(); 

    		$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

       		$name = $_REQUEST[fName]; 

   			$email = $_REQUEST[email]; 

   			$fruits = $_REQUEST[fruits]; 

   			if($_SERVER['REQUEST_METHOD'] == 'POST') 

   			{ echo '<strong>Hello,  ' .$name. '</strong> your have entered email id as <i> ' .$email. '</i> and your Favorite Fruit is <u> ' .$fruits. '</u>.' ; 
			 die;

    		 } 

 ?> 

<html> 
<head>
	<h1>
		Fill the form
	</h1>
</head> 
	
<body> 
<form action=form.php method="post"> 
<label for="Full_Name">Name:-</label>
<input type="text" id="full_name" name="fName"><br> 
<label for="email">Email:-</label>
<input type="email" id="email" name="email"><br> 
<label for="Fruits">Favorite Fruits:-</label> 

<select name="fruits" > 
<?php  	
	foreach($result as $nameF) 
 { 
		foreach($nameF as $data)
{ 
			echo '<option >'; 
				echo $data; 
			echo '</option>'; 
 }
} 
?> 
</select> 
	
<input type="submit" value="submit"><br>
	
</form> 
</body> 
	
</html> 