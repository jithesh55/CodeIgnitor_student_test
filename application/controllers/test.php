<?php
class test extends CI_Controller
{
	public function index(){

		//echo "Hello world";
		//$config['base_url']='http://your-domain.com';//work aayilla
		$this->load->view('test');
		$this->load->model('ex');
		
	}
/*
	public function hello(){
		echo "This is hello function";
	}*/
}

?>