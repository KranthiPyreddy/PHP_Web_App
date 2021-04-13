<?php
	class Weather extends Controller {
		public function index() {	
		$cityName ='Sault Ste. Marie';
	  	$model = $this->model('WeatherData');
		
		$weatherData = $model->get_weather($cityName);
			
		$temp = round($weatherData['temperature']['temp']);
		$des = $weatherData['description']['description'];
		//$temp_min = $weatherData['min']['temp_min'];
		//$temp_max = $weatherData['max']['temp_max'];
			
		
		$this->view('weather/index', ['city'=>$cityName,'temperature' => $temp, 'description' =>$des]);
 		die;
			
		//echo "It is ". round($weatherData['temperature']['temp']). " degrees ";
		//echo "with ". $weatherData['description']['description'];
			
    }

}

?>