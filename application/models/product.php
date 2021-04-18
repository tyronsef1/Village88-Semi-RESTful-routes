
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
    function get_all_products()
    {
        return $this->db->query("SELECT * FROM products")->result_array();
    }
    function get_product_by_id($product_id)
    {
        return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
    }
    function add_product($product)
    {
        $query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?,?,?)";
        $values = array($product['name'], $product['description'], $product['price'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }
    function update_product($product)
    {
        $query = "UPDATE products SET name = ?, description = ?, price = ?, updated_at = ? WHERE id = ?";
        $values = array($product['name'], $product['description'], $product['price'], date("Y-m-d, H:i:s"), $product['id']);
        return $this->db->query($query, $values);
    }
    function destroy_product($product_id)
    {
        $query = "DELETE FROM products WHERE id = ?";
        $values = array($product_id);
        return $this->db->query($query, $values);
    }
}