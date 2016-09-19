<?php 
class Videos_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_all()
	{
		$query = "SELECT * FROM videos";
		$result = $this->db->query($query);
		return $result->result_array();
	}
    public function get_by_category($category)
    {
		$query = "SELECT * FROM videos WHERE category='$category'";
		$result = $this->db->query($query);
		return $result->result_array();
        
    }
	public function get_featured()
	{
		$query = "SELECT * FROM videos WHERE featured=1";
		$result = $this->db->query($query);
		return $result->result_array();
	}
    public function get($id)
    {
		if($id < 1) {
			$query = "SELECT * FROM videos ORDER BY id DESC LIMIT 1";
		}
		else { 
			$query = "SELECT * FROM videos WHERE id=$id";
		}
		
		$result = $this->db->query($query);
		$obj = $result->result_array();
		
		if (!$obj) {
			$query = "SELECT * FROM videos WHERE id=1";
			$result = $this->db->query($query);	
			$obj = $result->result_array();
		}
		return $obj;
    }
}
