<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop_model extends CI_Model{
    
    public function shopInfo($username) {
        $query = "
        SELECT id, courseName, description, price
        FROM shop;
        
        ";
        $query = $this->db->query($query);
        return $query->result();
    }

    public function cartInfo($username) {
        $query = "
        SELECT user_id, courseName, price
        FROM cart;
        ";
        $query = $this->db->query($query);
        return $query->result();
    }

    public function getcourseID($id) {
        $query = "
        SELECT id
        FROM shop
        WHERE id = '$id';
        ";
        $query = $this->db->query($query);
        return $query->result();
    }

    public function addItem($data) {
        $itemInfo = "
        SELECT id, courseName, price
        FROM shop
        WHERE id = $data;
        ";
        $itemInfo = $this->db->query($itemInfo)->result();
        foreach($itemInfo as $row) {
			$user_id = $row->id;
            $cart_courseName = $row->courseName;
            $cart_price = $row->price;
		};

        $addItemInfo = "
        INSERT INTO cart(user_id, courseName, price)
        VALUES ('$user_id', '$cart_courseName', '$cart_price')
        ";
        $this->db->query($addItemInfo);
    }


    public function removeCart($data) {
        
        $this->db->query("
        DELETE 
        FROM cart
        WHERE user_id = $data;
        ");
    }    


    public function sumprice() {
        $query = "SELECT SUM(price) AS price FROM cart";
		$query = $this->db->query($query);

		return $query->row();
    }

}
?>
