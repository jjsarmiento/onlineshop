<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 10/14/15
 * Time: 11:44 AM
 */
class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_User');
        $this->load->helper('form');
        $this->exclusiveRouteFor('ADMIN', @$_SESSION['type']);
    }

    public function home(){
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function addProduct(){
        $this->load->view('admin/header');
        $this->load->view('admin/addItem');
        $this->load->view('admin/footer');
    }

    public function manageProduct(){
        $this->load->view('admin/header');
        $this->load->view('admin/manageProduct');
        $this->load->view('admin/footer');
    }

    public function manageUsers(){
        $usersData['users'] = $this->Model_User->getAllUsers();
        $this->load->view('admin/header');
        $this->load->view('admin/manageUsers', $usersData);
        $this->load->view('admin/footer');
    }

    public function doAddProduct(){
        $this->load->model('Model_Products');

        $productData = array(
            'name'          =>  $this->input->post('prodName'),
            'description'   =>  $this->input->post('prodDesc'),
            'qty'           =>  $this->input->post('prodQty'),
            'add_info'      =>  $this->input->post('prodAddInfo'),
            'img'           =>  base_url().'uploads/'.$_FILES["prodImg"]["name"]
        );


        var_dump($_FILES["prodImg"]);
//        $this->Model_Products->addProduct($productData);
    }
}