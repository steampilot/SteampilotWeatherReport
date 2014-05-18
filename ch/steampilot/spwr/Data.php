<?php
/**
 * Created by PhpStorm.
 * User: jerome.roethlisberger
 * Date: 18.05.14
 * Time: 13:36
 */

namespace ch\steampilot\spwr;

/**
 * Class Data
 *
 * Handles the generated weather data and also the prepared testing data
 * @package ch\steampilot\spwr
 */
class Data {
	/**
	 * Holds the name of the csv file to parse the data from
	 * @var string
	 */
	private $csvName = '';
	/**
	 * Holds the parsed weather data
	 * @var array
	 */
	private $data = array();

	/**
	 * returns the parsed data as array
	 * @return array array of the parsed weather data
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * returns the fixed test data as array
	 * @return array of the fixed test weather data
	 */
	public function getTestData() {
		$data = ['' => ''];
		return $data;
	}

	/**
	 * Reloads the weather data
	 *
	 * updates the weather data by calling the data generation script provided by GIBM
	 * calls upon the parseData function
	 * @param $csvName
	 * @return bool
	 */
	public function reloadData($csvName) {
		//call the data generator script
		//parse the data
		//feed the data into the classVariable
		return true; //on success
	}

} 