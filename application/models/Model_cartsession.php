<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 10/19/15
 * Time: 5:55 PM
 */

//id
//product_id
//user_id
//cart_qty
//date_added

class Model_Cartsession extends CI_Model {
    public function addToCart($data){
        $this->db->insert('cart_session', $data);
    }

    public function getCartContent($id){
        return $this->db
                ->select('*')
                ->from('cart_session')
                ->where('user_id', $id)
                ->get()
                ->result();
    }

    public function removeCartProduct($id){
        $this->db
            ->select('*')
            ->from('cart_session')
            ->where('id', $id)
            ->delete();
    }

    public function deleteCartSession($cartId){
        $this->db
            ->select('*')
            ->from('cart_session')
            ->where('id', $cartId)
            ->delete();
    }
}