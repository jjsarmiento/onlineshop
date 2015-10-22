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

    public function getAllProducts($type){
        $query = $this->db
                    ->select('*')
                    ->from('products');

        if($type == 'USER'){
            return $query
                    ->where('qty >', 0)
                    ->get()
                    ->result();
        }else{
            return $query
                ->get()
                ->result();
        }
    }

    public function deleteProduct($id){
        $this->db
            ->select('*')
            ->from('products')
            ->where('id', $id)
            ->delete();
    }

    public function updateProduct($id, $data){
        $this->db
            ->select('*')
            ->from('products')
            ->where('id', $id)
            ->update('products', $data);
    }

    public function decreaseQty($id, $qty){
        $newQty = $this->getQty($id)['qty'] - $qty;
//        var_dump($newQty);

        $this->db
            ->select('*')
            ->from('products')
            ->where('id', $id)
            ->update('products', array('qty' => $newQty));
    }

    function getQty($id){
        return $this->db
                ->select('qty')
                ->from('products')
                ->where('id', $id)
                ->get()
                ->row_array();
    }
}