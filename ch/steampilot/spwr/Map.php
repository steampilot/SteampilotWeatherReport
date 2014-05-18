<?php
/**
 * Created by PhpStorm.
 * User: jerome.roethlisberger
 * Date: 18.05.14
 * Time: 13:52
 */

namespace ch\steampilot\spwr;

/**
 * Class Map
 *
 * Builds a weather forecast map and saves it as png file
 * @package ch\steampilot\spwr
 */
class Map {
	private $region = array();
	public function __construct(){
		$this->weather = array(
			0 => "NA",
			1 => 'sunny',
			2 => 'cloudy',
			3 => 'rainy',
			4 => 'stormy',
			5 => 'snowy'
		);
		$this->pollen = array(
			0 => 'pollen_white.png',
			1 => 'pollen_green.png',
			2 => 'pollen_yellow.png',
			3 => 'pollen_red.png'
		);
		$this->region = array(
			1 => array(
				'name' => 'Geneve',
				'x' => 12345,
				'y' => 4456,
			),
			2 => array(
				'name' => 'Region',
				'x' => 12345,
				'y' => 4456,
			),
			3 => array(
				'name' => 'Region',
				'x' => 12345,
				'y' => 4456,
			),
			4 => array(
				'name' => 'Region',
				'x' => 12345,
				'y' => 4456,
			),
			5 => array(
				'name' => 'Region',
				'x' => 12345,
				'y' => 4456,
			),
			6 => array(
				'name' => 'Region',
				'x' => 12345,
				'y' => 4456,
			),
			7 => array(
				'name' => 'Region',
				'x' => 12345,
				'y' => 4456,
			),

		);
	}
	public function render($date, $layer, $data) {
		$mapUrl = '';
		//create the base map
		$this->renderLegend($layer);
		foreach ($this->region as $id) {
			$regionName = $this->region[$id]['name'];
			$x = $this->region[$id]['x'];
			$y = $this->region[$id]['y'];
			if($layer == 'weather') {
				$weatherID = $data[$date][$id]['weather'];
				$weatherName = $this->weather[$weatherID];
				$this->renderWeatherIcon($regionName,$x, $y,$weatherID, $weatherName);
			}
			if($layer == 'wind') {
				$windData = explode(':',$data[$date][$id]['wind']);
				if($windData[1] > 0) {
					$windDirection = $windData[0];
					$windSpeed = sprintf('%s Km/h',$windData[1]);
				} else {
					$windDirection = 'NA';
					$windSpeed = "No Wind";
				}
				$this->renderWindIcon($regionName,$x,$y,$windDirection,$windSpeed);
			}
			if($layer == 'temperature') {
				$tempData = explode(':', $data[$date][$id]['temp']);
				$maxTemp = sprintf('%s °C',$tempData[0]);
				$minTemp = sprintf('%s °C',$tempData[1]);
				if($tempData[0] < 0) {
					$maxTemp .= '*';
				}
				if($tempData[1] < 0) {
					$minTemp .= '*';
				}
				$temp = sprintf('%s | %s',$minTemp, $maxTemp);
				$this->renderTempIcon($regionName,$x,$y,$temp);
			}
			if($layer == 'pollen') {
				$pollenExposure = $data[$date][$id]['pollen'];
				$this->renderPollenIcon($regionName,$x,$y,$pollenExposure);
			}
		}
		$mapUrl = sprintf('%s_%s.png',$date, $layer );
		return $mapUrl;
	}
	private function renderWeatherIcon($regionName,$x, $y,$weatherID, $weatherName){

	}
	private function renderWindIcon($regionName,$x,$y,$windDirection,$windSpeed) {

	}
	private function renderTempIcon($regionName,$x,$y,$temp){

	}

	private function renderPollenIcon($regionName,$x,$y,$pollenExposure) {

	}

} 