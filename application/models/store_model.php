<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function getProductByName($name, $sort) {
        $this->db->like('product_name', $name);
        $this->db->join('categories', 'category_id', 'category_id');
        $query = $this->db->get("Product");
        return $query->result();
    }

    public function getProductById($key) {
        $this->db->like('product_id', $key);
        $this->db->join('store', 'store_id', 'store_id');
        $query = $this->db->get('store_prodcut');
        return $query->result();
    }
}
?>