<?php require_once 'app/models/Insert.php' ?>
<html>
	<head>
		<title>PDO PHP Data Insertion </title> 		 
	</head>
	<body>
		<h1> Insert data Into phpmyadmin </h1>
		<form action= "" method = "POST">
			<table>
				<tr>
					<td>
						<center>
							<input type = "number" name= "id" placeholder = "Enter ID"/><br>
							<input type = "text" name = "course_ID" placeholder = "Enter Course ID"/> <br>
							<input type = "text" name = "course_name" placeholder = "Enter Course Name"/> <br>
							<input type = "text" name = "department" placeholder = "Enter Course Department"/> <br>
							<input type = "text" name = "program" placeholder = "Enter Program Name"/> <br>
							
							<button type = "submit" name = "insert" >Sign Up</button>
						</center>
					 </td>
				</tr>
			</table>
		</form>
	</body>
</html>




