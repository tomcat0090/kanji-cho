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
		$this->load->model('kanji_m');
		$result = $this->kanji_m->eng2kanji($this->input->post('word'));
		echo json_encode(array('status' => 'success', 'result' => $result));
		exit();
	}
}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
