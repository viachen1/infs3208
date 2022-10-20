<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model
{
	public function addComment($comment, $username) {
		$data = array(
			'content' => $comment,
			'username' => $username,
		);
		return $this->db->insert('comment', $data);
	}
    

	public function getList($username) {
		$this->db->where('username', $username);
		return $this->db->get('comment')->result_array();
	}
}
