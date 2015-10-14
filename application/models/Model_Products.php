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
    }
}