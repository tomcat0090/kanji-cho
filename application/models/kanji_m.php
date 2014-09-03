<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kanji_M extends CI_Model
{

	public $relation_table = 'relations';
	public $kanji_table    = 'kanji';
	public $english_table  = 'english';
	public $word_table     = 'words';

	public function __construct()
	{
		parent::__construct();

		$this->load->database();

	}

	public function eng2kanji($word)
	{
		$this->db->select('K.value');
		$this->db->select('K.id');
		$this->db->where('E.value', $word);
		$this->db->join($this->relation_table.' as R', 'K.id = R.kanji_id');
		$this->db->join($this->english_table.' as E', 'E.id = R.eng_id');
		$query = $this->db->get($this->kanji_table.' as K');
		if($query->num_rows()) return $query->result();

		return FALSE;
	}
	
	public function find ($word)
	{
		$this->db->select('id');
		$this->db->where('value', $word);
		$query = $this->db->get($this->word_table);
		if($query->num_rows == 0)
		{
			return FALSE;
		}
		$id = $query->row()->id;

		$this->db->select('W.id, W.value');
		$this->db->where('R.id1', $id);
		$this->db->join($this->word_table. ' AS W', 'R.id2 = W.id');
		$query = $this->db->get($this->relation_table.' AS R');
		$result1 = $query->result();

		$this->db->select('W.id, W.value');
		$this->db->where('R.id2', $id);
		$this->db->join($this->word_table.' AS W', 'R.id1 = W.id');
		$query = $this->db->get($this->relation_table.' AS R');
		$result2 = $query->result();
		
		return array_merge($result1, $result2);
	}
	
	public function save($word1, $word2)
	{
		if(empty($word1) || empty($word2) || $word1 == $word2)
		{
			return FALSE;
		}
		
		$this->db->select('id');
		$this->db->where('value', $word1);
		$query = $this->db->get($this->word_table);
		if($query->num_rows == 0)
		{
			$data = array('value' => $word1);
			$this->db->insert($this->word_table, $data);
			$this->db->select('id');
			$this->db->where('value', $word1);
			$query = $this->db->get($this->word_table);
		}
		$result1 = $query->row()->id;
		
		$this->db->select('id');
		$this->db->where('value', $word2);
		$query = $this->db->get($this->word_table);
		if($query->num_rows == 0)
		{
			$data = array('value' => $word2);
			$this->db->insert($this->word_table, $data);
			$this->db->select('id');
			$this->db->where('value', $word2);
			$query = $this->db->get($this->word_table);
		}
		$result2 = $query->row()->id;
		
		if ($result1 > $result2)
		{
			$tmp = $result1;
			$result1 = $result2;
			$result2 = $tmp;
		}
		$this->db->where('id1', $result1);
		$this->db->where('id2', $result2);
		$query = $this->db->get($this->relation_table);
		if($query->num_rows == 0)
		{
			$data = array(
				'id1' => $result1,
				'id2' => $result2
			);
			$this->db->insert($this->relation_table, $data);
		}
		
	}
}

/* End of file: kanji_m.php */
/* Location: application/models/kanji_m.php */
