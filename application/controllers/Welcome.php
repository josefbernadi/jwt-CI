<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper("jwt");

		$payload=array("email"=>"josef@fira.co","name"=>"josef");
		$key = "1234567890";

		$hasil = JWT::encode($payload, $key);
		//printlala();

		echo $hasil;
		echo "<br>";
		$payload=array("email"=>"josef@fira.com","name"=>"josef");
		$hasil = JWT::encode($payload, $key);
		echo $hasil;
		echo "<br>";

		echo "<br><br>";

		$decode = JWT::decode($hasil,"1234567890");

		print_r($decode);

	}
}
