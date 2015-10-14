<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 10/9/15
 * Time: 7:55 PM
 */

//COLUMNS
//id
//email
//password
//firstname
//lastname
//type

class Model_User extends CI_Model {
    public function checkUser($email){
        $this->db
            ->select('*')
            ->from('users')
            ->where('email', $email);
        return $this->db->count_all_results();
    }

    public function addUser($data){
        $this->db->insert('users', $data);
        return true;
    }

    public function authUser($data){
        $query = $this->db
            ->select('password, email')
            ->from('users')
            ->where('email', $data['email'])
            ->where('password', md5($data['password']))
            ->count_all_results();

        if($query == 0){
            return false;
        }else if($query >= 1){
            return true;
        }else{
            return 'ERROR';
        }
    }

    public function getUserData($email){
        return $this->db
                ->select('email, firstname, lastname, id, type')
                ->from('users')
                ->where('email', $email)
                ->get()
                ->row_array();
//                ->result_array();
    }
}