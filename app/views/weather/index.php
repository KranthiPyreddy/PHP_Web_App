<html>
<style>
body {
  background-color: skyblue;
  font-family: sans-serif;
  text-align: center;
}

h1 {
  border-bottom: solid 10px grey;
}
</style>
<html>
<head>
<title>Forecast Weather using OpenWeatherMap with PHP</title>
</head>
<body>
    <div class="report-container">
        <h2><?php echo $data['city']; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("F jS, Y"); ?></div>
        </div>
        <div class="weather-forecast">
			<div><?php echo ucwords($data['description']); ?></div>
			<div><?php echo ucwords($data['temperature']); ?> °C<span></span></div>
    
</body>
</html>