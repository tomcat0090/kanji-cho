<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public $view_dir = 'ajax/';

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function test()
	{
		echo json_encode(array('status' => 'success', 'word' => $this->input->post('word')));
		exit();
	}
}

/* End of file kanji.php */
/* Location: ./application/controllers/kanji.php */
