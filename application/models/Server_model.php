<?php
class Server_model extends CI_Model
{
	function fetch_all()
	{
		$this->db->order_by('id','ASC');
		return $this->db->get('ikanguppy');
	}

	function insert_user($data)
	{
		$this->db->insert('ikanguppy', $data);
	}

	function fetch_single_user($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('ikanguppy');
		return $query->result_array();
	}

	function update_user($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('ikanguppy', $data);
	}

	function delete_single_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('ikanguppy');
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>