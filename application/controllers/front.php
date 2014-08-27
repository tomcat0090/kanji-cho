<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public $view_dir = 'front/';

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data = new stdClass;
		$data->title = $this->config->item('page_title');
		$data->search = array(
			'type'=>'text',
			'class'=>'form-control focus inpu-lg',
			'id'  =>'search',
			'placeholder'=>'English'
		);
		$this->load->view($this->view_dir.'front_view', $data);
	}
}

/* End of file kanji.php */
/* Location: ./application/controllers/kanji.php */
