<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kanji_M extends CI_Model
{

	public $relation_table = 'relations';
	public $kanji_table    = 'kanji';
	public $english_table  = 'english';

	public function __construct()
	{
		parent::__construct();

		$this->load->database();

	}

	public function eng2kanji($word)
	{
		//$this->db->where('E.value', $word);
		//$this->db->join($this->relation_table.' as R', 'K.id = R.kanji_id');
		//$this->db->join($this->english_table.' as E', 'E.id = R.eng_id');
		$query = $this->db->get($this->kanji_table.' as K');
		if($query->num_rows()) return $query->result();

		return false;
	}
}

/* End of file: kanji_m.php */
/* Location: application/models/kanji_m.php */
