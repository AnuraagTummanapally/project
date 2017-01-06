<?php
	class Test extends CI_Controller{

		public function index(){
			$autoload['model'] = array('testmodel');
			echo "Hello World!<br>";
			$this->load->view('test');
			$this->load->model('testmodel');
		}

		public function hello(){
			echo "This is Hello Function.";
		}
	}
	

?>