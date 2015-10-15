<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 10/14/15
 * Time: 1:24 PM
 */

//id
//name
//description
//qty
//add_info
//img
//date_added
class Model_Products extends CI_Model {
    public function addProduct($data){
        $this->db->insert('products', $data);
        return $this->db->insert_id();
    }

    public function getProductData($id){
        return $this->db
                ->select('*')
                ->from('products')
                ->where('id', $id)
                ->get()
                ->row_array();
    }

    public function getAllProducts(){
        return $this->db
                ->select('*')
                ->from('products')
                ->get()
                ->result();
    }

    public function deleteProduct($id){
        $this->db
            ->select('*')
            ->from('products')
            ->where('id', $id)
            ->delete();
    }
}