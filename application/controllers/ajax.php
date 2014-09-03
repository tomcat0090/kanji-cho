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
		$result = $this->kanji_m->find($this->input->post('word'));
		echo json_encode(array('status' => 'success', 'result' => $result));
		exit();
	}
	public function test2($r)
	{
		$this->load->model('kanji_m');
		$result = $this->kanji_m->find($r);
		var_dump($result);exit;
		echo json_encode(array('status' => 'success', 'result' => $result));
		exit();
	}
}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
