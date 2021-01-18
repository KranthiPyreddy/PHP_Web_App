<!DOCTYPE html
<html>
<head>
	<title>map202Lab2</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<?php
	$films = array(
            "comedy" => array (
                            0 => "Pink Panther",
                            1 => "johnny English",
                            2 => "Tommy Boy"),
            "action" => array (
                            0 => "Die Hard",
                            1 => "Expendables"),
            "epic" => array (
                            0 => "The Lord of the Rings"),
            "Romance" => array (
                            0 => "Romeo and Juliet")
);

$favorites = array(
array (
"Name" => "Dave Punk",
"Phone" => "5689741523",
"Email" => "davepunk@gmail.com"),
array (
"Name" => "Monty Smith",
"Phone" => "2584369721",
"Email" => "montysmith@gmail.com"),
array (
"Name" => "John Flinch",
"Phone" => "9875147536",
"Email" => "johnflinch@gmail.com")
);
?>

<?php
    echo '<strong>'."Movie Name, Genre".'</strong>';
?>

<table>
    <tr>
    <th>Movie_Name</th>
        <th>Genre</th>
    </tr>
    <?php
 foreach($films as $moviegenre => $movies) {
      foreach($movies as $movie) {
  echo '<tr><td>' .$movie. '</td><td>' .$moviegenre. '</td></tr>';
}
}
?>
</table>

<?php
    echo '<strong>'."Name, Phone, Email".'</strong>';
?>

<table>
    <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    </tr>
    <?php
	foreach($favorites as $Info) {
  	echo '<tr><td>' .$Info['Name']. '</td><td>' .$Info['Phone']. '</td><td>' .$Info['Email']. '</td></tr>';
}
?>
</table>

</body>
</html>