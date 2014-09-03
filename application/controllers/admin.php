<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $view_dir = 'admin/';

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if($this->input->get('pass') != $this->config->item('password'))
		{
		//	redirect('/');
		}
	}
	public function index()
	{
		$data = new stdClass;
		$data->title = $this->config->item('page_title');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('word1','word', 'required');
		$this->form_validation->set_rules('word2','word', 'required');
		
		if($this->form_validation->run())
		{
			$this->load->model('kanji_m');
			
			$this->kanji_m->save(set_value('word1'), set_value('word2'));
			redirect('admin');
		}
		$data->word1 = array(
			'name'=>'word1',
			'type'=>'text',
			'class'=>'form-control focus input-lg',
			'id'  =>'word1',
			'placeholder'=>'word1',
			'value' => $this->input->post('word1')
		);

		$data->word2 = array(
			'name'=>'word2',
			'type'=>'text',
			'class'=>'form-control focus input-lg',
			'id'  =>'word2',
			'placeholder'=>'word2',
			'value' => $this->input->post('word2')
		);
		$this->load->view($this->view_dir.'admin_view', $data);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
